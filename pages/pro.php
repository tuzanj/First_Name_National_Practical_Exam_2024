<?php
    include("../backend/conn.php");

    $id=$_GET["delete"];
    
    $products=$db->query("DELETE FROM `products` WHERE ProductCode ='$id'");
    if($products===true){
        header("location: createproduct.php");
    }