<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 4</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div4" class="verh">
        <?php
        $text = array(
            "table" => "Задає таблицю на HTML-сторінці",
            "thead" => "Визначає групу заголовків HTML-таблиці",
            "tbody" => "Визначає тіло таблиці",
            "tfoot" => "Задає нижній колонтитул таблиці",
            "th" => "Визначає клітинку-заголовок таблиці",
            "tr" => "Визначає рядок в таблиці",
            "td" => "Визначає комірку таблиці"
        );
        $fp = fopen("files/Dudii_tag1.txt", "w+") or die("Не вдалося відкрити файл");
        foreach ($text as $key => $value) {
            if ($value == end($text)) fputs($fp, "$key\n$value");
            else fputs($fp, "$key\n$value\n");
        }
        fseek($fp, 0, SEEK_SET);
        echo "<table class=\"table\"> <tr id=\"zag\"><td>Тег</td><td>Опис</td></tr>";
        $n = 0;
        while (!feof($fp)) {
            if ($n % 2 == 0) echo "<tr><td>&lt;".substr(fgets($fp), 0, -1)."&gt;</td>";
            if ($n % 2 != 0) echo "<td>" . fgets($fp) . "</td></tr>";
            $n++;
        }
        echo "</table>";
        fclose($fp);
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab5.php">Назад</a>
    </div>
</body>

</html>