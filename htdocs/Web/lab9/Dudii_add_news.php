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
                <div class="category_name">Додати новину</div>
                <div class="add_news">
                    <form action="Dudii_add_news.php" method="post" enctype="multipart/form-data">
                        <div class="select_subject">
                            <span>Оберіть рубрику: </span>
                            <select name="select_subject" class="input input_subject">
                                <option>Covid-19</option>
                                <option>Наука</option>
                                <option>Політика</option>
                                <option>Економіка</option>
                                <option>Події</option>
                                <option>Технології</option>
                            </select>
                        </div>
                        <div class="one_lines">
                            <div>
                                <span>Заголовок: </span>
                            </div>
                            <div>
                                <input type="text" name="input_title" class="input input_title" require>
                            </div>
                        </div>
                        <div class="two_lines">
                            <div>
                                <span>Контент: </span>
                            </div>
                            <div>
                                <textarea type="text" name="input_content" class="input input_content" require></textarea>
                            </div>
                        </div>
                        <div class="one_lines">
                            <div>
                                <span>Завантажити зображення: </span>
                            </div>
                            <div>
                            </div>
                            <input type="file" name="uploadfile" class="input_photo" required><br>
                        </div>
                        <div class="one_lines div_author">
                            <div>
                                <span>Автор: </span>
                            </div>
                            <div>
                                <input type="text" name="input_author" class="input input_author" require>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="button button_add" name="button_to_add">Додати</button>
                        </div>
                    </form>
                </div>
                <?php
                if (isset($_POST['button_to_add'])) {
                    $new_subject = $_POST['select_subject'];
                    $new_title = $_POST['input_title'];
                    $new_content = htmlspecialchars($_POST['input_content']);

                    $uploaddir = "./image/";
                    $result = move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $uploaddir . $_FILES["uploadfile"]["name"]);
                    
                    $new_photo = "image/" . $_FILES["uploadfile"]["name"];

                    $new_author = $_POST['input_author'];
                    $new_date = date('Y-m-d H:i:s');

                    mysqli_query($mysqli, "INSERT INTO `Dudii_news`(subject, title, content, photo, author, date ) VALUES ('$new_subject','$new_title','$new_content','$new_photo','$new_author','$new_date')");
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