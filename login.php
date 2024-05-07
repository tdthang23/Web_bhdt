<?php
    session_start();
    include('admincp/config/config.php');
    $verify = false;
    if(isset($_POST['dangnhapkh'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql_verify="SELECT * FROM tb_khachhang WHERE email='".$email."' AND password='".$password."' LIMIT 1";
        $query_verify=mysqli_query($mysqli,$sql_verify);
        $count = mysqli_num_rows($query_verify);
        if($count>0){
            $row = mysqli_fetch_array($query_verify);
            $tenkhachhang = $row['ten_khachhang'];
            $_SESSION['dangnhapkh'] = $tenkhachhang;
            $_SESSION['id_khachhang'] = $row['id_khachhang'];
            $verify = true;
            header("location:index.php");
        }
        else{
            // header("location:login.php");
            $message = "Email hoặc mật khẩu không đúng! Vui lòng thử lại.";
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
                    <th colspan="2">ĐĂNG NHẬP KHÁCH HÀNG</th>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Mật khẩu: </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td style="font-size:12px"><a href="">Quên mật khẩu?</a></td>
                    <td style="font-size:13px">Chưa có tài khoản? <a href="signup.php" style="color:red">Đăng ký</a></td>

                </tr>
                <tr>
                    <td colspan="2" style="text-align: center"><input type="submit" name="dangnhapkh" value="Đăng nhập"></td>

                </tr>
            </table>

        </form>
    </div>
</body>
</html>
