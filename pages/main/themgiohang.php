<?php
    session_start();
    include('../../admincp/config/config.php');
    //them san pham
    if(isset($_POST['themgiohang'])){
        $id = $_GET['id_sanpham'];
        $soluong = 1;
        $sql = "SELECT * FROM tb_sanpham WHERE id_sanpham = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new_product = array(array('tensp'=>$row['ten_sanpham'],'id'=>$row['id_sanpham'],'soluong'=>$soluong, 'giasp'=>$row['gia'],'hinhanh'=>$row['hinhanh'],'masp'=>$row['masp']));
            //kiem tra ton tai gio hang
            if(isset($_SESSION['cart'])){
                // session_destroy();
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    if($cart_item['id']==$id){
                        $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong']+1, 'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                        $found = true;
                    }
                    else{
                        $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);

                    }
                }
                if($found==false){
                    $_SESSION['cart'] = array_merge($product,$new_product);
                }
                else{
                    $_SESSION['cart'] = $product;
                }
            }
            else{
                $_SESSION['cart'] = $new_product;
            }   
        }
        header('Location:../../index.php?quanly=giohang');
    }

    //Xoa tat ca
    if (isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
        unset($_SESSION['cart']);
        header('location: ../../index.php?quanly=giohang');
    }
    //them so luong
    if(isset($_GET['cong'])){
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$_GET['cong']){
                $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
            }
            else{
                if($cart_item['soluong']<10){
                    $tangsoluong = $cart_item['soluong']+1;
                    $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong, 'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }
                else{
                    $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);

                }
            }
        }
        $_SESSION['cart'] = $product;
        header('location: ../../index.php?quanly=giohang');

    }
    //tru so luong
    if(isset($_GET['tru'])){
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$_GET['tru']){
                $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
            }
            else{
                if($cart_item['soluong']>1){
                    $giamsoluong = $cart_item['soluong']-1;
                    $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$giamsoluong, 'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }
                else{
                    $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);

                }
            }
        }
        $_SESSION['cart'] = $product;
        header('location: ../../index.php?quanly=giohang');

    }
    //xoa sanpham
    if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$_GET['xoa']){
                $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
            }
        }
        $_SESSION['cart'] = $product;
        header('location: ../../index.php?quanly=giohang');

    }

?>