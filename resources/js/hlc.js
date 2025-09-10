     // Données factices
     const labels = ['Jan', 'Fév', 'Mar', 'Avr', 'Mai'];
     const values = [100, 120, 90, 130, 150];

     const ctx = document.getElementById('monnaieChart').getContext('2d');

     new Chart(ctx, {
         type: 'line', // courbe
         data: {
             labels: labels,
             datasets: [{
                 label: 'Valeur €',
                 data: values,
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
