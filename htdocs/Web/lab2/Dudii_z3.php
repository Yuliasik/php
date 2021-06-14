<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 3</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body>
    <div class="verh div2">
        <div id="block_left3">

            <form action="Dudii_z3.php" method="post">
                <p>x =
                    <input class="input_n inp" type="text" name="num1"  required>
                </p>
                <p>y =
                    <input class="input_n inp" type="text" name="num2"  required>
                    <br>
                </p>
                <input class="button b2" type="submit" value="Тиць">
            </form>
        </div>
        <div class="block_right2">
            <img src="image/Dudii_formula2.png" id="ph2" alt="formula">
        </div>
        <div class="osn3">
            <?php
            if (!isset($_POST['num1']) or !isset($_POST['num2'])) echo 'Аргументи не введені(';
            else {
                $x = $_POST['num1'];
                $y = $_POST['num2'];
                if ($x > 0 and $y > 0 and $x==(int)$x and $y==(int)$y) {
                    echo "<p>x = $x <br> y = $y <br> F(x) =";
                    if ($x * $y < -100) echo $x / 2 * $y;
                    elseif ($x * $y > 20) echo pow($x, 2) - $x * $y;
                    else echo pow($x, 3) + 2;
                    echo " </p>";
                } else echo "Введені числа не натуральні";
            }
            ?>
        </div>
    </div>
    <div class="d1">
        <a href="Dudii_lab2.php">Назад</a>
    </div>
</body>

</html>