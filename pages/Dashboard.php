<?php
    session_start();
    if(empty($_SESSION["username"])){
        header("location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Dashboard</title>
</head>
<body>
    <?php include("./nav.php") ?>
   <div class="main_body">
        <div class="navs">
            <?php
                echo $_SESSION["username"]."Welcome Back !!!";
            ?>
        </div>
        <div class="sub_main">
            <div class="pro">
                <h1>Avaliable Product</h1>
                <!-- <p>0</p> -->
            </div>
            <div class="pro">
                <h1>Current Stock</h1>
                <!-- <p>0</p> -->
            </div>
            <div class="pro">
                <h1>Stock Out</h1>
                <!-- <p>0</p> -->
            </div>
        </div>
   </div>
</body>
</html>