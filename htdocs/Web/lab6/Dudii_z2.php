<?php
require("../config.php");
include("../function.php")
?>
<html>

<head>
    <title>Завдання 2</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div2" class="verh">
        <?php
        $fp = fopen("files/Dudii_text.txt", "r") or die("Не вдалося відкрити файл");
        $text = "";
        while (!feof($fp)) {
            $text = $text . fgets($fp);
        }
        fclose($fp);
        $text1 = str_replace(">", "&gt;", str_replace("<", "&lt;", $text));
        echo "<div class=\"sent\">";
        echo "<p>$text1</p><hr>";

        $pattern = "/(?=<([a-zA-Z]*)>)/";

        $c =  preg_match_all($pattern, $text, $rezult);
        echo "<div>Кількість відкриваючих тегів:  $c <br>";
        echo "<hr>";
        
        $rezult = $rezult[1];
        print_array($rezult);

        for ($i = 0; $i < count($rezult); $i++) {
            $rezult[$i] = "&lt;". $rezult[$i]. "&gt;";
        }
        print_array($rezult);
        echo "<hr></div>";

        echo "</div>";
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab6.php">Назад</a>
    </div>
</body>

</html>