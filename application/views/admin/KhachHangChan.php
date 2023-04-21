<?php require(__DIR__.'/layouts/header.php'); ?>    	

<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Quản Lý Khách Hàng Đã Chặn</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item"><a href="#">Khách hàng</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Khách hàng đã chặn</li>
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
                                	Khách Hàng
                                    <a class="btn btn-default text-white" style="float: right;" href="<?php echo base_url('admin/khach-hang/'); ?>"> Quay Lại</a>
                            	</h4>
                                <h6 class="card-subtitle">Thông tin khách hàng đã đbị chặn khỏi hệ thống</h6>
                                <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Danh sách khách hàng bị chặn</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tên Khách Hàng</th>
                                                <th scope="col">Ngày Sinh</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Số Điện Thoại</th>
                                                <th scope="col">Địa Chỉ</th>
                                                <th scope="col">Tài Khoản</th>
                                                <th scope="col">Trạng Thái</th>
                                                <th scope="col">Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       		<?php foreach ($result as $key => $value): ?>
                                       			<tr>
	                                                <th scope="row"><?php echo $key + 1; ?></th>
	                                                <td><?php echo $value['TenKH']; ?></td>
	                                                <td><?php echo $value['NgaySinh']; ?></td>
	                                                <td><?php echo $value['Email']; ?></td>
	                                                <td><?php echo $value['SDT']; ?></td>
	                                                <td><?php echo $value['DiaChi']; ?></td>
	                                                <td><?php echo $value['TenTK']; ?></td>
	                                                <td>
                                                        <?php 
                                                            if($value['TrangThai'] == 0){
                                                                echo "Bị chặn"; 
                                                            }else{
                                                                echo "Hoạt động"; 
                                                            }
                                                        ?>
                                                    </td>
	                                                <td>
	                                                	<a class="btn btn-secondary text-white" href="<?php echo base_url('admin/xu-ly-khach-hang/'.$value['MaKH'].'/1'); ?>"><i class="fa-solid fa-rotate-left"></i> Bỏ Chặn</a>
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