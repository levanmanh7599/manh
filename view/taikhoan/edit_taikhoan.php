  <main class="bg_gray">
      
    <div class="container margin_30">
      <div class="page_header">
        <div class="breadcrumbs">
          <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="index.php?act=edit_taikhoan">Thông tin tài khoản</a></li>
          </ul>
      </div>
    </div>

        <div class="col-xl-6 col-lg-6 col-md-8">
				  <div class="box_account">
					  <h3 class="new_client">Cập nhập tài khoản</h3><br>
            
            <?php
              if(isset($_SESSION['Email'])&&(is_array($_SESSION['Email']))){
                extract($_SESSION['Email']);
              }
            ?>
            
            <form action="index.php?act=edit_taikhoan" method="post">
					    
              <div class="form_container">
                  <div class="form-group">
                    <input type="email" class="form-control" name="Email"  placeholder="Email*">
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control" name="MatKhau" placeholder="Mật khẩu*">
                  </div>

                  <div class="private box">
                    <div class="row no-gutters">
                    <div class="col-6 pr-1">
                      <div class="form-group">
                        <input type="text" class="form-control" name="HoTen" placeholder="Họ và tên*">
                      </div>
                    </div>
                    <div class="col-6 pl-1">
                      <div class="form-group">
                        <input type="text" class="form-control" name="SoDienThoai" placeholder="Số điện thoại*">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="DiaChi" placeholder="Địa chỉ*">
                      </div>
                    </div>
                  </div>

                  </div>
                    <input type="hidden" name="ID_User" value="<?=$ID_User?>">
                    <div class="text-center"><input type="submit" value="Cập nhập" name="capnhat" class="btn_1 full-width"></div>
                  </div>
                </form>

              </div>

						</div>

					</div>

        <h3 class="thongbao">
          <?php
            if(isset($thongbao)&&($thongbao!="")){
                  echo $thongbao;
            }
          ?>
        </h3>
      </main>  
         