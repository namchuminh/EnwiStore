<?php require(__DIR__.'/layouts/header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('public/css/cartegory.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('public/css/cart.css') ?>">

<section class="cart">
	<div class="container">
	    <div class="cart-content row">
	    	<?php if(count($result) == 0){ ?>
	    		<div class="cart-content-left">
		            <table>
		                <tr>
		                    <th>Sản phẩm</th>
		                    <th>Tên sản phẩm</th>
		                    <th>Số lượng</th>
		                    <th>Đơn giá</th>
		                    <th>Xóa</th>
		                </tr>
		            </table>
		            <br>
		            <br>
		            <div style="text-align: center;">
		            	<p>Không có sản phẩm nào trong giỏ hàng!</p>
		            	<a style="margin-top: 200px" href="<?php echo base_url(); ?>"> << TIẾP TỤC MUA HÀNG</a>
		            </div>
		        </div>

	    	<?php }else{ ?>
		        <div class="cart-content-left">
		            <table>
		                <tr>
		                    <th>Sản phẩm</th>
		                    <th>Tên sản phẩm</th>
		                    <th>Màu Sắc</th>
		                    <th>Số lượng</th>
		                    <th>Đơn giá</th>
		                    <th>Xóa</th>
		                </tr>
		                <?php foreach ($result as $key => $value): ?>
		                	<tr>
			                    <td><img src="<?php echo base_url('uploads/'.$value['TenAnh']); ?>" alt=""></td>
			                    <td>
			                        <p><?php echo $value['TenSP']; ?></p>
			                    </td>
			                    <td>
			                    	<p><?php echo $value['MauSac']; ?></p>
			                    </td>
			                    <td>
			                    	<input class="number" data="<?php echo $value['MaSP']; ?>" type="number" value="<?php echo $value['SoLuong']; ?>" min="1">
			                    </td>
			                    <td>
			                        <p><?php echo number_format($value['GiaTien']); ?>đ</p>
			                    </td>
			                    <td><a href="<?php echo base_url('gio-hang/xoa/'.$value['MaSP']); ?>"><i class="fa fa-trash"></i></a></td>
			                </tr>
		                <?php endforeach ?>
		            </table>
		            <br>
		            <a href="<?php echo base_url(); ?>"> << TIẾP TỤC MUA HÀNG</a>
		        </div>
		    <?php } ?>
	        <?php if(count($result) == 0){ ?>
	        	<div class="cart-content-right" style="padding: 5px;">
                    <table>
                        <tr>
                            <th colspan="2">TỔNG TIỀN HÀNG</th>
                        </tr>
                        <tr>
                            <td>Tiền hàng</td>
                            <td>0đ</td>
                        </tr>
                        <tr>
                            <td>Phí ship</td>
                            <td>0đ</td>
                        </tr>
                        <tr style="font-weight: bolder;">
                            <td>TỔNG ĐƠN</td>
                            <td>0đ</td>
                        </tr>
                    </table>
                    <a href="#"><button>KHÔNG CÓ SẢN PHẨM ĐỂ THANH TOÁN</button></a>
                </div>
	        <?php }else{ ?>
		        <div class="cart-content-right" style="padding: 5px;">
		            <table>
		                <tr>
		                    <th colspan="2">TỔNG TIỀN HÀNG</th>
		                </tr>
		                <?php $sum = 0; ?>
		                <?php foreach ($result as $key => $value): ?>
		                	<?php $sum += $value['GiaTien'] * $value['SoLuong']; ?>
			                <tr>
			                    <td style="border: none;"><a style="color: black;" href="<?php echo base_url('san-pham/'.$value['MaSP']) ?>"><?php echo ($key + 1).". ".$value['TenSP']; ?></a></td>
			                    <td style="border: none;"><?php echo number_format($value['GiaTien']); ?>đ x <?php echo $value['SoLuong'] ?></td>
			                </tr>
			            <?php endforeach ?>
		                <tr>
		                    <td style="border-top: 2px solid black;">Tổng tiền hàng</td>
		                    <td style="border-top: 2px solid black;"><?php echo number_format($sum); ?>đ</td>
		                </tr>
		                <tr>
		                    <td>Phí ship</td>
		                    <td><?php echo number_format($result[0]['PhiShip']); ?>đ</td>
		                </tr>
		                <tr style="font-weight: bolder;">
		                    <td>TỔNG ĐƠN</td>
		                    <td><?php echo number_format($sum + $result[0]['PhiShip']); ?>đ</td>
		                </tr>
		            </table>
		            <a href="<?php echo base_url('kiem-tra-thanh-toan/cart'); ?>"><button>THANH TOÁN</button></a>
		        </div>
		    <?php } ?>
	    </div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
	var base_url =  window.location.origin == "http://localhost" ? window.location.origin + "/EnwiStore" : window.location.origin
	$(document).ready(function() {
		$(".number").on("input", function() {
			var sl = $(this).val(); 
			var msp = $(this).attr('data');
			if(sl <= 0){

			}else{
				$.post(base_url + '/gio-hang/sua/', {sl: sl, msp: msp}, function(data) {
					window.location.href = base_url + '/gio-hang/'
				});
			}
		})
	})
</script>
<?php require(__DIR__.'/layouts/footer.php'); ?>    