<?php require(__DIR__.'/layouts/header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('public/css/pesional.css') ?>">

<section class="product">
	<div class="container row" style="margin: 0 auto; margin-top: 80px; margin-bottom: 30px;">
		<div class="tab">
			<button class="tablinks" onclick="openCity(event, 'DonHang')" id="defaultOpen">Đơn Hàng</button>
			<button class="tablinks" onclick="openCity(event, 'TaiKhoan')">Tài Khoản</button>
			<button class="tablinks" ><a style="color: black;" href="<?php echo base_url('dang-xuat'); ?>">Đăng Xuất</a></button>
			
		</div>

		<div id="DonHang" class="tabcontent">
			<table id="customers">
			  <tr>
			    <th>Company</th>
			    <th>Contact</th>
			    <th>Country</th>
			  </tr>
			  <tr>
			    <td>Alfreds Futterkiste</td>
			    <td>Maria Anders</td>
			    <td>Germany</td>
			  </tr>
			  <tr>
			    <td>Berglunds snabbköp</td>
			    <td>Christina Berglund</td>
			    <td>Sweden</td>
			  </tr>
			  <tr>
			    <td>Centro comercial Moctezuma</td>
			    <td>Francisco Chang</td>
			    <td>Mexico</td>
			  </tr>
			  <tr>
			    <td>Ernst Handel</td>
			    <td>Roland Mendel</td>
			    <td>Austria</td>
			  </tr>
			  <tr>
			    <td>Island Trading</td>
			    <td>Helen Bennett</td>
			    <td>UK</td>
			  </tr>
			  <tr>
			    <td>Königlich Essen</td>
			    <td>Philip Cramer</td>
			    <td>Germany</td>
			  </tr>
			  <tr>
			    <td>Laughing Bacchus Winecellars</td>
			    <td>Yoshi Tannamuri</td>
			    <td>Canada</td>
			  </tr>
			  <tr>
			    <td>Magazzini Alimentari Riuniti</td>
			    <td>Giovanni Rovelli</td>
			    <td>Italy</td>
			  </tr>
			  <tr>
			    <td>North/South</td>
			    <td>Simon Crowther</td>
			    <td>UK</td>
			  </tr>
			  <tr>
			    <td>Paris spécialités</td>
			    <td>Marie Bertrand</td>
			    <td>France</td>
			  </tr>
			</table>
		</div>

		<div id="TaiKhoan" class="tabcontent">
			<h3>Paris</h3>
			<p>Paris is the capital of France.</p> 
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
<?php require(__DIR__.'/layouts/footer.php'); ?>    