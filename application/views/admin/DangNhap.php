<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('public/admin/'); ?>dist/css/login.css">
    <title>Đăng Nhập - Admin Quản Trị</title>
</head>
<body>
<div class="container">
    <h2 class="login-title">Đăng Nhập</h2>

    <form class="login-form" method="POST">
      <div>
        <label for="name">Tài Khoản </label>
        <input
               id="name"
               type="text"
               placeholder="Nhập tài khoản..."
               name="taiKhoan"
               required
               />
      </div>

      <div>
        <label for="password">Mật Khẩu </label>
        <input
               id="password"
               type="password"
               placeholder="Nhập mật khẩu..."
               name="matKhau"
               required
               />
      </div>

      <button class="btn btn--form" type="submit" value="Log in">
        Đăng Nhập
      </button>
        <?php if(isset($err) && !empty($err)){ ?>
            <p style="color: red;" ><strong>Lỗi!</strong> <?php echo $err; ?> </p>
        <?php } ?>
    </form>
</div>
</body>
</html>