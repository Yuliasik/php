<?php
require("../config.php");
include("../function.php")
?>
<html>

<head>
    <title>Завдання 4</title>
    <link rel="stylesheet" href="Dudii_style.css" type="text/css" />
</head>

<body>
    <div id="div4" class="verh">
        <?php
        $array = array(
            "2001-07-04", "12-08-2003",
            "2002-09-28", "10-04-2004",
            "2001-09-11", "09-04-2003",
            "2013-10-04", "15-02-2005",
            "2000-04-26", "01-08-2006"
        );
        echo "<div id=\"block_left\"><p>";
        print_array($array);
        echo "</p></div>";
        $pattern = "/(\d{4})-(\d{2})-(\d{2})/";
        for ($i = 0; $i < count($array); $i++) {
            if (preg_match($pattern, $array[$i])) {
                $replace = '\2.\3.\1';
                $array[$i] = preg_replace($pattern, $replace, $array[$i]);
            }
        }
        echo "<div id=\"block_right\"><p>";
        print_array($array);
        echo "</p></div>";
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab6.php">Назад</a>
    </div>
</body>

</html>