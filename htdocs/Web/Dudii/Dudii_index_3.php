<?php
require("config.php");
include_once("../db.php");
$mysqli = getConnection();
?>

<html>

<head>
    <title>Завдання 4</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div1" class="verh">
        <div class="all_ind">

            <div class="MyHeader">
                <div class="section">
                    <a href="index.php" class="transition_by_header">
                        <span>Вихід</span>
                    </a>
                </div>
            </div>
            <div class="category">
                <span>Ви увійшли як покупець</span>
            </div>
            <div class="Mytitle">
                <span>Інтернет магазин Дудій "Дерева"</span>
            </div>
            <hr>

            <?php
            echo "<div class=\"body\">";
            echo "<div>";
            $email = $_GET['email'];
            if ($result = mysqli_query($mysqli, "SELECT name FROM `Dudii_users` WHERE email LIKE '$email' ")) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $n = $row['name'];
                    echo "$n";
                }
            }
            echo "</div>";
            echo "<div>$email</div><hr>";


            echo "    <div class=\"element\">";
            echo "        <div class=\"photo\">";
            echo "            <img src=\"image\Dudii_magnolia-nigra.jpg\">";
            echo "        </div>";
            echo "        <div class=\"info\">";
            echo "            <div>Магнолія Nigra</div>";
            echo "            <div>206.99 грн/шт</div>";
            echo "            <div> <input class=\"button b2\" type=\"submit\" name=\"submit\" value=\"Купити\"></div>";
            echo "        </div>";
            echo "    </div>";
            echo "<hr>";
            echo "    <div class=\"element\">";
            echo "        <div class=\"photo\">";
            echo "            <img src=\"image\Dudii_magnolia-stellata.jpg\">";
            echo "        </div>";
            echo "        <div class=\"info\">";
            echo "            <div>Магнолія Stellata</div>";
            echo "            <div>195.50 грн/шт</div>";
            echo "            <div> <input class=\"button b2\" type=\"submit\" name=\"submit\" value=\"Купити\"></div>";
            echo "        </div>";
            echo "    </div>";
            echo "<hr>";
            echo "    <div class=\"element\">";
            echo "        <div class=\"photo\">";
            echo "            <img src=\"image\Dudii_magnolia-sunrise.jpg\">";
            echo "        </div>";
            echo "        <div class=\"info\">";
            echo "            <div>Магнолія Sunrise</div>";
            echo "            <div>329.63 грн/шт</div>";
            echo "            <div> <input class=\"button b2\" type=\"submit\" name=\"submit\" value=\"Купити\"></div>";
            echo "        </div>";
            echo "    </div>";
            echo "</div>";
            echo "<hr>";
            ?>

        </div>
    </div>
    <div class="d1">
        <a href="../index.php">Назад</a>
    </div>
</body>

</html>