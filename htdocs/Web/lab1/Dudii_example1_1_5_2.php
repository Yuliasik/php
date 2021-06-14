<?php
require("../config.php");
?>
<html>

<head>
    <title>Приклад форми get</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css'/>
</head>

<body>
    <div class="verh" id="div5">
        <?php
        $variable = $_GET['formvariable'];
        echo "<p id = \"n15_2\">" . ($variable * 2) . "</p><p>додано з Dudii_example1_1_5_1.php </p>";

        echo "<div id=\"pereh\" id><a href=\"Dudii_example1_1_5_1.php\">Dudii_example1_1_5_1.php</a></div>";
        ?>
    </div>
    <div class="d1">
            <a href="Dudii_lab1.php">Назад</a>
        </div>
</body>

</html>