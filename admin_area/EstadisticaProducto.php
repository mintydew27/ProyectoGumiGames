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
                        text: 'Productos MAS Vendidos'
                    },
                    subtitle: {
                        text: 'Total de productos vendidos'
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
                                $idpr=$res['ProductoId'];
                                $sql="SELECT ProductoTitulo FROM producto WHERE ProductoId=$idpr";
                                $run_cat1 = mysqli_query($con,$sql);
                                $nose=mysqli_fetch_array($run_cat1);
                            ?>
                            ['<?php echo $nose['ProductoTitulo'];?>'],

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
                        name: 'Juego',
                        data:[
                            <?php
                            $sql="SELECT COUNT(ProductoId) as totalventas FROM orden GROUP BY(ProductoId)";
                            $run_cat = mysqli_query($con,$sql);
                            while($res=mysqli_fetch_array($run_cat)){
                                $id=intval($res['totalventas']);
                                if ($id>2){
                            ?>
                            [<?php
                             echo $res['totalventas']
                             ?>],

                            <?php
                                }
                            }
                            ?>
                        ]


                    }]





                });



            });
        </script>
<script type="text/javascript">
            $(function () {
                $('#container2').highcharts({
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
                        text: 'Productos MENOS Vendidos'
                    },
                    subtitle: {
                        text: 'Total de productos vendidos'
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
                                $idpr=$res['ProductoId'];
                                $sql="SELECT ProductoTitulo FROM producto WHERE ProductoId=$idpr";
                                $run_cat1 = mysqli_query($con,$sql);
                                $nose=mysqli_fetch_array($run_cat1);
                            ?>
                            ['<?php echo $nose['ProductoTitulo'];?>'],

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
                        name: 'Juego',
                        data:[
                            <?php
                            $sql="SELECT COUNT(ProductoId) as totalventas FROM orden GROUP BY(ProductoId)";
                            $run_cat = mysqli_query($con,$sql);
                            while($res=mysqli_fetch_array($run_cat)){
                                $id=intval($res['totalventas']);
                                if ($id<2){
                            ?>
                            [<?php
                             echo $res['totalventas']
                             ?>],

                            <?php
                                }
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
    <div id="container2" style="height:400px"></div>
    </body>
    </html>



    <?php
}
?>