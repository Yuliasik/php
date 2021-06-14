<?php
include_once("../db.php");
$mysqli = getConnection();
mysqli_query($mysqli, "DROP TABLE Dudii_news");
mysqli_query($mysqli, "CREATE TABLE Dudii_news(id INTEGER PRIMARY KEY AUTO_INCREMENT, subject VARCHAR(200),
                                                         title VARCHAR(1000) UNIQUE, content TEXT, photo VARCHAR(200), 
                                                         author VARCHAR(100), date DATETIME)");

$file = "Dudii_text_news.txt";
$fdata_my = fopen($file, "r") or die("Can't open file $file!");
$entries = fread($fdata_my, filesize($file));
$entries = str_replace("'", "\\'", $entries);
$entries = str_replace("\n", "", $entries);
$entries = str_replace("\r", "", $entries);
$entries = explode("&", $entries);
for ($i = 0; $i < count($entries); $i++) {
    $entries_field = explode(" ~", $entries[$i]);
    // for ($j = 0; $j < count($entries_field); $j++) {
    //     echo "---------------------<br>";
    //     echo "<p>entries_field[$j]=$entries_field[$j]<p>";
    // }
    $subject = $entries_field[0];
    $title = $entries_field[1];
    $content =  $entries_field[2];
    $photo = $entries_field[4];
    $author = $entries_field[3];
    $date = $entries_field[5];
    mysqli_query($mysqli, "INSERT INTO `Dudii_news`(subject, title, content, photo, author, date ) VALUES ('$subject','$title','$content','$photo','$author','$date')");
}
?>