<?php include '../../../config.php'; ?>
<?php include '../layouts/header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ma_hp = $_POST["ma_hp"];
    $ten_hp = $_POST["ten_hp"];
    $so_tin_chi = $_POST["so_tin_chi"];

    $sql = "INSERT INTO hocphan (ma_hp, ten_hp, so_tin_chi) VALUES ('$ma_hp', '$ten_hp', '$so_tin_chi')";
    if ($conn->query($sql)) {
        echo "<p style='color: green;'>Tạo học phần thành công!</p>";
    } else {
        echo "<p style='color: red;'>Lỗi: " . $conn->error . "</p>";
    }
}
?>

<h2>Tạo Học Phần</h2>
<form method="POST">
    <label>Mã học phần:</label> 
    <input type="text" name="ma_hp" required><br>
    
    <label>Tên học phần:</label> 
    <input type="text" name="ten_hp" required><br>

    <label>Số tín chỉ:</label> 
    <input type="number" name="so_tin_chi" required><br>

    <button type="submit">Tạo</button>
</form>

<a href="/project/KTGK/app/views/sinhvien/danh_sach.php">Quay lại</a>

<?php include '../layouts/footer.php'; ?>
