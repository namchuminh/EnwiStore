<?php require(__DIR__.'/layouts/header.php'); ?>        

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Thông Tin Cá Nhân</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cá nhân</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material mx-2" method="POST" enctype="multipart/form-data">
                            <div class="form-group text-center">
                                <img src="<?php echo base_url('uploads/avatar/'.$result[0]['avatar']); ?>" alt="Avatar" style="vertical-align: middle; width: 150px; height: 150px; border-radius: 50%;" id="output">
                            </div>
                            <?php if(isset($err) && !empty($err)){ ?>
                                <p style="text-align: center; font-weight: bold;"><?php echo $err; ?></p>
                            <?php } ?>
                            <?php if(isset($success) && !empty($success)){ ?>
                                <p style="text-align: center; font-weight: bold;"><?php echo $success; ?></p>
                            <?php } ?>
                            <div class="form-group">
                                <label class="col-md-12">Tài Khoản</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nhập tài khoản" class="form-control form-control-line" required name="taikhoan" disabled value="<?php echo $result[0]['TenTK']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Họ Tên</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nhập họ tên" class="form-control form-control-line" required name="hoten" value="<?php echo $result[0]['HoTenAdmin']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Số Điện Thoại</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nhập số điện thoại" class="form-control form-control-line" required name="sodienthoai" value="<?php echo $result[0]['SDT']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Ảnh Đại Diện</label>
                                <div class="col-md-12">
                                    <input type="file" class="form-control form-control-line" name="avatar" onchange="loadFile(event)">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-12">Mật Khẩu</label>
                                <div class="col-md-12">
                                    <input type="password" placeholder="Nhập mật khẩu" class="form-control form-control-line"  name="matkhau">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success text-white" type="submit">Cập Nhật Thông Tin</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  var loadFile = function(event) {
    var output1 = document.getElementById('output1');
    output1.src = URL.createObjectURL(event.target.files[0]);
    output1.onload = function() {
      URL.revokeObjectURL(output1.src) // free memory
    }
    
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<?php require(__DIR__.'/layouts/footer.php'); ?>    