<?php require(__DIR__.'/layouts/header.php'); ?>    	

<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Quản Lý Đơn Hàng</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Đơn hàng</li>
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
                                	Đơn Hàng
                                	<a class="btn btn-secondary text-white" style="float: right;" href="<?php echo base_url('admin/don-hang-huy/'); ?>"><i class="fa-solid fa-trash"></i> Đơn Đã Hủy</a>
                            	</h4>
                                <h6 class="card-subtitle">Thông tin các đơn hàng trong cửa hàng</h6>
                                <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Danh sách đơn hàng</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Mã Đơn Hàng</th>
                                                <th scope="col">Tên Khách Hàng</th>
                                                <th scope="col">Số Điện Thoại</th>
                                                <th scope="col">Địa Chỉ</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Thanh Toán</th>
                                                <th scope="col">Thời Gian</th>
                                                <th scope="col">Tình Trạng</th>
                                                <th scope="col">Tổng Tiền</th>
                                                <th scope="col">Ghi Chú</th>
                                                <th scope="col">Hành Động</th>
                                                <th scope="col">Hủy Đơn</th>
                                                <th scope="col">Xem Đơn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       		<?php foreach ($result as $key => $value): ?>
                                       			<tr>
	                                                <th scope="row"><?php echo $value['MaDH']; ?></th>
	                                                <td><?php echo $value['HoTenKH']; ?></td>
	                                                <td><?php echo $value['SDT']; ?></td>
	                                                <td><?php echo $value['DiaChiNhanHang']; ?></td>
	                                                <td><?php echo $value['Email']; ?></td>
	                                                <td>
                                                        <?php 
                                                            if($value['PTTT'] == 1){
                                                                echo "Chuyển khoản ngân hàng"; 
                                                            }else{
                                                                echo "Thanh toán khi nhận hàng";
                                                            }
                                                        ?>
                                                    </td>
	                                                <td><?php echo $value['ThoiGian']; ?></td>
                                                    <td>
                                                        <?php 
                                                            if($value['TinhTrangDH'] == 0){
                                                                echo "Chưa duyệt đơn";
                                                            }else if($value['TinhTrangDH'] == 1){
                                                                echo "Đang giao hàng";
                                                            }else if($value['TinhTrangDH'] == 2){
                                                                echo "Đã hủy đơn";
                                                            }else if($value['TinhTrangDH'] == 3){
                                                                echo "Khách đã nhận";
                                                            }
                                                        ?>
                                                    </td>
	                                                <td><?php echo number_format($value['TongTien']); ?>đ</td>
                                                    <td><?php echo $value['GhiChu']; ?></td>
                                                    <td>
                                                        <?php if($value['TinhTrangDH'] == 0){ ?>
                                                                <a class="btn btn-success text-white" href="<?php echo base_url('admin/xu-ly-don/'.$value['MaDH'].'/1'); ?>">Xác Nhận</a>
                                                        <?php }else if($value['TinhTrangDH'] == 1){ ?>
                                                            <a class="btn btn-warning text-white" href="<?php echo base_url('admin/xu-ly-don/'.$value['MaDH'].'/3'); ?>">Đã Giao</a>
                                                        <?php }else{ ?>
                                                            <?php echo 'Không được phép'; ?>
                                                        <?php } ?>
                                                    </td>
	                                                <td>
	                                                	<?php if($value['TinhTrangDH'] != 3 && $value['TinhTrangDH'] != 2){ ?>
                                                            <a class="btn btn-danger text-white" href="<?php echo base_url('admin/xu-ly-don/'.$value['MaDH'].'/2'); ?>">Hủy Đơn</a>
                                                        <?php }else{ ?>
                                                            <?php echo 'Không được phép'; ?>
                                                        <?php } ?>
	                                                </td>
                                                    <td>
                                                        <a class="btn btn-default text-white" href="<?php echo base_url('admin/don-hang/'.$value['MaDH']); ?>">Xem</a>
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