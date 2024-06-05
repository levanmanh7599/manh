<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data" >

           <div class="row2 mb10 form_content_container">
           <label> Danh mục </label> <br>
            <select name="iddm" id="" style="float:left;">
                <?php
                foreach($listdanhmuc as $danhmuc){
                  extract($danhmuc);
                  echo '<option value="'.$id.'">'.$name.'</option>';
                }
                ?>
                
            </select>
           </div>

           <div class="row2 mb10">
    <label>Tên sản phẩm</label><br>
    <input type="text" name="tensp" placeholder="nhập vào tên">
    <?php
    if (isset($errors) && in_array("Vui lòng nhập tên sản phẩm", $errors)) {
        echo "<span style='color:red;'>Vui lòng nhập tên sản phẩm</span>";
    } elseif (isset($errors) && in_array("Tên sản phẩm không được vượt quá 100 ký tự", $errors)) {
        echo "<span style='color:red;'>Tên sản phẩm không được vượt quá 100 ký tự</span>";
    }
    ?>
</div>

<div class="row2 mb10">
    <label>Giá sản phẩm</label><br>
    <input type="text" name="giasp" placeholder="nhập vào giá">
    <?php
    if (isset($errors) && in_array("Vui lòng nhập giá sản phẩm", $errors)) {
        echo "<span style='color:red;'>Vui lòng nhập giá sản phẩm</span>";
    } elseif (isset($errors) && in_array("Giá sản phẩm phải là một số dương",$errors)) {
        echo "<span style='color:red;'>Giá sản phẩm phải là một số dương</span>";
    }
    ?>
</div>

<div class="row2 mb10">
    <label>Hình ảnh sản phẩm</label><br>
    <input type="file" name="hinh" placeholder="nhập vào hình ảnh" style="float:left">
    <?php
    if (isset($errors) && in_array("Vui lòng chọn hình ảnh",$errors)) {
        echo "<span style='color:red;'>Vui lòng chọn hình ảnh</span>";
    }
    ?>
</div>

<div class="row2 mb10">
    <label>Mô tả sản phẩm</label><br>
    <textarea name="mota" id="mota" cols="30" rows="10" style="float:left; width:100%;"></textarea>
    <?php
    if (isset($errors) && in_array("Vui lòng nhập mô tả sản phẩm", $errors)) {
        echo "<span style='color:red;'>Vui lòng nhập mô tả sản phẩm</span>";
    }
    ?>
</div>

<div class="row2 mb10">
    <label>Màu sắc</label><br>
    <input type="text" name="mausac" placeholder="nhập vào màu sắc">
    <?php
    if (isset($errors) && in_array("Vui lòng chọn màu sắc sản phẩm",$errors)) {
        echo "<span style='color:red;'>Vui lòng chọn màu sắc sản phẩm</span>";
    } 
    ?>
</div>

<div class="row2 mb10">
    <label>Kích thước</label><br>
    <input type="text" name="kichthuoc" placeholder="nhập vào kích thước">
    <?php
    if (isset($errors) && in_array("Vui lòng nhập kích thước sản phẩm",$errors)) {
        echo "<span style='color:red;'>Vui lòng nhập kích thước sản phẩm</span>";
    } 
    ?>
</div>

<div class="row2 mb10">
    <label>Số lượng sản phẩm</label><br>
    <input type="text" name="soluong" placeholder="nhập vào số lượng">
    <?php
    if (isset($errors) && in_array("Số lượng sản phẩm phải là một số dương",$errors)) {
        echo "<span style='color:red;'>Số lượng sản phẩm phải là một số dương</span>";
    }
    ?>       
</div>

<div class="row2 mb10">
    <label>Ngày đăng </label> <br>
    <input type="date" name="ngaydang" style="float:left;">
    <?php
    if (isset($errors) && in_array("Vui lòng chọn ngày đăng sản phẩm",$errors)) {
        echo "<span style='color:red;'>Vui lòng chọn ngày đăng sản phẩm</span>";
    }
    ?> 
</div>


<div class="row mb10 ">
    <input class="mr20" type="submit" value="THÊM MỚI" name='themmoi'>
    <input class="mr20" type="reset" value="NHẬP LẠI">

    <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
</div>
<?php
if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
?>
</form>
</div>
</div>
<!-- END HEADER -->
</div>
