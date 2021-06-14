<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 2</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body>
    <div id="div2" class="verh">
        <form id="forma" action="Dudii_z2.php" method="post">
            <p><span class="text">Ім'я файла:</span>
                <input class="input_n inp" type="text" name="file_name" required>
            </p>
            <input id="b2" class="button" type="submit" value="Тиць">
        </form>
        <?php
        function file_size($f_s)
        {
            $names_array = array("GB", "MB",  "KB", "B");
            $size = 1024;
            $array_size = count($names_array);
            $f_s = (int)$f_s;
            for ($i = 0; $i < $array_size; $i++) {
                $byte_size = pow($size, $array_size - $i);
                if ($f_s >= $byte_size) {
                    $f_s = $f_s / $byte_size;
                    return round($f_s, 3) . " " . $names_array[$i - 1];
                }
            }
            return $f_s . $names_array[$array_size - 1];
        }
        if (
            !isset($_POST['file_name'])
        ) echo "<span>Дані не внесено!</span>";
        else {
            $file_name = $_POST['file_name'];
            if (!file_exists("$file_name"))
                echo "Файл з іменем $file_name у поточному каталозі не існує";
            else {
                //readfile — Выводит файл
                $f_s = filesize($file_name);
                $f_s = file_size($f_s);
                echo "<p class=\"sent_1\"><span class=\"sent_2\">Розмір файлу: </span>" . $f_s . "</p>";
                echo "<p class=\"sent_1\"><span class=\"sent_2\">Час створення: </span>" . date("d.m.Y H:i:s.", filectime($file_name) + 7200) . "</p>";
                echo "<p class=\"sent_1\"><span class=\"sent_2\">Час останньої модифікації: </span>" . date("d.m.Y H:i:s.", filemtime($file_name) + 7200) . "</p>";

                $fp = fopen($file_name, "r") or die("Не вдалося відкрити $file_name");
                $fsize = filesize($file_name);
                //    $text = readfile($file_name);
                (string)$text = fread($fp, ($fsize));
                // echo "$text";
                $text = str_replace(">", "&gt;", str_replace("<", "&lt;", $text));
                echo "<p class=\"sent_1\"> <span class=\"sent_2\">Вміст файлу:</span> <br> <div class=\"sent_3\"> <pre>".$text."</pre></div></p>";            
            }
        }
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab5.php">Назад</a>
    </div>
</body>

</html>