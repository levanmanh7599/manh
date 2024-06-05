
<main>
		<div id="carousel-home">
			<div class="owl-carousel owl-theme">
				<div class="owl-slide cover" style="background-image: url(https://www.thuengay.vn/uploads/770x433/a5ec54b9c789f3820e74144bea13af1311efc89e2.jpg);">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-end">
								<div class="col-lg-6 static">
									<div class="slide-text text-end white">
										<h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Max 720 Sage Low</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Limited items available at this price
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->
				<div class="owl-slide cover" style="background-image: url(https://vn-test-11.slatic.net/p/d09340cb6a7a9663327d7a5f16839c6f.jpg);">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-6 static">
									<div class="slide-text white">
										<h2 class="owl-slide-animated owl-slide-title">Attack Air<br>VaporMax Flyknit 3</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Limited items available at this price
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->
				<div class="owl-slide cover" style="background-image: url(https://tmluxury.vn/wp-content/uploads/ao-so-mi-nam-dep-tm-luxury.jpg);">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center black">
										<h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Monarch IV SE</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Lightweight cushioning and durable support with a Phylon midsole
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/owl-slide-->
				</div>
			</div>
			<div id="icon_drag_mobile"></div>
		</div>
		<!--/carousel-->
		
		

		<ul id="banners_grid" class="clearfix">
			<li>
				<a href="#0" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="https://sithoitrangnam.com/wp-content/uploads/2019/05/best-online-clothing-stores-for-men.jpg" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Men's Collection</h3>
						<div><span class="btn_1">Shop Now</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="https://cdn.haitrieu.com/wp-content/uploads/2021/09/cua-hang-quan-ao-la-min-thiet-ke-boi-k-soul.png" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Womens's Collection</h3>
						<div><span class="btn_1">Shop Now</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="https://noithatart.com/wp-content/uploads/2015/03/thiet-ke-noi-that-shop-thoi-trang-03-10.jpg" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Kids's Collection</h3>
						<div><span class="btn_1">Shop Now</span></div>
					</div>
				</a>
			</li>
		</ul>
		<!--/banners_grid -->

<style>
	.row.small-gutters {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}
</style>

			<div class="main_title">
				<h2 style="margin-top: 20px;">Sản phẩm bán chạy nhất</h2>
				
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
			</div>
		
		<?php
// Assuming $spnew is an array of products and $itemsPerPage is the number of products per page
$currentPage1 = isset($_GET['page1']) ? $_GET['page1'] : 1;
$itemsPerPage = 6;
$totalItems = count($spnew);
$totalPages = ceil($totalItems / $itemsPerPage);
$startIndex = ($currentPage1 - 1) * $itemsPerPage;
$paginatedProducts = array_slice($spnew, $startIndex, $itemsPerPage);
$endIndex = $startIndex + $itemsPerPage - 1;
echo '<div class="row small-gutters">';
    $i=0;
foreach ($paginatedProducts as $sp) {
    $i++; 
				extract($sp); 
				$hinh = $img_path.$img; 
				$linksp="index.php?act=sanphamct&idsp=".$id;
    echo '<div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
                <figure>
                    <span class="ribbon off">-30%</span>
                    <a href="'.$linksp.'">
                        <img class="img-fluid lazy" src="'.$hinh.'" alt="'.$name.'">
                    </a>
                    <div data-countdown="2019/05/15" class="countdown"></div>
                </figure>
                <div class="rating">
                    <i class="icon-star voted"></i>
                    <i class="icon-star voted"></i>
                    <i class="icon-star voted"></i>
                    <i class="icon-star voted"></i>
                    <i class="icon-star"></i>
                </div>
                <a href="'.$linksp.'">'.$name.'</a>
                <div class="price_box">
                    <span class="new_price">'.number_format($price).'đ</span> 
                    <span class="old_price"></span>
                </div>
				<div>
				<button data-id="'. $id .'" class="btnCart" onclick="addToCart('.$id .',`'.$name.'`,'.$price.')">Thêm vào giỏ hàng</button>
			</div>
                <ul>
                    <li>
                        <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites">
                            <i class="ti-heart"></i>
                            <span>Add to favorites</span>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare">
                            <i class="ti-control-shuffle"></i>
                            <span>Add to compare</span>
                        </a>
                    </li>
 
                </ul>
            </div>
        </div>';
    if ($i % 3 == 0) { 
        echo '</div><div class="row small-gutters ">';
    }
}
echo '</div>';

echo '<div class="pagination">';

for ($i = 1; $i <= $totalPages; $i++) {

  $activeClass = ($i == $currentPage1) ? "active" : "";

  echo '<a class="' . $activeClass . '" href="javascript:changePage(' . $i . ');">' . $i . '</a>';

}

echo '</div>';

