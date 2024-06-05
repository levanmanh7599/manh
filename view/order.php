<style>
    h2{margin-bottom: 20px;font-size: 24px;text-align: center;}
    input[type="text"],input[type="tel"],input[type="email"]{padding: 8px 10px;width: 300px;margin-bottom: 10px;}
    input[type="submit"]{padding: 10px 20px;margin-top: 15px;}
    .page-order{display: flex;}
    .form-order{width: 70%;}
    .sub-order{width: 30%;}
    .sub-order td,.sub-order th{padding: 5px;}
    .sub-order td:first-child,.sub-order th:first-child{width: 70%;}
    .sub-order td:last-child,.sub-order th:last-child{text-align: right;}
    :root{
  --white-color:#fff;
  --black-color:#000;
  --text-color:#333;
}


form{
  text-align:center;
}
.form_li a{
  text-decoration: none;
  color:aqua;
}
.form_li a:hover{
  text-decoration: underline;
  color:red;
}
.form_li{
 list-style: none;
}
.form_account{
line-height: 150%;
}
.form_account input[type="email"],
.form_account input[type="text"],
.form_account input[type="password"],
.form_content input[type="text"]{
width:100%;
border:1px solid #ccc;
border-radius:5px ;
padding:6px 10px;
margin-bottom:12px;
}
.form_account input[type="checkbox"]{
border-radius:5px ;
}
.form_account input[type="reset"],
.form_account input[type="submit"],
.form_content input[type="submit"],
.form_content input[type="reset"],
.form_content input[type="button"]{
  padding:6px;
  background:white;
  border:1px solid #CCC;
  border-radius:5px;
}
.form_account input[type="submit"]:hover,
.form_content input[type="submit"]:hover,
.form_content input[type="reset"]:hover,
.form_content input[type="button"]:hover{
  background:#CCC;
}
#order_confirm{
  margin-bottom: 20px;  
}


.form-order { padding-right: 20px; }

.sub-order { padding-left: 20px; }

input, textarea {  padding: 12px; border: 1px solid #ccc; border-radius: 4px;  }

h2, h3 { margin: 0 0 10px; }

table { width: 100%; border-collapse: collapse;
}

td, th { padding: 8px; border: 1px solid #ddd; }

#order_confirm {  background-color: blue; color: white; padding: 10px;  }
</style>
<div class="page-order">
    <div class="form-order">
        <form action="" method="post">
            <h2>Thông tin khách hàng</h2>
            <div><input type="text" name="txthoten" id="" placeholder="Họ và tên" required></div>
            <div><input type="tel" name="txttel" id="" placeholder="Số điện thoại" required></div>
            <div><input type="email" name="txtemail" id="" placeholder="Email" required></div>
            <div><input type="text" name="txtaddress" id="" placeholder="Địa chỉ" required></div>
            <h3>Phương thức thanh toán</h3>
            <p><input type="radio" name="pttt" id="" value="1" required> Thanh toán khi giao hàng</p>
            <p><input type="radio" name="pttt" id="" value="2" required> Chuyển khoản ngân hàng</p>
            <input type="submit" value="Xác nhận đặt hàng" name="order_confirm" id="order_confirm">
        </form>
    </div>
    <div class="sub-order">
        <h2>Đơn hàng</h2>
        <table >
            <tr>
                <th>Sản phẩm</th>
                <th>Thành tiền</th>
            </tr>
            <?php 
                // print_r($cart);
                foreach ($cart as $item) {
            ?>
            <tr>
                <td>
                    <?php echo $item['name'];?><br>
                    <small>SL: <?php echo $item['quantity'];?></small>
                </td>
                <td><?php echo number_format($item['quantity']*$item['price'], 0, ",", "."); ?> ₫</td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td><b>Tổng tiền</b></td>
                <td><b><?php echo number_format($_SESSION['resultTotal'], 0, ",", "."); ?> ₫</b></td>
            </tr>
        </table>
    </div>
</div>
