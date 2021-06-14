<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 3</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
    <script>
        function show(id1, id2) {
            document.getElementById(id1).hidden = true;
            document.getElementById(id2).hidden = false;
        }
    </script>
</head>

<body>
    <?php

    if ($_GET['show'] == "yes") {
        # code...
        echo ' <div id="div3_2" class="verh">';

        if (isset($_POST['submit'])) {
            $dir = "";
            $uploaddir = "./files/";
            $result = move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $uploaddir . $_FILES["uploadfile"]["name"]);

            if ($result) {
                echo "<p>Оригінальна назва: " . $_FILES['uploadfile']['name'] . "</p>";
                echo "<p>Тип файлу: " . $_FILES['uploadfile']['type'] . "</p>";
                echo "<p>Розмір: " . $_FILES['uploadfile']['size'] . "</p>";
                echo "<p>Тимчасове імя: "  . $_FILES['uploadfile']['tmp_name'] . "</p>";
            } else {
                echo "<p>Файл не передано!</p>";
            }
        }
        echo '<a class="button" id="uploadagain" href="Dudii_z3.php?show=no">Загрузити ще раз</a>
      </div>';
        //  '  <input class="button" id="b3_2" type="button" value="Загрузити ще раз">
    } else {
        echo '<div id="div3" class="verh">
        <form action="Dudii_z3.php?show=yes" method="post" enctype="multipart/form-data">
            <input class="input_n" id="file3" type="file" name="uploadfile" required><br>
            <input class="button" id="b3" type="submit" name="submit" value="Загрузити">
        </form>
    </div>';
    }
    ?>
    <div class="d1">
        <a href="Dudii_lab5.php">Назад</a>
    </div>
</body>

</html>



<!-- php_ini_loaded_file();  -->