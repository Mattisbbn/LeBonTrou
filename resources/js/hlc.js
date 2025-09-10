import Chart from 'chart.js/auto';

const ctx = document.getElementById('monnaieChart').getContext('2d');
const periodButtons = document.querySelectorAll('button');


function getCSRFToken() {
    return document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
}

async function fetchData() {
    const response = await fetch('/api/hlc', {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': getCSRFToken()
        }
    });
    const data = await response.json();
    return data;
}






let monnaieChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Valeur €',
            data: [],
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            fill: true,
            tension: 0.4
        }]
    },
    options: {
        scales: {
            y: { beginAtZero: true }
        }
    }
});


async function updateChart(period) {
    try {
        monnaieChart.data.datasets[0].label = 'Chargement...';
        monnaieChart.update();

        const data = await fetchData();

        monnaieChart.data.labels = data.priceHistory;
        monnaieChart.data.datasets[0].data = data.price;
        monnaieChart.data.datasets[0].label = 'Valeur €';
        monnaieChart.update();
    } catch (error) {
        console.error('Erreur lors de la mise à jour du graphique:', error);
        monnaieChart.data.datasets[0].label = 'Erreur de chargement';
        monnaieChart.update();
    }
}

periodButtons.forEach(button => {
    button.addEventListener('click', (e) => {
        periodButtons.forEach(btn => btn.classList.remove('active'));
        e.target.classList.add('active');
        updateChart(e.target.id);
    });
});

updateChart('7D');
document.getElementById('7D').classList.add('active');
