<!DOCTYPE html>
<html>
<head>
    <title>Giải phương trình bậc 2</title>
</head>
<body>
    <h2>Giải phương trình bậc 2: ax² + bx + c = 0</h2>
    <form method="POST">
        <label>Hệ số a: <input type="number" name="a" step="any" value="<?= $_POST['a'] ?? '' ?>" required></label><br><br>
        <label>Hệ số b: <input type="number" name="b" step="any" value="<?= $_POST['b'] ?? '' ?>" required></label><br><br>
        <label>Hệ số c: <input type="number" name="c" step="any" value="<?= $_POST['c'] ?? '' ?>" required></label><br><br>
        <input type="submit" value="Giải phương trình">
    </form>

    <?php 
    function giaiPhuongTrinhBac2($a, $b, $c) {
        echo "<h3>PT: {$a}x² + {$b}x + {$c} = 0</h3>";
        
        if ($a == 0) {
            echo $b == 0 ? ($c == 0 ? "Vô số nghiệm" : "Vô nghiệm") : "x = " . (-$c/$b);
        } else {
            $delta = $b*$b - 4*$a*$c;
            if ($delta < 0) echo "Vô nghiệm";
            elseif ($delta == 0) echo "x = " . (-$b/(2*$a));
            else {
                $x1 = (-$b + sqrt($delta))/(2*$a);
                $x2 = (-$b - sqrt($delta))/(2*$a);
                echo "x1 = $x1<br>x2 = $x2";
            }
        }
    }

    if ($_POST) {
        $a = $_POST['a'];
        $b = $_POST['b']; 
        $c = $_POST['c'];
        giaiPhuongTrinhBac2($a, $b, $c);
    }
    ?>
</body>
</html>