?>
</div>
<script>
function changePage(page) {
	 // Lưu vị trí cuộn hiện tại của trang cũ
  var scrollPos = window.pageYOffset;
  sessionStorage.setItem("scrollPos", scrollPos);
 // Chuyển trang và khôi phục vị trí cuộn
  window.location.href = "index.php?page1=" + page;
}

window.onload = function() {
  var scrollPos = sessionStorage.getItem("scrollPos");

  if(scrollPos != null) {

    setTimeout(function(){
      window.scrollTo(1010, scrollPos);  
      sessionStorage.removeItem("scrollPos");
    }, 10);

  }
}
</script>


		<div class="featured lazy" data-bg="url(https://tmluxury.vn/wp-content/uploads/thoi-trang-nam-bui-bam-xu-huong-so-mi-phong-cach.png)">
			<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				<div class="container margin_60">
					<div class="row justify-content-center justify-content-md-start">
						<div class="col-lg-6 wow" data-wow-offset="150">
							<h3>Armor<br>Air Color 720</h3>
							<p>Lightweight cushioning and durable support with a Phylon midsole</p>
							<div class="feat_text_block" >
								<div class="price_box">
									<span class="new_price">$90.00</span>
									<span class="old_price">$170.00</span>
								</div>
								<a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /featured -->
		<style>
	.owl-carousel.owl-theme.products_carousel {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  margin-top: 50px;
}
</style>
		
			<div class="main_title">
				<h2 style="margin-top: 20px;">Sản phẩm đặc sắc</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
			</div>
			
				
				<?php 
				$currentPage2 = isset($_GET['page2']) ? $_GET['page2'] : 1;
				$itemsPage = 6;
				$totalItems = count($dstop10);
				$totalPage = ceil($totalItems / $itemsPage);
				
				$startIndex = ($currentPage2 - 1) * $itemsPage;
				$Products = array_slice($dstop10, $startIndex, $itemsPage);
				
				echo '<div class="owl-carousel owl-theme products_carousel">';
			$i = 0; 
			foreach ($Products as $sp){ 
				$i++; 
				extract($sp); 
				$hinh = $img_path.$img; 
				$linksp="index.php?act=sanphamct&idsp=".$id;
    echo '<div class="item">
            <div class="grid_item">
                <figure>
                    <span class="ribbon off">-30%</span>
                    <a href="'.$linksp.'">
                        <img class="img-fluid lazy" src="'.$hinh.'" alt="'.$name.'">
                    </a>
                    <div data-countdown="2019/05/15" class="countdown"></div>
                </figure>
                <div class="rating">
                    <i class="icon-star voted"></i>
                    <i class="icon-star voted"></i>
                    <i class="icon-star voted"></i>
                    <i class="icon-star voted"></i>
                    <i class="icon-star"></i>
                </div>
                <a href="'.$linksp.'">'.$name.'</a>
                <div class="price_box">
                    <span class="new_price">'.number_format($price).'đ</span>
                    <span class="old_price"></span>
					</div>
					<div>
					<button data-id="'.$id.'" class="btnCart" onclick="addToCart('.$id.', `'.$name.'`, '.$price.')">Thêm vào giỏ hàng</button>
				   </div>			  
                <ul>
                    <li>
                        <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites">
                            <i class="ti-heart"></i>
                            <span>Add to favorites</span>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare">
                            <i class="ti-control-shuffle"></i>
                            <span>Add to compare</span>
                        </a>
                    </li>
            
                </ul>
            </div>
        </div>';
    if ($i % 3 == 0) { 
        echo '</div><div class=" owl-carousel owl-theme products_carousel">';
    }
}
echo '</div>';
echo '<div class="pagination">';

for ($i = 1; $i <= $totalPage; $i++) {

  $activeClass = ($i == $currentPage2) ? "active" : "";

  echo '<a class="' . $activeClass . '" href="javascript:changePage2(' . $i . ');">' . $i . '</a>';
}
echo '</div>';

?>
<script >
	function changePage2(page1) {
	 // Lưu vị trí cuộn hiện tại của trang cũ
  var scrollPos = window.pageYOffset;
  sessionStorage.setItem("scrollPos", scrollPos);
 // Chuyển trang và khôi phục vị trí cuộn
  window.location.href = "index.php?page2=" + page1;
}

window.onload = function() {
  var scrollPos = sessionStorage.getItem("scrollPos");

  if(scrollPos != null) {

    setTimeout(function(){
      window.scrollTo(1010, scrollPos);  
      sessionStorage.removeItem("scrollPos");
    }, 10);

  }
}
</script>
</div>

	</main>
	<!-- /main -->
<script>
    let totalProduct = document.getElementById('totalProduct');
    function addToCart(productId,productName,productPrice){
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './view/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>