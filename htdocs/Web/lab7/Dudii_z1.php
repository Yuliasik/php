<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 1-4</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div1" class="verh">
        <?php

        class Student
        {
            public $name;
            public $surname;
            public $group;
            function __construct($name, $surname, $group)
            {
                $this->name = $name;
                $this->surname = $surname;
                $this->group = $group;
            }
            function getInfo()
            {
                echo "<p>---Студент--- <br> Ім'я: " . $this->name . "<br>";
                echo "Прізвище: " . $this->surname . "<br>";
                echo "Група: " . $this->group . "<br></p>";
            }
            function __clone()
            {
                $this->name = "*ім'я*";
                $this->surname = "*прізвище*";
                $this->group = "*група*";
            }
        }
        $st1 = new Student("", "", "");
        $st1->name = "Євген";
        $st1->surname = "Берладинюк";
        $st1->group = "ІПЗ-21";

        $st2 = new Student("", "", "");
        $st2->name = "Артем";
        $st2->surname = "Грибанов";
        $st2->group = "ІПЗ-21";

        $st3 = new Student("", "", "");
        $st3->name = "Ольга";
        $st3->surname = "Григораш";
        $st3->group = "ІПЗ-21";

        $st4 = new Student("Дволітко", "Денис", "ІПЗ-21");
        $st5 = new Student("Дворський", "Віталій", "ІПЗ-21");
        $st6 = new Student("Дудій", "Юлія", "ІПЗ-21");

        $st7 = clone $st1;

        $students_array = array($st1, $st2, $st3, $st4, $st5, $st6, $st7);
        foreach ($students_array as $st) {
            $st->getInfo();
        }


        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab7.php">Назад</a>
    </div>
</body>

</html>