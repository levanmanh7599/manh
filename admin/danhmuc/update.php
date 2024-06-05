<?php
if (isset($dm) && is_array($dm)) {
    extract($dm);
} else {
    $dm = array(); // Hoặc thực hiện xử lý khác cho trường hợp biến $dm chưa được khai báo
}
?>

<div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatedm" method="POST">
           <div class="row2 mb10 form_content_container">

           <label> Mã loại </label> <br>
            <input type="text" name="maloai" placeholder="nhập vào mã loại" value="<?php if(isset($id)&&($id!="")) echo $id ;?>">
            <?php if(isset($errors) && in_array("Mã loại không được quá 10 ký tự.", $errors)) echo "<span class='error'>Mã loại không được quá 10 ký tự.</span>"; ?>
            <?php if(isset($errors) && in_array("Mã loại chỉ được chứa ký tự và số.",$errors)) echo "<span class='error'>Mã loại chỉ được chứa ký tự và số.<span>"; ?>
           </div>

           <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="tenloai" placeholder="nhập vào tên"  value="<?php if(isset($name)&&($name!="")) echo $name ;?>">
            <?php if(isset($errors) && in_array("Tên loại không được để trống.", $errors)) echo "<span class='error'>Tên loại không được để trống.</span>"; ?>
                <?php if(isset($errors) && in_array("Tên loại không được quá 50 ký tự.", $errors)) echo "<span class='error'>Tên loại không được quá 50 ký tự.</span>"; ?>
           </div>

           <div class="row2 mb10">
           <label>Trạng thái </label> <br>
            <input type="text" name="trangthai" placeholder="nhập vào trạng thái" value="<?php if(isset($TrangThai)&&($TrangThai!="")) echo $TrangThai ;?>" >
            <?php if(isset($errors) && in_array("Trạng thái không được để trống.",$errors)) echo "<span class='error'>Trạng thái không được để trống.</span>"; ?>
                <?php if(isset($errors) && in_array("Trạng thái không được quá 20 ký tự.",$errors)) echo "<span class='error'>Trạng thái không được quá 20 ký tự.</span>"; ?>
           </div>

           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>" >
         <input class="mr20" type="submit" value="Cập Nhật" name='capnhat'>
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=lisdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php 
         
           ?>
          </form>
         </div>
        </div>
     <!-- END HEADER -->
    </div>