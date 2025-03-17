<?php include '../../../config.php'; ?>
<?php include '../layouts/header.php'; ?>
<?php
$ma_sv = $_GET["ma_sv"];
$sql = "DELETE FROM sinhvien WHERE ma_sv='$ma_sv'";
$conn->query($sql);
header("Location: danh_sach.php");
exit();
?>
<?php include '../layouts/footer.php'; ?>


