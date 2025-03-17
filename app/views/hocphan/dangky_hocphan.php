<?php 
include '../../../config.php'; 
include '../layouts/header.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ma_sv = $_POST["ma_sv"];
    $ma_hp = $_POST["ma_hp"];


    $sqlCheck = "SELECT MaDK FROM DangKy WHERE MaSV='$ma_sv'";
    $result = $conn->query($sqlCheck);

    if ($result->num_rows == 0) {
       
        $sqlInsertDK = "INSERT INTO DangKy (NgayDK, MaSV) VALUES (CURDATE(), '$ma_sv')";
        $conn->query($sqlInsertDK);

     
        $result = $conn->query($sqlCheck);
    }

    $row = $result->fetch_assoc();
    $ma_dk = $row["MaDK"];


    $sqlInsertCT = "INSERT INTO ChiTietDangKy (MaDK, MaHP) VALUES ('$ma_dk', '$ma_hp')";

    if ($conn->query($sqlInsertCT)) {
        echo "<p style='color: green;'>Đăng ký thành công!</p>";
    } else {
        echo "<p style='color: red;'>Lỗi: " . $conn->error . "</p>";
    }
}
?>

<h2>Đăng ký học phần</h2>
<form method="POST">
    <label>Mã SV:</label>
    <input type="text" name="ma_sv" required><br>

    <label>Mã học phần:</label>
    <input type="text" name="ma_hp" required><br>

    <button type="submit">Đăng ký</button>
</form>

<a href="../../index.html">Quay lại</a>
<?php include '../layouts/footer.php'; ?>
