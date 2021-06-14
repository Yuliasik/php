<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 3</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div3" class="verh">
        <form action="Dudii_z3.php" method="post">
            <p>Введіть номер телефону:</p>
            <input class="input_n numbers" id="mail" type="text" name="number" placeholder="+XX (XXX) XX-XX-XXX" required>
            <br>
            <input class="button b1" type="submit" value="Тиць">
        </form>
        <?php
        if (!isset($_POST['number'])) echo '';
        else {
            $number = $_POST['number'];
            echo "<p>$number</p>";
            $pattern = "/\+\d{2}\s\(\d{3}\)\s\d{2}-\d{2}-\d{3}/";
            if(preg_match ($pattern, $number))
            echo "<p class=\"answ true\">Даний номер телефону відповідає шаблону!</p>";
            else echo "<p class=\"answ false\">Даний номер телефону НЕ відповідає шаблону!!</p>";
        }
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab6.php">Назад</a>
    </div>
</body>
</html>