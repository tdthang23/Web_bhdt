<?php
include('../../config/config.php');

$masp = $_POST['masp'];
$tensp = $_POST['tensp'];
$id_danhmuc = $_POST['danhmuc'];
$hangsx = $_POST['hangsx'];
$gia = $_POST['giasp'];
$soluong = $_POST['soluong'];
// $hinhanh = $_POST['hinhanh'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
//xử lý hình ảnh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

if(isset($_POST['themsanpham'])){

    $sql_them = "INSERT INTO tb_sanpham (masp,ten_sanpham,id_danhmuc,hangsx,gia,soluong,hinhanh,noidung,tinhtrang) VALUES ('".$masp."','".$tensp."','".$id_danhmuc."','".$hangsx."','".$gia."','".$soluong."','".$hinhanh."','".$noidung."','".$tinhtrang."')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);

    header('Location:../../index.php?action=quanlysanpham&query=them');
}
elseif(isset($_POST['suasanpham'])){
    if($hinhanh!=''){
        $sql_select = "SELECT * FROM tb_sanpham WHERE id_sanpham = '$_GET[id_sanpham]' LIMIT 1";
        $sql_query = mysqli_query($mysqli,$sql_select);
        while ($row = mysqli_fetch_array($sql_query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        
        $sql_update = "UPDATE tb_sanpham SET masp = '".$masp."', ten_sanpham='".$tensp."', id_danhmuc='".$id_danhmuc."', hangsx='".$hangsx."', gia='".$gia."', soluong='".$soluong."', hinhanh='".$hinhanh."', noidung='".$noidung."', tinhtrang='".$tinhtrang."' WHERE id_sanpham = '$_GET[id_sanpham]'";

    }
    else{
        $sql_update = "UPDATE tb_sanpham SET masp = '".$masp."', ten_sanpham='".$tensp."', id_danhmuc='".$id_danhmuc."', hangsx='".$hangsx."', gia='".$gia."', soluong='".$soluong."', noidung='".$noidung."', tinhtrang='".$tinhtrang."' WHERE id_sanpham='$_GET[id_sanpham]'";
    }
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}
else{
    $id = $_GET['id_sanpham'];
    $sql_select = "SELECT * FROM tb_sanpham WHERE id_sanpham = '$id' LIMIT 1";
    $sql_query = mysqli_query($mysqli,$sql_select);
    while ($row = mysqli_fetch_array($sql_query)){
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tb_sanpham WHERE id_sanpham = '".$id."'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');

}
?>