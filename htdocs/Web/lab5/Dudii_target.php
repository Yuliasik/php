<?php
$fp = fopen("files/Dudii_text2.txt", "r") or die("Не вдалося відкрити файл");
$number = rand(0, 4);
$n = 0;
$text = "";
while (!feof($fp)) {    
    if ($n == $number){
        $text = fgets($fp); 
        break;
    }
    else fgets($fp);
    $n++;
}
fclose($fp);
echo "<p class=\"before\">$text</p>";
?>