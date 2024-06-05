<?php
if(is_array($tk)){
    extract($tk);
}
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT TÀI KHOẢN</h1>
    </div>
    <div class="row2 form_content ">
    <form action="index.php?act=updatetk" method="post">
          <div>
            <p style="float: left;">Email</p><br>
            <input style="float: left;" type="email" name="email" value="<?=$Email?>">
          </div><br><br>

          <div>
            <p style="float: left;">Tên đăng nhập</p>
            <input type="text" name="user" value="<?=$HoTen?>">
          </div>

          <p style="float: left;">Mật khẩu</p><br>
          <div >
            <input style="float: left;" type="password" name="pass"  value="<?=$MatKhau?>">
          </div>
       <br><br>

          <p style="float: left;">Địa chỉ</p>
          <div >
            <input type="text" name="address"  value="<?=$DiaChi?>">
          </div>

          <p style="float: left;">Điện thoại</p>
          <div >
            <input type="text" name="tel"  value="<?=$SoDienThoai?>">
          </div>

          <input type="hidden" name="id" value="<?=$id_user?>">
          <input type="submit" value="Cập nhật" name="capnhat">
          <input type="reset" value="Nhập lại">

          <a href="index.php?act=dskh">  <input  class="mr20" type="button" value="DANH SÁCH"></a>
        </div>
        <?php
        if(isset($thongbao)&&($thongbao!=""))echo $thongbao;

        ?>

        </form>
    </div>
</div>