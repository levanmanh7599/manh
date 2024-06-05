<?php
    function insert_taikhoan($Email, $HoTen, $MatKhau,$SoDienThoai,$DiaChi){
        $sql="insert into user(Email,HoTen,MatKhau,SoDienThoai,DiaChi) values('$Email' , '$HoTen', '$MatKhau','$SoDienThoai','$DiaChi')";
        pdo_execute($sql);
    }

    function checkuser($Email, $MatKhau){
        $sql="select * from user where Email='".$Email."' AND MatKhau='".$MatKhau."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }   

    function update_taikhoan($id_user,$HoTen,$MatKhau,$Email,$DiaChi,$SoDienThoai){
        $sql="update user set HoTen='".$HoTen."', MatKhau='".$MatKhau."', Email='".$Email."', DiaChi='".$DiaChi."', SoDienThoai='".$SoDienThoai."' where id_user=".$id_user;
        pdo_execute($sql);
    }

    function checkemail($Email){
        $sql="select * from user where Email='".$Email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }   

    function loadall_taikhoan(){
        $sql = "select * from user order by ID_User desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function delete_taikhoan($id_user){
        $sql="delete from user where id_user=".$id_user;
        pdo_execute($sql);
    }
    function loadone_taikhoan($id_user){
        $sql="select*from user where id_user=".$id_user;
        $tk=pdo_query_one($sql);   
        return $tk;
    }
?>