<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 2</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body>
    <div id="div1" class="verh">
        <form action="Dudii_z2.php" method="post">
            <p>Введіть число</p>
            <input class="input_n" type="number" name="num">
            <br>
            <input id="b1" class="button" type="submit" value="Тиць">
        </form>
        <?php
        if (!isset($_POST['num'])) echo 'Число не вибране(';
        else {
            $n = $_POST['num'];
            echo "<p>Масив із 10 елементів згенеруваний випадковим чином чисел в діапазоні він 1 до " . ($n + 10) . "</p>";
            $temp = 0;
            $array = array();
            for ($i = 0; $i < 10; $i++) {
                $temp = mt_rand(1, $n + 10);
                array_push($array, $temp);
            }
            echo "<div id=\"block_left1\">";
            foreach ($array as $key => $value)
                echo "<span class=\"index\">$key. </span>" . $value . '<br>';
            echo "</div>";
            asort($array);
            echo "<div id=\"block_right1\">";
            echo "<p>Мінімальний елемент  - ".(reset($array))."<br>";
            echo "             індекс  - ".array_key_first($array)."<br></p>";
            echo "<p>Максимальний елемент - ".(end($array))."<br>";
            echo "             індекс  - ".array_key_last($array)."<br></p>";
            echo "<p>Середнє значення - ".(array_sum($array) / 10)."</p>";
            echo "</div>";
        }
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab3.php">Назад</a>
    </div>
</body>

</html>