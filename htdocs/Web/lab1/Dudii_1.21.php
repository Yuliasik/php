<?php
require("../config.php");
?>
<html>
    <head>
        <title>do...while</title>
        <link rel='stylesheet' href='Dudii_style.css' type='text/css'/>
    </head>
    <body>
        <div id="div4" class="verh">
            <form action="Dudii_1.21.php" method="post">
                <p>Введіть число</p>
                <input class="input_n" type="number" name="num">
                <br>
                <input id="b4" class="button" type="submit" value="Тиць">
            </form>
            <?php
                if(!isset($_POST['num'])) echo 'Число не вибране(';
                else{
                    $n = $_POST['num'];
                    $number=NULL;
                    $varname="number";
                    $$varname="$n";
                    $i = 1;
                    $d = 1;
                    do{
                        $d = $d * $i;
                        $i++;
                    }
                    while ($i <= $number);
                    echo $number.'! = '.$d;
                }
            ?>
        </div>
        <div class="d1">
            <a href="Dudii_lab1.php">Назад</a>
        </div>
    </body>
</html>