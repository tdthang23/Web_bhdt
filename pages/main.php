<div id="main">
    <?php
        include("pages/sidebar/sidebar.php");
    ?>
    <div class="maincontent">
        <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }
            else{
                $tam = '';
            }
            if($tam=='danhmucsanpham'){
                include("main/danhmuc.php");
            }
            elseif($tam=='sanpham'){
                include("main/sanpham.php");
            }
            elseif($tam=='giohang'){
                include("main/giohang.php");
            }
            elseif($tam=='lienhe'){
                include("main/lienhe.php");
            }
            elseif($tam=='timkiem'){
                include("main/timkiem.php");
            }
            elseif($tam=='dathang'){
                include("main/dathang.php");
            }
            elseif($tam=='xacnhandonhang'){
                include("main/xacnhandonhang.php");
            }
            elseif($tam=='camon'){
                include("main/camon.php");
            }
            else{
                include("main/index.php");
            }
        ?>
    </div>
</div>
<div class="clear"></div>