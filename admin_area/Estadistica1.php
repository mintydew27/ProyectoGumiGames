<?php
if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

?>



    <!DOCTYPE HTML>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Example</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
            ${demo.css}
        </style>
        <script type="text/javascript">
            $(function () {
                $('#container').highcharts({
                    chart: {
                        type: 'bar'
                    },
                    title: {
                        text: 'Compras totales de cada cliente'
                    },
                    subtitle: {
                        text: ''
                    },
                    xAxis: {
                        categories: [

                            <?php
                            $sql="SELECT Cliente.ClienteNombre, Orden.OrdenCantidad FROM Cliente JOIN Orden ON Cliente.ClienteId = Orden.ClienteId ";
                            $run_cat = mysqli_query($con,$sql);
                            while($res=mysqli_fetch_array($run_cat)){
                            ?>
                            ['<?php echo $res['ClienteNombre'];?>'],

                            <?php
                            }
                            ?>

                        ],
                        title: {
                            text: null
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Population (millions)',
                            align: 'high'
                        },
                        labels: {
                            overflow: 'justify'
                        }
                    },
                    tooltip: {
                        valueSuffix: ' millions'
                    },
                    plotOptions: {
                        bar: {
                            dataLabels: {
                                enabled: true
                            }
                        }
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'top',
                        x: -40,
                        y: 100,
                        floating: true,
                        borderWidth: 1,
                        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                        shadow: true
                    },
                    credits: {
                        enabled: false
                    },
                    series: [{
                        name: 'Year 1800',
                        data: [
                            <?php
                            $sql="SELECT Cliente.ClienteNombre, SUM(Orden.OrdenCantidadDeber) as totalcliente FROM Cliente JOIN Orden ON Cliente.ClienteId = Orden.ClienteId ";
                            $run_cat = mysqli_query($con,$sql);
                            while($res=mysqli_fetch_array($run_cat)){
                            ?>
                            [<?php echo $res['totalcliente']?>],

                            <?php
                            }
                            ?>


                        ]
                    }]
                });
            });
        </script>
    </head>
    <body>
    <script src="admin_area/Highcharts-4.1.5/js/highcharts.js"></script>
    <script src="admin_area/Highcharts-4.1.5/js/modules/exporting.js"></script>

    <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>

    </body>
    </html>



    <?php
}
?>