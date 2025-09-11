import Chart from "chart.js/auto";

const ctx = document.getElementById("monnaieChart").getContext("2d");
const periodButtons = document.querySelectorAll("button");

function getCSRFToken() {
    return (
        document
            .querySelector('meta[name="csrf-token"]')
            ?.getAttribute("content") || ""
    );
}

async function fetchData() {
    const response = await fetch("/api/hlc", {
        method: "GET",
        headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": getCSRFToken(),
        },
    });
    const data = await response.json();
    return data;
}

let HLCChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: [],
        datasets: [
            {
                label: "Valeur en €",
                data: [],
                borderColor: "#2563eb",
                backgroundColor: "#6090fa90",
                fill: true,
                tension: 0.4,
            },
        ],
    },
    options: {
        scales: {
            y: { beginAtZero: true },
        },
    },
});

async function updateChart(period) {
    try {
        const data = await fetchData();

        let slicedHistory = data.priceHistory;
        const FIVE_MIN_POINTS_PER_DAY = 24 * 12; // 288
        const FIVE_MIN_POINTS_PER_7D = 7 * 24 * 12; // 2016
        const FIVE_MIN_POINTS_PER_30D = 30 * 24 * 12; // 8640

        function takeLastN(items, n) {
            if (!Array.isArray(items)) return [];
            return n >= items.length ? items.slice() : items.slice(items.length - n);
        }

        function aggregateByHourAverage(items) {
            const buckets = new Map();
            items.forEach((it) => {
                const hourKey = String(it.timestamp).slice(0, 13); // YYYY-MM-DD HH
                const bucket = buckets.get(hourKey) || { sum: 0, count: 0, label: hourKey };
                bucket.sum += Number(it.price) || 0;
                bucket.count += 1;
                buckets.set(hourKey, bucket);
            });
            const labels = [];
            const values = [];
            buckets.forEach((bucket, key) => {
                labels.push(key + ":00");
                values.push(bucket.count ? bucket.sum / bucket.count : 0);
            });
            return { labels, values };
        }
        function aggregateByDayAverage(items) {
            const buckets = new Map();
            items.forEach((it) => {
                const dayKey = String(it.timestamp).slice(0, 10); // YYYY-MM-DD
                const bucket = buckets.get(dayKey) || { sum: 0, count: 0, label: dayKey };
                bucket.sum += Number(it.price) || 0;
                bucket.count += 1;
                buckets.set(dayKey, bucket);
            });
            const labels = [];
            const values = [];
            buckets.forEach((bucket, key) => {
                labels.push(key);
                values.push(bucket.count ? bucket.sum / bucket.count : 0);
            });
            return { labels, values };
        }
        switch (period) {
            case "1D": {
                // Dernières 24h en pas de 5 min ⇒ 288 points
                const lastDay = takeLastN(data.priceHistory, FIVE_MIN_POINTS_PER_DAY);
                HLCChart.data.labels = lastDay.map((item) => item.timestamp);
                HLCChart.data.datasets[0].data = lastDay.map((item) => item.price);
                break;
            }
            case "7D": {
                // Derniers 7 jours ⇒ agréger par heure (moyenne)
                const last7d = takeLastN(data.priceHistory, FIVE_MIN_POINTS_PER_7D);
                const { labels, values } = aggregateByHourAverage(last7d);
                HLCChart.data.labels = labels;
                HLCChart.data.datasets[0].data = values;
                break;
            }
            case "1M": {
                // Derniers 30 jours ⇒ agréger par jour (moyenne)
                const last30d = takeLastN(data.priceHistory, FIVE_MIN_POINTS_PER_30D);
                const { labels, values } = aggregateByDayAverage(last30d);
                HLCChart.data.labels = labels;
                HLCChart.data.datasets[0].data = values;
                break;
            }
            default: {
                HLCChart.data.labels = data.priceHistory.map((item) => item.timestamp);
                HLCChart.data.datasets[0].data = data.priceHistory.map((item) => item.price);
            }
        }
        HLCChart.data.datasets[0].label = "Valeur en €";
        HLCChart.update();
    } catch (error) {
        HLCChart.data.datasets[0].label = "Erreur de chargement";
        HLCChart.update();
    }
}

periodButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
        periodButtons.forEach((btn) => btn.classList.remove("active"));
        e.currentTarget.classList.add("active");
        updateChart(e.currentTarget.id);
    });
});

updateChart("1D");
document.getElementById("1D").classList.add("active");
