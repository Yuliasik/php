<html>

<head>
    <title>Завдання 2</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body>
        <?php
        if (!isset($_GET['num'])) {
            echo '<p><a href="Dudii_zavdannja7.php?num=' . mt_rand(1, 6) . '">Посилання на самого себe</a></p>';
        } else {
            require("../config.php");
            echo '<div id="div7" class="verh">';
            $n = $_GET['num'];

            switch ($n) {
                case 1:
                    echo 'Викликати функцію func1 <br>';
                    break;
                case 2:
                    echo 'Викликати функцію func2 <br>';
                    break;
                case 3:
                    echo 'Викликати функцію func3 <br>';
                    break;
                default:
                    echo "Некоректні дані!";
                    break;
            }
            echo '<p><a href="Dudii_zavdannja7.php?num=' . mt_rand(1, 6) . '">Повторити</a></p>';

            echo '</div>';
            echo '<div class="d1">';
            echo '<a href="Dudii_lab3.php">Назад</a>';
            echo '</div>';
        }
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab3.php">Назад</a>
    </div>
</body>

</html>