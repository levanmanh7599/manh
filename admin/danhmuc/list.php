
<div class="row2">
         <div class="row2 font_title" style="margin-bottom: 20px;">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=lisdm" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th>TRẠNG THÁI</th>
                <th></th>
            </tr>
            <?php
 
            $currentPage = isset($_GET['trang']) ? $_GET['trang'] : 1;
            $recordperpage = 2;
            $totalrecords = count($listdanhmuc);
            $totalpages = ceil($totalrecords / $recordperpage);
            $start = ($currentPage - 1) * $recordperpage; 
            $Products = array_slice($listdanhmuc, $start, $recordperpage);
            foreach($Products as $danhmuc){
                extract($danhmuc);
                $suadm="index.php?act=suadm&id=".$id;
                $xoadm="index.php?act=xoadm&id=".$id;
                echo 
                '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$TrangThai.'</td>
                <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                </tr>';
            }

            ?>
           </table>
           <?php
                       echo '<div class="page-link">';
                       if($currentPage > 1){
                           echo '<a class="" href="index.php?act=lisdm&trang='.($currentPage-1).'"><</a>';
                       } 
                       for($i=1; $i<=$totalpages; $i++){
                           $activeClass = ($i == $currentPage) ? "active" : "";
                           echo '<a class=" ' . $activeClass . '" href="index.php?act=lisdm&trang=' . $i . '">' . $i . '</a>';
                       }
                       if($currentPage < $totalpages){
                           echo '<a class="" href="index.php?act=lisdm&trang='.($currentPage+1).'">></a>';
                       }
                       echo '</div>';
           ?>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ" name="select_all">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ" name="deselect_all">
<a href="index.php?act=adddm"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>    
    </div>