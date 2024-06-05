<?php

function addOrder($id_user, $hoten, $sdt, $email, $diachi, $tongtien, $pttt){
    $sql="INSERT INTO tbl_order (id_user, hoten, sdt, email, diachi, tongtien, pttt) VALUES ($id_user, '$hoten', '$sdt', '$email', '$diachi', $tongtien, $pttt);";
    $id=pdo_executeid($sql);
    return $id;
}

function addOrderDetail($id_order, $id_pro, $giamua, $soluong, $thanhtien){
    $sql="INSERT INTO order_detail (id_order, id_pro, giamua, soluong, thanhtien) VALUES ($id_order, $id_pro, $giamua, $soluong, $thanhtien );";
    pdo_execute($sql);
}

function getOrders() {
    // Truy vấn dữ liệu đơn hàng
    $sql = "SELECT * FROM tbl_order order by id_order desc";
    $orders = pdo_query($sql);
    return $orders;
  
  }

  function delete_Orders($id_order){
    $sql="delete from tbl_order where id_order=".$id_order;
    pdo_execute($sql);
}

function update_Orders($id_order,$id_user,$hoten,$sdt,$email,$diachi,$tongtien,$pttt,$trangthai){
    $sql="update tbl_order set id_user='".$id_user."', hoten='".$hoten."', sdt='".$sdt."', email='".$email."', diachi='".$diachi."', tongtien='".$tongtien."',pttt='".$pttt."',trangthai='".$trangthai."' where id_order=".$id_order;
    pdo_execute($sql);
}

function loadone_Orders($id_order){
    $sql="select*from tbl_order where id_order=".$id_order;
    $hd=pdo_query_one($sql);   
    return $hd;
}

?>