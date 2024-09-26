<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH BÌNH LUẬN</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=dsbl" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>ID_BL</th>
                <th>Nội dung bình luận</th>
                <th>idUser</th>
                <th>id</th>
                <th>Ngày bình luận</th>
    
                <th></th>
            </tr>
            <?php
              foreach ($listbinhluan as $binhluan){
                extract($binhluan);
                $suabl="index.php?act=suabl&ID_BL=".$ID_BL;
                $xoabl="index.php?act=xoabl&ID_BL=".$ID_BL;
                echo ' <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$ID_BL.'</td>
                <td>'.$NoiDung.'</td>
                <td>'.$ID_User.'</td>
                <td>'.$id .'</td>
                <td>'.$NgayDang.'</td>
                <td> 
                  <a href=" '.$xoabl.'"> <input type="button" value="Xóa"  </a>
                 </td>
                </tr>';
              }

            ?>
              
           </table>
           </div>
           <div class="row mb10 ">

           </div>
          </form>
         </div>
        </div>
