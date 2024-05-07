<h1 style="text-align: center">Thêm sản phẩm</h1>

<table>
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
            <th>Mã sản phẩm: </th>
            <td><input type="text" name="masp"></td>
        </tr>
        <tr>
            <th>Tên sản phẩm: </th>
            <td><input type="text" name="tensp"></td>
        </tr>
        <tr>
            <th>Danh mục: </th>
            <td>
                <select name="danhmuc">
                    <?php
                    $sql_danhmuc = "SELECT * FROM tb_danhmuc ORDER BY id_danhmuc";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_danhmuc'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <th>Hãng sản xuất: </th>
            <td><input type="text" name="hangsx"></td>
        </tr>
        <tr>
            <th>Giá: </th>
            <td><input type="text" name="giasp"></td>
        </tr>
        <tr>
            <th>Số lượng: </th>
            <td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <th>Hình ảnh: </th>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <th>Nội dung: </th>
            <td><textarea name="noidung" cols="30" rows="5" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <th>Tình trạng: </th>
            <td>
                <select name="tinhtrang">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
    </form>
</table>