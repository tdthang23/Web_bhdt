<h3>Chi tiết sản phẩm</h3>

<?php
$sql_detail = "SELECT * FROM tb_sanpham JOIN tb_danhmuc ON tb_sanpham.id_danhmuc = tb_danhmuc.id_danhmuc WHERE id_sanpham = '$_GET[id_sanpham]' LIMIT 1";
$query_detail = mysqli_query($mysqli,$sql_detail);
while($row = mysqli_fetch_array($query_detail)){
?>

<div class="wrapper_detail">
    <div class="hinhanh_sp">
        <img width="80%" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
    </div>
    <form method="POST" action="pages/main/themgiohang.php?id_sanpham=<?php echo $row['id_sanpham'] ?>">
        <div class="detail_sp">
            <h3 style="margin:0">Tên sản phẩm: <?php echo $row['ten_sanpham'] ?></h3>
            <p>Mã sản phẩm: <?php echo $row['masp'] ?></p>
            <p>Danh mục: <?php echo $row['ten_danhmuc'] ?></p>
            <p>Giá: <?php echo number_format($row['gia'],0,',','.')?>₫</p>
            <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
        </div>

    </form>
    
</div>
<?php } ?>


