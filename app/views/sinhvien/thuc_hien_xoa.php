<?php include '../../../config.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ma_sv"])) {
    $ma_sv = $_POST["ma_sv"];

    // Thực hiện xóa sinh viên
    $sql = "DELETE FROM sinhvien WHERE ma_sv='$ma_sv'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Sinh viên đã được xóa khỏi hệ thống.');
                window.location.href = 'danh_sach.php';
              </script>";
    } else {
        echo "<script>
                alert('Lỗi khi xóa sinh viên.');
                window.location.href = 'danh_sach.php';
              </script>";
    }
} else {
    header("Location: danh_sach.php");
    exit();
}
?>
