<?php
    session_start();

    include("./conn.php");

    if(isset($_POST["btnSign"])){
        $username=$_POST["username"];
        $password=$_POST["passwd"];

        $signup=$db->query("INSERT INTO `users`( `username`, `Password`) VALUES ('$username','$password')");
        if($signup===true){
            header("location: ../index.php");
        }
    }
    if(isset($_POST["btnlogin"])){
        $username=$_POST["username"];
        $password=$_POST["passwd"];

        $login=$db->query("SELECT * FROM `users`");

        if(mysqli_num_rows($login)>0){
            $_SESSION["username"]=$username;
            header("location: ../pages/Dashboard.php");
        }
    }
    if(isset($_POST["btnkeeper"])){
        $username=$_POST["username"];
        $password=$_POST["passwd"];

        $signup=$db->query("INSERT INTO `storekeeper`(`userName`, `Password`) VALUES ('$username','$password')");
        if($signup===true){
            header("location: ../pages/createkeeper.php");
        }
    }
    if(isset($_POST["updatekeeper"])){
        $id=$_POST["id"];
        $username=$_POST["username"];
        $password=$_POST["passwd"];

        $signup=$db->query("UPDATE `storekeeper` SET `userName`='$username',`Password`='$password' WHERE `storekeeperId`='$id'");
        if($signup===true){
            header("location: ../pages/createkeeper.php");
        }
    }

    if(isset($_POST["btnproduct"])){
        $Pname=$_POST["p_name"];

        $product=$db->query("INSERT INTO `products`( `ProductName`) VALUES ('$Pname')");
        if($product===true){
            header("location: ../pages/createproduct.php");
        }
    }
    if(isset($_POST["updateproduct"])){
        $id=$_POST["id"];
        $Pname=$_POST["p_name"];

        $product=$db->query("UPDATE `products` SET `ProductName`='$Pname' WHERE `ProductCode`='$id'");
        if($product===true){
            header("location: ../pages/createproduct.php");
        }
    }
    if(isset($_POST["btnbuy"])){
        $product=$_POST["product"];
        $date=$_POST["date"];
        $qty=$_POST["qty"];
        $price=$_POST["price"];
        $total=$qty*$price;

        $productin=$db->query("INSERT INTO `productin`( `ProductCode`, `prin_date`, `prin_Quantity`, `prin_Unit_price`, `prin_TotalPrice`) VALUES ('$product','$date','$qty','$price','$total')");
        if($productin===true){
            header("location: ../pages/createstockIn.php");
        }
    }
    if(isset($_POST["updatebuy"])){
        $id=$_POST["id"];
        $product=$_POST["product"];
        $date=$_POST["date"];
        $qty=$_POST["qty"];
        $price=$_POST["price"];
        $total=$qty*$price;
        echo "here";
        $productin=$db->query("UPDATE `productin` SET `ProductCode`='$product',`prin_date`='$date',`prin_Quantity`='$qty',`prin_Unit_price`='$price',`prin_TotalPrice`='$total' WHERE `productin_id`='$id'");
        if($productin===true){
            header("location: ../pages/createstockIn.php");
        }
    }
    if(isset($_POST["btnSeles"])){
        $product=$_POST["product"];
        $date=$_POST["date"];
        $qty=$_POST["qty"];
        $price=$_POST["price"];
        $total=$qty*$price;

        $productin=$db->query("INSERT INTO `productout`( `ProductCode`, `prOut_date`, `prOut_Quantity`, `prOut_price`, `prOut_TotalPrice`) VALUES ('$product','$date','$qty','$price','$total')");
        if($productin===true){
            header("location: ../pages/createstockOut.php");
        }
    }
    if(isset($_POST["updateSale"])){
        $id=$_POST["id"];
        $product=$_POST["product"];
        $date=$_POST["date"];
        $qty=$_POST["qty"];
        $price=$_POST["price"];
        $total=$qty*$price;
        echo "here";
        $productin=$db->query("UPDATE `productout` SET `ProductCode`='$product',`prOut_date`='$date',`prOut_Quantity`='$qty',`prOut_price`='$price',`prOut_TotalPrice`='$total' WHERE `productOut_id`='$id'");
        if($productin===true){
            header("location: ../pages/createstockIn.php");
        }
    }