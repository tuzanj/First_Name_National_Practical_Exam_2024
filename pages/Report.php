<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Report</title>
</head>
<body>
    <div class="main_">
        <div class="heades">
            <div class="nav1">
                <ul>
                    <li><h1>Report Stock In</h1></li>
                    <li>Beauty Warehouse</li>
                </ul>
                
                <div class="right">
                    <p><?php echo date("d M y")?></p>
                </div>
            </div>
            <div class="left">
                
                
            </div>
            
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
                </thead>
                <tbody>
                    <?php
                        include("../backend/conn.php");
                        if(isset($_POST["generate"])){
                            $start=$_POST["start"];
                            $end=$_POST["end"];
                            $product=$db->query("SELECT p.ProductCode AS p_id, p.ProductName,productin.* FROM products p INNER JOIN productin ON p.ProductCode=productin.ProductCode WHERE productin.prin_date BETWEEN '$start' AND '$end'");
                                
                            $no=0;
                            while($row=$product->fetch_assoc()){
                                $no++
                    ?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?php echo $row["ProductName"]?></td>
                            <td><?php echo $row["prin_date"]?></td>
                            <td><?php echo $row["prin_Quantity"]?></td>
                            <td><?php echo $row["prin_Unit_price"]?></td>
                            <td><?php echo $row["prin_TotalPrice"]?></td>
                        </tr>
                    <?php
                    }
                }else{
                    echo "No Data Found!!!";
                }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>