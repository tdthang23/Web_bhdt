<?php
$sql_sp = "SELECT * FROM tb_sanpham JOIN tb_danhmuc ON tb_sanpham.id_danhmuc = tb_danhmuc.id_danhmuc ORDER BY id_sanpham ASC LIMIT 20";
$query_sp = mysqli_query($mysqli, $sql_sp);
?>

<h3>Sản phẩm mới nhất:</h3>
<ul class="main__list">
    <?php
    while($row_sanpham = mysqli_fetch_array($query_sp)){
    ?>
            <a href="index.php?quanly=sanpham&id_sanpham=<?php echo $row_sanpham['id_sanpham'] ?>" class="main__item-link">
                <li class="main__item">
                    <img class="main__item-img" src="admincp/modules/quanlysp/uploads/<?php echo $row_sanpham['hinhanh'] ?>" alt="">
                    <p class="main__item-title"><?php echo $row_sanpham['ten_sanpham'] ?></p>
                    <p class="main__item-title">Danh mục: <?php echo $row_sanpham['ten_danhmuc'] ?></p>
                    <p class="main__item-price">Giá: <?php echo number_format($row_sanpham['gia'],0,',','.')?>₫ </p>
                </li>
            </a>    
    <?php } ?>        
</ul>