<?php

function insert_sanpham($tensp,$giasp,$hinh,$mota,$MauSac,$kichThuoc,$SoLuong,$NgayDang,$iddm){
    $sql="insert into sanpham(name,price,img,mota,MauSac,KichThuoc,SoLuong,NgayDang,iddm) values('$tensp','$giasp','$hinh','$mota','$MauSac','$kichThuoc','$SoLuong','$NgayDang','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);
}

function loadall_sanpham_top10(){
    $sql="select*from sanpham where 1 order by SoLuong desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_home(){
    $sql="select*from sanpham where 1 order by id desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
} 

function loadone_sanphamCart($idList){
    $sql ='SELECT * FROM sanpham WHERE id IN ('. $idList . ')';
    $sanpham = pdo_query($sql);
    return $sanpham;
}

function load_tendm($iddm){
    $sql="select*from danhmuc where id=".$iddm;
    $dm=pdo_query_one($sql);
    return $dm;
}
function loadall_sanpham($keyw="",$iddm=0){
    $sql="select*from sanpham where 1";
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
     $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id){
    $sql="select*from sanpham where id=".$id;
    $sanpham=pdo_query_one($sql);
    return $sanpham;
}

function load_sanpham_cungloai($id,$iddm){
    $sql="select*from sanpham where iddm=".$iddm." AND id <>".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh,$GiaKhuyenMai,$MauSac,$kichThuoc,$SoLuong,$NgayDang){
    if($hinh!=""){
        // $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        $sql=  "UPDATE `sanpham` SET `name` = '{$tensp}', `price` = '{$giasp}', `mota` = '{$mota}',`img` = '{$hinh}', `iddm` = '{$iddm}',`GiaKhuyenMai` = '{$GiaKhuyenMai}',`MauSac` = '{$MauSac}',`kichThuoc` = '{$kichThuoc}',`SoLuong` = '{$SoLuong}',`NgayDang` = '{$NgayDang}' WHERE `sanpham`.`id` = $id";
    }else{
        //  $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        $sql=  "UPDATE `sanpham` SET `name` = '{$tensp}', `price` = '{$giasp}', `mota` = '{$mota}', `iddm` = '{$iddm}',`GiaKhuyenMai` = '{$GiaKhuyenMai}',`MauSac` = '{$MauSac}',`kichThuoc` = '{$kichThuoc}',`SoLuong` = '{$SoLuong}',`NgayDang` = '{$NgayDang}' WHERE `sanpham`.`id` = $id";
    }
    pdo_execute($sql);
}


?>