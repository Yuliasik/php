<?php
require("../config.php");
?>

<html>
    <head>
        <title>Лабораторна №7</title>
        <link rel='stylesheet' href='Dudii_style.css' type='text/css'/>
    </head>
    <body>
        <div class="perel">
            <div class="header">
                <h2>Лабораторна №7</h2>
            </div>
            <div class="osn">
                <ul>
                    <?php
                        echo "<li><a href=\"Dudii_z1.php\">Завдання 1-4</a></li>";
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