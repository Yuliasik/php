<?php
include("../function.php");
require("../config.php");
?>
<html>

<head>
    <title>Завдання 2</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body>

    <div id="div6" class="verh">
        <form action="Dudii_zavdannja6.php" method="post">
            <p>Введіть N =
                <input class="input_n z6_i" type="text" name="N" required>
            </p>
            <input class="button b4" type="submit" value="Тиць">
        </form>
        <?php
        if (!isset($_POST['N'])) echo 'Число не вибране(';
        else {

            $n = $_POST['N'];

            if ($n > 0 and $n == (int)$n) {
                zavdannja6($n);
            } else echo "Введене число не натуральне";
        }
        include_once("Dudii_zavdannja7.php");
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab3.php">Назад</a>
    </div>


</body>

</html>