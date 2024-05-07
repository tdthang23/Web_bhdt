<?php
if(isset($_POST['tukhoa'])){
    $tukhoa = $_POST['tukhoa'];
}
$sql_tk = "SELECT * FROM tb_sanpham JOIN tb_danhmuc ON tb_sanpham.id_danhmuc=tb_danhmuc.id_danhmuc WHERE ten_sanpham LIKE '%".$tukhoa."%'";
$query_tk = mysqli_query($mysqli,$sql_tk);
?>

<h3>Từ khóa tìm kiếm: <?php echo $tukhoa ?></h3>
<ul class="main__list">
    <?php
    while($row = mysqli_fetch_array($query_tk)){
    ?>
            <a href="index.php?quanly=sanpham&id_sanpham=<?php echo $row['id_sanpham'] ?>" class="main__item-link">
                <li class="main__item">
                    <img class="main__item-img" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                    <p class="main__item-title"><?php echo $row['ten_sanpham'] ?></p>
                    <p class="main__item-title">Danh mục: <?php echo $row['ten_danhmuc'] ?></p>
                    <p class="main__item-price">Giá: <?php echo number_format($row['gia'],0,',','.')?>₫ </p>
                </li>
            </a>    
    <?php } ?>        
</ul>