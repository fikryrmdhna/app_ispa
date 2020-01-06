<div id="pie" height="200"></div>
<script>
    Highcharts.chart('pie', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            height: 300,
            spacingTop: 1,
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Total',
            colorByPoint: true,
            data: [
                <?php foreach ($chartpie as $cp) : ?> {
                        name: '<?= str_replace("Tonsilitis, Faringitis, Laringitis (Radang Tenggorokan)", "Radang Tenggorokan", $cp["nama_penyakit"]); ?>' + ':' + '<?= $cp['total']; ?>',
                        y: <?= $cp['total']; ?>,
                    },
                <?php endforeach; ?>
            ]
        }]
    });
</script>