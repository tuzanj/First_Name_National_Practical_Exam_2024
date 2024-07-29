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
    <title>Product||Create</title>
</head>
<body>
<?php include("./nav.php") ?>
   <div class="main_body">
   <div class="navs">
           <div class="greating">
            <h1>Product</h1>
           </div>
           <div class="profile">
                    <div class="fot">
                    <?php echo $_SESSION["username"];?>
                    </div>
           </div>
        </div>
        <div class="sub_main">
            <div class="forms">
                <form action="../backend/valid.php" method="post">
                    <input type="text" name="p_name" id="" placeholder="Product Name" required>
                    <button type="submit" name="btnproduct">Create</button>
                </form>
            </div>
            <div class="tables">
                <table>
                    <thead>
                        <th>No:</th>
                        <th>Product Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php
                            include("../backend/conn.php");
                            $product=$db->query("SELECT * FROM `products`");
                            $no=0;
                            while($row=$product->fetch_assoc()){
                                $no++;
                        ?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?php echo $row["ProductName"]?></td>
                            <td><a id="edit" href="./editproduct.php?update=<?php echo $row["ProductCode"]?>">Edit</a></td>
                            <td><a id="delete" href="pro.php?delete=<?php echo $row["ProductCode"]?>">Delete</a></td>
                        </tr>
                        <?php
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
   </div>
</body>
</html>