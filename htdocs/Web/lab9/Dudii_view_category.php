<?php
require("../config.php");
include_once("../db.php");
include_once("../function.php");
$mysqli = getConnection();
?>

<html>

<head>
    <title>Новини</title>
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
                $subject = $_GET['subject'];
                if ($result = mysqli_query($mysqli, "SELECT id, subject, title FROM `Dudii_news` WHERE subject LIKE '$subject' ORDER BY date DESC")) {
                    echo "<div class=\"category_name\">$subject</div>";
                    echo "    <div class=\"category_news\">";
                    echo "        <ul>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "            <li><a href=\"Dudii_view_news.php?id=" . $row['id'] . "\">" . $row['title'] . "</a></li>";
                    }
                    echo "        </ul>";
                    echo "    </div>";
                } else {
                    echo "Дана сторінка відсутня на сайті(";
                }
                ?>
            </div>
            <div class="d1">
                <a href="../index.php">Назад</a>
            </div>
        </div>
    </div>
</body>

</html>