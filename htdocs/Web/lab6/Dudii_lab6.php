<?php
require("../config.php");
?>

<html>
    <head>
        <title>Лабораторна №6</title>
        <link rel='stylesheet' href='Dudii_style.css' type='text/css'/>
    </head>
    <body>
        <div class="perel">
            <div class="header">
                <h2>Лабораторна №6</h2>
            </div>
            <div class="osn">
                <ul>
                    <?php
                        echo "<li><a href=\"Dudii_z1.php\">Завдання 1</a></li>";
                        echo "<li><a href=\"Dudii_z2.php\">Завдання 2</a></li>";
                        echo "<li><a href=\"Dudii_z3.php\">Завдання 3</a></li>";
                        echo "<li><a href=\"Dudii_z4.php\">Завдання 4</a></li>";
                        echo "<li><a href=\"Dudii_z5.php\">Завдання 5</a></li>";
                   ?>
                </ul>
            </div>
        </div>
        <div class="d1">
            <a href="../index.php">Назад</a>
        </div>
    </body>

</html>