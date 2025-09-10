<!DOCTYPE html>
<html>
<head>
    <title>Câu 9 - Vẽ hình chữ nhật</title>
    <style>
        .rectangle { 
            font-family: monospace; 
            white-space: pre; 
            font-size: 20px; 
            line-height: 1.2;
        }
    </style>
</head>
<body>
    <div class="rectangle">
<?php
function printHollowRectangle($rows = 5, $cols = 7) {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $cols; $j++) {
            if ($i == 1 || $i == $rows || $j == 1 || $j == $cols) {
                echo '*';
            } else {
                echo '&nbsp;';
            }
        }
        echo "<br>";
    }
}

printHollowRectangle();
?>
    </div>
</body>
</html>