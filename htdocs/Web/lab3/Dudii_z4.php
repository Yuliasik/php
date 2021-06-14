<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 4</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css'>
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
    <div id="div3" class="verh">
        <p onclick="show('z6')" class="zavd">Завдання 6 V</p>
        <div id="z6" hidden>
            <p><span style="text-decoration: underline; font-size: 28px;">Умова:</span><br>
                Знайти та роздрукувати ряд Фібоначчі починаючи з 5-го члену ряду і закінчуючи 20-м. Підрахувати їх кількість.</p>
            <hr width="550px" style="margin: auto; border: 1px solid black"><br>
            <div class="answ">
                <?php
                $array = array(0, 1);
                $count = 0;
                for ($i = 3; $i < 21; $i++) {
                    array_push($array, $array[count($array) - 1] + $array[count($array) - 2]);
                    if ($i > 4){
                        $count ++;
                        echo $array[count($array) - 1] . "  ";
                    }
                }
                echo "<br>Кількість елементів - $count"
                ?>
            </div>
        </div>
        <p onclick="show('z7')" class="zavd">Завдання 7 V</p>
        <div id="z7" hidden>
            <p><span style="text-decoration: underline; font-size: 28px;">Умова:</span><br>
                Знайти та роздрукувати кожне п'яте ціле число в ряді -1 до 51.</p>
            <hr width="550px" style="margin: auto; border: 1px solid black"><br>
            <div class="answ">
                <?php
                $n = 0;
                for ($i = -1; $i < 52; $i++) {
                    $n++;
                    if ($n == 5) {
                        echo $i . " ";
                        $n = 0;
                    }
                }
                ?>
            </div>
        </div>
        <p onclick="show('z8')" class="zavd">Завдання 8 V</p>
        <div id="z8" hidden>
            <p><span style="text-decoration: underline; font-size: 28px;">Умова:</span><br>
                Спортсмен у перший день подолав 10 км дистанції. Кожного наступного дня він пробігав на 10% більше, ніж попереднього. За скільки днів спортсмен подолає 50 км?</p>
            <hr width="550px" style="margin: auto; border: 1px solid black"><br>
            <div class="answ">
                <?php
                    $distance = 10;
                    $distance_last = 10;
                    $count = 1;
                    while ($distance < 50){
                        $count++;
                        $distance_last =  $distance_last * 1.1;
                        $distance += $distance_last;
                    }
                    echo "За $count днів";
                ?>
            </div>
        </div>
    </div>
    <div class="d1">
        <a href="Dudii_lab3.php">Назад</a>
    </div>
</body>

</html>