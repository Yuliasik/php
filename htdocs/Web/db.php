<?php
$db_name	= 'db';
$db_host	= 'localhost';
$db_user	= 'postgres';
$db_pass	= 'postgres';


$conection_string	= "host=$db_host dbname=$db_name user=$db_user password=$db_pass"; 
//var_dump($conection_string);die();
$dbconn = pg_connect($conection_string) or die ("DB error --> " . pg_last_error($dbconn)); 
pg_query ($dbconn,"Set default_text_search_config='pg_catalog.ukrainian'");

#include_once("jquery.php");

#echo "db.php";