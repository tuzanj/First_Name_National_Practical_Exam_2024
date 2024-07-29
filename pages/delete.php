<?php
include("../backend/conn.php");

$id=$_GET["delete"];

$products=$db->query("DELETE FROM `products` WHERE ProductCode ='$id'");
if($products===true){
    header("location: createproduct.php");
}

$storekeeper=$db->query("DELETE FROM `storekeeper` WHERE storekeeperId ='$id'");
if($storekeeper===true){
    header("location: ./createkeeper.php");
}


$productout=$db->query("DELETE FROM `productout` WHERE productOut_id ='$id'");
if($productout===true){
    header("location: ./createstockOut.php");
}
$productin=$db->query("DELETE FROM `productin` WHERE productin_id='$id'");
if($productin===true){
    header("location: ./createstockIn.php");
}
