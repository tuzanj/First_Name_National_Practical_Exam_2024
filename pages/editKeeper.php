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
                            $keeper=$db->query("SELECT * FROM `storekeeper`WHERE storekeeperId='$id'");
                            while($row=$keeper->fetch_assoc()){
                        ?>
                        <input type="text" name="id" id="" value="<?php echo $row["storekeeperId"]?>" hidden>
                        <input type="text" name="username" id="" value="<?php echo $row["userName"]?>" placeholder="username" required>
                        <input type="password" name="passwd" value="<?php echo $row["Password"]?>" placeholder="Password" id="" required>
                        <?php
                            }
                            ?>
                    <button type="submit" name="updatekeeper">Update</button>
                </form>
            </div>
            
        </div>
   </div>
</body>
</html>