<main class="bg_gray">
		
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.php">Trang chủ</a></li>
					<li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
				</ul>
		</div>
	</div>

		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="client">Đăng nhập</h3>

                <form action="index.php?act=dangnhap<?php  $_SERVER['PHP_SELF'];?>" method="post">
					<div class="form_container">

						<div class="form-group">
							<input type="text" class="form-control" name="Email" placeholder="Email*">
						</div>
						
						<div class="form-group">
							<input type="password" class="form-control" name="MatKhau" value="" placeholder="Mật khẩu*">
						</div>

						<div class="clearfix add_bottom_15">
							<div class="float-end"><a id="forgot" href="index.php?act=quenmk">Quên mật khẩu?</a></div>
						</div>

						<div class="text-center"><input type="submit" value="Đăng nhập" name="dangnhap" class="btn_1 full-width"></div><br>
                        Bạn là khách hàng mới? <a href="index.php?act=dangky">Đăng ký</a>
                        
						<div class="divider"><span>Hoặc</span></div><br>

						<div class="row no-gutters">
							<div class="col-lg-6 pr-lg-1">
								<a href="#0" class="social_bt facebook">Đăng nhập bằng Facebook</a>
							</div>
							<div class="col-lg-6 pl-lg-1">
								<a href="#0" class="social_bt google">Đăng nhập bằng Google</a>
							</div>
						</div>

					</form>
					<h2 class="thongbao">
						<?php
							if(isset($thongbao)&&($thongbao!="")){
								echo $thongbao;
							}
						?>
					</h2>
						<!-- <div id="forgot_pw">
							<div class="form-group">
								<p>Nhập địa chỉ email của bạn</p>
								<input type="email" class="form-control" name="Email"  placeholder="Email">
							</div>
							<div class="text-center"><input type="submit" value="Lấy lại mật khẩu" name="laylaimk" class="btn_1"></div>
						</div> -->
                    
				</div>
			</div>
		</div>
    </main>    