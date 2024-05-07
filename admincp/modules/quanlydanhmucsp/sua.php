<p>Sửa danh mục sản phẩm</p>
<?php
$sql_sua_danhmucsp = "SELECT * FROM tb_danhmuc WHERE id_danhmuc = '$_GET[id_danhmuc]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<table>
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php?id_danhmuc=<?php echo $_GET['id_danhmuc'] ?>">
    <?php
        while($row = mysqli_fetch_array($query_sua_danhmucsp)){
    ?>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php echo $row['ten_danhmuc']?>" name="tendanhmuc"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $row['thutu']?>" name="thutu"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
        </tr>
    <?php
        }
    ?>
    </form>
</table>