<style>
input[type="text"], select {
    float: left;
    margin: 10px 0;
    padding: 3px;
    border: 1px solid black;
    border-radius: 5px;
}

input[type="submit"] {
    float: left;
}
.listok{
    margin-top: 10px;
    padding: 3px;
    border: 1px solid black;
    border-radius: 5px;
}
</style>
<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH SẢN PHẨM </h1>
         </div>
         <form action="index.php?act=listsp" method="post" style="margin: 30px 0px;">
            <input type="text" name=kyw >
            <select name="iddm" >
            <option value="0" selected>Tất cả</option>
                <?php   
                 foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                  }
                ?>
            </select>
            <input name="listok" type="submit" value="GO" class="listok">
            
            </form>
         <div class="row2 form_content ">

          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
        

           <table>
            <tr>
                <th></th>
                <th>MÃ SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>HÌNH</th>
                <th>GIÁ GỐC</th>
                <th>GIÁ KHUYẾN MÃI</th>
                <th>MÀU SẮC </th>
                <th>KÍCH THƯỚC</th>
                <th>SỐ LƯỢNG</th>
                <th>CHỨC NĂNG</th>
 
            </tr>
            <?php
                        $currentPage = isset($_GET['trang']) ? $_GET['trang'] : 1;
                        $recordperpage = 3;
                        $totalrecords = count($listsanpham);
                        $totalpages = ceil($totalrecords / $recordperpage);
                        $start = ($currentPage - 1) * $recordperpage; 
                        $Products = array_slice($listsanpham, $start, $recordperpage);
            foreach($Products as $sanpham){
                extract($sanpham);
                $suasp="index.php?act=suasp&id=".$id;
                $xoasp="index.php?act=xoasp&id=".$id;
                $hinhpath="../upload/".$img;
                if(is_file($hinhpath)){
                    $hinh="<img src='".$hinhpath."' height='80'>";
                }else{
                    $hinh="....";
                }
                
                echo 
                '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$hinh.'</td>
                <td>'.$price.'</td>
                <td>'.$GiaKhuyenMai.'</td>
                <td>'.$MauSac.'</td>
                <td>'.$KichThuoc.'</td>
                <td>'.$SoLuong.'</td>
                <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                </tr>';
            }

            ?>
                      
            
           </table>
           <?php
                       echo '<div class="page-link">';
                       if($currentPage > 1){
                           echo '<a class="" href="index.php?act=listsp&trang='.($currentPage-1).'"><</a>';
                       } 
                       for($i=1; $i<=$totalpages; $i++){
                           $activeClass = ($i == $currentPage) ? "active" : "";
                           echo '<a class=" ' . $activeClass . '" href="index.php?act=listsp&trang=' . $i . '">' . $i . '</a>';
                       }
                       if($currentPage < $totalpages){
                           echo '<a class="" href="index.php?act=listsp&trang='.($currentPage+1).'">></a>';
                       }
                       echo '</div>';
           ?>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>



       
    </div>