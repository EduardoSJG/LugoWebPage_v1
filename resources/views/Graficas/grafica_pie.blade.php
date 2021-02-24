<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafica de Pastel</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="{!! asset('code/highcharts.js') !!}"></script>
<script src="{!! asset('code/modules/exporting.js') !!}"></script>
<script src="{!! asset('code/modules/export-data.js') !!}"></script>

<?php
    $contenido="";
    for ($i=1910; $i <= 2020 ; $i++) { 
        $contador=0;
        $usuarios=0;
        foreach ($users as $user) {
            $anio = DateTime::createFromFormat("Y-m-d", $user->fecha_naci)->format("Y");
            if ($anio == $i) {
                $contador++;
            }
            $usuarios++;
        }
        if ($contador != 0) {

            $porcentaje = $contador*100/$usuarios;

            $contenido = $contenido.
                "{ name: '".
                $i.
                "', y: ".
                $porcentaje.
                " },";
        }
        
    }
    

?>


<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>




		<script type="text/javascript">

// Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Fecha de Nacimiento de usuarios'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        name: 'Porcentaje',
        colorByPoint: true,
        data: [<?= $contenido?>]
    }]
});
		</script>
</body>
</html>