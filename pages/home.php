<div class="container">
    <div class="card">
        <h3>Nombre de licenciés</h3>
        <h2>154</h2>
    </div>
    <div class="card">
        <h3>Wattrelosiens</h3>
        <h2>50</h2>
    </div>
    <div class="card">
        <h3>Montant total</h3>
        <h2>11797€</h2>
    </div>
    <div class="card">
        <h3>Montant Espèce</h3>
        <h2>2345€</h2>
    </div>



</div>
<div class="container">
    <div class="chart-wrapper">
        <canvas id="monGraphique"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    // 2. On récupère notre élément canvas
    const ctx = document.getElementById('monGraphique');

    // 3. On crée le graphique
    new Chart(ctx, {
        type: 'bar', // Type de graphique (bar, line, pie, etc.)
        data: {
            labels: ['Produit A', 'Produit B', 'Produit C', 'Produit D'], // Étiquettes
            datasets: [{
                label: 'Ventes de l\'année',
                data: [85, 60, 35, 95], // Données numériques
                backgroundColor: [ // Couleurs des barres
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true // L'axe Y commence à 0
                }
            }
        }
    });
    </script>
</div>