<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH TÀI KHOẢN</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=dskh" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>MÃ TK</th>
                <th>TÊN ĐĂNG NHẬP</th>
                <th>MẬT KHẨU</th>
                <th>EMAIL</th>
                <th>ĐỊA CHỈ</th>
                <th>ĐIỆN THOẠI</th>
                <th>VAI TRÒ</th>
                <th>CHỨC NĂNG</th>
                <th></th>
            </tr>
            <?php
            foreach($listtaikhoan as $taikhoan){
                extract($taikhoan);
                $suatk="index.php?act=suatk&id_user=".$id_user;
                $xoatk="index.php?act=xoatk&id_user=".$id_user;
                echo 
                '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id_user.'</td>
                <td>'.$HoTen.'</td>
                <td>'.$MatKhau.'</td>
                <td>'.$Email.'</td>
                <td>'.$DiaChi.'</td>
                <td>'.$SoDienThoai.'</td>
                <td>'.$PhanQuyen.'</td>
                <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                </tr>';
            }

            ?>               
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <a href="#"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>



       
    </div>