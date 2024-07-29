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
    <title>Edit</title>
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
            <div class="forms">
                <form action="../backend/valid.php" method="post">
                    <select name="product" id="">
                        <option value="">Select Product</option>
                        <?php
                            include("../backend/conn.php");
                            $product=$db->query("SELECT * FROM `products`");
                            while($row=$product->fetch_assoc()){
                        ?>
                        <option value="<?php echo $row["ProductCode"]?>"><?php echo $row["ProductName"]?></option>
                        <?php
                            }
                        ?>
                        </select>

                        <?php
                            include("../backend/conn.php");
                            $id=$_GET["update"];
                            $product=$db->query("SELECT * FROM `productin` WHERE productin_id='$id'");
                            while($row=$product->fetch_assoc()){
                        ?>
                        <input type="text" name="id" id="" value="<?php echo $id?>" hidden>
                        <input type="date" name="date" value="<?php echo $row["prin_date"]?>">
                        <input type="text" name="qty" id="" value="<?php echo $row["prin_Quantity"]?>" placeholder="Quantity">
                        <input type="text" name="price" id="" value="<?php echo $row["prin_Unit_price"]?>" placeholder="Price/Unit">
                        <?php
                        }
                        ?>
                    
                    <button type="submit" name="updatebuy">update</button>
                </form>
            </div>
        </div>
   </div>
</body>
</html>