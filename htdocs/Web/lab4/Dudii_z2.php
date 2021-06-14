<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 2</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body>
    <div id="div2" class="verh">
        <h2> Використання циклу foreach </h2>
        <?php
        $names["Бойчук"] = "Іван";
        $names["Мельник"] = "Борис";
        $names["Швець"] = "Антон";
        foreach ($names as $key => $value) {
            echo "<b>$value $key</b><br>";
        }
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab4.php">Назад</a>
    </div>
</body>

</html>