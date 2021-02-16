
<?php

require("../config.php");
include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});

//pg_query($dbconn,"drop table dusc");
//pg_query($dbconn,"drop sequence dusc_seq");
pg_query($dbconn,"create sequence dusc_seq minvalue 0 maxvalue 999 start 0");
pg_query($dbconn,"select setval('dusc_seq',0)");
pg_query($dbconn,"create table dusc(id integer default nextval('dusc_seq') primary key,name_d varchar(1000) unique ,key_concepts text[])");
pg_query($dbconn,"insert into dusc (name_d, key_concepts) values ('Основи інтернет','{\"HTML\",\"Java script\",\"WWWW\"}')");
pg_query($dbconn,"insert into dusc (name_d, key_concepts) values ('ШІ','{\"Пролог\",\"Моделювання\"}')");
$key1='Штучний інтелект';
$name='ШІ';
$res1=pg_query($dbconn,"update dusc set key_concepts[3]='$key1' where name_d='ШІ'");


echo "<b>Вибірка з dusc<p></b>";
$k=1;
$select=pg_query($dbconn,"SELECT id,name_d, key_concepts[1] ,key_concepts[2], key_concepts[3] FROM dusc");
if (!$select) { echo "Error select from dusc";} else {echo "Good select dusc<p>";}

echo "<table border=1><tr><td width=10%>ID</td><td  width=30%>Назва лекції</td>
<td width=10%>Ключове поняття 1</td><td width=10%>Ключове поняття 2</td>
<td width=10%>Ключове поняття 3</td></tr>";

while ($row=pg_fetch_row($select)){$id[$k]=$row[0];
echo "<tr><td>$id[$k]</td><td>$row[1]</td><td>$row[2]</td><td> $row[3]</td><td> $row[4]</td></tr>";
 $k=$k+1;
}
echo "</table>";

?>
<html>
<head>
<title>BD</title>
</head>
<body>

</body>
</html>
