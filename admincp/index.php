<?php
session_start();
if(!isset($_SESSION['dangnhap'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../fonts/fontawesome-free-6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/styles_admincp.css">

    <title>Admincp</title>
</head>
<body>
    <h3 class="admincp__title">Welcome to Admincp</h3>

    <div class="grid">
        <div class="wrapper">
            <?php
                include("config/config.php");
                include("modules/header.php");
                include("modules/menu.php");
                include("modules/main.php");
                include("modules/footer.php");  
            ?>  
        </div>
    </div>
</body>
</html>