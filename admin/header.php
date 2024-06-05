<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="../view/css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
    .page-link {
        display: flex;
        justify-content: center;
        margin-top: 15px;
    }
    
    .page-link a {
        padding: 2px 13px;
        margin: 0 5px;
        text-decoration: none;
        color: #000;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    .page-link a.active {
        background-color: #ccc;
    }
    </style>
</head>
<body>
    <div class="boxcenter">
       <!-- BIGIN HEADER -->
       <header>
        <div class="row mb header_admin">
            <h1>Admin</h1>
        </div>
        <div class="row mb menu">
            <ul>          
              <li><a href="index.php">Trang chủ</a></li>
              <li><a href="index.php?act=adddm">Danh mục</a></li>
              <li><a href="index.php?act=addsp">Hàng hóa</a></li>
              <li><a href="index.php?act=dskh">Khách hàng</a></li>
              <li><a href="index.php?act=dsbl">Bình luận</a></li>
              <li><a href="index.php?act=thongke">Thống kê</a></li>
              <li><a href="index.php?act=hoadon">Hóa đơn</a></li>
            </ul>
        </div>
      </header>