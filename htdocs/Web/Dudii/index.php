<?php
require("config.php");
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
                    <a href="Dudii_login.php" class="transition_by_header">
                        <span>Вхід</span>
                    </a>
                </div>
                <div class="section">
                    <a href="Dudii_regist.php" class="transition_by_header">
                        <span>Реєстрація</span>
                    </a>
                </div>
            </div>
            <div class="category">
                <span>Ви увійшли як гість</span>
            </div>
            <div class="Mytitle">
                <span>Інтернет магазин Дудій "Дерева"</span>
            </div>
            <hr>
            <div class="body">
                <?php
                echo "<div class=\"body\">";
                echo "    <div class=\"element\">";
                echo "        <div class=\"photo\">";
                echo "            <img src=\"image\Dudii_magnolia-nigra.jpg\">";
                echo "        </div>";
                echo "        <div class=\"info\">";
                echo "            <div>Магнолія Nigra</div>";
                echo "            <div>206.99 грн/шт</div>";
                echo "        </div>";  
                echo "    </div>";
                echo "</div>";
                echo "<hr>";
                echo "<div class=\"body\">";
                echo "    <div class=\"element\">";
                echo "        <div class=\"photo\">";
                echo "            <img src=\"image\Dudii_magnolia-stellata.jpg\">";
                echo "        </div>";
                echo "        <div class=\"info\">";
                echo "            <div>Магнолія Stellata</div>";
                echo "            <div>195.50 грн/шт</div>";
                echo "        </div>";  
                echo "    </div>";
                echo "</div>";
                echo "<hr>";
                echo "<div class=\"body\">";
                echo "    <div class=\"element\">";
                echo "        <div class=\"photo\">";
                echo "            <img src=\"image\Dudii_magnolia-sunrise.jpg\">";
                echo "        </div>";
                echo "        <div class=\"info\">";
                echo "            <div>Магнолія Sunrise</div>";
                echo "            <div>329.63 грн/шт</div>";
                echo "        </div>";  
                echo "    </div>";
                echo "</div>";
                echo "<hr>";
                ?>

                <!--  <div class="element">
                    <div class="photo">
                        <img src="image\Dudii_magnolia-nigra.jpg">
                    </div>
                    <div class="info">
                        <div>Найменування</div>
                        <div>Ціна грн/шт</div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <div class="d1">
        <a href="../index.php">Назад</a>
    </div>
</body>

</html>