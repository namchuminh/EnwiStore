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
                    <li class="cartegory-left-li"><a href="<?php echo base_url('chuyen-muc/L001/') ?>">Gọng kính</a></li>
                    <li class="cartegory-left-li"><a href="<?php echo base_url('chuyen-muc/L002/') ?>">Kính râm</a></li>
                    <li class="cartegory-left-li"><a href="<?php echo base_url('chuyen-muc/L003/') ?>">Tròng kính</a></li>
                    <li class="cartegory-left-li"><a href="<?php echo base_url('chuyen-muc/L004/') ?>">Phụ kiện</a></li>
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
                <div class="pagination" style="margin-top: 30px; margin-bottom: 30px;">
                    <?php if(isset($_GET['trang']) && $_GET['trang'] == 2){ ?>
                        <a href="<?php echo base_url('tim-kiem/?'); ?>s=<?php echo $TenSP; ?>">«</a>
                    <?php }else if(isset($_GET['trang'])){ ?>
                        <a href="<?php echo base_url('tim-kiem/'); ?>?s=<?php echo $TenSP; ?>&trang=<?php echo $_GET['trang'] - 1; ?>">«</a>
                    <?php }else{ ?>
                        <a href="#">«</a>
                    <?php } ?>


                    <?php for ($i = 1; $i <= $page ; $i++) { ?>
                        <?php if(!isset($_GET['trang']) && $i == 1){ ?>
                            <a class="active" href="<?php echo base_url('tim-kiem/?'); ?>s=<?php echo $TenSP; ?>"><?php echo $i; ?></a>
                        <?php }else if(isset($_GET['trang']) && $i == $_GET['trang']){ ?>
                            <a class="active" href="<?php echo base_url('tim-kiem/?'); ?>s=<?php echo $TenSP; ?>&trang=<?php echo $i; ?>"><?php echo $i; ?></a>
                        <?php }else{ ?>
                            <a href="<?php echo base_url('tim-kiem/?'); ?>s=<?php echo $TenSP; ?>&trang=<?php echo $i; ?>"><?php echo $i; ?></a>
                        <?php } ?>
                    <?php } ?>
                    
                    <?php if(!isset($_GET['trang']) && $page >= 2){ ?>
                        <a href="<?php echo base_url('tim-kiem/?'); ?>s=<?php echo $TenSP; ?>&trang=2">»</a>
                    <?php }else if(isset($_GET['trang']) && $page >= 2 && $page != $_GET['trang']){ ?>
                        <a href="<?php echo base_url('tim-kiem/?'); ?>s=<?php echo $TenSP; ?>&trang=<?php echo $_GET['trang'] + 1; ?>">»</a>
                    <?php }else{ ?>
                        <a href="#">»</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</section>

<?php require(__DIR__.'/layouts/footer.php'); ?>    