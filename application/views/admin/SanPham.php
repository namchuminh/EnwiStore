<?php require(__DIR__.'/layouts/header.php'); ?>    	

<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Quản Lý Sản Phẩm</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
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
                                	Sản Phẩm
                                	<a class="btn btn-success text-white" style="float: right;" href="<?php echo base_url('admin/them-san-pham'); ?>">Thêm Sản Phẩm</a>
                            	</h4>
                                <h6 class="card-subtitle">Thông tin các sản phẩm trong cửa hàng</h6>
                                <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Danh sách sản phẩm</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tên Sản Phẩm</th>
                                                <th scope="col">Loại Sản Phẩm</th>
                                                <th scope="col">Số Lượng</th>
                                                <th scope="col">Chất Liệu</th>
                                                <th scope="col">Xuất Xứ</th>
                                                <th scope="col">Thông Số</th>
                                                <th scope="col">Giá Tiền</th>
                                                <th scope="col">Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1; ?>
                                       		<?php foreach ($result as $key => $value): ?>
                                       			<tr>
	                                                <th scope="row"><?php echo $i; ?></th>
	                                                <td><?php echo $value['TenSP']; ?></td>
	                                                <td><?php echo $value['TenLoai']; ?></td>
	                                                <td><?php echo $value['SoLuong']; ?></td>
	                                                <td><?php echo $value['ChatLieu']; ?></td>
	                                                <td><?php echo $value['XuatXu']; ?></td>
	                                                <td><?php echo $value['ThongSo']; ?></td>
	                                                <td><?php echo number_format($value['GiaTien']); ?>đ</td>
	                                                <td>
	                                                	<a href="<?php echo base_url('admin/sua-san-pham/'.$value['MaSP']); ?>" style="margin-right: 10px;"><i class="fa-solid fa-pen-to-square"></i></a>
	                                                	<a href="<?php echo base_url('admin/xoa-san-pham/'.$value['MaSP']); ?>"><i class="fa-solid fa-trash"></i></a>
	                                                </td>
	                                            </tr>
	                                        <?php $i++; ?>
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