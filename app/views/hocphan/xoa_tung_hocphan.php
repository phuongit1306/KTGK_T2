<?php include '../../../config.php'; ?>
<?php include '../layouts/header.php'; ?>
<?php
$ma_sv = $_GET["ma_sv"];
$ma_hp = $_GET["ma_hp"];

$sql = "DELETE FROM dangky_hocphan WHERE ma_sv='$ma_sv' AND ma_hp='$ma_hp'";
if ($conn->query($sql)) {
    header("Location: dangky_hocphan.php");
    exit();
} else {
    echo "Lỗi: " . $conn->error;
}
?>
<?php include '../layouts/footer.php'; ?>
