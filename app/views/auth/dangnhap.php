<?php include '../../../config.php'; ?>
<?php include '../layouts/header.php'; ?>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ma_sv = $_POST["ma_sv"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM sinhvien WHERE ma_sv='$ma_sv' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION["ma_sv"] = $ma_sv;
        header("Location: ../sinhvien/danh_sach.php");
        exit();
    } else {
        echo "Sai mã sinh viên hoặc mật khẩu!";
    }
}
?>

<form method="POST">
    Mã SV: <input type="text" name="ma_sv" required><br>
    Mật khẩu: <input type="password" name="password" required><br>
    <button type="submit">Đăng nhập</button>
</form>
<?php include '../layouts/footer.php'; ?>