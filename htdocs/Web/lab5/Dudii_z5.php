<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 5</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div5" class="verh">
        <?php
        $text = array(
            "q" => "Коротка цитата",
            "s" => "Визначає текст застарілим та закреслює його ",
            "b" => "Робить текст жирним",
            "dd" => "Визначення терміну",
            "i" => "Виділяє текст курсивою",
            "mark" => "Виділяє текст жовтим",
            "samp" => "Визначає текст як вивід програми ябо скрипта",
            "sub"=> "Відображає текст у вигляді нижнього індексу",
            "sup"=> "Відображає шрифт у вигляді верхнього індексу"
            
        );
        $fp = fopen("files/Dudii_tag2.txt", "w+") or die("Не вдалося відкрити файл");
        foreach ($text as $key => $value) {
            if ($value == end($text)) fputs($fp, "<$key> $value");
            else  fputs($fp, "<$key> $value\n");
        }
        fseek($fp, 0, SEEK_SET);
        echo "<table class=\"table\"> <tr id=\"zag\"><td>Тег</td><td>Опис</td></tr>";
        $n = 0;
        while (!feof($fp)) {
            $line = fgets($fp);
            $i = strrpos($line, ">", 0);
            echo "<tr><td>&lt;".substr($line, 1, $i-1)."&gt;</td><td>".substr($line, $i + 1)."</td></tr>";
            $n++;
        }
        echo "</table>";
        fclose($fp);
        $sent = "Всього у файлі tag2.txt описано тегів: $n";

        $fp2 = fopen("files/Dudii_out.txt", "w+") or die("Не вдалося відкрити файл");
        fputs($fp2, "$sent");
        fseek($fp2, 0, SEEK_SET);
        while (!feof($fp2)) {
            echo "<p class=\"sent\">".fgets($fp2)."</p>";
        }
        fclose($fp2);
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab5.php">Назад</a>
    </div>
</body>

</html>