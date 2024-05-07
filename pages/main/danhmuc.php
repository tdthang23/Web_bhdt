<?php
$sql_danhmucsp = "SELECT * FROM tb_danhmuc ORDER BY thutu ASC";
$query_danhmucsp = mysqli_query($mysqli, $sql_danhmucsp);
$sql_sp = "SELECT * FROM tb_sanpham JOIN tb_danhmuc ON tb_sanpham.id_danhmuc = tb_danhmuc.id_danhmuc AND tb_danhmuc.id_danhmuc = '$_GET[id_danhmuc]' ORDER BY id_sanpham ASC";
$query_sp = mysqli_query($mysqli, $sql_sp);
$sql_title = "SELECT * FROM tb_danhmuc WHERE id_danhmuc = '$_GET[id_danhmuc]' LIMIT 1";
$query_title = mysqli_query($mysqli,$sql_title);
?>



<ul class="main__list">
    <h3>Danh mục sản phẩm: <?php 
    while ($row_tilte = mysqli_fetch_array($query_title)){
            echo $row_tilte['ten_danhmuc'];
    }
    ?></h3>
    <?php
    while($row_sanpham = mysqli_fetch_array($query_sp)){
    ?>
            <a href="index.php?quanly=sanpham&id_sanpham=<?php echo $row_sanpham['id_sanpham'] ?> " class="main__item-link">
                <li class="main__item">
                        <img class="main__item-img" src="admincp/modules/quanlysp/uploads/<?php echo $row_sanpham['hinhanh'] ?>" alt="">
                        <p class="main__item-title"><?php echo $row_sanpham['ten_sanpham'] ?></p>
                        <p class="main__item-price">Giá: <?php echo number_format($row_sanpham['gia'],0,',','.')?>₫</p>  
                </li>
            </a>
    <?php } ?>
        </ul>