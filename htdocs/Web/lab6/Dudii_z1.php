<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 1</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div1" class="verh">
        <form action="Dudii_z1.php" method="post">
            <p>Введіть електронну адресу:</p>
            <input class="input_n numbers" id="mail" type="text" name="email" required>
            <br>
            <input class="button b1" type="submit" value="Тиць">
        </form>
        <?php
        if (!isset($_POST['email'])) echo '';
        else {
            $email = $_POST['email'];
            echo "<p>$email</p>";
            $pattern = "/.{8,30}\@.{1,10}\..{1,4}/";
            if(preg_match ($pattern, $email))
            echo "<p class=\"answ true\">Дана електронна адреса вірна!</p>";
            else echo "<p class=\"answ false\">Дана не електронна адреса вірна!</p>";
        }
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab6.php">Назад</a>
    </div>
</body>

</html>