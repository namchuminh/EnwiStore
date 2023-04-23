<?php require(__DIR__.'/layouts/header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('public/css/product.css')?>">
<link rel="stylesheet" href="<?php echo base_url('public/css/cartegory.css')?>">

<?php 
    $mess = $this->session->flashdata('mess');
    if($this->session->flashdata('mess')){
        echo "<script>alert('$mess')</script>";
    }
?>
<section class="product">
    <div class="container row">
        <div class="product-content-left">
            <div class="product-content-left-big-img">
                <img src="<?php echo base_url('uploads/'.$image[0]['TenAnh']); ?>">
            </div>
            <div class="product-content-left-small-img row">
            	<?php foreach ($image as $key => $value): ?>
            		<img src="<?php echo base_url('uploads/'.$value['TenAnh']); ?>">
            	<?php endforeach ?>
            </div>
        </div>
        <div class="product-content-right">
            <div class="product-content-right-name">
                <h1><?php echo $product[0]['TenSP']; ?></h1>
                <p>MSP: <?php echo $product[0]['MaSP']; ?></p>
            </div>
            <div class="product-content-right-price">
                <p><?php echo number_format($product[0]['GiaTien']); ?><sup>đ</sup></p>
            </div>
            <div class="product-content-right-color row">
                <p style="font-weight: bold;">Màu sắc: </p>
                <?php foreach ($color as $key => $value): ?>
                	<div class="c-pink"><span style="border: 1px solid #eaeaea; background: <?php echo $value['TenMau']; ?>"></span></div>
                <?php endforeach ?>
                
            </div>
            <form action="<?php echo base_url('them-gio-hang/'); ?>" method="POST">
                <div class="product-content-right-quantity">
                    <p style="font-weight: bold;">Số lượng: </p>
                    <input type="number" min="1" value="1" name="sl">
                </div>
                <input type="text" value="<?php echo $product[0]['MaSP']; ?>" name="masanpham" hidden>
                <div class="product-content-right-button row">
                    <button type="submit" name="add"><p>THÊM VÀO GIỎ HÀNG</p></button>
                    <button name="pay"><p><a href="<?php echo base_url('kiem-tra-thanh-toan/'.$product[0]['MaSP']); ?>" style="color: white; text-decoration: none;">MUA NGAY</a></p></button>
                </div>
            </form>
            
            <hr>
            <div class="product-content-right-details">
                <p id="title">CHI TIẾT SẢN PHẨM</p>
                <div class="tab-content-details">
                    <table width=70%>
                        <tbody>
                            <tr>
                                <td style="padding-bottom:5px;"><b>Mã sản phẩm</b></td>
                                <td style="padding-bottom:5px;"><?php echo $product[0]['MaSP']; ?></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:5px;"><b>Thương hiệu</b></td>
                                <td style="padding-bottom:5px;"><?php echo $product[0]['ThuongHieu']; ?></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:5px;"><b>Chất liệu</b></td>
                                <td style="padding-bottom:5px;"><?php echo $product[0]['ChatLieu']; ?></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:5px;"><b>Xuất xứ</b></td>
                                <td style="padding-bottom:5px;"><?php echo $product[0]['XuatXu']; ?></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:5px;"><b>Thông số kỹ thuật</b></td>
                                <td style="padding-bottom:5px;"><?php echo $product[0]['ThongSo']; ?></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:5px;"><b>Bảo quản</b></td>
                                <td style="padding-bottom:5px;">Trong hộp kính</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="information">
                        <p><b>Hướng dẫn sử dụng:</b></p>
                        <p>+ Tháo kính bằng 2 tay </p>
                        <p>+ Không bỏ kính vào cốp xe hoặc những nơi có nhiệt độ cao làm biến dạng kính.</p>
                        <p>+ Không bỏ kính vào túi sách nếu không có hộp kính, vật dụng nhọn như chìa khóa sẽ làm xước kính.</p>
                        <p>+ Không rửa kính lau kính bằng các chất có tính tẩy rửa mạnh làm bong tróc lớp váng phủ</p>
                    </div>

                </div>
                <i class="fa fa-chevron-down"></i>
                <div class="inline"></div>
            </div>
        </div>
    </div>
</section>
<!---------------sản phẩm liên quan------------>

<section class="product-related">
    <div class="product-related-title">
        <p>SẢN PHẨM LIÊN QUAN</p>
    </div>
    <div class="cartegory-right-content row">
    	<?php foreach ($related as $key => $value): ?>
    		<div class="cartegory-right-content-item">
	            <a href="<?php echo base_url('san-pham/'.$value['MaSP']); ?>">
	                <img src="<?php echo base_url('uploads/'.$value['TenAnh']); ?>" alt="" style="height: 300px;">
	            </a>
	            <br>
	            <br>
	            <h1><a href="<?php echo base_url('san-pham/'.$value['MaSP']); ?>" style="color: black;"><?php echo $value['TenSP']; ?></a></h1>

	            <p><?php echo number_format($value['GiaTien']); ?><sup>đ</sup></p>
	            <div class="colors">
	                <div class="c-blue"><span></span></div>
	                <div class="c-red"><span></span></div>
	                <div class="c-white"><span></span></div>
	                <div class="c-green"><span></span></div>
	            </div>
	        </div>
    	<?php endforeach ?>
    </div>
</section>
<script>
    const bigImg = document.querySelector(".product-content-left-big-img img")
    const smallImg = document.querySelectorAll(".product-content-left-small-img img")
    smallImg.forEach(function(imgItem, X) {
        imgItem.addEventListener("click", function() {
            bigImg.src = imgItem.src
        })
    })
</script>

<?php require(__DIR__.'/layouts/footer.php'); ?>    
