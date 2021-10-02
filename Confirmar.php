<?php
$active='Confirmar.php';
include("includes/BD.php");
include("includes/header.php");
?>
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

                    <h1 align="center"> Por favor confirma tu pago</h1>

                    <form action="Confirmar.php?update_id=<?php echo $order_id;?>" method="post" enctype="multipart/form-data"><!-- form Begin -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label> Factura Núm: </label>

                            <input type="number" class="form-control" name="invoice_no" min="1" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label> Cantidad a pagar: </label>

                            <input type="number" class="form-control" name="amount_sent" min="1" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label> Selecciona el método de pago: </label>

                            <select name="payment_mode" class="form-control"><!-- form-control Begin -->

                                <option> Select Payment Mode </option>
                                <option> Back Code </option>
                                <option> Payoneer </option>
                                <option> Western Union </option>

                            </select><!-- form-control Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label> Transaction / Reference ID: </label>
                            <input type="number" maxlength="4" size="4" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" leng class="form-control" name="ref_no" min="1" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label> Paypall / Payoneer / Western Union Code: </label>

                            <input  type = "number" class="form-control" maxlength="18" size="18" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" leng name="code" min="1" required>

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

                        $code_crypt = password_hash($code,PASSWORD_BCRYPT);



                        $complete ="Complete";

                        $insert_payment = "insert into Pago (FacturaNumero,PagoCantidad,PagoModo,PagoNumeroReferencia,PagoCodigo,PagoCodigoEncriptado,PagoFecha) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$code_crypt',NOW())";

                        $run_payment = mysqli_query($con,$insert_payment);

                        if($run_payment){

                            echo "<script>alert('Thank You for purchasing, your orders will be completed within 24 hours work')</script>";

                            echo "<script>window.open('Ordenes.php?mis_ordenes','_self')</script>";

                        }else
                            echo "<script>alert('kk ck de vk')</script>";

                        echo "<script>window.open('Ordenes.php?mis_ordenes','_self')</script>";

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
