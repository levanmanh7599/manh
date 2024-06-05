<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/order.php";
include "header.php";

if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'adddm':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $errors = array();
        
                // Kiểm tra và lưu trữ giá trị của các trường dữ liệu
                $id = $_POST["maloai"];
                $tenloai = $_POST["tenloai"];
                $trangthai = $_POST["trangthai"];
        
                if (empty($id)) {
                    $errors[] = "Mã loại không được để trống.";
                } elseif (strlen($id) > 10) {
                    $errors[] = "Mã loại không được quá 10 ký tự.";
                } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $id)) {
                    $errors[] = "Mã loại chỉ được chứa ký tự và số.";
                }
                
                // Validate tên loại
                if (empty($tenloai)) {
                    $errors[] = "Tên loại không được để trống.";
                } elseif (strlen($tenloai) > 50) {
                    $errors[] = "Tên loại không được quá 50 ký tự.";
                }
        
                // Validate trạng thái
                if (empty($trangthai)) {
                    $errors[] = "Trạng thái không được để trống.";
                } elseif (strlen($trangthai) > 20) {
                    $errors[] = "Trạng thái không được quá 20 ký tự.";
                }
        
                // Nếu có lỗi, hiển thị thông báo lỗi
                if (!empty($errors)) {
                    foreach ($errors as $error) {
                        
                    }
                } else {
                    // Nếu không có lỗi, tiếp tục thêm mới danh mục hàng hóa
                    insert_danhmuc($id,$tenloai, $trangthai);
                    $thongbao = "Thêm thành công";
                }
            }
            include "danhmuc/add.php";
            break;
        
        case'lisdm':
            $listdanhmuc=loadall_danhmuc();
            
            include "danhmuc/list.php";
            break;
        case'xoadm':
            if(isset($_GET['id'])&& ($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;

            case'suadm':
                if(isset($_GET['id'])&& ($_GET['id']>0)){
                    
                    $dm=loadone_danhmuc($_GET['id']);
                }
                
                include "danhmuc/update.php";
                break;

                case 'updatedm':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $tenloai = $_POST['tenloai'];
                        $id = $_POST['id'];
                        $TrangThai = $_POST['trangthai'];
                
                        $errors = array();
                
                        // Kiểm tra và xử lý dữ liệu khi form được submit
                        if (empty($_POST["maloai"])) {
                            $errors[] = "Mã loại không được để trống.";
                        } else if (strlen($_POST["maloai"]) > 10) {
                            $errors[] = "Mã loại không được quá 10 ký tự.";
                        } else if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST["maloai"])) {
                            $errors[] = "Mã loại chỉ được chứa ký tự và số.";
                        }
                
                        if (empty($_POST["tenloai"])) {
                            $errors[] = "Tên loại không được để trống.";
                        } else if (strlen($_POST["tenloai"]) > 50) {
                            $errors[] = "Tên loại không được quá 50 ký tự.";
                        }
                
                        if (empty($_POST["trangthai"])) {
                            $errors[] = "Trạng thái không được để trống.";
                        } else if (strlen($_POST["trangthai"]) > 20) {
                            $errors[] = "Trạng thái không được quá 20 ký tự.";
                        }
                
                        // Nếu không có lỗi, thực hiện lưu dữ liệu vào cơ sở dữ liệu
                        if (empty($errors)) {
                            update_danhmuc($id, $tenloai, $TrangThai);
                            $thongbao = "update thành công";
                            header('Location: index.php?act=lisdm');
                            exit; // Chuyển trang và kết thúc script
                        }
                    }
                
                    $listdanhmuc = loadall_danhmuc();
                    include "danhmuc/update.php";
                    break;
                

                    case 'addsp':
                        $thongbao = "";
                        $errors = [];
                        
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Lấy thông tin từ form
                            $tensp = $_POST['tensp'];
                            $giasp = $_POST['giasp'];
                            $mota = $_POST['mota'];
                            $MauSac = $_POST['mausac'];
                            $kichThuoc = $_POST['kichthuoc'];
                            $SoLuong = $_POST['soluong'];
                            $NgayDang = $_POST['ngaydang'];
                            $iddm = $_POST['iddm'];
                        
                            // Kiểm tra các điều kiện và thêm thông tin vào mảng errors nếu có lỗi
                            if (empty($tensp)) {
                                $errors[] = "Vui lòng nhập tên sản phẩm";
                            } elseif (strlen($tensp) > 100) {
                                $errors[] = "Tên sản phẩm không được vượt quá 100 ký tự";
                            }
                        
                            if (empty($giasp)) {
                                $errors[] = "Vui lòng nhập giá sản phẩm";
                            } elseif (!is_numeric($giasp) || $giasp<= 0) {
                                $errors[]="Giá sản phẩm phải là một số dương";
                            }
                        
                            if (empty($mota)) {
                                $errors[] = "Vui lòng nhập mô tả sản phẩm";
                            } elseif (strlen($mota) > 500) {
                                $errors[] = "Mô tả sản phẩm không được vượt quá 500 ký tự";
                            }
                        
                            if (empty($MauSac)) {
                                $errors[] = "Vui lòng chọn màu sắc sản phẩm";
                            }
                        
                            if (empty($kichThuoc)) {
                                $errors[] = "Vui lòng nhập kích thước sản phẩm";
                            }
                        
                            if (!is_numeric($SoLuong) || $SoLuong <= 0) {
                                $errors[] = "Số lượng sản phẩm phải là một số dương";
                            }
                        
                            if (empty($NgayDang)) {
                                $errors[] = "Vui lòng chọn ngày đăng sản phẩm";
                            }
                        
                            // Kiểm tra hình ảnh
                            $hinh = $_FILES['hinh']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES['hinh']['name']);
                        
                            if ($_FILES['hinh']['tmp_name'] !== "") {
                                $image_info = getimagesize($_FILES["hinh"]["tmp_name"]);
                                if ($image_info !== false) {
                                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                        // Hình ảnh đã được di chuyển thành công
                                    } else {
                                        $errors[] = "Xảy ra lỗi khi di chuyển hình ảnh";
                                    }
                                } else {
                                    $errors[] = "Tệp được tải lên không phải là hình ảnh hợp lệ";
                                }
                            } else {
                                $errors[]="Vui lòng chọn hình ảnh";
                            }
                        
                            // Nếu không có lỗi, thêm sản phẩm vào cơ sở dữ liệu
                            if (empty($errors)) {
                                insert_sanpham($tensp, $giasp, $hinh, $mota, $MauSac, $kichThuoc, $SoLuong, $NgayDang, $iddm);
                                $thongbao = "Thêm sản phẩm thành công";
                            } else {
                                foreach ($errors as $error) {
                                    $thongbao = "<span style='color:red;'>Lỗi khi thêm sản phẩm</span>";
                                }
                            }
                        }
                        
                        $listdanhmuc = loadall_danhmuc();
                        include "sanpham/add.php";
                        break;
                    
        
                case'listsp':
                    if(isset($_POST['listok']) && ($_POST['listok'])){
                        $kyw=$_POST['kyw'];
                        $iddm=$_POST['iddm'];
                    }else{
                        $kyw='';
                        $iddm=0;
                    }
                    $listdanhmuc=loadall_danhmuc();
                    $listsanpham=loadall_sanpham($kyw,$iddm);
                    include "sanpham/list.php";
                    break;
                case'xoasp':
                    if(isset($_GET['id'])&& ($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham=loadall_sanpham("",0);
                    include "sanpham/list.php";
                    break;
        
                    case'suasp':
                        if(isset($_GET['id'])&& ($_GET['id']>0)){
                            
                            $sanpham=loadone_sanpham($_GET['id']);
                        }
                        $listdanhmuc=loadall_danhmuc();
                        include "sanpham/update.php";
                        break;
        
                        case "updatesp":
                            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                $iddm=$_POST['iddm'];
                                $id=$_POST['id'];
                                $tensp=$_POST['tensp'];
                                $giasp=$_POST['giasp'];
                                $mota=$_POST['mota'];
                                $GiaKhuyenMai=$_POST['giakhuyenmai'];
                                $hinh=$_FILES['hinh']['name'];
                                $MauSac=$_POST['mausac'];
                                $kichThuoc=$_POST['kichthuoc'];
                                $SoLuong=$_POST['soluong'];
                                $NgayDang=$_POST['ngaydang'];
   
                            if (empty($tensp)) {
                                $errors[] = "Vui lòng nhập tên sản phẩm";
                            } elseif (strlen($tensp) > 100) {
                                $errors[] = "Tên sản phẩm không được vượt quá 100 ký tự";
                            }
                    
                            if (empty($giasp)) {
                                $errors[] = "Vui lòng nhập giá sản phẩm";
                            } elseif (!is_numeric($giasp) || $giasp >= 0) {
                                $errors[] = "Giá sản phẩm phải là một số dương";
                            }
                    
                            if (empty($mota)) {
                                $errors[] = "Vui lòng nhập mô tả sản phẩm";
                            } elseif (strlen($mota) > 500) {
                                $errors[] = "Mô tả sản phẩm không được vượt quá 500 ký tự";
                            }

                            if (empty($GiaKhuyenMai)) {
                                $errors[] = "Vui lòng nhập giá khuyến mãi";
                            } elseif (!is_numeric($GiaKhuyenMai)) {
                                $errors[] = "Giá khuyến mãi phải là một số";
                            }
                            
                            if (empty($MauSac)) {
                                $errors[]="Vui lòng chọn màu sắc sản phẩm";
                            }
                    
                            if (empty($kichThuoc)) {
                                $errors[]="Vui lòng nhập kích thước sản phẩm";
                            }
                    
                            if (!is_numeric($SoLuong) || $SoLuong >= 0) {
                                $errors[] ="Số lượng sản phẩm phải là một số dương";
                            }
                    
                            if (empty($NgayDang)) {
                                $errors[] ="Vui lòng chọn ngày đăng sản phẩm";
                            }

                                $hinh=$_FILES['hinh']['name'];
                                $target_dir = "../upload/";
                                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                    //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                                } else {
                                    //echo "Sorry, there was an error uploading your file.";
                                }
                                update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh,$GiaKhuyenMai,$MauSac,$kichThuoc,$SoLuong,$NgayDang);
                                $thongbao="cập nhật thành công!";
                            }
                            $listsanpham=loadall_sanpham();
                            $listdanhmuc=loadall_danhmuc();
                            include "sanpham/list.php";
                            break;
                    case'dskh':
                              
                        $listtaikhoan=loadall_taikhoan();
                        include "taikhoan/list.php";
                    break;

                    case'xoatk':
                    if(isset($_GET['id_user'])&& ($_GET['id_user']>0)){
                        delete_taikhoan($_GET['id_user']);
                    }
                    $listtaikhoan=loadall_taikhoan("",0);
                    include "taikhoan/list.php";
                    break;   
                    
                    case'suatk':
                        if(isset($_GET['id_user'])&& ($_GET['id_user']>0)){
                            
                            $tk=loadone_taikhoan($_GET['id_user']);
                        }
                        $listtaikhoan=loadall_taikhoan();
                        include "taikhoan/update.php";
                        break;

                    case 'updatetk':
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $HoTen=$_POST['user'];
                            $MatKhau=$_POST['pass'];
                            $Email=$_POST['email'];
                            $DiaChi=$_POST['address'];
                            $SoDienThoai=$_POST['tel'];
                            $id_user=$_POST['id'];
                                     
                            update_taikhoan($id_user,$HoTen,$MatKhau,$Email,$DiaChi,$SoDienThoai);
                            $thongbao="cập nhật thành công!";
                                
            
                        }
                        $listtaikhoan=loadall_taikhoan();
                        include "taikhoan/list.php";
                    break;

                        case "dsbl":
                            $listbinhluan = loadall_binhluan(0);
                            include "binhluan/list.php";
                            break;

                    case'xoabl':
                    if(isset($_GET['ID_BL'])&& ($_GET['ID_BL']>0)){
                        delete_binhluan($_GET['ID_BL']);
                    }
                    $listbinhluan=loadall_binhluan("",0);
                    include "binhluan/list.php";
                    break;  
                    case'hoadon':
                              
                        $orders=getOrders();
                        include "hoadon/list.php";
                    break; 

                    case 'updatedh':
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $id_user=$_POST['iduser'];
                            $hoten=$_POST['user'];
                            $sdt=$_POST['sdt'];
                            $email=$_POST['email'];
                            $diachi=$_POST['diachi'];
                            $tongtien=$_POST['tongtien'];
                            $pttt=$_POST['pttt'];
                            $trangthai=$_POST['tt'];
                            $id_order=$_POST['id'];                                  
                            update_Orders($id_order,$id_user,$hoten,$sdt,$email,$diachi,$tongtien,$pttt,$trangthai);
                            $thongbao="cập nhật thành công!";
                        }
                        $orders=getOrders();
                        include "hoadon/update.php";
                    break;

                    case'suahd':
                        if(isset($_GET['id_order'])&& ($_GET['id_order']>0)){
                            
                            $hd=loadone_Orders($_GET['id_order']);
                        }
                        $orders=getOrders();
                        include "hoadon/update.php";
                        break;

                    case'xoahd':
                        if(isset($_GET['id_order'])&& ($_GET['id_order']>0)){
                            delete_Orders($_GET['id_order']);
                        }
                        $orders=getOrders();
                        include "hoadon/list.php";
                        break; 



    }
}else{
    include "home.php";
}

include "footer.php";

?>