<?php
if(is_array($hd)){
    extract($hd);
}
switch($trangthai){
  case 0:
    $trangthai = "Chưa xử lý";
    $class = "status-pending";
    break;             
  case 1:
    $trangthai = "Đang xử lý";
    $class = "status-in-progress"; 
    break;              
  case 2:  
    $trangthai = "Đang vận chuyển";
    $class = "status-processing";
    break;                
  case 3:
    $trangthai = "Đã hoàn thành";
    $class = "status-completed";
    break;
}


?>

<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT ĐƠN HÀNG</h1>
    </div>
    <div class="row2 form_content ">
    <form action="index.php?act=updatedh" method="post">

    <p style="float: left;">id_user</p><br>
          <div >
            <input style="float: left;" type="user" name="iduser"  value="<?=$id_user?>">
          </div>
       <br><br>

    <p style="float: left;">Họ tên</p><br>
          <div >
            <input style="float: left;" type="user" name="user"  value="<?=$hoten?>">
          </div>
       <br><br>

          <div>
            <p style="float: left;">Email</p><br>
            <input style="float: left;" type="email" name="email" value="<?=$email?>">
          </div><br><br>

          <div>
            <p style="float: left;">Tổng tiền</p>
            <input type="text" name="tongtien" value="<?=$tongtien?>">
          </div>

          <p style="float: left;">Địa chỉ</p>
          <div >
            <input type="text" name="diachi"  value="<?=$diachi?>">
          </div>

          <p style="float: left;">Điện thoại</p>
          <div >
            <input type="tel" name="sdt"  value="<?=$sdt?>">
          </div><br>

          <p style="float: left;">Phương thức thanh toán</p>
          <div >
            <input type="text" name="pttt"  value="<?=$pttt?>">
          </div>

          <p style="float: left;">Trạng thái</p>
          <div >
            <input type="text" name="tt"  value="<?=$trangthai?>">
          </div>

          <input type="hidden" name="id" value="<?=$id_order?>">
          <input type="submit" value="Cập nhật" name="capnhat">
          <input type="reset" value="Nhập lại">

          <a href="index.php?act=hoadon">  <input  class="mr20" type="button" value="DANH SÁCH"></a>
        </div>
        <?php
        if(isset($thongbao)&&($thongbao!=""))echo $thongbao;

        ?>

        </form>
    </div>
</div>