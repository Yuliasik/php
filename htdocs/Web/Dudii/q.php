<?
$a = 3; $b = 2;
function & rеf($par){
global $a, $b;
if ($par % 2 == 0) return $b;
else return $a;
}
$var =& rеf(4);
$b = 10;
echo $var, " тa ", $b;
?>