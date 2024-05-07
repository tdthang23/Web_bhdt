<?php
include('admincp/config/config.php');

if(isset($_POST['dangkykh'])){
    $tenkhachhang = $_POST['tenkhachhang'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $ngaysinh=$_POST['ngaysinh'];
    $sdt=$_POST['sdt'];
    $diachi=$_POST['diachi'];
    $sql_verify="SELECT * FROM tb_khachhang WHERE email='".$email."' LIMIT 1";
    $query_verify=mysqli_query($mysqli,$sql_verify);
    $count = mysqli_num_rows($query_verify);
    if($tenkhachhang == ""||$email == ""||$password == ""||$ngaysinh == ""||$sdt == ""||$diachi == ""){
        $error = "Vui lòng nhập dủ thông tin";
                echo "<script type='text/javascript'>alert('$error');</script>";
    }
    elseif($count>0){
        $error = "Email đã được đăng ký! Vui lòng sử dụng email khác!";
                echo "<script type='text/javascript'>alert('$error');</script>";
    }
    else{
        $sql_dangky = "INSERT INTO tb_khachhang (ten_khachhang, email, password, sdt, ngaysinh, diachi) VALUES ('".$tenkhachhang."','".$email."','".$password."','".$ngaysinh."','".$sdt."','".$diachi."')";
        mysqli_query($mysqli, $sql_dangky);
        $message = "Đăng ký thành công!";
                echo "<script type='text/javascript'>alert('$message');</script>";
    
        // header('Location:login.php');

    }
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
        .wrapper-signup{
            width: 30%;
            margin: 0 auto;
        }
        .table-signup{
            margin-top: 180px;
            width: 100%;
            border: 1px solid #000;
            border-collapse: collapse;
        }
        table.table-signup tr td{
            padding: 10px
        }
    </style>
    <title>Đăng ký</title>
</head>
<body>
    <div class="wrapper-signup">
        <form action="" method="POST" autocomplete="off">
            <table class="table-signup">
                <tr>
                    <th colspan="2">ĐĂNG KÝ KHÁCH HÀNG</th>
                </tr>
                <tr>
                    <td>Tên khách hàng: </td>
                    <td><input type="text" name="tenkhachhang"></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email"></td>
                </tr>
                    <td>Mật khẩu: </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Tên khách hàng: </td>
                    <td><input type="date" name="ngaysinh"></td>
                </tr>
                <tr>
                    <td>Số điện thoại: </td>
                    <td><input type="text" name="sdt"></td>
                </tr>
                <tr>
                    <td>Địa chỉ: </td>
                    <td><input type="text" name="diachi"></td>
                </tr>
                <tr>
                <td colspan="2" style="text-align: center"><input type="submit" name="dangkykh" value="Đăng ký"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">Đã có tài khoản? <a href="login.php">Đăng nhập</a></td>
                </tr>
            </table>

        </form>