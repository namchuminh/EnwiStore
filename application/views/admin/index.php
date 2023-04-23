<?php require(__DIR__.'/layouts/header.php'); ?>    
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Thống Kê</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Thống kê</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-7">
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Thống Kê</h4>
                                        <h5 class="card-subtitle">Tổng quan doanh thu</h5>
                                    </div>
                                    <div class="ms-auto d-flex no-block align-items-center">
                                        <ul class="list-inline font-12 dl m-r-15 m-b-0">
                                            <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Doanh thu
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-12">
                                        <div class="campaign ct-charts"><div class="chartist-tooltip" style="top: 200.625px; left: -1px;"></div></div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Thông Báo</h4>
                                <div class="feed-widget">
                                    <ul class="list-style-none feed-body m-0 p-b-20">
                                        <li class="feed-item">
                                            <div class="feed-icon bg-info"><i class="far fa-bell"></i></div> Hôm nay có <?php echo $soDon; ?> đơn hàng mới! <span class="ms-auto font-12 text-muted"></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-success"><i class="ti-server"></i></div> Doanh thu hôm nay là: <?php echo number_format($doanhThuNgay); ?>đ<span class="ms-auto font-12 text-muted"></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-warning"><i class="ti-shopping-cart"></i></div> Bạn có <?php echo $chuaXuLy; ?> đơn hàng chưa xử lý!<span class="ms-auto font-12 text-muted"></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-danger"><i class="ti-user"></i></div> Hôm nay có <?php echo $khachHangNgay; ?> khách hàng mới!<span class="ms-auto font-12 text-muted"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">Top Sản Phẩm Bán Chạy</h4>
                                        <h5 class="card-subtitle">Thông tin sản phẩm bán chạy trong cửa hàng!</h5>
                                    </div>
                                    <div class="ms-auto">
                                        
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Tên Sản Phẩm</th>
                                            <th class="border-top-0">Giá Tiền</th>
                                            <th class="border-top-0">Thương Hiệu</th>
                                            <th class="border-top-0">Xuất Xứ</th>
                                            <th class="border-top-0">Số Lượng Bán</th>
                                            <th class="border-top-0">Doanh Thu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($banChay as $key => $value): ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10" style="font-weight: bold; font-size: 16px;">
                                                            <?php echo $key; ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a style="font-weight: bold; font-size: 16px" href="<?php echo base_url('san-pham/'.$value['MaSP']); ?>"><?php echo $value['TenSP']; ?></a>
                                                </td>
                                                <td><?php echo number_format($value['GiaTien']); ?>đ</td>
                                                <td>
                                                    <label class="label label-danger"><?php echo $value['ThuongHieu']; ?></label>
                                                </td>
                                                <td><?php echo $value['XuatXu']; ?></td>
                                                <td><?php echo $value['sl']; ?> sản phẩm</td>
                                                <td>
                                                    <h5 class="m-b-0"><?php echo number_format($value['sl'] * $value['GiaTien']) ?>đ</h5>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>

        </div>
<?php require(__DIR__.'/layouts/footer.php'); ?>    