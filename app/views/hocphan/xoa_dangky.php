<?php include '../../../config.php'; ?>
<?php include '../layouts/header.php'; ?>
<?php
$ma_sv = $_GET["ma_sv"];

$sql = "DELETE FROM dangky_hocphan WHERE ma_sv='$ma_sv'";
if ($conn->query($sql)) {
    header("Location: dangky_hocphan.php");
    exit();
} else {
    echo "Lỗi: " . $conn->error;
}
?>
<?php include '../layouts/footer.php'; ?>
