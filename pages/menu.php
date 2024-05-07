<?php
if(isset($_GET['action'])&&$_GET['action']=="dangxuatkh"){
    unset($_SESSION['dangnhapkh']);
    header("location:index.php");

}
?>
 
<div class="menu">
    <ul class="menu__list">
        <li class="menu__item"><a href="index.php" class="menu__item-link">Trang chủ</a></li>
        <!-- <li class="menu__item"><a href="index.php?quanly=danhmucsanpham&id_danhmuc=1" class="menu__item-link">Danh mục sản phẩm</a></li> -->
        <li class="menu__item"><a href="index.php?quanly=giohang" class="menu__item-link">Giỏ hàng</a></li>
        <li class="menu__item"><a href="index.php?quanly=lienhe" class="menu__item-link">Liên hệ</a></li>
        <li class="menu__item">
            <form method="POST" action="index.php?quanly=timkiem">
                <input style="border-radius: 5px" type="text" name="tukhoa" placeholder="Tìm kiếm sản phẩm...">
                <input style="border-radius: 5px" type="submit" name="timkiem" value="Tìm kiếm">

            </form>
        </li>
        <?php
        if (!isset($_SESSION['dangnhapkh'])){
        ?>
        <li class="menu__item"><a href="login.php" class="menu__item-link">Đăng nhập</a></li>
        <?php }
        else{ ?>
         <li class="menu__item"><a href="index.php?action=dangxuatkh" class="menu__item-link">Đăng xuất: <?php if(isset($_SESSION['dangnhapkh'])){
        echo $_SESSION['dangnhapkh'];
    } ?></a></li>
        <?php } ?>
    </ul>
    
</div>