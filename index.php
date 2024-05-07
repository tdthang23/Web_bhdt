<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./fonts/fontawesome-free-6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">

    <title>Web Điện Thoại</title>
</head>
<body>
    <?php
    include('admincp/config/config.php');
    ?>
    <div class="grid">
        <div class="wrapper">
            <?php
                include("pages/header.php");
                include("pages/menu.php");
                include("pages/main.php");
                include("pages/footer.php");  
            ?>  
        </div>
    </div>
</body>
</html>