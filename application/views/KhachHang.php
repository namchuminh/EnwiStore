<?php require(__DIR__.'/layouts/header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('public/css/pesional.css') ?>">
<style>
#lname, select {
  width: 100%;
  padding: 5px;
  display: inline-block;
  border: 1px solid #ccc;
  background: white;
  box-sizing: border-box;
  margin-bottom: 10px;
}

input[type=submit] {
  width: 100%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>
<section class="product" style="min-height: 700px;">
	<div class="container row" style="margin: 0 auto; margin-top: 80px; margin-bottom: 5px; background: unset; min-height: inherit;">
		<div class="tab">
			<button class="tablinks" onclick="openCity(event, 'DonHang')" id="defaultOpen">Đơn Hàng</button>
			<button class="tablinks" onclick="openCity(event, 'TaiKhoan')">Tài Khoản</button>
			<button class="tablinks" ><a style="color: black;" href="<?php echo base_url('dang-xuat'); ?>">Đăng Xuất</a></button>
			
		</div>

		<div id="DonHang" class="tabcontent">
			<table id="customers">
				<thead>
					<tr>
					    <th>Mã Đơn</th>
					    <th>Tên Khách Hàng</th>
					    <th>Số Điện Thoại</th>
					    <th>Địa Chỉ</th>
					    <th>Thanh Toán</th>
					    <th>Thời Gian</th>
					    <th>Tình Trạng</th>
					    <th>Tổng Tiền</th>
					    <th>Ghi Chú</th>
					    <th>Xác Nhận</th>
					    <th>Hủy Đơn</th>
					    <th>Xem Đơn</th>
				  	</tr>
				</thead>
				<tbody>
					<?php if(count($result) == 0){ ?>
						<tr>
							<td colspan="12" style="border: none;"> 
					            <br>
					            <div style="text-align: center;">
					            	<p>Bạn chưa có đơn hàng nào trong lịch sử, vui lòng mua hàng!</p>
					            	<a style="margin-top: 200px" href="<?php echo base_url(); ?>"> << TIẾP TỤC MUA HÀNG</a>
					            </div>
							</td>
						</tr>
						
					<?php }else{ ?>
						<?php foreach ($result as $key => $value): ?>
							<tr>
							    <td><?php echo $value['MaDH']; ?></td>
							    <td><?php echo $value['HoTenKH']; ?></td>
							    <td><?php echo $value['SDT']; ?></td>
							    <td><?php echo $value['DiaChiNhanHang']; ?></td>
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
					                        echo "Bạn đã nhận";
					                    }
					                ?>
							    </td>
							    <td>
							    	<?php echo number_format($value['TongTien']); ?>đ
							    </td>
							    <td>
							    	<?php echo $value['GhiChu']; ?>
							    </td>
							    <td>
							    	<?php if($value['TinhTrangDH'] == 1){ ?>
                                        <a style="color: blue; text-decoration: underline;" href="<?php echo base_url('don-hang/giao/'.$value['MaDH']); ?>">Đã Giao</a>
                                    <?php }else if($value['TinhTrangDH'] == 3){ ?>
                                    	Đã Giao Hàng
                                    <?php }else{ ?>
                                    	Chờ Giao Hàng
                                    <?php } ?>
							    </td>
							    <td>
							    	<?php if($value['TinhTrangDH'] != 3 && $value['TinhTrangDH'] != 2){ ?>
		                  				<a style="color: red; text-decoration: underline;" href="<?php echo base_url('don-hang/huy/'.$value['MaDH']); ?>">Hủy</a>
					                <?php }else{ ?>
					                	<?php echo 'Không được phép'; ?>
					                <?php } ?>
							    </td>
							    <td>
							    	<a class="btn btn-default text-black" style="text-decoration: underline;" href="<?php echo base_url('don-hang/'.$value['MaDH']); ?>">Xem</a>
							    </td>
						  	</tr>
						<?php endforeach ?>
					<?php } ?>
				</tbody>
			</table>
		</div>

		<div id="TaiKhoan" class="tabcontent">
				<br>
				<?php if(isset($err)){ ?>
	      	<p style="color: red; text-align: center;"><?php echo $err; ?></p>
	      <?php } ?>
	      <?php if(isset($success)){ ?>
	      	<p style="color: blueviolet; text-align: center;"><?php echo $success; ?></p>
	      <?php } ?>
				<form method="POST" style="padding: 15px;">
					<label for="fname">Tài Khoản</label>
					<input type="text" id="lname" name="taikhoan" placeholder="Tài khoản..." value="<?php echo $customer[0]['TenTK'] ?>" disabled required>

					<label for="lname">Họ Tên</label>
					<input type="text" id="lname" name="hoten" placeholder="Họ tên khách hàng..." value="<?php echo $customer[0]['TenKH'] ?>" required>

					<label for="lname">Số Điện Thoại</label>
					<input type="text" id="lname" name="sodienthoai" placeholder="Họ số điện thoại..." value="<?php echo $customer[0]['SDT'] ?>" required>

					<label for="lname">Email</label>
					<input type="text" id="lname" name="email" placeholder="Email khách hàng..." value="<?php echo $customer[0]['Email'] ?>" required>

					<label for="lname">Ngày Sinh</label>
					<br>
					<input type="date" id="lname" name="ngaysinh" placeholder="Ngày sinh" value="<?php echo $customer[0]['NgaySinh'] ?>" required>
					<br>
					<label for="lname">Địa Chỉ</label>
					<input type="text" id="lname" name="diachi" placeholder="Địa chỉ..." value="<?php echo $customer[0]['DiaChi'] ?>" required>

					<label for="lname">Mật Khẩu</label>
					<input type="text" id="lname" name="matkhau" placeholder="Nhập mật khẩu mới nếu cần đổi...">

					<input type="submit" value="Cập Nhật Thông Tin">
			  </form>
		</div>
	</div>
</section>


<script>
function openCity(evt, thongtin) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(thongtin).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<?php if(isset($err) || isset($success)){ ?>
	<script>
		openCity(event, 'TaiKhoan');
	</script>
<?php } ?>

<?php if(isset($err) || isset($success)){ ?>
	<script>
		openCity(event, 'TaiKhoan');
	</script>
<?php } ?>

<?php $info = $this->session->flashdata('info'); ?>
<?php if($this->session->flashdata('info')){ ?>
	<script>
		alert("Vui lòng cập nhật thông tin thanh toán!")
		openCity(event, 'TaiKhoan');
	</script>
<?php } ?>

<?php require(__DIR__.'/layouts/footer.php'); ?>    