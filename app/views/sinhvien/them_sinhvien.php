<?php include '../../../config.php'; ?>
<?php include '../layouts/header.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ma_sv = $_POST["ma_sv"];
    $ho_ten = $_POST["ho_ten"];
    $gioi_tinh = $_POST["gioi_tinh"];
    $ngay_sinh = $_POST["ngay_sinh"];

    $sql = "INSERT INTO sinhvien (ma_sv, ho_ten, gioi_tinh, ngay_sinh) 
            VALUES ('$ma_sv', '$ho_ten', '$gioi_tinh', '$ngay_sinh')";

    if ($conn->query($sql)) {
        header("Location: danh_sach.php");
        exit();
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>

<form method="POST">
    Mã SV: <input type="text" name="ma_sv" required><br>
    Họ tên: <input type="text" name="ho_ten" required><br>
    Giới tính: <select name="gioi_tinh"><option value="Nam">Nam</option><option value="Nữ">Nữ</option></select><br>
    Ngày sinh: <input type="date" name="ngay_sinh" required><br>
    <button type="submit">Thêm</button>
</form>
<a href="danh_sach.php">Quay lại</a>
<?php include '../layouts/footer.php'; ?>

