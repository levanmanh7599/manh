<main class="catalog  mb ">
  <div class="container margin_30">
      <div class="page_header">
        <div class="breadcrumbs">
          <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
          </ul>
      </div>
    </div>
    <div class="boxtitle">Quên mật khẩu</div>
            <div class=" row boxcontent formtaikhoan">
                <form action="index.php?act=quenmk" method="post" >
                    <div class="row mb10">
                        Email
                        <input type="email" name="Email" >
                    </div>

                    <div class="row mb10">
                        <input type="submit" value="Gửi" name="guiemail">    
                      
                    </div>
                </form>

            <h2 class="thongbao">
                    <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }
                    ?>
                </h2>
            </div>
        </div>
</main>