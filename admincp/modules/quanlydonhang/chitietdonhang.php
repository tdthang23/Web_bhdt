<h1 style="text-align:center">Chi tiết đơn hàng</h1>

<?php
$sql_ctdonhang = "SELECT * FROM tb_chitietdonhang JOIN tb_donhang ON tb_chitietdonhang.id_donhang=tb_donhang.id_donhang JOIN tb_sanpham ON tb_chitietdonhang.id_sanpham = tb_sanpham.id_sanpham  WHERE tb_donhang.id_donhang='$_GET[id_donhang]' ORDER BY id_chitietdonhang ASC";
$query_ctdonhang = mysqli_query($mysqli,$sql_ctdonhang);
$sql_donhang = "SELECT * FROM tb_donhang JOIN tb_khachhang ON tb_donhang.id_khachhang=tb_khachhang.id_khachhang WHERE tb_donhang.id_donhang='$_GET[id_donhang]' LIMIT 1 ";
$query_donhang = mysqli_query($mysqli,$sql_donhang);
$row = mysqli_fetch_array($query_donhang);
$i=0;
$tongien=0;
?>

<b>Mã đơn hàng:</b> <?php echo $row['id_donhang'] ?> <br>
<b>Mã khách hàng:</b> <?php echo $row['id_khachhang'] ?><br>
<b>Tên khách hàng:</b> <?php echo $row['ten_khachhang'] ?><br>
<b>Email:</b> <?php echo $row['email'] ?><br>
<b>Số điện thoại:</b> <?php echo $row['sdt'] ?><br>
<b>Địa chỉ:</b> <?php echo $row['diachi'] ?><br>
<b>Tình trạng đơn hàng:</b> <form action="" method="POST">
<?php if($row['status_donhang']==0){ ?>
                    <select name="tinhtrangdonhang">
                        <option value="0" selected>Đã hủy</option>
                        <option value="1">Chưa thanh toán</option>
                        <option value="2">Đã thanh toán</option>
                    </select><br>
                <?php }
                elseif($row['status_donhang']==1){ ?>
                    <select name="tinhtrangdonhang">
                        <option value="0">Đã hủy</option>
                        <option value="1" selected>Chưa thanh toán</option>
                        <option value="2">Đã thanh toán</option>
                    </select><br>
                <?php }
                else{?>
                    <select name="tinhtrangdonhang">
                        <option value="0">Đã hủy</option>
                        <option value="1">Chưa thanh toán</option>
                        <option value="2" selected>Đã thanh toán</option>
                    </select><br>
                <?php } ?>
                <input type="submit" name="thaydoittdh" value = "Thay đổi">
</form> 
<?php 
if(isset($_POST['thaydoittdh'])){
    $tinhtrangdonhang=$_POST['tinhtrangdonhang'];
    $sql_thaydoittdh = "UPDATE tb_donhang SET status_donhang = '".$tinhtrangdonhang."' WHERE id_donhang='$_GET[id_donhang]' ";
    $query_thaydoittdh = mysqli_query($mysqli,$sql_thaydoittdh);
    header("location: ?action=quanlydonhang&query=chitietdonhang&id_donhang=$_GET[id_donhang]");
}
?>
<h3>Danh sách sản phẩm:</h3>
<table style="width: 100%" border="1">
    <tr>
        <th>STT</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
    </tr>
    <?php while($row_sp = mysqli_fetch_array($query_ctdonhang)){ 
        $i++;
        $thanhtien=$row_sp['gia']*$row_sp['soluong_mua'];
        $tongien+=$thanhtien;
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row_sp['masp']; ?></td>
            <td><?php echo $row_sp['ten_sanpham']; ?></td>
            <td><?php echo $row_sp['soluong_mua']; ?></td>
            <td><?php echo number_format($row_sp['gia'],0,",","."); ?>₫</td>
            <td><?php echo number_format($thanhtien,0,",","."); ?>₫</td>
        </tr>
    <?php } ?>
    <tr>
        <th colspan="5">Tổng tiền phải thanh toán: </th>
        <td><?php echo number_format($tongien,0,",",".") ?>₫</td>
    </tr>
</table>
<div style="text-align:center; margin:10px 10px;"><a href="?action=quanlydonhang&query=donhang">Quay về</a></div>
