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
                // require("Dudii_create_and_insert.php");
                echo "                <div class=\"section_name\">Всі новини</div>";
                echo "                <div class=\"all_news\">";
                if ($result = mysqli_query($mysqli, 'SELECT subject, title, content, photo, author, date FROM `Dudii_news` ORDER BY date DESC')) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "                    <div class=\"news\">";
                        echo "                        <div class=\"all_news_photo\">";
                        echo "                            <img src=" . $row['photo'] . " alt=\"\">";
                        echo "                        </div>";
                        echo "                        <div class=\"information\">";
                        echo "                            <div class=\"all_news_data\">";
                        echo "                                <div class=\"right_data\">";
                        echo "                                    <div>" . $row['subject'] . "</div>";
                        echo "                                    <div>Автор: " . $row['author'] . "</div>";
                        echo "                                </div>";
                        echo "                                <div class=\"left_data\">";
                        echo "                                    <div>" . $row['date'] . "</div>";
                        echo "                                </div>";
                        echo "                            </div>";
                        echo "                            <div class=\"all_news_title\">";
                        echo "                                <span>" . $row['title'] . "</span>";
                        echo "                            </div>";
                        echo "                            <div class=\"all_news_content\">";
                        echo "                                " . $row['content'];
                        echo "                            </div>";
                        echo "                        </div>";
                        echo "                    </div>";
                        echo "                    <div>";
                        echo "                        <hr>";
                        echo "                        <hr>";
                        echo "                    </div>";
                    }
                    echo "                </div>";
                    echo "            </div>";
                    echo "        </div>";

                    mysqli_free_result($result);
                } else {
                    echo "No results!<br>";
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