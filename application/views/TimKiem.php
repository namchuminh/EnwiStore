<?php require(__DIR__.'/layouts/header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('public/css/cartegory.css')?>">

<br>
<br>
<br>
<!------------------category---------------------->
<section class="cartegory">
    <div class="container">
        <div class="row">
            <div class="cartegory-left">
                <ul>
                    <li class="cartegory-left-li"><a href="">Gọng kính</a></li>
                    <li class="cartegory-left-li"><a href="">Kính râm</a></li>
                    <li class="cartegory-left-li"><a href="">Tròng kính</a></li>
                    <li class="cartegory-left-li"><a href="">Phụ kiện</a></li>
                </ul>
            </div>

            <div class="cartegory-right row">
                <div class="cartegory-right-top-item">
                    <p>Kết quả tìm kiếm sản phẩm: <?php echo $_GET['s']; ?></p>
                </div>
                <div class="cartegory-right-content row">
                    <?php foreach ($result as $key => $value): ?>
                        <div class="cartegory-right-content-item">
                            <a href="<?php echo base_url('san-pham/'.$value['MaSP']); ?>">
                                <img src="<?php echo base_url('uploads/'.$value['TenAnh']); ?>" alt="">
                            </a>
                            <br>
                            <br>
                            <h1><a style="color: black;" href="<?php echo base_url('san-pham/'.$value['MaSP']); ?>"><?php echo $value['TenSP']; ?></a></h1>
                            <p><?php echo number_format($value['GiaTien']); ?><sup>đ</sup></p>
                            <div class="colors">
                                <div class="c-blue"><span></span></div>
                                <div class="c-red"><span></span></div>
                                <div class="c-white"><span></span></div>
                                <div class="c-green"><span></span></div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>

</section>

<?php require(__DIR__.'/layouts/footer.php'); ?>    