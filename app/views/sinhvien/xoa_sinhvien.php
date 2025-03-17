<?php include '../../../config.php'; ?>
<?php include '../layouts/header.php'; ?>

<?php
// Kiểm tra nếu có tham số ma_sv trên URL
if (!isset($_GET["ma_sv"])) {
    header("Location: danh_sach.php");
    exit();
}

$ma_sv = $_GET["ma_sv"];

// Lấy thông tin sinh viên để hiển thị xác nhận
$sql = "SELECT * FROM sinhvien WHERE ma_sv='$ma_sv'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "<script>
            alert('Không tìm thấy sinh viên!');
            window.location.href = 'danh_sach.php';
          </script>";
    exit();
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xác nhận Xóa Sinh Viên</title>
</head>
<body>
    <h2>Xác nhận Xóa Sinh Viên</h2>
    <p><strong>Mã SV:</strong> <?= $row['ma_sv'] ?></p>
    <p><strong>Họ Tên:</strong> <?= $row['ho_ten'] ?></p>
    <p><strong>Giới Tính:</strong> <?= $row['gioi_tinh'] ?></p>
    <p><strong>Ngày Sinh:</strong> <?= $row['ngay_sinh'] ?></p>
    
    <p style="color: red; font-weight: bold;">Bạn có chắc chắn muốn xóa sinh viên này?</p>

    <form method="POST" action="thuc_hien_xoa.php">
        <input type="hidden" name="ma_sv" value="<?= $row['ma_sv'] ?>">
        <button type="submit">Xóa</button>
        <a href="danh_sach.php">Hủy</a>
    </form>
</body>
</html>

<?php include '../layouts/footer.php'; ?>
