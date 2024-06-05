<main class="bg_gray">
		
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.php">Trang chủ</a></li>
					<li><a href="index.php?act=dangky">Đăng ký</a></li>
				</ul>
		</div>
	</div>

	<?php
		$EmailErr = $MatKhauErr = $HoTenErr = $SoDienThoaiErr = $DiaChiErr = "";
		$Email = $MatKhau = $HoTen = $SoDienThoai = $DiaChi = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["Email"])) {
			  $EmailErr = "Vui lòng nhập email";
			} else {
			  $Email = test_input($_POST["Email"]);
			}
			
			if (empty($_POST["MatKhau"])) {
			  $MatKhauErr = "Vui lòng nhập mật khẩu";
			} else {
			  $MatKhau = test_input($_POST["MatKhau"]);
			}
			  
			if (empty($_POST["HoTen"])) {
			  $HoTenErr = "Vui lòng nhập họ và tên";
			} else {
			  $HoTen = test_input($_POST["HoTen"]);
			}
		  
			if (empty($_POST["SoDienThoai"])) {
			  $SoDienThoaiErr = "Vui lòng nhập số điện thoại";
			} else {
			  $SoDienThoai = test_input($_POST["SoDienThoai"]);
			}
		  
			if (empty($_POST["DiaChi"])) {
			  $DiaChiErr = "Vui lòng nhập địa chỉ";
			} else {
			  $DiaChi = test_input($_POST["DiaChi"]);
			}
		  }
		  
		  function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		  }
	?>

		<form action="index.php?act=dangky" method="post">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">Đăng ký</h3>
					<div class="form_container">

						<div class="form-group">
							<input type="email" class="form-control" name="Email"  placeholder="Email*"><span class="thongbao"><?php echo $EmailErr;?></span>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="MatKhau" placeholder="Mật khẩu*"><span class="thongbao"><?php echo $MatKhauErr;?></span>
						</div>

						<div class="private box">
							<div class="row no-gutters">
								<div class="col-6 pr-1">
									<div class="form-group">
										<input type="text" class="form-control" name="HoTen" placeholder="Họ và tên*"><span class="thongbao"><?php echo $HoTenErr;?></span>
									</div>
								</div>
								<div class="col-6 pl-1">
									<div class="form-group">
										<input type="text" class="form-control" name="SoDienThoai" placeholder="Số điện thoại*"><span class="thongbao"><?php echo $SoDienThoaiErr;?></span>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<input type="text" class="form-control" name="DiaChi" placeholder="Địa chỉ*"><span class="thongbao"><?php echo $DiaChiErr;?></span>
									</div>
								</div>
							</div>
							<!-- /row -->
						</div>

						<div class="text-center"><input type="submit" value="Đăng ký" name="dangky" class="btn_1 full-width"></div><br>
						Bạn là khách hàng mới? <a href="index.php?act=dangnhap">Đăng nhập</a>
						<div class="form_container">
							<div class="divider"><span>Hoặc</span></div><br>
							<div class="row no-gutters">
								<div class="col-lg-6 pr-lg-1">
									<a href="#0" class="social_bt facebook">Đăng nhập bằng Facebook</a>
								</div>
								<div class="col-lg-6 pl-lg-1">
									<a href="#0" class="social_bt google">Đăng nhập bằng Google</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
			</div>
		</div>
		<!-- /row -->
		</div>
		<!-- /container -->
		</form>	
	</main>
	<!--/main-->
