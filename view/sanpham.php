<style>
	.row.small-gutters {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}
.box_title {
  font-size: 19px;
  text-align: center; /* căn giữa theo chiều ngang */
  display: flex;
  justify-content: center; /* căn giữa theo chiều dọc */
  align-items: center; /* căn giữa theo chiều dọc */
  margin: 20px;
}
</style>

<div class="box_title">Sản phẩm <b style="font-size: 19px;color:blue"> </b> </div>	
		<?php

$currentPage1 = isset($_GET['page1']) ? $_GET['page1'] : 1;
$itemsPerPage = 2;
$totalItems = count($dssp);
$totalPages = ceil($totalItems / $itemsPerPage);

$startIndex = ($currentPage1 - 1) * $itemsPerPage;
$paginatedProducts = array_slice($dssp, $startIndex, $itemsPerPage);

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
  echo '<a class="' . $activeClass . '" href="index.php?act=sanpham&iddm=' . $iddm . '&page1=' . $i . '">' . $i . '</a>';
}
echo '</div>';
?>
</div>

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



