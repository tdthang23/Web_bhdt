<!-- <?php
    // session_start();
?> -->

<h1 style="text-align: center">Giỏ hàng</h1>
<form method="POST" action="?quanly=dathang">
<table border=1px style="width: 100%; text-align:center; border-collapse: collapse">
    <tr>
        <th>Thú tự</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá sản phẩm</th>
        <th>Thành tiền</th>
        <th>Quản lý</th>
    </tr>
    <?php
    if(isset($_SESSION['cart'])){
        $i=0;
        $tongtien=0;
        foreach($_SESSION['cart'] as $cart_item){
            $i++;
            $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
            $tongtien+=$thanhtien;
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $cart_item['masp']; ?></td>
        <td><?php echo $cart_item['tensp']; ?></td>
        <td><img style="width: 100px;" src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" alt=""></td>
        <td>
            <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>
            <?php echo $cart_item['soluong']; ?>
            <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a>
        </td>
        <td><?php echo number_format($cart_item['giasp'],0,',','.') ; ?>₫</td>
        <td><?php echo number_format($thanhtien,0,',','.') ; ?>₫</td>
        <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
    </tr>
    <?php
        } ?>
        <tr>
            <td colspan="5" ><b>Thành tiền:</b></td>
            <td colspan="2"><?php echo number_format($tongtien,0,',','.') ; ?>₫</td>
            <td><a href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></td>
        </tr>

    <?php }

    else{ ?>
        <tr>
            <td colspan="8"><p>Hiện tại giỏ hàng trống!</p></td>
        </tr>
    <?php }
    ?>
</table>
<?php
if(isset($_SESSION['cart'])){
    ?>
<div style="text-align: center; margin-top:20px"><input type="submit" name="dathang" value="Đặt hàng"></div>
<?php } ?>
</form>
