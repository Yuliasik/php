<?php
require("../config.php");
?>
<html>
    <head>
        <title>if</title>
        <link rel='stylesheet' href='Dudii_style.css' type='text/css'/>
    </head>
    <body>
        <div id="div2" class="verh">
            <form action="Dudii_1.15.php" method="post">
                <p>Введіть проміжок</p>
                <input class="input_n" type="number" name="num1">
                <input class="input_n" type="number" name="num2">
                <br>
                <p>Введіть кратність</p>
                <input class="input_n" type="number" name="num3">
                <br>
                <input id="b2" class="button" type="submit" value="Тиць">
            </form>
            <?php
                if(!isset($_POST['num1']) or !isset($_POST['num2']) or !isset($_POST['num3'])) echo 'Число не вибране(';
                else{
                    $n1 = $_POST['num1'];
                    $n2 = $_POST['num2'];
                    $n3 = $_POST['num3'];
                    echo "[$n1;$n2] ⋮ $n3<br>";
                    echo '<div id="numbers">';
                    for ($i=$n1; $i <= $n2; $i++) { 
                        if ($i%$n3==0) echo "$i ";
                        elseif ($i%2==0) echo ' * ';
                        else echo ' . ';
                    }
                    echo '</div>';
                }
            ?>
            <p> . - непарні <br> * - парні</p>
        </div>
        <div class="d1">
            <a href="Dudii_lab1.php">Назад</a>
        </div>
    </body>
</html>