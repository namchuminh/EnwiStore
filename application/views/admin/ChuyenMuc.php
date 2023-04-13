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
                                    <li class="breadcrumb-item active" aria-current="page">Chuyên Mục</li>
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
                                <h4 class="card-title">
                                	Chuyên Mục
                                	<a class="btn btn-success text-white" style="float: right;" href="<?php echo base_url('admin/them-chuyen-muc'); ?>">Thêm Chuyên Mục</a>
                            	</h4>
                                <h6 class="card-subtitle">Thông tin các chuyên mục sản phẩm trong cửa hàng</h6>
                                <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Danh sách chuyên mục</h6>
                                <div class="table-responsive">
                                    <?php if(isset($err) && !empty($err)){ ?>
                                        <p style="text-align: left; font-weight: bold;"><?php echo $err; ?></p>
                                    <?php } ?>
                                    <?php if(isset($success) && !empty($success)){ ?>
                                        <p style="text-align: center; font-weight: bold;"><?php echo $success; ?></p>
                                    <?php } ?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Mã Chuyên Mục</th>
                                                <th scope="col">Tên Chuyên Mục</th>
                                                <th scope="col">Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       		<?php foreach ($result as $key => $value): ?>
                                       			<tr>
	                                                <th scope="row"><?php echo $value['MaLoai']; ?></th>
	                                                <td><?php echo $value['TenLoai']; ?></td>
	                                                <td>
	                                                	<a href="<?php echo base_url('admin/sua-chuyen-muc/'.$value['MaLoai']); ?>" style="margin-right: 10px;"><i class="fa-solid fa-pen-to-square"></i></a>
	                                                	<a href="<?php echo base_url('admin/xoa-chuyen-muc/'.$value['MaLoai']); ?>"><i class="fa-solid fa-trash"></i></a>
	                                                </td>
	                                            </tr>
                                       		<?php endforeach ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

	
<?php require(__DIR__.'/layouts/footer.php'); ?>    