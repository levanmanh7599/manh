<style>
.status-pending {
  color: orange;
}

.status-in-progress {
  color: blue; 
}

.status-processing {
  color: green;
}

.status-completed {
  color: black;
}

</style>
<div class="row2">
         <div class="row2 font_title">
<h1>DANH SÁCH DƠN HÀNG

</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=hoadon" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr> 
                <th>ID</th> 
                <th>UserName</th> 
                <th>Phone</th> 
                <th>Email</th> 
                <th>Address</th> 
                <th>Total</th> 
                <th>Payment</th> 
                <th>Order Date</th> 
                <th>Status</th>
                <th>Update</th> 
                <th></th>
            </tr>
            <?php     
            foreach($orders as $order){
                extract($order);
                $suahd="index.php?act=suahd&id_order=".$id_order;
                $xoahd="index.php?act=xoahd&id_order=".$id_order;
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
                if(isset($_POST['submit'])) {
                  $statuses = [
                    0 => 'Chưa xử lý',
                    1 => 'Đang xử lý',
                    2 => 'Đang vận chuyển',
                    3 => 'Đã hoàn thành'  
                  ];
                  $orderId = $order['id_order'];

                  $selectedStatus = $_POST['status'];
              
                  $selectedStatusName = $statuses[$selectedStatus];
              
                  $trangthai = $selectedStatusName;
              
                  $sql = "UPDATE tbl_order SET trangthai = '$selectedStatus' WHERE id_order = '$orderId'";
              
                }
                $class = "status-$trangthai";              
                echo '<tr>             
       <td>'.$id_user.'</td>
       <td>'.$hoten.'</td>
       <td>'.$sdt.'</td>
       <td>'.$email.'</td>
       <td>'.$diachi.'</td>
       <td>'.$tongtien.'</td>
       <td>'.$pttt.'</td>
       <td>'.$ngaydathang.'</td>
       <td><span class="'.$class.'">'.$trangthai.'</span></td>
       <td>
        <a href="'.$suahd.'"><input type="button" value="Sửa"></a>
        <a href="'.$xoahd.'"><input type="button" value="Xóa"></a>
       </td>
       
      </tr>';
            }          
            ?>               
           </table>
           <div class="row mb10 " style="margin-top: 20px;">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <a href=""> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>

<form method="post">
<select name="status">
  <?php
  foreach($statuses as $statusCode => $statusName) {
    echo "<option value='$statusCode'>$statusName</option>"; 
  }
  ?>
</select>

<button type="submit" name="submit">Cập nhật</button>
</form>



        </form>
         </div>
</div>