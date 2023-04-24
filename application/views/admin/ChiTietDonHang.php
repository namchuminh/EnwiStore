<?php require(__DIR__.'/layouts/header.php'); ?>    	

<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Quản Lý Chi Tiết Đơn Hàng</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item"><a href="#">Đơn hàng</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng</li>
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
                                	Đơn Hàng Có Mã: <?php echo $MaDH; ?>
                            	</h4>
                                <h6 class="card-subtitle">Các sản phẩm có trong đơn hàng <?php echo $MaDH; ?></h6>
                                <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Danh sách sản phẩm trong đơn hàng</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Ảnh</th>
                                                <th scope="col">Tên Sản Phẩm</th>
                                                <th scope="col">Giá Bán</th>
                                                <th scope="col">Số Lượng</th>
                                                <th scope="col">Phí Giao</th>
                                                <th scope="col">Thành Tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sum = 0; ?>
                                       		<?php foreach ($result as $key => $value): ?>
                                       			<tr>
	                                                <th scope="row"><?php echo $key + 1; ?></th>
                                                    <th>
                                                        <img src="<?php echo base_url('uploads/'.$value['TenAnh']); ?>" alt="" style="width: 100px;
                                                        height: 100px;">
                                                    </th>
	                                                <td><?php echo $value['TenSP']; ?></td>
                                                    <td><?php echo number_format($value['GiaTien']); ?>đ</td>
	                                                <td>x<?php echo $value['SoLuong']; ?></td>
	                                                <td><?php echo number_format($value['PhiShip']); ?>đ</td>
                                                    <td>
                                                        <?php 
                                                            $sum += ($value['GiaTien'] * $value['SoLuong']);
                                                            echo number_format(($value['GiaTien'] * $value['SoLuong'])); 
                                                        ?>đ
                                                    </td>
	                                            </tr>
                                       		<?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <div style="width: 100%;">
                                        <p style="float: right;">Tổng Tiền: <?php echo number_format($sum + $result[0]['PhiShip']); ?>đ</p>

                                    </div>
                                    <a class="btn btn-default text-white" href="<?php echo base_url('/'.$back); ?>">Quay Lại</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

	
<?php require(__DIR__.'/layouts/footer.php'); ?>    