<?php
require("../config.php");
include("../function.php");
?>
<html>

<head>
    <title>Завдання 1</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body>
    <div id="div1" class="verh">
        <?php
        $array_square = array();
        $array_cube = array();
        for ($i = 10; $i < 20; $i++) {
            array_push($array_square, pow($i, 2));
        }
        for ($i = 1; $i < 10; $i++) {
            array_push($array_cube, pow($i, 3));
        }

        echo "<p class=\"name1\">Масив з квадратами: </p><p class=\"masuv1\">";
        foreach ($array_square as $value) {
            echo $value . " ";
        }
        echo "<br>";
        echo "<p class=\"name1\">Масив з кубами: </p><p class=\"masuv1\">";
        foreach ($array_cube as $value) {
            echo $value . " ";
        }
        $united_array = array_merge($array_square, $array_cube);
        asort($united_array);
        echo "<br>";
        echo "<p class=\"name1\">Об'єднаний і посортований масив: </p><p class=\"masuv1\">";
        foreach ($united_array as $value) {
            echo $value . " ";
        }
        echo "</p>";
        ?>

    </div>
    <div class="d1">
        <a href="Dudii_lab4.php">Назад</a>
    </div>
</body>

</html>