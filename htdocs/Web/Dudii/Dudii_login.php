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
                <form action="Dudii_login.php" method="post" class="form-example-test">
                    <div>
                        Логін: <input class="input_n numbers" type="email" name="email" id="email" required><br>
                        Пароль: <input class="input_n numbers" type="text" name="password" id="password" required><br>
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

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pass = $_POST['password'];
                    $category = $_POST['category'];

                    $log = 0;
                    $pas = 0;

                    if ($result = mysqli_query($mysqli, "SELECT email FROM `Dudii_users` WHERE category LIKE '$category' ")) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $e = $row['email'];
                            if ($e == $email) {
                                $log = 1;
                            }
                        }
                    }
                    if ($result = mysqli_query($mysqli, "SELECT password FROM `Dudii_users` WHERE email LIKE '$email' ")) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $p = $row['password'];
                            if ($p == $pass) {
                                $pas = 1;
                            }
                        }
                    }

                    if ($log && $pas) {
                        if ($category == "admin") {
                            echo "<a href=\"Dudii_index_2.php?email=" . $email . "\" >Перейти на сторінку</a>";
                        }else {
                            echo "<a href=\"Dudii_index_3.php?email=" . $email . "\" >Перейти на сторінку</a>";
                        }
                    } else {
                        echo "<p class = \"view\">Введено невірний логін чи пароль</p>";
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