<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 3</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body>
    <div id="div2" class="verh">
        <form action="Dudii_z3.php" method="post">
            <input class="input_n numbers" type="number" name="num0" required>
            <input class="input_n numbers" type="number" name="num1" required>
            <input class="input_n numbers" type="number" name="num2" required>
            <input class="input_n numbers" type="number" name="num3" required>
            <input class="input_n numbers" type="number" name="num4" required>
            <br>
            <input id="b2" class="button" type="submit" value="Тиць">
        </form>
        <?php
        if (!isset($_POST['num0']) or !isset($_POST['num1']) or !isset($_POST['num2'])
        or !isset($_POST['num3']) or !isset($_POST['num4'])) echo 'Число не вибране(';
        else {
            $array = array($_POST['num0'], $_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4']);
            echo "<div class=\"rez\">";
            foreach ($array as $value)
                echo "$value^2 = " . (pow($value,2)) . '<br>';
            echo "</div>"; 
        }
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab3.php">Назад</a>
    </div>
</body>

</html>