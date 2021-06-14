<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 6</title>
            <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div3" class="verh">
        <?php

        class Country
        {
            public $name;
            public $population;
            public $capital;
            function __construct($name, $population, $capital)
            {
                $this->name = $name;
                $this->population = $population;
                $this->capital = $capital;
            }
            function array_data()
            {
                $array = array("Країна: " => $this->name,
                               "населення: " => $this->population,
                               "столиця: " => $this->capital);
                return $array;
            }
        }

        $c1 = new Country("Данія", "5,79 млн.", "Копенгаген");
        $c2 = new Country("Джибуті", "0,98 млн.", "Джибуті");
        $c3 = new Country("Домініка", "71,9 тис.", "Розо");
        $c4 = new Country("Домініканська Республіка", "10,8 млн.", "Санто-Домінго");

        $numbers_array = array($c1, $c2, $c3, $c4);
        $array_with_result = array();

        foreach ($numbers_array as $n) {
            array_push($array_with_result, $n->array_data());
        }

        foreach ($array_with_result as $key => $value) {
            echo "<p><table class=\"table2\">";
            foreach ($value as $ikey => $ivalue) {
                echo "<tr><td>$ikey</td><td>$ivalue</td></tr>";
            }
            echo "</table></p>";
        }
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab7.php">Назад</a>
    </div>
</body>

</html>