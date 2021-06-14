<?php

function getConnection()
{
    $servername = "sql302.epizy.com";
    $username = "epiz_28087383";
    $password = "7jgCzCIZ9d37";
    $database = "epiz_28087383_php_Dudii";
    $mysqli = mysqli_connect($servername, $username, $password, $database);
    
    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully<br>";
    return $mysqli;
}


?>