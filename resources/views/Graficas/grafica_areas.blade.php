<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="{!! asset('code/highcharts.js') !!}"></script>
<script src="{!! asset('code/modules/exporting.js') !!}"></script>
<script src="{!! asset('code/modules/export-data.js') !!}"></script>
<body>
<?php
            $graf = "";
            foreach ($productos as $producto) 
            {
                $arr = [0,0,0,0,0,0,0,0,0,0,0,0];
                foreach ($detalle_venta as $detalle) {
                    
                    if ($detalle->productos->id == $producto->id) {
                        $cantidad = $detalle->cantidad;
                        $mes = DateTime::createFromFormat("Y-m-d", $detalle->ventas->fecha)->format("m");
                        
                        $arr[(int)$mes-1] = $cantidad;
                    }
                }
                $graf = $graf.
                "{ name: '".
                $producto->nombre.
                "', data: [".
                $arr[0].",".$arr[1].",".$arr[2].",".$arr[3].",".
                $arr[4].",".$arr[5].",".$arr[6].",".$arr[7].",".
                $arr[8].",".$arr[9].",".$arr[10].",".$arr[11].",".
                "] },";
            }
    ?>
    <div id="container" 
    style="min-width: 310px; height: 400px; margin: 0 auto">
    </div>

</body>
<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Productos vendidos'
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
    },
    xAxis: {
        categories: [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre'
        ],
        plotBands: [{ // visualize the weekend
            from: 4.5,
            to: 6.5,
            color: 'rgba(68, 170, 213, .2)'
        }]
    },
    yAxis: {
        title: {
            text: 'Unidades vendidas'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' unidades'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5
        }
    },
    series: [<?= $graf ?>]
});
        </script>
        
</html>