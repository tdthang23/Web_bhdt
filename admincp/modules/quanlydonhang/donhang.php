<h1 style="text-align:center">Danh sách đơn hàng</h1>
<?php
$sql_donhang = "SELECT * FROM tb_donhang JOIN tb_khachhang ON tb_donhang.id_khachhang=tb_khachhang.id_khachhang ORDER BY id_donhang ASC";
$query_donhang = mysqli_query($mysqli,$sql_donhang);
?>

<table style="width: 100%" border="1">
    <tr>
        <th>Mã đơn hàng</th>
        <th>Mã khách hàng</th>
        <th>Tên khách hàng</th>
        <th>Email</th>
        <th>SĐT</th>
        <th>Địa chỉ</th>
        <th>Tình trạng đơn hàng</th>
        <th>Chi tiết</th>
    </tr>
    <?php 
        while($row=mysqli_fetch_array($query_donhang)){?>
            <tr>
                <td><?php echo $row['id_donhang'] ?></td>
                <td><?php echo $row['id_khachhang'] ?></td>
                <td><?php echo $row['ten_khachhang'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['sdt'] ?></td>
                <td><?php echo $row['diachi'] ?></td>
                <?php if($row['status_donhang']==0){ ?>
                    <td><?php echo "đã hủy" ?></td>
                <?php }
                elseif($row['status_donhang']==1){ ?>
                    <td><?php echo "chưa thanh toán" ?></td>
                <?php }
                else{?>
                    <td><?php echo "đã thanh toán" ?></td>
                <?php } ?>
                <td><a href="?action=quanlydonhang&query=chitietdonhang&id_donhang=<?php echo $row['id_donhang'] ?>">chi tiết đơn hàng</a></td>
            </tr>
    <?php    }
    ?>
</table>