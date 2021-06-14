<?php
require("../config.php");
include_once("../db.php");
include_once("../function.php");
$mysqli = getConnection();
?>
<html>

<head>
    <title>Завдання 1-2</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div1" class="verh">

        <?php
        mysqli_query($mysqli, "DROP TABLE dusc");
        mysqli_query($mysqli, "CREATE TABLE dusc(id INTEGER PRIMARY KEY AUTO_INCREMENT,name_d VARCHAR(1000) UNIQUE ,key_concepts TEXT)");
        mysqli_query($mysqli, "INSERT into dusc (name_d, key_concepts) values ('Основи інтернет','HTML, CSS, Java script, WWWW')");
        mysqli_query($mysqli, "INSERT into dusc (name_d, key_concepts) values ('ШІ','Пролог, Моделювання')");
        mysqli_query($mysqli, "INSERT into dusc (name_d, key_concepts) values ('Бази даних','select, from, sql')");
        $key1 = 'Штучний інтелект';
        $name = 'ШІ';
        $res1 = mysqli_query($mysqli, "UPDATE dusc set key_concepts='$key1' where name_d='$name'");


        echo "<i>Вибірка з dusc<p></i>";
        $k = 1;
        $select = mysqli_query($mysqli, "SELECT id,name_d, key_concepts FROM dusc");
    
        echo "<table><tr><td>ID</td><td> Назва лекції </td><td> Ключовi поняття </td></tr>";

        while ($row = mysqli_fetch_row($select)) {
            $id[$k] = $row[0];
            echo "<tr><td>$id[$k]</td><td>$row[1]</td><td>$row[2]</td></tr>";
            $k = $k + 1;
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