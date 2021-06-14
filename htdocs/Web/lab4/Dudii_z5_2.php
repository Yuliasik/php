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
    <div id="div5_2" class="verh">
        <?php
        $city["IF"] = array(
            "city_name" => "Івано-Франківськ",
            "street_1" => array("name" => "Чорновола", "inhabitant" => "516"),
            "street_2" => array("name" => "Сахарова", "inhabitant" => "315"),
            "street_3" => array("name" => "Шевченка", "inhabitant" => "431")
        );
        $city["Lviv"] = array(
            "city_name" => "Львів",
            "street_1" => array("name" => "Дорошенка", "inhabitant" => "416"),
            "street_2" => array("name" => "Грушевського", "inhabitant" => "385"),
            "street_3" => array("name" => "Франка", "inhabitant" => "631")
        );

        $city["Kyiv"] = array(
            "city_name" => "Київ",
            "street_1" => array("name" => "Коновальця", "inhabitant" => "815"),
            "street_2" => array("name" => "Грінченка", "inhabitant" => "765"),
            "street_3" => array("name" => "Федорова", "inhabitant" => "679")
        );

        $max_inhabitant = 0;
        $number = 0;
        $number_max = array();
        $r = 0;
        foreach ($city as $key1 => $value1) { // [0]=IF
            $r1 = 1;
            $number--;
            foreach ($value1 as $key2 => $value2) { //[0]=city_name
                $number++;
                $r = 0;
                if ($r1 != 1) {
                    foreach ($value2 as $key3 => $value3) { //кількість
                        if ($r == 1) {
                            if ($max_inhabitant < $value3) {
                                $max_inhabitant = $value3;
                                unset($number_max); 
                                $number_max = array();
                                $number_max[0] = $number;
                            } elseif ($max_inhabitant == $value3) {
                                array_push($number_max, $number);
                            }
                        }
                        $r++;
                    }
                }
                $r1++;
            }
        }

        $sum = array(0, 0, 0);
        $n = 0;
        foreach ($city as $key1 => $value1) { // [0]=IF
            $r1 = 1;
            foreach ($value1 as $key2 => $value2) { //[0]=city_name
                $r2 = 1;
                if ($r1 != 1) {
                    foreach ($value2 as $key3 => $value3) { //кількість
                        if ($r2 != 1) {
                            $sum[$n] = $sum[$n] + $value3;
                        }
                        $r2++;
                    }
                }
                $r1++;
            }
            $n++;
        }
        $r = 1;
        echo "<table id=\"table2\">";
        echo "<tr><td>Місто</td><td>Вулиця</td><td>Кількість мешканців</td><td>Загальна кількість мешканців</td></tr>";
        $number = 0;       
        foreach ($city as $key1 => $value1) { // [0]=IF
            $r = 1;
            $n = 0;
            $number--;
            foreach ($value1 as $key2 => $value2) { //[0]=city_name
                $number++;
                $r2 = 1;
                if ($r == 1) echo "<tr><td rowspan=\"4\">$value2</td>";
                else {
                    echo "<tr>";
                    foreach ($value2 as $key3 => $value3) { //кількість
                        if ($r1 == 1) {
                            echo "<td>$value3</td>";
                        } else {
                            if (in_array($number, $number_max))
                                echo "<td style=\"color: rgb(15, 79, 30);  font-size: 19px; font-weight: bold;\">$value3</td>";
                            else echo "<td>$value3</td>";
                        }
                        $r1++;
                    }
                    if ($r == 2) echo "<td rowspan=\"4\">$sum[$n]</td></tr>";
                    else
                        echo "</tr>";
                }
                $r++;
            }
            echo "</tr>";
            $n++;
        }
        echo "</table>";
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_z5.php">Назад</a>
    </div>
</body>

</html>