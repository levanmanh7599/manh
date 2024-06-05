
      <body>
	
	<div id="page">	
		
	<main class="bg_gray">
    <?php
        
        extract($onesp);
        $img=$img_path.$img;
         
	    echo'<div class="container margin_30">
	        <div class="page_header">
	            <div class="breadcrumbs">
	                <ul>
	                    <li><a href="#">Home</a></li>
	                    <li><a href="#">Category</a></li>
	                    <li>Page active</li>
	                </ul>
	            </div>
	            <h1>'.$name.'</h1>
	        </div>
	        <!-- /page_header -->
	        <div class="row justify-content-center">

	            <div class="col-lg-8">
	                <div class="owl-carousel owl-theme prod_pics magnific-gallery">
	                    <div class="item">
	                        <a href="'.$img.'" title="Photo title" data-effect="mfp-zoom-in"><img src="'.$img.'" alt=""></a>
	                    </div>
	                    <!-- /item -->
	                    <div class="item">
	                        <a href="'.$img.'" title="Photo title" data-effect="mfp-zoom-in"><img src="'.$img.'"data-src="'.$img.'" alt="" class="owl-lazy"></a>
	                    </div>
	                    <!-- /item -->
	                </div>
	                <!-- /carousel -->
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	    
	    <div class="bg_white">
	        <div class="container margin_60_35">
	            <div class="row justify-content-between">
	                <div class="col-lg-6">
	                    <div class="prod_info version_2">
	                        <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4 reviews</em></span>
	                        <p><small>SKU: MTKRY-001</small><br></p>
	                        <p>'.$mota.'<p>
	                    </div>
	                </div>
	                <div class="col-lg-5">
	                    <div class="prod_options version_2">
	                        <div class="row">
	                            <label class="col-xl-7 col-lg-5  col-md-6 col-6 pt-0"><strong>Color</strong></label>
	                            <div class="col-xl-5 col-lg-5 col-md-6 col-6 colors">
	                                <ul>
	                                    <li><a href="#0" class="color color_1 active"></a></li>
	                                    <li><a href="#0" class="color color_2"></a></li>
	                                    <li><a href="#0" class="color color_3"></a></li>
	                                    <li><a href="#0" class="color color_4"></a></li>
	                                </ul>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <label class="col-xl-7 col-lg-5 col-md-6 col-6"><strong>Size</strong> - Size Guide <a href="#0" data-bs-toggle="modal" data-bs-target="#size-modal"><i class="ti-help-alt"></i></a></label>
	                            <div class="col-xl-5 col-lg-5 col-md-6 col-6">
	                                <div class="custom-select-form">
	                                    <select class="wide">
	                                        <option value="" selected="">Small (S)</option>
	                                        <option value="">M</option>
	                                        <option value=" ">L</option>
	                                        <option value=" ">XL</option>
	                                    </select>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <label class="col-xl-7 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
	                            <div class="col-xl-5 col-lg-5 col-md-6 col-6">
	                                <div class="numbers-row">
	                                    <input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
	                                    <div class="inc button_inc">+</div>
	                                    <div class="dec button_inc">-</div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row mt-3">
	                            <div class="col-lg-7 col-md-6">
	                                <div class="price_main"><span class="new_price">$148.00</span><span class="percentage">-20%</span> <span class="old_price">$160.00</span></div>
	                            </div>
	                            <div class="col-lg-5 col-md-6">
	                                <div class="btn_add_to_cart"><a href="#0" class="btn_1">Add to Cart</a></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!-- /row -->
	        </div>
	    </div>';
    ?>
	    <div class="tabs_product bg_white version_2">
	        <div class="container">
	            <ul class="nav nav-tabs" role="tablist">
	                <li class="nav-item">
	                    <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Description</a>
	                </li>
	                <li class="nav-item">
	                    <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Reviews</a>
	                </li>
	            </ul>
	        </div>
	    </div>
	    <!-- /tabs_product -->

	    <div class="tab_content_wrapper">
	        <div class="container">
	            <div class="tab-content" role="tablist">
	                <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
	                    <div class="card-header" role="tab" id="heading-A">
	                        <h5 class="mb-0">
	                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
	                                Miêu tả chi tiết
	                            </a>
	                        </h5>
	                    </div>

	                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
	                        <div class="card-body">
	                            <div class="row justify-content-between">
	                                <div class="col-lg-6">
	                                    <h3>Chi tiết</h3>
	                                    <p>Lorem ipsum dolor sit amet, in eleifend <strong>inimicus elaboraret</strong> his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.</p>
	                                    <p>Vis ei ipsum conclusionemque. Te enim suscipit recusabo mea, ne vis mazim aliquando, everti insolens at sit. Cu vel modo unum quaestio, in vide dicta has. Ut his laudem explicari adversarium, nisl <strong>laboramus hendrerit</strong> te his, alia lobortis vis ea.</p>
	                                    <p>Perfecto eleifend sea no, cu audire voluptatibus eam. An alii praesent sit, nobis numquam principes ea eos, cu autem constituto suscipiantur eam. Ex graeci elaboraret pro. Mei te omnis tantas, nobis viderer vivendo ex has.</p>
	                                </div>
	                                <div class="col-lg-5">
	                                    <h3>Specifications</h3>
	                                    <div class="table-responsive">
	                                        <table class="table table-sm table-striped">
	                                            <tbody>
	                                                <tr>
	                                                    <td><strong>Color</strong></td>
	                                                    <td>Blue, Purple</td>
	                                                </tr>
	                                                <tr>
	                                                    <td><strong>Size</strong></td>
	                                                    <td>150x100x100</td>
	                                                </tr>
	                                                <tr>
	                                                    <td><strong>Weight</strong></td>
	                                                    <td>0.6kg</td>
	                                                </tr>
	                                                <tr>
	                                                    <td><strong>Manifacturer</strong></td>
	                                                    <td>Manifacturer</td>
	                                                </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                    <!-- /table-responsive -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- /TAB A -->

              

		  </div>

	  
	                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
					<table>
				  <?php foreach($binhluan as $value): ?>
				  <tr>
					  <td><?php echo $value['NoiDung']?>  </td>
					
					  <td><?php echo date("d/m/Y", strtotime($value['NgayDang'])) ?></td>
				  </tr>
				  <?php endforeach; ?>
			  </table>
	                    <div class="card-header" role="tab" id="heading-B">
	                        <h5 class="mb-0">
	                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
	                              Bình luận
	                            </a>
	                        </h5>
	                    </div>
	                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
	                        <div class="card-body">
	                            <!-- /row -->
	                            <div class="row justify-content-between">
	                                <div class="col-lg-5">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star empty"></i><em>4.5/5.0</em></span>
	                                            <em></em>
	                                        </div>
	                                        <h4></h4>
	                                        <p></p>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- /row -->
								<div class="box_search">
	  <form action="index.php?act=sanphamct&idsp=<?=$id?>" method="POST">
		  <input type="hidden" name="id" value="<?=$id?>">
		  <input type="text" name="noidung">
		  <input type="submit" name="guibinhluan" value="Gửi bình luận">
	  </form>
	  </div>
	                        </div>
	                        <!-- /card-body -->
	                    </div>
	                    
	                </div>
	                <!-- /tab B -->
	            </div>
	            <!-- /tab-content -->
	        </div>
	        <!-- /container -->
	    </div>
	    <!-- /tab_content_wrapper -->

	    <div class="bg_white">
	        <div class="container margin_60_35">
			<div class="main_title">
  <h2>SẢN PHẨM CÙNG LOẠI</h2>
