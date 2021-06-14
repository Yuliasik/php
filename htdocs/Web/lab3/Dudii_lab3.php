<?php
require("../config.php");
include("../function.php");
?>

<html>

<head>
    <title>Лабораторна №3</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body>
    <div class="perel">
        <div class="header">
            <h2>Лабораторна №3</h2>
        </div>
        <div class="osn">
            <ul>
                <?php
                $my_array = array(
                    "<a href=\"Dudii_z2.php\">Завдання 2</a>",
                    "<a href=\"Dudii_z3.php\">Завдання 3</a>",
                    "<a href=\"Dudii_z4.php\">Завдання 4</a>",
                    "<a href=\"Dudii_z5.php\">Завдання 5</a>",
                    "<a href=\"Dudii_zavdannja6.php\">Завдання 6</a>",
                    "<a href=\"Dudii_zavdannja7.php?num=" . mt_rand(1, 6) . "\">Завдання 7</a>"
                    // "<a href=\"Dudii_z7.php\">Завдання 7</a>",
                    // "<a href=\"Dudii_z7.php\">Завдання 7</a>"
                );
                create_table2($my_array, "table", 3, 8, 8);
                ?>
            </ul>
        </div>
    </div>
    <div class="d1">
        <a href="../index.php">Назад</a>
    </div>
</body>

</html>