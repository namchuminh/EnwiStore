<?php require(__DIR__.'/layouts/header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('public/css/cartegory.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('public/css/pay.css') ?>">
<section calss="papal">
    <div class="container">
    	<form action="<?php echo base_url('xu-ly-thanh-toan/'); ?>" method="POST">
	        <div class="infor-pay row">
	            <div class="infor-pay-left">
	                <div class="infor-customer-title">
	                    <p>THÔNG TIN KHÁCH HÀNG</p>
	                </div>
	                <div class="infor-customer-form ">
	                    <div class="customer-name">
	                        <label>Họ và tên: </label>
	                        <input type="text" required="" value="<?php echo $result[0]['TenKH']; ?>" required name="ht">
	                    </div>
	                    <div class="customer-phone">
	                        <label>Số điện thoại: </label>
	                        <input class="sdt" type="text" value="<?php echo $result[0]['SDT']; ?>" required name="sdt">
	                    </div>
	                    <div class="customer-email ">
	                        <label>Email: </label>
	                        <input type="email" value="<?php echo $result[0]['Email']; ?>" required name="email">
	                    </div>
	                    <div class="customer-city ">
	                        <label>Tỉnh/Thành phố: </label>
	                        <select name="tp">
		                        <option value="Hà Nội" selected>Hà Nội</option>
		                        <option value="Hồ Chí Minh">Hồ Chí Minh </option>
		                        <option value="Đà Nẵng">Đà Nẵng</option>
		                    </select>
	                    </div>
	                    <div class="customer-district ">
	                        <label>Quận/Huyện: </label>
	                        <input type="text" required name="q">
	                    </div>
	                    <div class="customer-commune ">
	                        <label>Phường/Xã: </label>
	                        <input type="text" required name="x">
	                    </div>
	                    <div class="customer-address ">
	                        <label>Địa chỉ: </label>
	                        <input type="text" required name="dc" value="<?php echo $result[0]['DiaChi']; ?>">
	                    </div>
	                    <div class="customer-note">
	                        <label>Ghi chú: </label>
	                        <textarea name="gc"></textarea>
	                    </div>
	                </div>
	            </div>
	            <div class="infor-pay-right ">
	                <div class="item-info">
	                    <p class="title">Phương thức thanh toán</p>
	                    <div class="content">
	                        <div class="item">
	                        	<label class="radio-cm-round">
	                        	<input type="radio" name="pttt" id="id_payment_method_11" class="id_payment_method" value="0" checked="">
	                        	<span class="checkmark"></span> Thanh toán trực tiếp khi nhận hàng</label>
	                        </div>
	                        <div class="item">
	                        	<label class="radio-cm-round">
	                        	<input type="radio" name="pttt" id="id_payment_method_13" class="id_payment_method_13" value="1">
	                        	<span class="checkmark"></span> Thanh toán bằng thẻ ATM nội địa / Internet Bangking</label>
	                        </div>
	                        <div class="item">
	                        	<label class="radio-cm-round">
	                        	<input type="radio" name="pttt" id="id_payment_method_14" class="id_payment_method_14" value="1">
	                        	<span class="checkmark"></span> Thanh toán bằng thẻ quốc tế Visa/ Master/ JCP</label>
	                        </div>
	                    </div>
	                </div>
	                <div class="payment-sum item-info">
	                    <div class="title">Đơn hàng</div>
	                    <div class="content">
	                        <div class="main-content">
	                            <div class="list-product">
	                                <div class="sum-title">1 sản phẩm</div>
	                                <div class="item-product">
	                                    <div class="row">
	                                        <div class="col-xl-4 col-lg-4 col-md-4 col-4">
	                                            <p class="name"><a style="color: black; text-decoration: none;" href="<?php echo base_url('san-pham/'.$product[0]['MaSP']); ?>"><?php echo $product[0]['TenSP']; ?></a></p>
	                                        </div>
	                                        <div class="col-xl-2 col-lg-2 col-md-2 col-2">
	                                            <p class="quantity">x<?php echo $sl; ?></p>
	                                        </div>
	                                        <div class="col-xl-2 col-lg-2 col-md-2 col-2">
	                                            <p class="quantity"><?php echo $mau; ?></p>
	                                        </div>
	                                        <div class="col-xl-4 col-lg-4 col-md-4 col-4 text-right">
	                                            <p class="price"><?php echo number_format($product[0]['GiaTien']); ?>đ</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="item">
	                                <div class="row">
	                                    <div class="col-xl-6 col-lg-6 col-md-6 col-6">Đơn hàng</div>
	                                    <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-right"><?php echo number_format($product[0]['GiaTien'] * $sl); ?>đ</div>
	                                </div>
	                            </div>

	                            <div class="item none-border">
	                                <div class="row">
	                                    <div class="col-xl-6 col-lg-6 col-md-6 col-6">Ship</div>
	                                    <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-right"><?php echo number_format(30000); ?>đ</div>
	                                </div>
	                            </div>
	                            <div class="total">
	                                <div class="row">
	                                    <div class="col-xl-6 col-lg-6 col-md-6 col-6"><span>Tổng đơn</span></div>
	                                    <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-right"><strong><?php echo number_format($product[0]['GiaTien'] * $sl + 30000); ?>đ</strong></div>
	                                </div>
	                            </div>
	                            <div class="item"><label class="checkbox-cm"><input type="checkbox" name="id_payment_method" id="id_payment_method_11" class="id_payment_method"><span class="checkmark"></span><span class="required">*</span> Tôi đã đọc và đồng ý với <a href="/kien-thuc/dieu-khoan-va-dieu-kien-giao-dich-mua-ban-hang-hoa-n653" target="_tblank" style="color: red;">điều khoản và điều kiện</a> của website</label></div>
	                        </div>
	                        <button class="dat" type="submit" name="product">ĐẶT HÀNG</button>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </form>
    </div>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$('.dat').click(function(e)){
			var mobile = $('.sdt').val()
			var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
		    if(mobile !==''){
		        if (vnf_regex.test(mobile) == false) {
		        	e.preventDefault();
		            alert('Số điện thoại của bạn không đúng định dạng!');
		        }
		    }else{
		    	e.preventDefault();
		        alert('Số điện thoại của bạn không đúng định dạng!');
		    }
		}
	});
</script>
<?php require(__DIR__.'/layouts/footer.php'); ?>    