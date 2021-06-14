<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 7</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div4" class="verh">
        <form id="forma" action="Dudii_z7.php" method="post">
            <p><span class="text">Ім'я: </span>
                <input class="input_n inp" type="text" name="name" required>
            </p>
            <p>
                <span class="text">Прізвище: </span>
                <input class="input_n inp" type="text" name="surname" required><br>
            </p>
            <p>
                <span class="text">Вік: </span>
                <input class="input_n inp" type="text" name="age" required><br>
            </p>
            <p>
                <span class="text">Е-mail:</span>
                <input class="input_n inp" type="text" name="email" required><br>
            </p>
            <input id="b1" class="button" type="submit" value="ГОТОВО">
        </form>
        <?php
        class Custom
        {
            public $surname;
            public $name;
            public $age;
            public $email;
            function __construct($surname, $name, $age, $email)
            {
                $this->surname = $surname;
                $this->name = $name;
                $this->age = $age;
                $this->email = $email;
            }
            function getInfo()
            {
                echo "<p> - - -  Користувач  - - - <br><br>прізвище: " . $this->surname . "<br>";
                echo "ім'я: " . $this->name . "<br>";
                echo "вік: " . $this->age . "<br>";
                echo "e-mail: " . $this->email . "<br>";
            }
        }

        if (
            isset($_POST['surname']) and isset($_POST['name'])
            and isset($_POST['age']) and isset($_POST['email'])
        ) {
            $c = new Custom($_POST['surname'], $_POST['name'], $_POST['age'], $_POST['email']);
            $c->getInfo();
        }
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab7.php">Назад</a>
    </div>
</body>

</html>