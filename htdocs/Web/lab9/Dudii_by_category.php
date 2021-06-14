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
                if ($result = mysqli_query($mysqli, 'SELECT id, title FROM `Dudii_news` ORDER BY date DESC')) {
                    $i = 0;
                    echo "<div class=\"category_name\">Головне</div>";
                    echo "    <div class=\"category_news\">";
                    echo "        <ul>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($i < 3) {
                            echo "            <li><a href=\"Dudii_view_news.php?id=" . $row['id'] . "\">" . $row['title'] . "</a></li>";
                        }
                        $i++;
                    }
                    echo "        </ul>";
                    echo "    </div>";
                    $fp = fopen("file/Dudii_out.txt", "w") or die("Не вдалося відкрити файл");
                    fputs($fp, "Загальна кількість новин: $i");
                    fclose($fp);
                }
                if ($result2 = mysqli_query($mysqli, 'SELECT id, subject, title FROM `Dudii_news` ORDER BY subject ASC, date DESC')) {
                    $row2 = mysqli_fetch_assoc($result2);
                    $category = $row2['subject'];
                    $i = 0;
                    echo "<div class=\"category_name\"><a href=\"Dudii_view_category.php?subject=" . $row2['subject'] . "\">" . $row2['subject'] . "</a></div>";
                    echo "    <div class=\"category_news\">";
                    echo "        <ul>";
                    while ($row2) {
                        if ($category == $row2['subject'] && $i < 3) {
                            echo "            <li><a href=\"Dudii_view_news.php?id=" . $row2['id'] . "\">" . $row2['title'] . "</a></li>";
                        }
                        $row2 = mysqli_fetch_assoc($result2);
                        $i++;
                        // if ($i > 2 && $category != $row2['subject']) {
                        if ($category != $row2['subject']) {
                            echo "        </ul>";
                            echo "    </div>";
                            echo "<div class=\"category_name\"><a href=\"Dudii_view_category.php?subject=" . $row2['subject'] . "\">" . $row2['subject'] . "</a></div>";
                            echo "    <div class=\"category_news\">";
                            echo "        <ul>";
                            $category = $row2['subject'];
                            $i = 0;
                        }
                    }
                    echo "        </ul>";
                    echo "    </div>";
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