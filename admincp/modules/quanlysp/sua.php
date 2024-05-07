<p>Sửa sản phẩm</p>
<?php
$sql_sua_sanpham = "SELECT * FROM tb_sanpham WHERE id_sanpham = '$_GET[id_sanpham]' LIMIT 1";
$query_sua_sanpham = mysqli_query($mysqli, $sql_sua_sanpham);
?>

<table border="1px">
    <?php
    while($row = mysqli_fetch_array($query_sua_sanpham)){
    ?>
    <form method="POST" action="modules/quanlysp/xuly.php?id_sanpham=<?php echo $_GET['id_sanpham']?>" enctype="multipart/form-data">
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masp" value="<?php echo $row['masp']?>"></td>
        </tr>
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensp" value="<?php echo $row['ten_sanpham']?>"></td>
        </tr>
        <tr>
            <td>Danh mục</td>
            <td>
                <select name="danhmuc">
                    <?php
                    $sql_danhmuc = "SELECT * FROM tb_danhmuc ORDER BY id_danhmuc";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                        if($row['id_danhmuc']==$row_danhmuc['id_danhmuc']){
                    ?>
                    <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_danhmuc'] ?></option>
                    <?php }
                        else{
                            ?>
                            <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_danhmuc'] ?></option>
                        <?php
                        }
                    } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Hãng sản xuất</td>
            <td><input type="text" name="hangsx" value="<?php echo $row['hangsx']?>"></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="giasp" value="<?php echo $row['gia']?>"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong" value="<?php echo $row['soluong']?>"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh">
                <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="100px">
            </td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea name="noidung" cols="30" rows="5" style="resize: none" ><?php echo $row['noidung']?></textarea></td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                <?php if($row['tinhtrang']==1){?>
                    <option value="1" selected>Kích hoạt</option>
                    <option value="0">Ẩn</option>
                <?php } else{?>
                    <option value="1">Kích hoạt</option>
                    <option value="0" selected>Ẩn</option>
                <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
        </tr>
    </form>
    <?php
    }
    ?>
</table>