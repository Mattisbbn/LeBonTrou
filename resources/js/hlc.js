import Chart from "chart.js/auto";

const ctx = document.getElementById("monnaieChart").getContext("2d");
const periodButtons = document.querySelectorAll("button");

let currentPeriod = "1D";

function getCSRFToken() {
    return (
        document
            .querySelector('meta[name="csrf-token"]')
            ?.getAttribute("content") || ""
    );
}

let hlcData = null;

async function fetchData() {
    if (hlcData) {
        return hlcData;
    }
    const response = await fetch("/api/hlc", {
        method: "GET",
        headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": getCSRFToken(),
        },
    });
    const data = await response.json();
    hlcData = data;
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
            x: {
                ticks: {
                    autoSkip: false,
                    maxRotation: 0,
                    callback: function (value, index) {
                        const label = this.getLabelForValue(value);
                        if (!label) return "";
                        // label attendu: "YYYY-MM-DD HH:MM"
                        if (currentPeriod === "1D") {
                            const minutes = String(label).slice(14, 16);
                            const hours = String(label).slice(11, 13);
                            if (minutes === "00" || minutes === "30") {
                                return `${hours}:${minutes}`;
                            }
                            return "";
                        }
                        return label;
                    },
                },
            },
            y: { beginAtZero: true },
        },
    },
});

async function updateChart(period) {
    try {
        const data = await fetchData();

        let slicedHistory = data.priceHistory;

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
        currentPeriod = period;
        switch (period) {
            case "1D": {
                const lastDay = takeLastN(data.priceHistory, 48);
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
