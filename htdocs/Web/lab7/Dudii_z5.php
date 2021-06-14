<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 5</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div2" class="verh">
        <?php

        class Number
        {
            public $number;
            function __construct($number)
            {
                $this->number = $number;
            }
            function multiplication()
            {
                $array = array();
                for ($i = 1; $i < 10; $i++) {
                    array_push($array, $i * $this->number);
                }
                return $array;
            }
        }

        $n2 = new Number(2);
        $n3 = new Number(3);
        $n4 = new Number(4);
        $n5 = new Number(5);
        $n6 = new Number(6);
        $n7 = new Number(7);
        $n8 = new Number(8);
        $n9 = new Number(9);
        $n10 = new Number(10);

        $numbers_array = array($n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10);
        $array_with_result = array();

        foreach ($numbers_array as $n) {
            array_push($array_with_result, $n->multiplication());
        }
        echo "<table class=\"table1\"> <tr id=\"zag\">";
        for ($j = 1; $j < 10; $j++) {
            if ($j != 1) {
                echo "<td>" . $j . "</td>";
            } else echo "<td></td>";
            for ($i = 0; $i < count($numbers_array); $i++) {
                echo "<td>" . $array_with_result[$i][$j - 1] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab7.php">Назад</a>
    </div>
</body>

</html>