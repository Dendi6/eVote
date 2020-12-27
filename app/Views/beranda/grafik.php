<div class="card mt-3">
    <div class="card-body">
        <canvas id="myChart" class="mt-3" width="100%"></canvas>
    </div>
</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Dendi', 'Reza Zulfan', 'Rijal', 'Simar', 'Marina'],
            datasets: [{
                label: 'Jumlah Suara',
                data: [<?= $dendi; ?>, <?= $reza; ?>, <?= $rijal; ?>, <?= $simar; ?>, <?= $marin; ?>],
                backgroundColor: [
                    '#1e88e5',
                    '#3949ab',
                    '#5e35b1',
                    '#f4511e',
                    '#fb8c00'
                ],
                borderWidth: 1
            }]
        }
    });
</script>