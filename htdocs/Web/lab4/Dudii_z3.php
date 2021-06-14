<?php
require("../config.php");
include("../function.php");
?>
<html>

<head>
    <title>Завдання 3</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
    <meta charset="utf-8">
</head>

<body>
    <div id="div3" class="verh">
        <?php
        $my_topic = array("2" => "Мухомор", "3" => "Маслюк", "4" => "Печериці", "5" => "Лисички");
        echo "<hr>";
        print_array_and_indexes($my_topic, "<br>");
        echo "<hr>";
        $my_topic = array_flip($my_topic);
        print_array_and_indexes($my_topic, "<br>");
        echo "<hr>";
        ?>

    </div>
    <div class="d1">
        <a href="Dudii_lab4.php">Назад</a>
    </div>
</body>

</html>