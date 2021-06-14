<?php
require("../config.php");
include_once("../function.php");
include_once("../db.php");
$mysqli = getConnection();
?>

<html>

<head>
    <title>Завдання 4</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#inp_buy").change(function() {
                var countEntered = $(this).val();
                var countEnable = parseInt($('#count_enable').text());

                if (countEntered > countEnable) {
                    $("#product_b2").prop("disabled", true);
                    $("#product_b2").css("cursor", "info");
                } else {
                    $("#product_b2").prop("disabled", false);
                    $("#product_b2").css("cursor", "pointer");
                }

                var priceForOne = parseFloat($('#price_1').text());

                $('#all_price').text((Math.round(priceForOne * countEntered * 100) / 100) + " грн");

            });

        });
    </script>
</head>

<body>
    <div id="div3" class="verh">
        <?php
        $id = $_GET['id'];

        if (isset($_POST['submit_buy'])) {
            if ($result = mysqli_query($mysqli, "SELECT count FROM `Storage` WHERE id=$id")) {
                $row = mysqli_fetch_assoc($result);
                $count = $row['count'] - $_POST['number_buy'];
                mysqli_query($mysqli, "UPDATE `Storage` SET count=$count WHERE id = $id");
            }
        }
        if (isset($_POST['submit_add'])) {
            if ($result = mysqli_query($mysqli, "SELECT count FROM `Storage` WHERE id=$id")) {
                $row = mysqli_fetch_assoc($result);
                $count =  $row['count'] + $_POST['number_add_to_storage'];
                mysqli_query($mysqli, "UPDATE `Storage` SET count=$count WHERE id = $id");
            }
        }

        if ($result = mysqli_query($mysqli, "SELECT name, image, price, count, decription FROM `Storage` WHERE id=$id")) {
            $row = mysqli_fetch_assoc($result);
            echo "<div class=\"product_all\">";
            echo "            <div class=\"product_without_description\">";
            echo "                <div class=\"product_photo\">";
            echo "                    <div class=\"section\">";
            echo "                        <div class=\"border\">";
            echo "                            <p>";
            echo "                                <img src=\"" . $row['image'] . "\" alt=\"" . $row['name'] . "\">";
            echo "                            </p>";
            echo "                        </div>";
            echo "                    </div>";
            echo "                </div>";
            echo "                <div class=\"product_information\">";
            echo "                    <div class=\"product_add_storage\">";
            echo "                        <div>";
            echo "                            <form action=\"Dudii_product.php?id=$id\" method=\"post\">";
            echo "                                <input type=\"number\" class=\"enter_number\" id=\"inp_add\" size=\"3\" name=\"number_add_to_storage\" min=\"0\" max=\"10\" value=\"0\">";
            echo "                                <input class=\"button product_b1\" type=\"submit\" name=\"submit_add\" value=\"Додати на склад\">";
            echo "                            </form>";
            echo "                        </div>";
            echo "                    </div>";
            echo "                    <div class=\"product_name\">";
            echo "                        <span>" . $row['name'] . "</span>";
            echo "                    </div>";
            echo "                    <div class=\"product_1_price\">";
            echo "                        <p><span id=\"price_1\">" . $row['price'] . "</span> грн за 1 саджанець</p>";
            echo "                    </div>";
            echo "                    <form action=\"Dudii_product.php?id=$id\" method=\"post\">";
            echo "                        <div class=\"product_enable\">";
            echo "                            <div>";
            echo "                                <span>Оберіть кількість: </span>";
            echo "                                <span><input type=\"number\" class=\"enter_number\" id=\"inp_buy\" size=\"3\" name=\"number_buy\" min=\"0\" max=\"" . $row['count'] . "\" value=\"0\"></span>";
            echo "                            </div>";
            echo "                            <div>";
            echo "                                доступно: <span id=\"count_enable\">" . $row['count'] . "</span>";
            echo "                            </div>";
            echo "                        </div>";
            echo "                        <div class=\"product_all_price_and_buy\">";
            echo "                            <div>";
            echo "                                <span id=\"zagal\">Загальна сума до оплати: </span><br>";
            echo "                                <span id=\"all_price\">0 грн</span>";
            echo "                            </div>";
            echo "                            <div id=\"d3\">";
            echo "                                <input class=\"button\" id=\"product_b2\" type=\"submit\" name=\"submit_buy\" value=\"Купити\">";
            echo "                            </div>";
            echo "                        </div>";
            echo "                    </form>";
            echo "                </div>";
            echo "            </div>";
            echo "            <div class=\"product_description\">";
            echo "                <hr>";
            echo "                <hr>";
            echo "                <p>" . $row['decription'] . "</p>";
            echo "                <hr>";
            echo "                <hr>";
            echo "            </div>";
            echo "            <button id=\"back\"><a href=\"Dudii_z5.php\">Повернутись до каталогу</a></button>";
            echo "        </div>";
        }
        ?>
    </div>

    <div class="d1">
        <a href="Dudii_lab8.php">Назад</a>
    </div>
</body>

</html>