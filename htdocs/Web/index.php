<html>
<head>
    <meta charset="utf-8">
    <title>PHP_Dudii_Yuliia</title>
    <style>
        #footer {
            position: fixed;
            bottom: 25px;
            width: 100%;
        }

        #pi {
            background: rgba(255, 175, 129, 0.313);
            text-align: center;
            font-size: 20px;
            width: 550px;
            height: 40px;
            border-radius: 50px;
            border: double 6px black;
            transition: all 0.7s;
            margin: auto;
        }

        #pi:hover {
            background: rgba(255, 175, 129, 0.585);
            box-shadow: 0 0 12px black;
        }

        #pi a {
            width: 100%;
            height: 83%;
            padding-top: 7px;
            display: block;
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <div class="perel">
        <h2>Лабораторні роботи з курсу Програмування мовою PHP</h2>
        <ul>
            <?php
            for ($i = 1; $i <= 9; $i++) {
                echo "<li class=\"list-elems\"><a href=\"lab" . $i . "\Dudii_lab" . $i . ".php\">Лабораторна робота №" . $i . "</a></li>";
            }

            echo "<br>";
            echo "<li class=\"list-elems\"><a href=\"Dudii\index.php\">Контрольна робота</a></li>";
            echo "<br>";
            require("config.php");
            ?>
        </ul>
        <div id="footer">
            <div id="pi">
                <a href="../js/index.html">Лабораторні роботи з курсу Програмування Інтернет</a>
            </div>
        </div>
    </div>
</body>

</html>