<?php
require("../config.php");
?>

<html>
    <head>
        <title>Лабораторна №4</title>
        <link rel='stylesheet' href='Dudii_style.css' type='text/css'/>
    </head>
    <body>
        <div class="perel">
            <div class="header">
                <h2>Лабораторна №4</h2>
            </div>
            <div class="osn">
                <ul>
                    <?php
                        echo "<li><a href=\"Dudii_z1.php\">Завдання 1</a></li>";
                        echo "<li><a href=\"Dudii_z2.php\">Завдання 2</a></li>";
                        echo "<li><a href=\"Dudii_z3.php\">Завдання 3</a></li>";
                        echo "<li><a href=\"Dudii_z4.php\">Завдання 4</a></li>";
                        echo "<li><a href=\"Dudii_z5.php\">Завдання 5</a></li>";
                        echo "<li><a href=\"Dudii_z6.php\">Завдання 6</a></li>";
                        echo "<li><a href=\"Dudii_z7.php\">Завдання 7</a></li>";
                    ?>
                </ul>
            </div>
        </div>
        <div class="d1">
            <a href="../index.php">Назад</a>
        </div>
    </body>

</html>