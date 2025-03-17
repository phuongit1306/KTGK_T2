<?php include '../../../config.php'; ?>
<?php include '../layouts/header.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Sinh Viên</title>
</head>
<body>
    <h2>Danh Sách Sinh Viên</h2>
    <a href="them_sinhvien.php">Thêm sinh viên</a>
    <table border="1">
        <tr>
            <th>Mã SV</th>
            <th>Họ Tên</th>
            <th>Giới Tính</th>
            <th>Ngày Sinh</th>
            <th></th>
        </tr>
        <?php
        $sql = "SELECT * FROM sinhvien";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row["ma_sv"]}</td>
                    <td>{$row["ho_ten"]}</td>
                    <td>{$row["gioi_tinh"]}</td>
                    <td>{$row["ngay_sinh"]}</td>
                    <td>
                        <a href='chitiet_sinhvien.php?ma_sv={$row["ma_sv"]}'>Xem</a> |
                        <a href='sua_sinhvien.php?ma_sv={$row["ma_sv"]}'>Sửa</a> |
                        <a href='xoa_sinhvien.php?ma_sv={$row["ma_sv"]}'>Xóa</a>
                    </td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>
<?php

?>

<?php include '../layouts/footer.php'; ?>





