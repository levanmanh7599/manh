<?php
session_start();
ob_start();

include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "model/order.php";
include "view/header.php";
include "global.php";

$spnew=loadall_sanpham_home();
$dsdm=loadall_danhmuc();
$dstop10=loadall_sanpham_top10();


if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case "listCart":
            // Kiểm tra xem giỏ hàng có dữ liệu hay không
            if (!empty($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];

                // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
                $productId = array_column($cart,'id');
                
                // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
                $idList = implode(',',$productId);
                
                // Lấy sản phẩm trong bảng sản phẩm theo id
                $dataDb = loadone_sanphamCart($idList);
                // var_dump($dataDb);
            }
            include "view/listCartOrder.php";
            break;
            case "sanpham":
                if ((isset($_POST['kyw']) && ($_POST['kyw'] != ""))) {
                    $keyw = $_POST['kyw'];
                } else {
                    $keyw = "";
                }
                if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                    $iddm = $_GET['iddm'];
                } else {
                    $iddm = 0;
                }
                $dssp = loadall_sanpham($keyw, $iddm);
                $tendm = load_tendm($iddm);
                include "view/sanpham.php";
                break;
            case "order":
                if (isset($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];
                    // print_r($cart);
                    if (isset($_POST['order_confirm'])) {
                        $txthoten = $_POST['txthoten'];
                        $txttel = $_POST['txttel'];
                        $txtemail = $_POST['txtemail'];
                        $txtaddress = $_POST['txtaddress'];
                        $pttt = $_POST['pttt'];
                        // date_default_timezone_set('Asia/Ho_Chi_Minh');
                        // $currentDateTime = date('Y-m-d H:i:s');
                        if (isset($_SESSION['user'])) {
                            $id_user = $_SESSION['user']['id'];
                        } else {
                            $id_user = 0;
                        }
                        $idBill = addOrder($id_user,$txthoten,$txttel,$txtemail,$txtaddress,$_SESSION['resultTotal'],$pttt);
                        foreach ($cart as $item) {
                            addOrderDetail($idBill, $item['id'], $item['price'], $item['quantity'], $item['price'] * $item['quantity']);
                        }
                        unset($_SESSION['cart']);
                        $_SESSION['success'] = $idBill;
                        header("Location: index.php?act=success");
                    }
                    include "view/order.php";
                } else {
                    header("Location: index.php?act=listCart");
                }
                break;
            case "success":
                if (isset($_SESSION['success'])) {
                    include 'view/success.php';
                } else {
                    header("Location: index.php");
                }
                break;
        
        case 'sanphamct':
                if(isset($_POST['guibinhluan'])){
                    insert_binhluan($_POST['id'], $_POST['noidung']);
                }
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                $id=$_GET['idsp'];           
                $onesp=loadone_sanpham($id);
                extract($onesp);
                $sanpham_cungloai=load_sanpham_cungloai($id,$iddm);
                $binhluan= loadall_binhluan($id);
                include "view/sanphamct.php";
                }else{
                    include "view/home.php"; 
                }

        break;

        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky']>0)){
                $Email=$_POST['Email'];
                $HoTen=$_POST['HoTen'];
                $MatKhau=$_POST['MatKhau'];
                $SoDienThoai=$_POST['SoDienThoai'];
                $DiaChi=$_POST['DiaChi'];
                insert_taikhoan($Email,$HoTen,$MatKhau,$SoDienThoai,$DiaChi);
                $thongbao="Đã đăng ký thành công vui lòng đăng nhập để thực hiện chứ năng";
            }    
            include "view/taikhoan/dangky.php";
            break;

        case 'dangnhap':
            if((isset($_POST['dangnhap']))&&($_POST['dangnhap']>0)){
                $Email = $_POST['Email'];
                $MatKhau = $_POST['MatKhau'];
                $checkuser=checkuser($Email, $MatKhau);
                if(is_array($checkuser)){
                    $_SESSION['Email']=$checkuser;
                    header('location: index.php');
                    // $thongbao="Bạn đã đăng nhập thành công";
                }else{
                    $thongbao="Tài khoản không tồn tại, vui lòng kiểm tra hoặc đăng ký lại";
                }
            }
        include "view/taikhoan/dangnhap.php";
        break;                    

        case 'edit_taikhoan':
            if(isset($_POST['capnhat'])&&($_POST['capnhat']>0)){
                $HoTen = $_POST['HoTen'];
                $Email = $_POST['Email'];
                $SoDienThoai = $_POST['SoDienThoai'];
                $DiaChi = $_POST['DiaChi'];
                $MatKhau = $_POST['MatKhau'];
                $ID_User = $_POST['ID_User'];
                update_taikhoan($ID_User, $HoTen, $Email, $SoDienThoai, $DiaChi, $MatKhau);
                $_SESSION['Email']=checkuser($Email, $MatKhau);
                header('loacltion: index.php?act=edit_taikhoan');
            }    
        include "view/taikhoan/edit_taikhoan.php";
        break; 
           
        case 'quenmk':
            if(isset($_POST['guiemail'])&&($_POST['guiemail']>0)){
                $Email=$_POST['Email'];
                $checkemail=checkemail($Email);
                if(is_array($checkemail)){
                    $thongbao="Mật khẩu của bạn là: ".$checkemail['MatKhau'];
                }else{
                    $thongbao="Email không tồn tại";
                }
            }    
        include "view/taikhoan/quenmk.php";
        break;    
        
        case 'thoat':
            session_unset();
            header('location:index.php');
        include "view/taikhoan/quenmk.php";
        break;


        case 'sanpham':
            include "view/sanpham.php";
        break;

        default:
            include "view/home.php";
        break;
    }
}else{
    include "view/home.php";
}

include "view/footer.php";
?>