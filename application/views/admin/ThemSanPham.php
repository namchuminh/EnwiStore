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
                                    <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
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
                                            <input type="text" placeholder="Nhập mã sản phẩm" class="form-control form-control-line" required name="masanpham"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tên sản phẩm</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập tên sản phẩm" class="form-control form-control-line" required name="tensanpham">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Giá tiền</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập giá bán" class="form-control form-control-line" required name="giatien">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Số lượng</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập số lượng" class="form-control form-control-line" required name="soluong">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Thương hiệu</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập thương hiệu" class="form-control form-control-line" required name="thuonghieu">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Loại sản phẩm</label>
                                        <div class="col-sm-12">
                                            <select class="form-select shadow-none form-control-line" required name="maloai">
                                                <?php foreach ($result as $key => $value): ?>
                                                    <option value="<?php echo $value['MaLoai']; ?>"><?php echo $value['TenLoai']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Chất liệu</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập chất liệu" class="form-control form-control-line" required name="chatlieu" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Xuất xứ</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập xuất xứ" class="form-control form-control-line" required name="xuatxu" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Thông số</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập thông số" class="form-control form-control-line" required name="thongso" >
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
                                    <div class="form-group">
                                        <label class="col-md-12">Ảnh chính</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control form-control-line" required name="anhchinh">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Ảnh phụ 1</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control form-control-line"  required name="anhphu1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Ảnh phụ 2</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control form-control-line" required name="anhphu2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Ảnh phụ 3</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control form-control-line" required name="anhphu3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Ảnh phụ 4</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control form-control-line" required name="anhphu4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" type="submit">Thêm Sản Phẩm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php require(__DIR__.'/layouts/footer.php'); ?>    