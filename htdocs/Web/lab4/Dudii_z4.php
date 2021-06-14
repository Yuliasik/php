<?php
require("../config.php");
include("../function.php");
?>
<html>

<head>
    <title>Завдання 4</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
    <meta charset="utf-8">
</head>

<body>
    <div id="div4" class="verh">
        <?php
        $country["Ukraine"] = array("name" => "Україна", "capital" => "Київ", "popul" => "45");
        $country["France"] = array("name" => "Франція", "capital" => "Париж", "popul" => "66");
        $country["Germany"] = array("name" => "Німеччина", "capital" => "Берлін", "popul" => "83");
        $country["Italy"] = array("name" => "Італія", "capital" => "Рим", "popul" => "60");
        $country["Poland"] = array("name" => "Іспанія", "capital" => "Берлін", "popul" => "46");
        echo "<table class=\"table1\"> <tr id=\"zag\"><td>Назва</td><td>Столиця</td><td>Населення, млн.ч.</td></tr>";
        foreach ($country as $key => $value) {
            echo "<tr>";
            foreach ($value as $ikey => $ivalue) {
                echo "<td>$ivalue </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<hr>";
        echo "<div class=\"zavd2\">";
        foreach ($country as $key => $value) {
            $country2 =  "$value[name]";
            $c = preg_split('//u', $country2, -1, PREG_SPLIT_NO_EMPTY);
            $lc = $c[count($c) - 1];
            $country2 = substr($country2, 0, -2);

            switch ($lc) {
                case "я":
                    $country2 = $country2 . "ї";
                    break;
                case "а":
                    $country2 = $country2 . "и";
                    break;
                case "ь":
                case "і":
                    $country2 = $country2 . "і";
                    break;
                default:
                    $country2 = $country2 . "у";
                    break;
            }
            echo "Столиця $country2 — $value[capital], населення — $value[popul] млн. ч<br>";
        }
        
        echo "<hr>";
        ksort($country);

        foreach ($country as $key => $value) {
            print_r("$key: <br>");
            foreach ($value as $ikey => $ivalue) {
                print_r("$ikey =>  $ivalue<br>");
            }
            echo "<br>";
        }
        echo "</div>";
        ?>

    </div>
    <div class="d1">
        <a href="Dudii_lab4.php">Назад</a>
    </div>
</body>

</html>