<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 2</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body>
    <div class="verh div2">
        <div id="block_left2">

            <form action="Dudii_z2.php" method="post">
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
            <img src="image/Dudii_formula.png" id="ph1" alt="formula">
        </div>
        <div class="osn2">
        <?php
        if (!isset($_POST['num1']) or !isset($_POST['num2'])) echo 'Аргументи не введені(';
        else {
            $x = $_POST['num1'];
            $y = $_POST['num2'];
            if ($x>0 and $y>0 and $x==(int)$x and $y==(int)$y){
                if($y!=0 and $x!=0 and $x*$y!=1){
                    echo "<p>x = $x <br> y = $y <br> F(x) = ". (($x/$y)+ pow($y,2)/(1-$x*$y)) ." </p>";
                }
                else{
                    echo "Введені числа не задовільняють ОДЗ";
                }
            }
            else echo "Введені числа не натуральні";
        }
        ?>
        </div>
    </div>
    <div class="d1">
        <a href="Dudii_index.php">Назад</a>
    </div>
</body>

</html>