<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=adddm" method="POST">
            <div class="row2 mb10 form_content_container">
                <label> Mã loại </label> <br>
                <input type="text" name="maloai" placeholder="nhập vào mã loại">
                <?php if(isset($errors) && in_array("Mã loại không được để trống.", $errors)) echo "<span class='error' style='color:red;'>Mã loại không được để trống.</span>"; ?>
                <?php if(isset($errors) && in_array("Mã loại không được quá 10 ký tự.", $errors)) echo "<span class='error' style='color:red;'>Mã loại không được quá 10 ký tự.</span>"; ?>
                <?php if(isset($errors) && in_array("Mã loại chỉ được chứa ký tự và số.", $errors)) echo "<span class='error' style='color:red;'>Mã loại chỉ được chứa ký tự và số.</span>"; ?>
            </div>

            <div class="row2 mb10">
                <label>Tên loại </label> <br>
                <input type="text" name="tenloai" placeholder="nhập vào tên" >
                <?php if(isset($errors) && in_array("Tên loại không được để trống.", $errors)) echo "<span class='error' style='color:red;'>Tên loại không được để trống.</span>"; ?>
                <?php if(isset($errors) && in_array("Tên loại không được quá 50 ký tự.", $errors)) echo "<span class='error' style='color:red;'>Tên loại không được quá 50 ký tự.</span>"; ?>
            </div>

            <div class="row2 mb10">
                <label>Trạng thái </label> <br>
                <input type="text" name="trangthai" placeholder="nhập vào trạng thái" >
                <?php if(isset($errors) && in_array("Trạng thái không được để trống.", $errors)) echo "<span class='error' style='color:red;'>Trạng thái không được để trống.</span>"; ?>
                <?php if(isset($errors) && in_array("Trạng thái không được quá 20 ký tự.", $errors)) echo "<span class='error' style='color:red;'>Trạng thái không được quá 20 ký tự.</span>"; ?>
            </div>

            <div class="row mb10 ">
                <input class="mr20" type="submit" value="THÊM MỚI" name='themmoi'>
                <input  class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=lisdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>


