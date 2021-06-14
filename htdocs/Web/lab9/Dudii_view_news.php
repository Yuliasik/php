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
    <div id="div1" class="verh">
        <div class="all">
            <?php
            require("Dudii_header.php");
            ?>
            <div class="main">
                <?php
                $id = $_GET['id'];
                if ($result = mysqli_query($mysqli, "SELECT title, content, photo, author, date FROM `Dudii_news` WHERE id=$id")) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class=\"one_news_name\">" . $row['title'] . "</div>";
                        echo "<div class=\"one_news_information\">";
                        echo "    <div>" . $row['author'] . "</div>";
                        echo "    <div>" . $row['date'] . "</div>";
                        echo "</div>";
                        echo "<div class=\"one_news_photo\">";
                        echo "    <img src=\"" . $row['photo'] . "\">";
                        echo "</div>";
                        echo "<div class=\"one_news_content\">";
                        echo "" . $row['content'];
                        echo "</div>";
                    }
                } else {
                    echo "Дана сторінка відсутня на сайті(";
                }
                ?>
            </div>
        </div>
    </div>
    <div class="d1">
        <a href="../index.php">Назад</a>
    </div>
</body>

</html>