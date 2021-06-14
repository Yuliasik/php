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

                echo "                <div class=\"category_name\">Видалити новину</div>";
                echo "                <div class=\"find_news\">";
                echo "                    <form action=\"Dudii_delete_news.php\" method=\"post\">";
                echo "                        Введіть номер новини, яку необхідно видалити";
                $count = mysqli_fetch_assoc(mysqli_query($mysqli, 'SELECT COUNT(id) FROM `Dudii_news`'))['COUNT(id)'];
                echo "                        <input type=\"number\" size=\"3\" name=\"nubmer_to_delete\" id=\"nubmer_to_delete\" min=1 max=$count><br>";
                echo "                        <button class=\"button\" type=\"submit\" name=\"button_to_delete\">Видалити</button>";
                echo "                    </form>";
                echo "                <hr>";
                echo "                <hr>";
                echo "                </div>";
                echo "                <div class=\"all_news\">";           

                if ($result = mysqli_query($mysqli, 'SELECT id, subject, title, photo, author, date FROM `Dudii_news` ORDER BY date DESC')) {
                    $i = 1;
                    $notfind = true;
                    $nubmer_to_delete = $_POST['nubmer_to_delete'];
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($nubmer_to_delete == $i && $notfind) {
                            $index = $row['id'];
                            $notfind = false;
                        } else {
                            echo "                <div class=\"delete_news\">";
                            echo "                        <div class=\"delete_index\">";
                            echo "                            $i.";
                            echo "                        </div>";
                            echo "                        <div class=\"delete_photo\">";
                            echo "                            <img src=" . $row['photo'] . " alt=\"\">";
                            echo "                        </div>";
                            echo "                        <div class=\"delete_information\">";
                            echo "                            <div class=\"delete_news_data\">";
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
                            echo "                        </div>";
                            echo "                    </div>";
                            echo "                    <div>";
                            echo "                        <hr>";
                            echo "                        <hr>";
                            echo "                    </div>";
                            $i++;
                        }
                    }
                    echo "                </div>";
                    echo "                </div>";
                    mysqli_free_result($result);

                    if (isset($_POST['button_to_delete'])) {
                        mysqli_query($mysqli, "DELETE FROM `Dudii_news` WHERE id = $index");
                    }
                } else {
                    echo "No results!<br>";
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