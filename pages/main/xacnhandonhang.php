<?php
$id_khachhang = $_SESSION['id_khachhang'];
$tenkh = $_POST['hoten'];
$sdt = $_POST['sdt'];
$diachi = $_POST['diachi'];
$insert_donhang = "INSERT INTO tb_donhang (id_khachhang, status_donhang, ten_khachhang, diachi, sdt) VALUE ('".$id_khachhang."',1,'".$tenkh."','".$diachi."','".$sdt."')";
$query_insert_donhang = mysqli_query($mysqli, $insert_donhang);
if($query_insert_donhang){
    $sql_donhang = "SELECT * FROM tb_donhang WHERE id_khachhang = '".$id_khachhang."' ORDER BY id_donhang DESC LIMIT 1";
    $query_donhang = mysqli_query($mysqli, $sql_donhang);
    $row = mysqli_fetch_array($query_donhang);
    foreach($_SESSION['cart'] as $item){
        $id_sanpham = $item['id'];
        $soluong = $item['soluong'];
        $insert_ctdh = "INSERT INTO tb_chitietdonhang (id_donhang, id_sanpham, soluong_mua) VALUE ('".$row['id_donhang']."','".$id_sanpham."','".$soluong."')";
        mysqli_query($mysqli, $insert_ctdh);
        // $sql_sp = "SELECT * FROM tb_sanpham WHERE id_sanpham = '".$item['id']."'";
        // $query_sp = mysqli_query($mysqli,$sql_sp);
        // $sp = mysqli_fetch_array($query_sp);
        // $soluongmoi = $sp['soluong'] - $item['soluong'];
        $sql_capnhatkho = "UPDATE tb_sanpham SET tb_sanpham.soluong = tb_sanpham.soluong - ".$item['soluong']." WHERE id_sanpham = ".$item['id']."";
        mysqli_query($mysqli,$sql_capnhatkho);
    }
}
unset($_SESSION['cart']);
header("location:index.php?quanly=camon");
?>

