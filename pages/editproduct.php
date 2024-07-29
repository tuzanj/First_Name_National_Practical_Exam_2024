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
    <title>Shop Keeper</title>
</head>
<body>
    <?php include("./nav.php") ?>
   <div class="main_body">
        <div class="navs">
        </div>
        <div class="sub_main">
            <div class="forms">
                <form action="../backend/valid.php" method="post">
                <?php
                            include("../backend/conn.php");
                            $id=$_GET["update"];
                            $keeper=$db->query("SELECT * FROM `products` WHERE ProductCode='$id' ");
                            while($row=$keeper->fetch_assoc()){
                        ?>
                        <input type="text" name="id" id="" value="<?php echo $row["ProductCode"]?>" hidden>
                        <input type="text" name="p_name" id="" value="<?php echo $row["ProductName"]?>" placeholder="Product Name" required>
                        <?php
                            }
                            ?>
                    <button type="submit" name="updateproduct">Update</button>
                </form>
            </div>
            
        </div>
   </div>
</body>
</html>