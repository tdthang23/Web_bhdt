<?php
$sql_lietke_sp = "SELECT * FROM tb_sanpham JOIN tb_danhmuc ON tb_sanpham.id_danhmuc = tb_danhmuc.id_danhmuc ORDER BY id_sanpham ASC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<h2>Danh sách sản phẩm:</h2>
<table style="width: 100%" border="1" >
    <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Danh mục</th>
        <th>Hãng sản xuất</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Hình ảnh</th>
        <th>Nội dung</th>
        <th>Trạng thái</th>
        <th>Quản lý</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_sp)){
            ?>
            <tr>
                <td><?php echo $row['masp'] ?></td>
                <td><?php echo $row['ten_sanpham']  ?></td>
                <td><?php echo $row['ten_danhmuc']  ?></td>
                <td><?php echo $row['hangsx'] ?></td>
                <td><?php echo number_format($row['gia'],0,',','.')  ?>₫</td>
                <td><?php echo $row['soluong'] ?></td>
                <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="100px"></td>
                <td><?php echo $row['noidung'] ?></td>
                <td>
                    <?php  if($row['tinhtrang']==1)
                        echo'Kích hoạt';
                    else{
                        echo'Ẩn';
                    }
                    ?>
                </td>
                <td>
                    <a href="?action=quanlysanpham&query=sua&id_sanpham=<?php echo $row['id_sanpham']?>">Sửa</a> | <a href="modules/quanlysp/xuly.php?id_sanpham=<?php echo $row['id_sanpham']?>">Xóa</a>
                </td>
            </tr>
    <?php
        }
    ?>
</table>