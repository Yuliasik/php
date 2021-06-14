<?php
require("../config.php");
include("../function.php");
?>
<html>

<head>
    <title>Завдання 5</title>
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
    <div id="div5" class="verh">
        <?php
        $text = read_file_with_tags("files/Dudii_text.txt");
        echo "<p style=\"font-size: 17px;\">$text</p><hr>";
        ?>
        <p style="font-size: 24px; text-align: center;">Всі входження слова незалежно від регістру (в тому числі і з усіма закінченнями та префіксами):</p>
        <p onclick="show('z5_1')" class="zavd">тег V</p>
        <div id="z5_1" hidden>
            <?php
            $text = read_file_with_tags("files/Dudii_text.txt");

            $pattern = "/\bтег[а-яіїє]*\b/ui";
            $c = preg_match_all($pattern, $text, $rezult);
            echo "<hr>Кількість: $c<br>";

            $rezult = $rezult[0];
            print_array($rezult);
            echo "<hr>";

            ?>
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <p onclick="show('z5_2')" class="zavd">HTML V</p>
        <div id="z5_2" hidden>
            <?php
            $text = read_file_with_tags("files/Dudii_text.txt");
            $pattern = "/\b([Hh][Tt][Mm][Ll][a-zA-Z]*)/";
            $c = preg_match_all($pattern, $text, $rezult);
            echo "<hr>Кількість: $c<br>";
            $rezult = $rezult[0];
            print_array($rezult);
            echo "<hr>";
            ?>
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <p onclick="show('z5_3')" class="zavd">Частини слова, введеної в однорядкове текстове поле V</p>
        <div id="z5_3" hidden>
            <hr>
            <form id="forma" action="Dudii_z5.php" method="post">
                <p><input class="input_n inp" type="text" name="sumbols" required></p>
                <input class="button b2" type="submit" value="Тиць">
            </form>

            <?php
            if (isset($_POST['sumbols'])) {

                $sumbols = $_POST['sumbols'];
                $text = read_file_with_tags("files/Dudii_text.txt");
                $text = str_replace("&gt;", ">", str_replace("&lt;", "<", $text));
                $sentensens = explode(".", $text);
                $full_array = array_fill_keys($sentensens, 0);
                $pattern = "/\b[а-яіїєa-z&]*" . $sumbols . "[а-яіїєa-z;]*\b/iu";
                $all = 0;
                foreach ($full_array as $key => &$value) {
                    $c = preg_match_all($pattern, $key);
                    $value = $c;
                    $all += $value;
                }
                // print_array_and_indexes($full_array); // поділено на речення
                echo "<hr>";
                echo "«" . $sumbols . "» <br>Всього збігів : $all<br><br>";
                $rezult = array();
                arsort($full_array); //  речення посортовано за спаданням по кількості входу словосполучення
                $key_str = "";
                foreach ($full_array as $key => $value) {
                    if ($value != 0) {

                        $words = preg_split("/\s/", $key);
                        foreach ($words as $word) {
                            if (preg_match($pattern, $word)) {
                                $key_str .= "<b>" . htmlspecialchars($word) . "</b> ";
                            } else  $key_str .=  htmlspecialchars($word) . " ";
                        }

                        // echo htmlspecialchars($key_str) . ". ";
                        echo $key_str . ". ";
                        $key_str = "";
                    }
                }
            };
            echo "<hr>";
            ?>

        </div>
    </div>
    <div class="d1">
        <a href="Dudii_lab6.php">Назад</a>
    </div>
</body>

</html>