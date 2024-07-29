<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Generate Report</title>
</head>
<body>
<?php include("./nav.php") ?>
    <div class="main_body">
        <div class="sub_main">
        <div class="forms">
            <form action="./Report.php" method="post" target="_blank">
                <label for="start">start Date:</label>
            <input type="date" name="start" id="">
            <label for="end">End Date:</label>
            <input type="date" name="end">
            <button type="submit" name="generate">Generate</button>
        </form>
    </div>
        </div>
    </div>
</body>
</html>