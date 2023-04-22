<?php require(__DIR__.'/layouts/header.php'); ?>     
<link rel="stylesheet" href="<?php echo base_url('public/css/login.css'); ?>">
<section class="login">
    <div class="container row">
        <div class="login_form">
            <h2 class="login_title"> Đăng nhập </h2>
            <?php if(isset($err)){ ?>
            	<p style="color: red; text-align: center;"><?php echo $err; ?></p>
            <?php } ?>
            <form method="POST">
            	<div class="username">
	                <span>Tài khoản</span>
	                <input type="text" name="taikhoan" required>
	            </div>
	            <div class="password">
	                <span> Mật khẩu</span>
	                <input type="password" name="matkhau" required>
	            </div>
	            <div>
	                <button type="submit" class="login_submit" name="login" value="Log in">Đăng nhập</button>
	            </div>

	            <div class="yet">
	                <p>Bạn chưa có tài khoản Enwi?</p>
	                <a href="<?php echo base_url('dang-ky/'); ?>">Đăng kí ngay</a>
	            </div>
            </form>
            
        </div>
        <div class="login_img">
            <img src="<?php echo base_url('uploads/login.jpg'); ?>">
        </div>
    </div>
</section>
<?php require(__DIR__.'/layouts/footer.php'); ?>    