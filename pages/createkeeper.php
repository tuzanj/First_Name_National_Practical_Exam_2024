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
           <div class="greating">
                <h1>Store Keeper</h1>
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
                    <input type="text" name="username" id="" placeholder="username" required>
                    <input type="password" name="passwd" placeholder="Password" id="" required>
                    <button type="submit" name="btnkeeper">Create</button>
                </form>
            </div>
            <div class="tables">
                <table>
                    <thead>
                        <th>No:</th>
                        <th>USERNAME</th>
                        <th>Password</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php
                            include("../backend/conn.php");
                            $keeper=$db->query("SELECT * FROM `storekeeper`");
                            $no=0;
                            while($row=$keeper->fetch_assoc()){
                                $no++;
                        ?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?php echo $row["userName"]?></td>
                            <td><?php echo $row["Password"]?></td>
                            <td><a id="edit" href="./editkeeper.php?update=<?php echo $row["storekeeperId"]?>">Edit</a></td>
                            <td><a id="delete" href="./delete.php?delete=<?php echo $row["storekeeperId"]?>">Delete</a></td>
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