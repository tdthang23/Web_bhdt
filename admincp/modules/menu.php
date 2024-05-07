<?php
if(isset($_GET['action'])&&$_GET['action']=="dangxuat"){
    unset($_SESSION['dangnhap']);
    header("location:login.php");
}
?>



<ul class="admincp_menu__list">
    <li class="admincp_menu__item"><a href="index.php?action=quanlydanhmucsanpham&query=them" class="admincp_menu__item-link">Quản lý danh mục sản phẩm</a></li>
    <li class="admincp_menu__item"><a href="index.php?action=quanlysanpham&query=them" class="admincp_menu__item-link">Quản lý sản phẩm</a></li>
    <li class="admincp_menu__item"><a href="index.php?action=quanlydonhang&query=donhang" class="admincp_menu__item-link">Quản lý đơn hàng</a></li>
    <li class="admincp_menu__item"><a href="index.php?action=dangxuat" class="admincp_menu__item-link" style="text-decoration:underline;margin-left: 400px">Đăng xuất: <?php if(isset($_SESSION['dangnhap'])){
        echo $_SESSION['dangnhap'];
    } ?></a></li>

</ul>