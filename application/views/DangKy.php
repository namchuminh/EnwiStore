<?php require(__DIR__.'/layouts/header.php'); ?>     
<link rel="stylesheet" href="<?php echo base_url('public/css/register.css'); ?>">
<section class="login">
    <div class="container row">
        <div class="login_form">
            <h2 class="login_title"> Đăng kí </h2>
            <?php if(isset($err)){ ?>
            	<p style="color: red; text-align: center;"><?php echo $err; ?></p>
            <?php } ?>
            <?php if(isset($success)){ ?>
            	<p style="color: blueviolet; text-align: center;"><?php echo $success; ?></p>
            <?php } ?>
            <form method="POST">
            	<div class="username">
	                <span>Tên tài khoản</span>
	                <input type="text" name="tentaikhoan" required>
	            </div>
	            <div class="email">
	                <span>Email</span>
	                <input type="text" name="email" required>
	            </div>
	            <div class="password">
	                <span> Mật khẩu</span>
	                <input type="password" name="matkhau" required>
	            </div>
	            <div>
	                <button type="submit" class="login_submit" name="login" value="Log in">Đăng kí</button>
	            </div>
            </form>
            <div class="yet">
                <p>Bạn đã có tài khoản Enwi?</p>
                <a href="<?php echo base_url('dang-nhap/'); ?>">Đăng nhập ngay</a>
            </div>
        </div>
        <div class="login_img">
            <img src="<?php echo base_url('uploads/regis.jpg') ?>">
        </div>
    </div>
</section>
<?php require(__DIR__.'/layouts/footer.php'); ?>    