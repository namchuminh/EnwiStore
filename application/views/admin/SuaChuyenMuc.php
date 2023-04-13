<?php require(__DIR__.'/layouts/header.php'); ?>        
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Quản Lý Chuyên Mục</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Chuyên Mục</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Thêm chuyên mục</li>
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
                                <?php if(isset($err) && !empty($err)){ ?>
                                    <p style="text-align: center; font-weight: bold;"><?php echo $err; ?></p>
                                <?php } ?>
                                <?php if(isset($success) && !empty($success)){ ?>
                                    <p style="text-align: center; font-weight: bold;"><?php echo $success; ?></p>
                                <?php } ?>
                                <form class="form-horizontal form-material mx-2" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Mã chuyên mục</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập mã chuyên mục" class="form-control form-control-line" required name="maloai" value="<?php echo $result[0]['MaLoai']; ?>" disabled> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tên chuyên mục</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập tên chuyên mục" class="form-control form-control-line" required name="tenloai" value="<?php echo $result[0]['TenLoai']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" type="submit">Thêm Chuyên Mục</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php require(__DIR__.'/layouts/footer.php'); ?>    