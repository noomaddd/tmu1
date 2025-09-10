<?php
function tinhTrungBinhCong($arr) {
    if (count($arr) == 0) {
        return 0;
    }
    $tong = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $tong += $arr[$i];
    }
    return $tong / count($arr);
}

echo "<form method='post'>";
if (!isset($_POST['nhapSoLuong']) && !isset($_POST['submit'])) {
    echo "Nhập số lượng phần tử: <input type='number' name='soLuong' min='1' required><br><br>";
    echo "<input type='submit' name='nhapSoLuong' value='Tiếp tục'>";
} else if (isset($_POST['nhapSoLuong']) && !isset($_POST['submit'])) {
    $soLuong = $_POST['soLuong'];
    echo "<h3>Nhập $soLuong số:</h3>";
    for ($i = 0; $i < $soLuong; $i++) {
        echo "Số thứ " . ($i + 1) . ": <input type='number' name='so[$i]' required><br>";
    }
    echo "<input type='hidden' name='soLuong' value='$soLuong'>";
    echo "<br><input type='submit' name='submit' value='Tính trung bình cộng'>";
} else if (isset($_POST['submit'])) {
    $soLuong = $_POST['soLuong'];
    $mang = $_POST['so'];
    
    $ketQua = tinhTrungBinhCong($mang);
    
    echo "<h3>Kết quả:</h3>";
    echo "Mảng đã nhập: [" . implode(", ", $mang) . "]<br>";
    echo "Trung bình cộng: " . number_format($ketQua, 2) . "<br>";
    echo "<br><a href=''>Nhập lại</a>";
}
echo "</form>";
?>