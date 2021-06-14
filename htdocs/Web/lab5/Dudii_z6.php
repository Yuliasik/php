<?php
require("../config.php");
include("../function.php");
?>
<html>

<head>
    <title>Завдання 6</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
    <script>
        function show(id) {
            if (document.getElementById(id).hidden == true)
                document.getElementById(id).hidden = false;
            else
                document.getElementById(id).hidden = true;
        }
    </script>
</head>

<body>
    <div id="div6" class="verh">
        <p onclick="show('z6_1')" class="zavd">Завдання 6.1 V</p>
        <div id="z6_1" hidden>
            <?php
            $fp = fopen("files/Dudii_text.txt", "r") or die("Не вдалося відкрити файл");
            $text = "";
            while (!feof($fp)) {
                $text = $text . fgets($fp);
            }
            fclose($fp);
            echo "<p class=\"before\"><span style=\"font-size: 25px;\">Текст до змін: </span><br>$text</p><hr>";
            $text = str_replace(".", "", str_replace(",", "", $text));
            $text = strtolower_ua($text);
            $text = strtolower($text);

            $words = explode(" ", $text);
            asort($words);
            echo "<p class=\"before\"><span style=\"font-size: 25px;\">Текст після змін: </span><br>";
            foreach ($words as $value) {
                echo "$value ";
            }
            echo "</p>";

            ?>
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <p onclick="show('z6_2')" class="zavd">Завдання 6.2 V</p>
        <div id="z6_2" hidden>
            <?php
            $fp = fopen("files/Dudii_text.txt", "r") or die("Не вдалося відкрити файл");
            $text = "";
            while (!feof($fp)) {
                $text = $text . fgets($fp);
            }
            fclose($fp);
            echo "<p class=\"before\"><span style=\"font-size: 25px;\">Текст: </span><br>$text</p><hr>";
            $text = str_replace(".", "", str_replace(",", "", $text));
            $text = strtolower_ua($text);
            $text = strtolower($text);
            $words = explode(" ", $text);
            $words = array_unique($words);
            $array_with_count = array();
            foreach ($words as $value) {
                if ($value == reset($words)) array_push($array_with_count, substr_count($text, "$value "));
                elseif ($value == end($words)) array_push($array_with_count, substr_count($text, " $value"));
                else array_push($array_with_count, substr_count($text, " $value "));
            }
            $array = array_combine($words, $array_with_count);
            arsort($array);
            $n = 0;
            echo "<p class=\"before\"><span style=\"font-size: 25px;\">Список трьох слів, які найчастіше зустрічаються у тексті: </span><br><ul>";
            foreach ($array as $key => $value) {
                if ($n < 3) echo "<li>$key<br>";
                else break;
                $n++;
            }
            echo "</ul></p>";
            ?>
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <p onclick="show('z6_3')" class="zavd">Завдання 6.3 V</p>
        <div id="z6_3" hidden>
            <?php
            $fp = fopen("files/Dudii_text.txt", "r") or die("Не вдалося відкрити файл");
            $text = "";
            while (!feof($fp)) {
                $text = $text . fgets($fp);
            }
            fclose($fp);
            echo "<p class=\"before\"><span style=\"font-size: 25px;\">Текст до змін: </span><br>$text</p><hr>";
            $text = str_replace(".", "", str_replace(",", "", $text));
            $text = strtolower_ua($text);
            $text = strtolower($text);
            $words = explode(" ", $text);
            $words = array_unique($words);
            $array_with_count = array();
            foreach ($words as $value) {
                array_push($array_with_count,count_of_letters($value));
            }
            $array = array_combine($words, $array_with_count);

            arsort($array);
            $max = reset($array);
            echo "<p class=\"before\"><span style=\"font-size: 25px;\">Найдовші слова тексту і їхня довжина: </span><br><ul>";
            foreach ($array as $key => $value) {
                if ($value == $max) echo "<li>$key - $max<br>";
                else break;  
            }
            echo "</ul></p>";
            ?>
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <p onclick="show('z6_4')" class="zavd">Завдання 6.4 V</p>
        <div id="z6_4" hidden>
            <?php
            $fp = fopen("files/Dudii_text.txt", "r") or die("Не вдалося відкрити файл");
            $text = "";
            while (!feof($fp)) {
                $text = $text . fgets($fp);
            }
            fclose($fp);
            echo "<p class=\"before\"><span style=\"font-size: 25px;\">Текст до змін: </span><br>$text</p><hr>";
            $text = str_replace(".", "", str_replace(",", "", $text));
            $text = strtolower_ua($text);
            $text = strtolower($text);
            $words = explode(" ", $text);
            $words = array_unique($words);
            echo "<p class=\"before\"><span style=\"font-size: 25px;\">Cлова, які починаються на першу букву мого прізвища: </span><br><ul>";
            foreach ($words as $value) {
                $letters = preg_split('#(?<!^)(?!$)#u', $value);
                if ($letters[0] == "d" or $letters[0] == "д") echo "<li>$value<br>";
            }
            echo "</ul></p>";
            ?>
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <p onclick="show('z6_5')" class="zavd">Завдання 6.5 V</p>
        <div id="z6_5" hidden>
            <a id="b6" class="button" href="Dudii_target.php" target="show" name="">Згенерувати новий текст</a>
            <div>
                <iframe id="tar" name="show"></iframe>
            </div>
        </div>

    </div>
    <div class="d1">
        <a href="Dudii_lab5.php">Назад</a>
    </div>
</body>

</html>