<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url('public/css/trangchu.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css')?>">
    <title>
        <?php if(isset($title)){ ?>
            Enwi Store - <?php echo $title; ?>
        <?php }else{ ?>
            Enwi Store - Cửa Hàng Kính Mắt Chất Lượng!
        <?php } ?>
    </title>
</head>

<body>
    <!------------------------ header----------------- -->
    <header class="row">
        <div class="logo">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('uploads/'); ?>logo.jpg"></a>
        </div>
        <div class="menu">
            <li><a href="cartegory.html">Gọng kính</a>
                <ul class="sub-menu">
                    <li><a href=""> Nhựa </a></li>
                    <li><a href=""> Kim loại </a></li>
                    <li><a href=""> Nhựa mix kim loại </a></li>
                </ul>
            </li>
            <li><a href="">Tròng kính</a>
                <ul class="sub-menu">
                    <li><a href=""> Chemi </a></li>
                    <li><a href=""> Essilor </a></li>
                    <li><a href=""> Mihan </a></li>
                    <li><a href=""> Hoga </a></li>
                    <li><a href=""> Kodak </a></li>
                </ul>
            </li>
            <li><a href="">Kính râm</a></li>
            <li><a href="">Phụ kiện</a>
                <ul class="sub-menu">
                    <li><a href=""> Hộp kính </a></li>
                    <li><a href=""> Túi tote </a></li>
                    <li><a href=""> Khăn Nano </a></li>
                    <li><a href=""> Dây đeo kính </a></li>
                </ul>
            </li>
            <li><a href="">Thông tin</a></li>
            <li><a href="">Đo độ cận</a></li>
        </div>
        <div class="others">
            <li> 
                <form action="<?php echo base_url('tim-kiem/'); ?>">
                    <input placeholder="Search" type="text" name="s">
                    <i class="fa fa-search"></i>
                </form>
                
            </li>
            <li>
                <a class="fa fa-user" href="<?php echo base_url('khach-hang/') ?>"></a>
            </li>
            <li>
                <a class="fa fa-shopping-bag " href="cart.html"></a>
            </li>
        </div>
    </header>