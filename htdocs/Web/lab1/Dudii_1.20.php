<?php
require("../config.php");
?>
<html>
    <head>
        <title>while</title>
        <link rel='stylesheet' href='Dudii_style.css' type='text/css'/>
    </head>
    <body>
        <div id="div3" class="verh">
            <form action="Dudii_1.20.php" method="post">
                <p>Введіть число</p>
                <input class="input_n" type="number" name="num">
                <br>
                <input id="b3" class="button" type="submit" value="Тиць">
            </form>
            <?php
                if(!isset($_POST['num'])) echo 'Число не вибране(';
                else{
                    $n = $_POST['num'];
                    echo '<div id="numbers3">';
                    $i = 1;
                    $s = 0;
                    define('CONSVALUE',2.34);
                    $con=(int)CONSVALUE;

                    while ($i <= $n) {
                        echo $i.")  $s + $con = ". ($s + $con) .'<br>';
                        $s = $s+$con;
                        $i++;
                    }
                }
            ?>
        </div>
        <div class="d1">
            <a href="Dudii_lab1.php">Назад</a>
        </div>
    </body>
</html>