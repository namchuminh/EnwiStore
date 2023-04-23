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
            <li><a href="<?php echo base_url('chuyen-muc/L001/') ?>">Gọng kính</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo base_url('chuyen-muc/L001/nhua-cung'); ?>"> Nhựa </a></li>
                    <li><a href="<?php echo base_url('chuyen-muc/L001/kim-loai'); ?>"> Kim loại </a></li>
                    <li><a href="<?php echo base_url('chuyen-muc/L001/nhua-mix-kim-loai'); ?>"> Nhựa mix kim loại </a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url('chuyen-muc/L002/') ?>">Tròng kính</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo base_url('chuyen-muc/L002/Chemi'); ?>"> Chemi </a></li>
                    <li><a href="<?php echo base_url('chuyen-muc/L002/Essilor'); ?>"> Essilor </a></li>
                    <li><a href="<?php echo base_url('chuyen-muc/L002/Mihan'); ?>"> Mihan </a></li>
                    <li><a href="<?php echo base_url('chuyen-muc/L002/Hoga'); ?>"> Hoga </a></li>
                    <li><a href="<?php echo base_url('chuyen-muc/L002/Kodak'); ?>"> Kodak </a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url('chuyen-muc/L003/') ?>">Kính râm</a></li>
            <li><a href="<?php echo base_url('chuyen-muc/L004/') ?>">Phụ kiện</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo base_url('chuyen-muc/L004/hop-kinh'); ?>"> Hộp kính </a></li>
                    <li><a href="<?php echo base_url('chuyen-muc/L004/tui-tote'); ?>"> Túi tote </a></li>
                    <li><a href="<?php echo base_url('chuyen-muc/L004/khan-nano'); ?>"> Khăn Nano </a></li>
                    <li><a href="<?php echo base_url('chuyen-muc/L004/day-deo-kinh'); ?>"> Dây đeo kính </a></li>
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
                <a class="fa fa-user" href="<?php echo base_url('khach-hang/'); ?>"></a>
            </li>
            <li>
                <a class="fa fa-shopping-bag " href="<?php echo base_url('gio-hang/'); ?>"></a>
            </li>
        </div>
    </header>