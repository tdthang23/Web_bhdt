<?php
$sql_danhmucsp = "SELECT * FROM tb_danhmuc ORDER BY thutu ASC";
$query_danhmucsp = mysqli_query($mysqli, $sql_danhmucsp);

?>

<div class="sidebar">
    <p style="font-weight: bold; color:#fff; margin-left: 5px">DANH MỤC SẢN PHẨM:</p>
        <ul class="sidebar__list">
        <?php 
        while($row_danhmuc=mysqli_fetch_array($query_danhmucsp)){
        ?>
            <li class="sidebar__item"><a href="index.php?quanly=danhmucsanpham&id_danhmuc=<?php echo $row_danhmuc['id_danhmuc'] ?>" class="sidebar__item-link"><?php echo $row_danhmuc['ten_danhmuc'] ?></a></li>
        <?php } ?>
        </ul>
    </div>