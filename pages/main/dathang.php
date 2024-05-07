<?php
if(!isset($_SESSION['dangnhapkh'])){
    header("location:login.php");
}

$id_khachhang = $_SESSION['id_khachhang'];
$sql_khachhang = "SELECT * FROM tb_khachhang WHERE id_khachhang='".$id_khachhang."' LIMIT 1";
$query_khachhang = mysqli_query($mysqli,$sql_khachhang);
$khachhang=mysqli_fetch_array($query_khachhang);
$i=0;
$tongtien=0;
foreach($_SESSION['cart'] as $cart_item){
    $i++;
    $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
    $tongtien+=$thanhtien;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt hàng</title>
</head>
<body>
    <h2>THÔNG TIN KHÁCH HÀNG</h2>
    <form method="POST" action="?quanly=xacnhandonhang">
    <table style="width: 100%; border-collapse: collapse">
        <tr>
            <td>Họ và tên: </td>
            <td><input type="text" name="hoten" value="<?php echo $khachhang['ten_khachhang'] ?>"></td>
        </tr>
        <tr>
            <td>Địa chỉ: </td>
            <td><input type="text" name="diachi" value ="<?php echo $khachhang['diachi'] ?>"></td>
        </tr>
        <tr>
            <td>Số điện thoại: </td>
            <td><input type="text" name="sdt" value ="<?php echo $khachhang['sdt'] ?>"></td>
        </tr>
        <tr>
            <td>Thành tiền: </td>
            <td><?php echo number_format($tongtien,0,",",".")?>₫</td>
        </tr>
    </table>
    <div style="margin-left: 20%; margin-top: 10px"><input type="submit" name="xacnhandonhang" value="Xác nhận đơn hàng"></div>
    </form>
</body>
</html>