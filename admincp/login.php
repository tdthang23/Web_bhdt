<?php
    session_start();
    include('config/config.php');
    $verify = false;
    if(isset($_POST['dangnhap'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql_verify="SELECT * FROM tb_admin WHERE username='".$username."' AND password='".$password."' LIMIT 1";
        $query_verify=mysqli_query($mysqli,$sql_verify);
        $count = mysqli_num_rows($query_verify);
        if($count>0){
            $_SESSION['dangnhap']=$username;
            $verify = true;
            header("location:index.php");
        }
        else{
            // header("location:login.php");
            $message = "Tài khoản hoặc mật khẩu không đúng! Vui lòng thử lại.";
            echo "<script type='text/javascript'>alert('$message');</script>";        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #f2f2f2;
        }
        .wrapper-login{
            width: 20%;
            margin: 0 auto;
        }
        .table-login{
            margin-top: 250px;
            width: 100%;
            border: 1px solid #000;
            border-collapse: collapse;
        }
        table.table-login tr td{
            padding: 10px
        }
    </style>
    <title>Đăng nhập</title>
</head>
<body>
    <div class="wrapper-login">
        <form action="" method="POST" autocomplete="off">
            <table class="table-login">
                <tr>
                    <th colspan="2">ĐĂNG NHẬP ADMIN</th>
                </tr>
                <tr>
                    <td>Tài khoản: </td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Mật khẩu: </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <script>var verify </script>
                    <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
                </tr>
            </table>

        </form>
    </div>
</body>
</html>

