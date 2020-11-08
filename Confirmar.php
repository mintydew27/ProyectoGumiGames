<?php

session_start();

if(!isset($_SESSION['ClienteCorreo'])){

    echo "<script>window.open('Revisa.php','_self')</script>";

}else{

    include("includes/BD.php");
    include("functions/functions.php");

    if(isset($_GET['ClienteOrdenId'])){

        $order_id= $_GET['ClienteOrdenId'];
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>M-Dev Store</title>
        <link rel="stylesheet" href="styles/bootstrap-337.min.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>

    <div id="top"><!-- Top Begin -->

        <div class="container"><!-- container Begin -->

            <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->

                <a href="#" class="btn btn-success btn-sm">

                    <?php

                    if(!isset($_SESSION['ClienteCorreo'])){

                        echo "Welcome: Guest";

                    }else{

                        echo "Welcome: " . $_SESSION['ClienteCorreo'] . "";

                    }

                    ?>

                </a>
                <a href="Revisa.php"> <?php items(); ?> Items In Your Cart | Total Price: <?php precio_total(); ?> </a>

            </div><!-- col-md-6 offer Finish -->

            <div class="col-md-6"><!-- col-md-6 Begin -->

                <ul class="menu"><!-- cmenu Begin -->

                    <li>
                        <a href="Registro_de_clientes.php">Register</a>
                    </li>
                    <li>
                        <a href="Mi_cuenta.php">My Account</a>
                    </li>
                    <li>
                        <a href="Carrito.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="Revisa.php">

                            <?php

                            if(!isset($_SESSION['ClienteCorreo'])){

                                echo "<a href='Revisa.php'> Login </a>";

                            }else{

                                echo " <a href='Cerrar_sesion.php'> Log Out </a> ";

                            }

                            ?>

                        </a>
                    </li>

                </ul><!-- menu Finish -->

            </div><!-- col-md-6 Finish -->

        </div><!-- container Finish -->

    </div><!-- Top Finish -->

    <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->

        <div class="container"><!-- container Begin -->

            <div class="navbar-header"><!-- navbar-header Begin -->

                <a href="Index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->

                    <img src="images/logotipo_gumi_games.png" alt="GumiGames Logo" class="hidden-xs">
                    <img src="images/logotipo_gumi_games.png" alt="GumiGames Logo Mobile" class="visible-xs">

                </a><!-- navbar-brand home Finish -->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Toggle Navigation</span>

                    <i class="fa fa-align-justify"></i>

                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>

                </button>

            </div><!-- navbar-header Finish -->

            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->

                <div class="padding-nav"><!-- padding-nav Begin -->

                    <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->

                        <li>
                            <a href="Index.php">Home</a>
                        </li>
                        <li>
                            <a href="Tienda.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="Mi_cuenta.php">My Account</a>
                        </li>
                        <li>
                            <a href="Carrito.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="Contactanos.php">Contact Us</a>
                        </li>

                    </ul><!-- nav navbar-nav left Finish -->

                </div><!-- padding-nav Finish -->

                <a href="Carrito.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->

                    <i class="fa fa-shopping-cart"></i>

                    <span><?php items(); ?> Items In Your Cart</span>

                </a><!-- btn navbar-btn btn-primary Finish -->

                <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->

                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->

                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>

                    </button><!-- btn btn-primary navbar-btn Finish -->

                </div><!-- navbar-collapse collapse right Finish -->

                <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->

                    <form method="get" action="Resultados.php" class="navbar-form"><!-- navbar-form Begin -->

                        <div class="input-group"><!-- input-group Begin -->

                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn"><!-- input-group-btn Begin -->

                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->

                               <i class="fa fa-search"></i>

                           </button><!-- btn btn-primary Finish -->

                           </span><!-- input-group-btn Finish -->

                        </div><!-- input-group Finish -->

                    </form><!-- navbar-form Finish -->

                </div><!-- collapse clearfix Finish -->

            </div><!-- navbar-collapse collapse Finish -->

        </div><!-- container Finish -->

    </div><!-- navbar navbar-default Finish -->

    <div id="content"><!-- #content Begin -->
        <div class="container"><!-- container Begin -->
            <div class="col-md-12"><!-- col-md-12 Begin -->

                <ul class="breadcrumb"><!-- breadcrumb Begin -->
                    <li>
                        <a href="Index.php">Home</a>
                    </li>
                    <li>
                        My Account
                    </li>
                </ul><!-- breadcrumb Finish -->

            </div><!-- col-md-12 Finish -->

            <div class="col-md-3"><!-- col-md-3 Begin -->

                <?php

                include("includes/sidebar.php");

                ?>

            </div><!-- col-md-3 Finish -->

            <div class="col-md-9"><!-- col-md-9 Begin -->

                <div class="box"><!-- box Begin -->

                    <h1 align="center"> Please confirm your payment</h1>

                    <form action="Confirmar.php?update_id=<?php echo $order_id;?>" method="post" enctype="multipart/form-data"><!-- form Begin -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label> Invoice No: </label>

                            <input type="text" class="form-control" name="invoice_no" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label> Amount Sent: </label>

                            <input type="text" class="form-control" name="amount_sent" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label> Select Payment Mode: </label>

                            <select name="payment_mode" class="form-control"><!-- form-control Begin -->

                                <option> Select Payment Mode </option>
                                <option> Back Code </option>
                                <option> Paypall </option>
                                <option> Payoneer </option>
                                <option> Western Union </option>

                            </select><!-- form-control Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label> Transaction / Reference ID: </label>

                            <input type="text" class="form-control" name="ref_no" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label> Paypall / Payoneer / Western Union Code: </label>

                            <input type="text" class="form-control" name="code" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label> Payment Date: </label>

                            <input type="text" class="form-control" name="date" required>

                        </div><!-- form-group Finish -->

                        <div class="text-center"><!-- text-center Begin -->

                            <button class="btn btn-primary btn-lg" name="confirm_payment"><!-- tn btn-primary btn-lg Begin -->

                                <i class="fa fa-user-md"></i> Confirm Payment

                            </button><!-- tn btn-primary btn-lg Finish -->

                        </div><!-- text-center Finish -->

                    </form><!-- form Finish -->

                    <?php

                    if(isset($_POST['confirm_payment'])){

                        $update_id = $_GET['update_id'];

                        $invoice_no = $_POST['invoice_no'];

                        $amount = $_POST['amount_sent'];

                        $payment_mode = $_POST['payment_mode'];

                        $ref_no = $_POST['ref_no'];

                        $code = $_POST['code'];

                        $payment_date = $_POST['date'];

                        $complete ="Complete";

                        $insert_payment = "insert into Pago (FacturaNumero,PagoCantidad,PagoModo,PagoNumeroReferencia,PagoCodigo,PagoFecha) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";

                        $run_payment = mysqli_query($con,$insert_payment);

                        if($run_payment){

                            echo "<script>alert('Thank You for purchasing, your orders will be completed within 24 hours work')</script>";

                            echo "<script>window.open('Mi_cuenta.php?mis_ordenes','_self')</script>";

                        }else
                            echo "<script>alert('kk ck de vk')</script>";

                        echo "<script>window.open('Mi_cuenta.php?mis_ordenes','_self')</script>";

                    }

                    ?>

                </div><!-- box Finish -->

            </div><!-- col-md-9 Finish -->

        </div><!-- container Finish -->
    </div><!-- #content Finish -->

    <?php

    include("includes/Footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


    </body>
    </html>
<?php } ?>