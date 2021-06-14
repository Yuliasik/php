<?php
require("../config.php");
include("../function.php");
?>
<html>

<head>
    <title>Завдання 5</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body>
    <div id="div5_1" class="verh">
        <?php
        function output($name, $team)
        {
            echo "<br>$name:";
            foreach ($team as $value) {
                echo "$value, ";
            }
        }
        $sportswomen["s1"] = array("team" => "Stars", "weight" => "45");
        $sportswomen["s2"] = array("team" => "Champions", "weight" => "55");
        $sportswomen["s3"] = array("team" => "Stars", "weight" => "56");
        $sportswomen["s4"] = array("team" => "Champions", "weight" => "61");
        $sportswomen["s5"] = array("team" => "Stars", "weight" => "65");
        $sportswomen["s6"] = array("team" => "Champions", "weight" => "53");
        $sportswomen["s7"] = array("team" => "Stars", "weight" => "72");
        $sportswomen["s8"] = array("team" => "Champions", "weight" => "66");
        $sportswomen["s9"] = array("team" => "Stars", "weight" => "57");
        $sportswomen["s10"] = array("team" => "Champions", "weight" => "52");

        $name1 = " ";
        $name2 = " ";
        foreach ($sportswomen as $value) {
            if ($name1 == " ")
                $name1 = $value["team"];
            elseif ($value["team"] != $name1) {
                $name2 = $value["team"];
                break;
            }
        }

        $team1 = array();
        $team2 = array();

        foreach ($sportswomen as $value) {
            if ($value["team"] == $name1)
                array_push($team1, $value["weight"]);
            elseif ($value["team"] == $name2)
                array_push($team2, $value["weight"]);
        }
        echo "<div class=\"zavd5\">";
        output($name1, $team1);
        output($name2, $team2);
        $ct1 = 0;
        $ct2 = 0;
        foreach ($team1 as $value) {
            if ((float)$value > 50 && (float)$value <= 57)
                $ct1++;
        }
        foreach ($team2 as $key => $value) {
            if ((float)$value > 50 and (float)$value <= 57)
                $ct2++;
        }
        echo "<br><br>Кількість спортсменок, чия вага перевищує 50 кг, але не більше 57 кг: <br>";
        echo "$name1: ";
        if ($ct1 != 0)
            echo "$ct1";
        else echo " відсутні";
        echo "<br>$name2: ";
        if ($ct2 != 0)
            echo "$ct2";
        else echo " відсутні";

        echo "</div>";
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_z5.php">Назад</a>
    </div>
</body>

</html>