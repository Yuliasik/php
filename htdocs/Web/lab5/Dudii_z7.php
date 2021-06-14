<?php
require("../config.php");
include("../function.php");
?>
<html>

<head>
    <title>Завдання 7</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div7" class="verh">
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
            if ($value == reset($words)) array_push($array_with_count, substr_count($text, "$value "));
            elseif ($value == end($words)) array_push($array_with_count, substr_count($text, " $value"));
            else array_push($array_with_count, substr_count($text, " $value "));
        }
        $array = array_combine($words, $array_with_count);
        asort($array);
        foreach ($array as $key => $value) {
            echo "$key - $value <br>";
        }
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab5.php">Назад</a>
    </div>
</body>

</html>