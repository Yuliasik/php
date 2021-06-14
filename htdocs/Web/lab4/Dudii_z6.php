<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 6</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
    <script>
        function load() {
            var f = document.getElementById("forma");
            var url = f.getAttribute("action");
            var iq = url.indexOf("?");
            var new_url = url.slice(0, iq)
            new_url = new_url + "?n=" + globalN();
            f.setAttribute("action", new_url);
        }

        function globalN() {
            if (!localStorage.getItem('schet')) {
                localStorage.setItem('schet', 0);
            } else {
                s = Number(localStorage.getItem('schet'))
                s += 1;
                localStorage.setItem('schet', s);
            }
            return localStorage.getItem('schet')
        }
    </script>
</head>

<body onload="load()">
    <div id="div6" class="verh">
        <form id="forma" action="Dudii_z6.php?n=0" method="post">
            <p><span class="text">Прізвище:</span>
                <input class="input_n inp" type="text" name="lastname" required>
            </p>
            <p><span class="text">Ім'я:</span>
                <input class="input_n inp" type="text" name="name" required>
            </p>
            <p><span class="text">Електронна адреса:</span>
                <input class="input_n inp" type="email" name="e-mail" required>
            </p>
            <p><span class="text">Пароль:</span>
                <input class="input_n inp" type="password" name="pass" required>
            </p>
            <p><span class="text">Повторіть пароль:</span>
                <input class="input_n inp" type="password" name="c_pass" required>
            </p>
            <input id="b6" class="button" onclick="getNumber()" type="submit" value="Тиць">
        </form>
        <?php
        if (
            !isset($_POST['lastname']) or !isset($_POST['name']) or !isset($_POST['e-mail'])
            or !isset($_POST['pass']) or !isset($_POST['c_pass'])
        ) echo 'Дані не обрано(';
        else {
            $n = $_GET['n'];
            $p1 = $_POST['pass'];
            $p2 = $_POST['c_pass'];
            if ($p1 == $p2) {
                $data[$n] = array(
                    "lastname" => $_POST['lastname'],
                    "name" => $_POST['name'],
                    "e-mail" => $_POST['e-mail'],
                    "pass" => $p1,
                    "c_pass" => $p2,
                );
                echo "<table class=\"table2\"> <tr id=\"zag2\"><td>Прізвище</td><td>Ім'я</td><td>Електронна адреса</td><td>Пароль</td><td>Повторний пароль</td></tr>";
                foreach ($data as $key => $value) {
                    echo "<tr>";
                    foreach ($value as $ikey => $ivalue) {
                        echo "<td>$ivalue </td>";
                    }
                    echo "</tr>";
                }
            } else
                echo "<p id=\"c_p\">Паролі не збігаються</p>";
        }
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab4.php">Назад</a>
    </div>
</body>

</html>