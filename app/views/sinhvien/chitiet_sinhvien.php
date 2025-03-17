<?php include '../../../config.php'; ?>
<?php include '../layouts/header.php'; ?>
<?php
$ma_sv = $_GET["ma_sv"];
$sql = "SELECT * FROM sinhvien WHERE ma_sv='$ma_sv'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi Tiết Sinh Viên</title>
</head>
<body>
    <h2>Thông tin chi tiết</h2>
    <p><strong>Mã SV:</strong> <?= $row['ma_sv'] ?></p>
    <p><strong>Họ Tên:</strong> <?= $row['ho_ten'] ?></p>
    <p><strong>Giới Tính:</strong> <?= $row['gioi_tinh'] ?></p>
    <p><strong>Ngày Sinh:</strong> <?= $row['ngay_sinh'] ?></p>
    <a href="/project/KTGK/app/views/sinhvien/danh_sach.php">Quay lại</a>
</body>
</html>
<?php include '../layouts/footer.php'; ?>

