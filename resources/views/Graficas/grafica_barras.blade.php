<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafica de Barras</title>
</head>

<body>
    <script src="{!! asset('code/highcharts.js') !!}"></script>
    <script src="{!! asset('code/modules/exporting.js') !!}"></script>
    <script src="{!! asset('code/modules/export-data.js') !!}"></script>

    <?php
        $horizontal = "";
        foreach($paises as $pais)
        {
            $contador = 0;
            foreach($entidades as $entidad)
            {
                if ($entidad->id_pais == $pais->id) {
                    $contador = $contador + 1;
                }
            }
            $horizontal = $horizontal.
            "['".
            $pais->nombre.
            "', ".
            $contador.
            "], ";
        }
    ?>

    <div id="container" style="height: 400px"></div>


    <script type="text/javascript">
       Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafica de Barras'
    },
    subtitle: {
        text: 'Entidades por cada pais '
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Número de Entidades'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# de Entidades: <b>{point.y:.1f}</b>'
    },
    series: [{
        name: 'Entidades',
        data: [<?= $horizontal ?>          
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
    </script>
</body>

</html>