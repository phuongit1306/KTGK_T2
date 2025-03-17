<?php include '../../../config.php'; ?>
<?php include '../layouts/header.php'; ?>
<?php
$ma_sv = $_GET["ma_sv"];
$sql = "SELECT * FROM sinhvien WHERE ma_sv='$ma_sv'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ho_ten = $_POST["ho_ten"];
    $gioi_tinh = $_POST["gioi_tinh"];
    $ngay_sinh = $_POST["ngay_sinh"];

    $sql = "UPDATE sinhvien SET ho_ten='$ho_ten', gioi_tinh='$gioi_tinh', ngay_sinh='$ngay_sinh' WHERE ma_sv='$ma_sv'";
    if ($conn->query($sql)) {
        header("Location: danh_sach.php");
        exit();
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>

<form method="POST">
    Họ tên: <input type="text" name="ho_ten" value="<?= $row['ho_ten'] ?>" required><br>
    Giới tính: <select name="gioi_tinh">
        <option value="Nam" <?= $row['gioi_tinh'] == 'Nam' ? 'selected' : '' ?>>Nam</option>
        <option value="Nữ" <?= $row['gioi_tinh'] == 'Nữ' ? 'selected' : '' ?>>Nữ</option>
    </select><br>
    Ngày sinh: <input type="date" name="ngay_sinh" value="<?= $row['ngay_sinh'] ?>" required><br>
    <button type="submit">Cập nhật</button>
</form>
<a href="danh_sach.php">Quay lại</a>
<?php include '../layouts/footer.php'; ?>

