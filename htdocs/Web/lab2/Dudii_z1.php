<?php
require("../config.php");
?>
<html>
    <head>
        <title>Завдання 1</title>
        <link rel='stylesheet' href='Dudii_style.css' type='text/css'/>
    </head>
    <body>
        <div id="div1" class="verh">
            <div id="block_left">
                <form action="Dudii_z1.php" method="post">
                    <p>Введіть перше число:</p>
                    <input class="input_n" type="text" name="num1" required>
                    <br>
                    <p>Введіть друге число:</p>
                    <input class="input_n" type="text" name="num2" required>
                    <br>
                    <input id="b1" class="button" type="submit" value="Тиць">
                </form>
            </div>
            <div id="block_right">
                
                   <?php
                      if(!isset($_POST['num1']) or !isset($_POST['num2'])) echo 'Число не вибране(';
                      else{
                          $n1 = $_POST['num1'];
                          $n2 = $_POST['num2'];
                          echo "<p> $n1 - $n2 = ".($n1-$n2)." </p>";
                          echo "<p>$n1 * $n2 = ".($n1*$n2)." </p>";
                          echo "<p>$n1 % $n2 = ".($n1%$n2)." </p>";
                      }
                    ?>
               
            </div>
        </div>
        <div class="d1">
            <a href="Dudii_lab2.php">Назад</a>
        </div>
    </body>
</html>