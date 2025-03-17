<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sinh viên</title>
    <link rel="stylesheet" href="/project/KTGK/assets/style.css"> 
    <style>
        .navbar {
            background-color: #000;
            padding: 20px 0;
            text-align: left;
        }
        .navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .navbar ul li {
            display: inline;
            margin: 0 15px;
        }
        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
        }
        .navbar ul li a:hover {
            color: #f39c12;
        }
    </style>
</head>
<body>

<div class="navbar">
    <ul>
        <li><a href="/project/KTGK/index.html">Trang chủ</a></li> 
        <li><a href="/project/KTGK/app/views/sinhvien/danh_sach.php">Danh sách sinh viên</a></li>
        <li><a href="/project/KTGK/app/views/hocphan/tao_hocphan.php">Tạo học phần</a></li>
        <li><a href="/project/KTGK/app/views/hocphan/dangky_hocphan.php">Đăng ký học phần</a></li>
        <li><a href="/project/KTGK/app/views/auth/dangnhap.php">Đăng nhập</a></li>
    </ul>
</div>
