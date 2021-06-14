<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <title> Test </title>
</Head>

<body>
    <h3> Тестова форма </h3>
    <form name="test1" method="post">
        <p> <span> Текстове поле: </span>
            <input type="text" name="textfield">
        </p>
        <p> Поле введення пароля:
            <input type="password" name="pswfield">
        </p>
        <p> Приховане поле hidden
            <input name="hidden" type="hidden" id="hidden" value="Приховане_значення">
        </p>
        <hr size="1">
        <p> Незалежні перемикачі(checkbox): </p>
        <p>
            <input type="checkbox" name="checkbox1" value="1">
            Варіант перший
            <input type="checkbox" name="checkbox2" value="1">
            Варіант другий
            <input type="checkbox" name="checkbox3" value="1" checked>
            Варіант третій(за замовчуванням)
        </p>
        <hr size="1">
        <p> Залежні перемикачі(radio): </p>
        <p>
            <input name="radiobutton" type="radio" value="yes">
            Так
            <input name="radiobutton" type="radio" value="no">
            Ні
        </p>
        <hr size="1">
        <p> Багаторядкове текстове поле(textarea): </p>
        <p>
            <textarea name="textarea" cols="40" rows="10"> Текст за умовчанням </textarea>
        </p>
        <hr size="1">
        <p> Список з єдиним вибором: </p>
        <p>
            <select name=day_s size=1>
                <option value=1> понеділок </option>
                <option value=2> вівторок </option>
                <option value=3 selected> середа </option>
                <option value=4> четвер </option>
                <option value=5> п'ятниця </option>
                <option value=6> субота </option>
                <option value=7> неділя </option>
            </select>
        </p>
        <p> Список із множинним вибором(multiple): </p>
        <p>
            <select name=day_m[] size=7 multiple>
                <option value=1 selected> понеділок </option>
                <option value=2> вівторок </option>
                <option value=3> середа </option>
                <option value=4> четвер </option>
                <option value=5> п'ятниця </option>
                <option value=6> субота </option>
                <option value=7> неділя </option>
            </select>
        </p>
        <hr size="1">
        <p>
            <input type="submit" value="Надіслати форму">
            <input type="reset" value="Очистити форму">
        </p>
    </form>
    <?php
echo '<h3> Тестова форма </h3>';
echo "<p> Передане значення текстового поля: <b>". $_POST['textfield']. "</b> </p>";
echo "<p> Передане значення поля пароля: <b>". $_POST['pswfield']. "</b> </p>";
echo "<p> Передане значення прихованого поля hidden: <b>". $_POST['hidden']. "</b> </p>";
echo '<hr size="1">';
echo '<p> Були включені наступні незалежні перемикачі: </p>';
if(isset($_POST['checkbox1'])) echo "<p> <b> Перший </b> </p>";
if(isset($_POST['checkbox2'])) echo "<p> <b> Другий </b> </p>";
if(isset($_POST['checkbox3'])) echo "<p> <b> Третій </b> </p>";
echo '<hr size="1">';

if(isset($_POST['radiobutton']))
{
echo '<p> Був обраний незалежний перемикач з наступним значенням:';
if($_POST['radiobutton'] === "yes") echo "<b> Yes </b>";
if($_POST['radiobutton'] === "no") echo "<b> No </b>";
echo '</p>';
}
else echo '<p> Жоден з незалежних перемикачів не був обраний </p>';
echo '<hr size="1">';
echo '<p> Значення багаторядкового текстового поля: </p>';
echo "<p> <b>".$_POST['textarea']. "</b> </p>";
echo '<hr size="1">';
echo "<p> Значення списку з єдиним вибором: <b>". $_POST['day_s']. "</b> </p>";
echo '<hr size="1">';
echo '<p> Значення списку із множинним вибором: </p>';
foreach($_POST['day_m'] as $keys => $values)
 echo "<b> $values </b> <br>";
echo '<hr size="1">';
?>

</body>

</html>