
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <title>GumiGames Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>


<body>
<div id="wrapper"> <!-- Wrapper Begin -->
    <?php include("includes/sidebar.php")?>
    <div id="page-wrapper">   <!-- Page Wrapper Begin -->
        <div id="container-fluid>"> <!--container-fluid Begin -->
            <?php
                    if(isset($_GET['dashboard'])){

                        include ("dashboard.php");

                    }

            ?>


        </div><!--container-fluid finish -->
    </div><!--Page wrapper finish -->
</div><!--Wrapper finish -->
<script src="js/jquery-331.min.js"></script>
<script src="js/boostrap-337.min.js"></script>

</body>
</html>