<?php
$sql_lietke_danhmucsp = "SELECT * FROM tb_danhmuc ORDER BY thutu ASC";
$query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<h2>Danh sách danh mục sản phẩm: </h2>
<table style="width: 100%" border="1" >
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
            ?>
            <tr>
                <td><?php echo $row['id_danhmuc'] ?></td>
                <td><?php echo $row['ten_danhmuc']  ?></td>
                <td>
                    <a href="?action=quanlydanhmucsanpham&query=sua&id_danhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a> | <a href="modules/quanlydanhmucsp/xuly.php?id_danhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a>
                </td>
            </tr>
    <?php
        }
    ?>
</table>