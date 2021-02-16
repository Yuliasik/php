<?php
require("../config.php");
?>
<html>
    <head>
        <title>switch</title>
        <link rel='stylesheet' href='Dudii_style.css' type='text/css'/>
    </head>
    <body>
        <div id="div1" class="verh">
            <form action="Dudii_1.19.php" method="post">
                <p id="text">Введіть число від 1 до 5</p>
                <input class="input_n" type="number" name="num" max=10>
                <input class="button" id="b1" type="submit" value="Тиць">
            </form>        
            <?php
            //перевірка, чи заповненний num
                if(!isset($_POST['num'])) echo 'Число не вибране(';
                else{
                    $n = $_POST['num'];
                    switch ($n){
                    #якщо num містить 1
                    case 1:
                        echo 'Вам варто трохи почекати, і майбутнє принесе вам велику радість. ';
                        break;
                    case 2:
                        echo 'Через 3 місяці, 3 тижні і 3 дні відбудеться подія, яка назавжди змінить вашу долю. ';
                        break;
                    case 3:
                        echo 'Якщо чогось дійсно хочеш, то весь всесвіт посприяє виконанню бажання. ';
                        break;
                    case 4:
                        echo 'Діліться радістю з оточуючими і самі насолоджуйтеся їй. ';
                        break;
                    case 5:
                        echo 'У цьому житті необхідно спробувати все. ';
                        break;
                    default:
                        echo                      'Тут тільки 5 побажань( '; /*браузер проігнорує  пробільні символи*/
                        break;
                    }
                }
            ?>
        </div>
        <div class="d1">
            <a href="Dudii_lab1.php">Назад</a>
        </div>
    </body>
</html>
