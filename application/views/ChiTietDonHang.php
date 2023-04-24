<?php require(__DIR__.'/layouts/header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('public/css/pesional.css') ?>">
<style type="text/css">
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

</style>
<section class="product" style="height: 550px;">
	<div class="container row" style="margin: 0 auto; margin-top: 100px; margin-bottom: 30px;">
		<h5>Thông tin sản phẩm trong đơn hàng: <?php echo $MaDH; ?></h5>
		<br>
		<br>
		<table>
			<thead>
				<tr>
					<th>STT</th>
					<th>Ảnh</th>
				    <th>Tên Sản Phẩm</th>
				    <th>Giá Bán</th>
				    <th>Màu Sắc</th>
				    <th>Số Lượng</th>
				    <th>Phí Giao</th>
				    <th>Thành Tiền</th>
				</tr>
			</thead>
		  	<tbody>
		  		<?php $sum = 0; ?>
           		<?php foreach ($result as $key => $value): ?>
           			<tr>
                        <th scope="row"><?php echo $key + 1; ?></th>
                        <td>
                        	<img src="<?php echo base_url('uploads/'.$value['TenAnh']); ?>" alt="" style="width: 100px; height: 100px;">
                        </td>
                        <td>
                        	<a style="color: black;" href="<?php echo base_url('san-pham/'.$value['MaSP']) ?>"><?php echo $value['TenSP']; ?></a> 
                        </td>
                        <td><?php echo number_format($value['GiaTien']); ?>đ</td>
                        <td><?php echo $value['MauSac']; ?></td>
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
		<div style="width: 100%; margin-top: 20px; ">
			<a href="<?php echo base_url('khach-hang/'); ?>" style="width: fit-content; padding: 10px; background: blueviolet; color: white;">Quay Lại</a>
			<div style="float: right;">
				<span>Tổng tiền: <?php echo  number_format($sum) ."đ + ". number_format($result[0]['PhiShip']) ."đ = ". number_format($sum + $result[0]['PhiShip']) ."đ"; ?></span><br>
			</div>
		</div>

	</div>
</section>
<?php require(__DIR__.'/layouts/footer.php'); ?>    