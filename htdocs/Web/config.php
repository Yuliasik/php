<?php
$config['charset'] = 'utf-8';
$config['default_lng'] = 'ua';
$config['host_name'] = 'http://93.184.216.34/Web';
$config_host_name=$config['host_name'];
$config['data_dir'] = '/Web';

// $config['dbName'] = "bz";
// $config['dbHost'] = "localhost";
// $config['dbPort'] = "5432";
// $config['dbUser'] = "postgres";
// $config['dbPasswd'] = "postgres";

// $config{'LogInFor'} = 3600;
// $config{'dom_name'} = 'bz';
// $config{'sess_name'} = 'SPRITE_SESS_ID';

// $config{'default_theme'} = 'black-style';

// $config{'email'} = 'kit@pu.if.ua';

$LastModified_unix = strtotime(date("D, d M Y H:i:s", (filectime($_SERVER['SCRIPT_FILENAME'])))) + 7200; 
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix); 
echo "Last modified: $LastModified"."<br>";
// $path_parts = pathinfo($_SERVER['SCRIPT_FILENAME']);
// if ($path_parts['dirname'] == 'D:\Labs\2kurs\2sem\php\htdocs\Web') {
//         // if ($path_parts['dirname'] == '/home/vol9_5/ezyro.com/ezyro_27823295/htdocs/Web') {

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name='keywords' content=''/>
    <meta name='description' content=''/>
    <meta http-equiv='Content-Type' content='text/html' charset='utf-8'>

<link rel='stylesheet' href='css/style.css' type='text/css'/>
<link rel='stylesheet' href='../css/style.css' type='text/css'/>

</head>

