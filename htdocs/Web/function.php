<?php
function seqq($val) {
    while ($seq=pg_fetch_row($val)){
    $val_new=$seq[0]-1;
    echo "<p>function.php: значення послідовності= $seq[0] перепризначено new=$val_new<p>";
        }
return $val_new;

    }

?>
<?php
function create_table2($data, $border=1, $cellpadding=4, $cellspacing=4)
{
    echo "<table border=$border  cellpadding=$cellpadding cellspacing=$cellspacing>\n";
    reset($data); // вказуємо початок
    $value=current($data);
    while($value)
    {
        echo "<tr><td>$value</td></tr>\n";
        $value = next($data);
    }
    echo '</table>';
    echo 'Кількість параметрів: ';
    echo func_num_args().'<br/>';
    $args = func_get_args();
    foreach ($args as $arg)
        echo $arg.'<br/>';
}
$my_array = array('Рядок 1', 'Рядок 2','Рядок 3');
create_table2($my_array,3,8,8);
?>

