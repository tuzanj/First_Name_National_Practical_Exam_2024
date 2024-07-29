<?php
    session_start();
    if(!empty($_SESSION["username"])){
        header("location: ./pages/Dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pages/css/styles.css">
    <title>SignUp</title>
</head>
<body>
    <div class="main">
        <div class="forms">
            <h1>SignUp Here!!</h1>
            <form action="./backend/valid.php" method="post">
                <input type="text" name="username" id="" placeholder="username" required>
                <input type="password" name="passwd" placeholder="Password" id="" required>
                    <a href="./index.php">Already Have Account? Login</a>
                <button type="submit" name="btnSign">SignUp</button>
            </form>
        </div>
    </div>
</body>
</html>