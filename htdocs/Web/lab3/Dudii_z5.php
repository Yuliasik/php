<?php
require("../config.php");
include("../function.php");
?>
<html>

<head>
    <title>Завдання 3</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
    <script>
        function show(id) {
            if (document.getElementById(id).hidden == true)
                document.getElementById(id).hidden = false;
            else
                document.getElementById(id).hidden = true;
        }
    </script>
</head>

<body>
    <div id="div4" class="verh">
        <p onclick="show('z5.1')" class="zavd5">5.1 V</p>
        <div id="z5.1" hidden>
            <form action="Dudii_z5.php" method="post">
                <p>Кількість елементів масиву =
                    <input class="input_n z5_i" type="number" name="count" required>
                </p>
                <input class="button b4" type="submit" value="Тиць">
            </form>
            <?php
            if (!isset($_POST['count'])) echo 'Число не вибране(';
            else {
                $my_array = create_random_array($_POST['count'], 1, 20);
                create_array($my_array);
            }
            ?>
        </div>
        <p onclick="show('z5.2')" class="zavd5">5.2 V</p>
        <div id="z5.2" hidden>
            <form action="Dudii_z5.php" method="post">
                <p>Кількість елементів масиву =
                    <input class="input_n z5_i" type="number" name="a" required>
                </p>
                <input class="button b4" type="submit" value="Тиць">
            </form>
            <?php
            if (!isset($_POST['a'])) echo 'Число не вибране(';
            else {
                $a = $_POST['a'];
                $N = (int)$_POST['a'] % 10 * 3;
                $array = array();
                for ($i = 0; $i < $N; $i++) {
                    $my_array = create_random_array($N,1, 100);
                    $array[$i] = $my_array;
                }
                two_array($array);
            }
            ?>
        </div>
    </div>
    <div class="d1">
        <a href="Dudii_lab3.php">Назад</a>
    </div>
</body>

</html>