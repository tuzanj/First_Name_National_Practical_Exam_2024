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
    <title>Document</title>
</head>
<body>
<?php include("./nav.php") ?>
   <div class="main_body">
   <div class="navs">
           <div class="greating">
                <H1>Manage StockOut</H1>
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
                        <input type="date" name="date">
                        <input type="text" name="qty" id="" placeholder="Quantity">
                        <input type="text" name="price" id="" placeholder="Price/Unit">
                    </select>
                    <button type="submit" name="btnSeles">Sale</button>
                </form>
            </div>
            <div class="tables">
                <table>
                    <thead>
                        <th>No:</th>
                        <th>Product Name</th>
                        <th>Date</th>
                        <th>Qty</th>
                        <th>Price/Unit</th>
                        <th>Total Price</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php
                            include("../backend/conn.php");
                            $product=$db->query("SELECT p.ProductCode AS p_id, p.ProductName,productout.* FROM products p INNER JOIN productout ON p.ProductCode=productout.ProductCode");
                            $no=0;
                            while($row=$product->fetch_assoc()){
                                $no++;
                        ?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?php echo $row["ProductName"]?></td>
                            <td><?php echo $row["prOut_date"]?></td>
                            <td><?php echo $row["prOut_Quantity"]?></td>
                            <td><?php echo $row["prOut_price"]." Frw"?></td>
                            <td><?php echo $row["prOut_TotalPrice"]." Frw"?></td>
                            <td><a id="edit" href="./editproductout.php?update=<?php echo $row["productOut_id"]?>">Edit</a></td>
                            <td><a id="delete" href="./delete.php?delete=<?php echo $row["productOut_id"]?>">Delete</a></td>
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