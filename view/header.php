<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
 
    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/product_page.css" rel="stylesheet">
	<!-- SPECIFIC CSS -->
    <link href="css/home_1.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	
	<link rel="icon" href="https://caodang.fpt.edu.vn/wp-content/uploads/cropped-logo-fpt-32x32.png" sizes="32x32" />
  <link rel="icon" href="https://caodang.fpt.edu.vn/wp-content/uploads/cropped-logo-fpt-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="https://caodang.fpt.edu.vn/wp-content/uploads/cropped-logo-fpt-180x180.png" />
	
  <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<style>
		    #totalProduct {
      color: #fff;
      background-color: red;
      font-size: 12px;
      padding: 5px;
      border-radius: 50%;
    }
    .pagination {
        display: flex;
        justify-content: center;
		padding-bottom: 40px;
    }
    
    .pagination a {
        padding: 2px 13px;
        margin: 0 5px;
        text-decoration: none;
        color: #000;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    .pagination a.active {
        background-color: #ccc;
    }
	.btnCart { 
		padding: 10px 20px; 
		border: none; background-color: #007bff; 
		color: white; cursor: pointer; 
		border-radius: 7px;
	}

.btnCart:hover { background-color: #0062cc; }

.btnCart:focus { outline: none; box-shadow: 0 0 0 3px rgba(0,123,255,0.25); }

.btnCart:active { background-color: #005cbf; transform: translateY(2px); }

.btnCart[disabled] { opacity: 0.5; cursor: not-allowed; }
</style>
</head>

<body>
	
	<div id="page">
		
	<header class="version_1">
		<div class="layer"></div><!-- Mobile menu overlay mask -->
		<div class="main_header">
			<div class="container">
				<div class="row small-gutters">
					<div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
						<div id="logo">
							<a href="index.php"><img src="img/logo.svg" alt="" width="100" height="35"></a>
						</div>
					</div>
					<nav class="col-xl-6 col-lg-7">
						<a class="open_close" href="javascript:void(0);">
							<div class="hamburger hamburger--spin">
								<div class="hamburger-box">
									<div class="hamburger-inner"></div>
								</div>
							</div>
						</a>
						<!-- Mobile menu button -->
						<div class="main-menu">
							<div id="header_menu">
								<a href="index.php"><img src="img/logo_black.svg" alt="" width="100" height="35"></a>
								<a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
							</div>
							<ul>
								<li class="">
									<a href="index.php" class="show-submenu">Trang chủ</a>
									
								</li>
								<li class="">
									<a href="javascript:void(0);" class="show-submenu-mega">Sản phẩm</a>
	
									<!-- /menu-wrapper -->
								</li>
								
								<li>
									<a href="#">Giới thiệu</a>
								</li>
								<li>
									<a href="#">Liên hệ</a>
								</li>
								<li class="dropdown">
                               <a href="index.php?act=listCart">Giỏ hàng</a>
                                </li>
								<li class="dropdown">
                              <span id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                                </li>
							</ul>
						</div>
						<!--/main-menu -->
					</nav>
					<div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-end">
						<a class="phone_top" href="tel://9438843343"><strong><span>Need Help?</span>+94 423-23-221</strong></a>
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- /main_header -->
		<div class="main_nav Sticky">
			<div class="container">
				<div class="row small-gutters">
					<div class="col-xl-3 col-lg-3 col-md-3">
						<nav class="categories">
							<ul class="clearfix">
								<li><span>
										<a href="#">
											<span class="hamburger hamburger--spin">
												<span class="hamburger-box">
													<span class="hamburger-inner"></span>
												</span>
											</span>
											Danh mục
										</a>
									</span>
									<div id="menu">
										<ul>
										<?php
										$dsdm=loadall_danhmuc();
                                       foreach($dsdm as $dm){
                                        extract($dm);
                                       $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo ' <li><a href="'.$linkdm.'">'.$name.' </a></li>';
                                        }
                                         ?>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</div>
	
					
    
   
	<div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
	<form action="index.php?act=sanpham" method="POST">
						<div class="custom-search-input" style="margin-bottom: 15px;">
							<input type="text"  name="kyw" placeholder="Search over 10.000 products" >
							<button type="submit"  name="timkiem"><i class="header-icon_search_custom" ></i></button>
						</div>
						</form>
					</div>
   
  
					

					
					<div class="col-xl-3 col-lg-2 col-md-3">
						<ul class="top_tools">
							<li>
								<div class="dropdown dropdown-cart">
									<a href="index.php?act=listCart" class="cart_bt">
										<strong><span id="totalProduct">
										<?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
									</strong></a>
								
								</div>
								<!-- /dropdown-cart-->
							</li>
							<li>
								<a href="#0" class="wishlist"><span>Wishlist</span></a>
							</li>
							<li>
							<div class="dropdown dropdown-access">
									<a href="index.php?act=dangnhap" class="access_link"><span>Tài khoản</span></a>
									<div class="dropdown-menu">
										<?php
											if(isset($_SESSION['Email'])){
												extract($_SESSION['Email']);
										?>
										<a href="index.php?act=dangnhap" class="btn_1">Đăng nhập hoặc đăng ký</a>
										<ul>
											
											<li>
												<a href="#"><i class="ti-truck"></i>Đơn Hàng của bạn</a>
											</li>
											<?php
												if($PhanQuyen==1){
											?>
												<li>
													<a href="admin/index.php"><i class="ti-package"></i>Đăng nhập Admin</a>
												</li>
											<?php
												}
											?>		
											<li>
												<a href="index.php?act=edit_taikhoan"><i class="ti-user"></i>Thông tin tài khoản</a>
											</li>
											<li>
												<a href="index.php?act=thoat"><i class="ti-help-alt"></i>Đăng xuất</a>
											</li>
										</ul>
									</div>
									<?php
										}else{
									?>
										<!-- <form action="index.php?act=dangnhap<?php  $_SERVER['PHP_SELF'];?>" method="post">
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

												<div class="text-center"><input type="submit" value="Đăng nhập" name="dangnhap" class="btn_1 full-width"></div>
												Bạn là khách hàng mới?<a href="index.php?act=dangky">Đăng ký</a>
											</div>
										</form> -->
										<div class="">
										
										<a href="index.php?act=dangnhap" class="btn_1">Đăng nhập hoặc đăng ký</a>
										<ul>
											
											<li>
												<a href="#"><i class="ti-truck"></i>Đơn Hàng của bạn</a>
											</li>
											
												<li>
													<a href="admin/index.php"><i class="ti-package"></i>Đăng nhập Admin</a>
												</li>
												
											<li>
												<a href="index.php?act=edit_taikhoan"><i class="ti-user"></i>Thông tin tài khoản</a>
											</li>
											<li>
												<a href="index.php?act=thoat"><i class="ti-help-alt"></i>Đăng xuất</a>
											</li>
										</ul>
									</div>
									</div>
								<?php
									}
								?>
								<!-- /dropdown-access-->
							</li>
							<li>
								<a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
							</li>
							<li>
								<a href="#menu" class="btn_cat_mob">
									<div class="hamburger hamburger--spin" id="hamburger">
										<div class="hamburger-box">
											<div class="hamburger-inner"></div>
										</div>
									</div>
									Categories
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<div class="search_mob_wp">
				<input type="text" class="form-control" placeholder="Search over 10.000 products">
				<input type="submit" class="btn_1 full-width" value="Search">
			</div>
			<!-- /search_mobile -->
			
		</div>
		<!-- /main_nav -->

	</header>
	<!-- /header -->
	
		
