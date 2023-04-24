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
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Sản phẩm</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sửa sản phẩm</li>
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
                                        <label class="col-md-12">Mã sản phẩm</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập mã sản phẩm" class="form-control form-control-line" required name="masanpham" value="<?php echo $sanpham[0]['MaSP']; ?>" disabled> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tên sản phẩm</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập tên sản phẩm" class="form-control form-control-line" required name="tensanpham" value="<?php echo $sanpham[0]['TenSP']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Giá tiền</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập giá bán" class="form-control form-control-line" required name="giatien" value="<?php echo $sanpham[0]['GiaTien']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Số lượng</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập số lượng" class="form-control form-control-line" required name="soluong" value="<?php echo $sanpham[0]['SoLuong']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Thương hiệu</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập thương hiệu" class="form-control form-control-line" required name="thuonghieu" value="<?php echo $sanpham[0]['ThuongHieu']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Loại sản phẩm</label>
                                        <div class="col-sm-12">
                                            <select class="form-select shadow-none form-control-line" required name="maloai">
                                                <?php foreach ($loaisanpham as $key => $value): ?>
                                                    <?php if($value["MaLoai"] == $sanpham[0]['MaLoai']){ ?>
                                                        <option value="<?php echo $value['MaLoai']; ?>" selected><?php echo $value['TenLoai']; ?></option>
                                                    <?php }else{ ?>
                                                        <option value="<?php echo $value['MaLoai']; ?>"><?php echo $value['TenLoai']; ?></option>
                                                    <?php } ?>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Chất liệu</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập chất liệu" class="form-control form-control-line" required name="chatlieu" value="<?php echo $sanpham[0]['ChatLieu']; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Xuất xứ</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập xuất xứ" class="form-control form-control-line" required name="xuatxu" value="<?php echo $sanpham[0]['XuatXu']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Thông số</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập thông số" class="form-control form-control-line" required name="thongso" value="<?php echo $sanpham[0]['ThongSo']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Màu sắc</label>
                                        <div class="col-md-12">
                                            <input type="checkbox" id="vehicle1" name="white" value="White">
                                            <label for="vehicle1" style="margin-right: 15px;"> Trắng</label>
                                            <input type="checkbox" id="vehicle2" name="pink" value="Pink">
                                            <label for="vehicle2" style="margin-right: 15px;"> Hồng</label>
                                            <input type="checkbox" id="vehicle3" name="black" value="Black">
                                            <label for="vehicle3" style="margin-right: 15px;"> Đen</label>
                                            <input type="checkbox" id="vehicle3" name="gray" value="Gray">
                                            <label for="vehicle3" style="margin-right: 15px;"> Xám</label>
                                            <input type="checkbox" id="vehicle3" name="blue" value="Blue">
                                            <label for="vehicle3" style="margin-right: 15px;"> Xanh</label>
                                            <input type="checkbox" id="vehicle3" name="whitesmoke" value="Whitesmoke">
                                            <label for="vehicle3" style="margin-right: 15px;"> Khói trắng</label>
                                        </div>
                                    </div>
                                    <?php if(isset($anh[0]['TenAnh'])){ ?>
                                        <div class="form-group">
                                            <label class="col-md-12">Ảnh chính</label>
                                            <div class="col-md-12">
                                                <input type="file" class="form-control form-control-line" name="anhchinh" value="<?php echo $anh[0]['MaAnh']; ?>">
                                            </div>
                                            <br>
                                            <img src="<?php echo base_url('uploads/'.$anh[0]['TenAnh']); ?>" alt="" style="width: 200px; height: 200px;">
                                        </div>
                                    <?php } ?>
                                    <?php if(isset($anh[1]['TenAnh'])){ ?>
                                        <div class="form-group">
                                            <label class="col-md-12">Ảnh phụ 1</label>
                                            <div class="col-md-12">
                                                <input type="file" class="form-control form-control-line" name="anhphu1" value="<?php echo $anh[1]['MaAnh']; ?>">
                                            </div>
                                            <br>
                                            <img src="<?php echo base_url('uploads/'.$anh[1]['TenAnh']); ?>" alt="" style="width: 200px; height: 200px;">
                                        </div>
                                    <?php } ?>
                                    <?php if(isset($anh[2]['TenAnh'])){ ?>
                                        <div class="form-group">
                                            <label class="col-md-12">Ảnh phụ 2</label>
                                            <div class="col-md-12">
                                                <input type="file" class="form-control form-control-line" name="anhphu2" value="<?php echo $anh[2]['MaAnh']; ?>">
                                            </div>
                                            <br>
                                            <img src="<?php echo base_url('uploads/'.$anh[2]['TenAnh']); ?>" alt="" style="width: 200px; height: 200px;">
                                        </div>
                                    <?php } ?>
                                    <?php if(isset($anh[3]['TenAnh'])){ ?>
                                        <div class="form-group">
                                            <label class="col-md-12">Ảnh phụ 3</label>
                                            <div class="col-md-12">
                                                <input type="file" class="form-control form-control-line" name="anhphu3" value="<?php echo $anh[3]['MaAnh']; ?>">
                                            </div>
                                            <br>
                                            <img src="<?php echo base_url('uploads/'.$anh[3]['TenAnh']); ?>" alt="" style="width: 200px; height: 200px;">
                                        </div>
                                    <?php } ?>
                                    <?php if(isset($anh[4]['TenAnh'])){ ?>
                                        <div class="form-group">
                                            <label class="col-md-12">Ảnh phụ 4</label>
                                            <div class="col-md-12">
                                                <input type="file" class="form-control form-control-line" name="anhphu4" value="<?php echo $anh[4]['MaAnh']; ?>">
                                            </div>
                                            <br>
                                            <img src="<?php echo base_url('uploads/'.$anh[4]['TenAnh']); ?>" alt="" style="width: 200px; height: 200px;">
                                        </div>
                                    <?php } ?>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" type="submit">Sửa Sản Phẩm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php require(__DIR__.'/layouts/footer.php'); ?>    