</div>

<div class="owl-carousel owl-theme products_carousel">

  <?php
  
    if(!empty($sanpham_cungloai)){
    
      $i=0;
      
      foreach ($sanpham_cungloai as $sp) {
      
        $i++;
        
        extract($sp);
        
        $hinh = $img_path.$img; 
        
        $linksp = "index.php?act=sanphamct&idsp=" . $id;
        
       echo '
       <div class="item">
         
         <div class="grid_item">
           
           <span class="ribbon off">-50%</span>
           
           <figure>
             <a href="'.$linksp.'">
               <img class="img-fluid lazy" src="'.$hinh.'" alt="'.$name.'">
             </a>
           </figure>
           
           <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
           
           <a href="'.$linksp.'">'.$name.'</a>
           
           <div class="price_box">
             <span class="new_price">'.number_format($price).'đ</span>  
             <span class="old_price"></span>
           </div>
           
           <ul>
             <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
             <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
             <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
           </ul>
           
         </div>
         
       </div>';
       
       }
       
     }else{
       
       echo 'Không có sản phẩm cùng loại';
       
     }
     
   ?>
	                <!-- /item -->
	            </div>
	            <!-- /products_carousel -->
	        </div>
	        <!-- /container -->
	    </div>
	    <!-- /bg_white -->

	</main>
</body>