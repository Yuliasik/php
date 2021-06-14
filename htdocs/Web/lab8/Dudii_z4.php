<?php
require("../config.php");
include_once("../db.php");
include_once("../function.php");
$mysqli = getConnection();
?>
<html>

<head>
    <title>Завдання 4</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div2" class="verh">
    <form action="Dudii_z4.php" method="post" class="form-example">
        Ім'я: <input class="input_n numbers" type="text" name="name" required><br>
        Прізвище: <input class="input_n numbers" type="text" name="lastname" required><br>
        Е-mail: <input class="input_n numbers" type="email" name="email" id="email" required><br>
        Логін: <input class="input_n numbers" type="text" name="login" required><br>
        Пароль: <input class="input_n numbers" type="text" name="password" id="password" required><br>
        <input class="button b2" type="submit" name="submit" value="Тиць">
    </form>
    <br>
    <?php
        if (isset($_POST['submit'])) {
            mysqli_query($mysqli, "INSERT INTO Users (name, lastname, email, login,  password) VALUES ('" . $_POST['name'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $_POST['login'] . "', '" . $_POST['password'] . "')");
        }

        echo "<table>";
            echo "<tr><th>Ім'я</th><th>Прізвище</th><th>Е-mail</th><th>Логін</th><th>Пароль</th></tr>";
            if ($result = mysqli_query($mysqli, 'SELECT name, lastname, email, login,  password FROM `Users`')) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['email'] . "</td><td>" . $row['login'] . "</td><td>" . $row['password'] . "</td></tr>";
                }
                mysqli_free_result($result);
            } else {
                echo "No results!<br>";
            }
            echo "</table>";

            mysqli_close($mysqli);
    ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab8.php">Назад</a>
    </div>
</body>

</html>