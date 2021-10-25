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
            #container {
                height: 400px;
                min-width: 310px;
                max-width: 800px;
                margin: 0 auto;
            }
        </style>
        <script type="text/javascript">
            $(function () {
                $('#container').highcharts({
                    chart: {
                        type: 'column',
                        margin: 75,
                        options3d: {
                            enabled: true,
                            alpha: 10,
                            beta: 25,
                            depth: 70
                        }
                    },
                    title: {
                        text: 'Ordenes'
                    },
                    subtitle: {
                        text: 'Total de ordenes al mes'
                    },
                    plotOptions: {
                        column: {
                            depth: 25
                        }
                    },
                    xAxis: {
                        categories: [
                            <?php
                            $sql="SELECT * FROM orden";
                            $run_cat = mysqli_query($con,$sql);
                            while($res=mysqli_fetch_array($run_cat)){
                            ?>
                            ['<?php echo date("F",strtotime($res['OrdenFecha']));?>'],

                            <?php
                            }
                            ?>
                        ]
                    },
                    yAxis: {
                        title: {
                            text: null
                        }
                    },
                    series: [{
                        name: 'MES',
                        data:[
                            <?php
                            $sql="SELECT  SUM(OrdenCantidad) as totalventas FROM orden  ";
                            $run_cat = mysqli_query($con,$sql);
                            while($res=mysqli_fetch_array($run_cat)){
                            ?>
                            [<?php echo $res['totalventas']?>],

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
    <script src="admin_area/Highcharts-4.1.5/js/highcharts-3d.js"></script>
    <script src="admin_area/Highcharts-4.1.5/js/modules/exporting.js"></script>

    <div id="container" style="height: 400px"></div>
    </body>
    </html>



    <?php
}
?>