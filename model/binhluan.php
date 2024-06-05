<?php 
    function loadall_binhluan($id){
        $sql = "
          select * from binhluan where 1
        ";
        if($id>0)
        $sql.=" AND id='".$id."'";
        $sql.=" order by id desc";
        $listbl =  pdo_query($sql);
        return $listbl;
    }
    function insert_binhluan($id, $NoiDung){
        $date = date('Y-m-d');
        $sql = "
            INSERT INTO `binhluan`(`NoiDung`, `ID_User`, `id`, `NgayDang`) 
            VALUES ('$NoiDung','2','$id','$date');
        ";
        pdo_execute($sql);
    }
    function delete_binhluan($ID_BL){
        $sql="delete from binhluan where ID_BL=".$ID_BL;
        pdo_execute($sql);
    }

    ?>
