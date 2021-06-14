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
                <span>Ви увійшли як гість</span>
            </div>
            <div class="Mytitle">
                <span>Інтернет магазин Дудій "Дерева"</span>
            </div>
            <hr>
            <div class="body">
                <form action="Dudii_regist.php" method="post" class="form-example-test">
                    <div>
                        ПІБ: <input class="input_n numbers" type="text" name="name" required><br>
                        Логін: <input class="input_n numbers" type="email" name="email" id="email" required><br>
                        Пароль: <input class="input_n numbers" type="text" name="password" id="password" required><br>
                        Повторний Пароль: <input class="input_n numbers" type="text" name="password2" id="password" required><br>
                        <p><span class="category">Категорія:</span><br>
                            <input name="category" type="radio" value="admin">
                            Продавець <br>
                            <input name="category" type="radio" value="custom">
                            Покупець <br>
                        </p>
                    </div>
                    <input class="button b2" type="submit" name="submit" value="Тиць">
                </form>

                <?php

                if (isset($_POST['submit'])) {
                    $check1 = 0;
                    $check2_1 = 0;
                    $check2_2 = 1;
                    $check3 = 0;


                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pass1 = $_POST['password'];
                    $pass2 = $_POST['password2'];
                    $category = $_POST['category'];

                    $pattern = "/[A-ZА-ЯІЇЄ]\w*\s[A-ZА-ЯІЇЄ]\w*\s[A-ZА-ЯІЇЄ]\w*/u";
                    if (preg_match($pattern, $name))
                        $check1 = 1;

                    $pattern2 = "/.{8,30}\@.{1,10}\..{1,4}/";
                    if (preg_match($pattern2, $email)) {
                        $check2_1 = 1;
                    }

                    if ($result = mysqli_query($mysqli, "SELECT email FROM `Dudii_users` WHERE category LIKE '$category' ")) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $e = $row['email'];
                            if ($e == $email) {
                                $check2_2 = 0;
                            }
                        }
                    }

                    if ($pass1 == $pass2)
                        $check3 = 1;


                    // echo "1=$check1 21=$check2_1 22=$check2_2 3=$check3 ";

                    if ($check1 && $check2_1 && $check2_2  && $check3) {
                        mysqli_query($mysqli, "INSERT INTO `Dudii_users`(name, email, password, category) VALUES ('$name','$email','$pass1','$category')");
                        echo "<p class = \"view\">Реєстрація пройшла успішно</p>";
                    } else {
                        echo "<p  class = \"view\">Помилка реєстрації, спробуйте ще раз</p>";
                    }
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