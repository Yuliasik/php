<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 7</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body onload="load()">
    <div id="div7" class="verh">
        <form id="forma7" action="Dudii_z7.php" method="post">
            <p><span class="question">Як часто у Ви п'єте каву ? </span><br>
                <input name="radiobutton" type="radio" value="декілька разів на тиждень">
                декілька разів на тиждень <br>
                <input name="radiobutton" type="radio" value="лише зранку ">
                лише зранку <br>
                <input name="radiobutton" type="radio" value="іноді, в кав'ярні з друзями">
                іноді, в кав'ярні з друзями <br>
                <input name="radiobutton" type="radio" value="лише за необхідності, аби не заснути:) ">
                лише за необхідності, аби не заснути:) <br>
            </p>
            <hr>
            <p><span class="question"><input type="checkbox" name="checkbox1" value="Так">
                    Кава з цукром ?</span><br>
            </p>
            <hr>
            <p><span class="question">Що ви відчуваєте, після чашечки кави?</span><br>
                <select name=feels class="input_n">
                    <option value="-" selected>----------</option>
                    <option value="бадьорість">бадьорість</option>
                    <option value="хороший настрій">хороший настрій</option>
                    <option value="енергійність">енергійність</option>
                    <option value="втому">втому</option>
                    <option value="тремор">тремор</option>
                    <option value="сонливість">сонливість</option>
                </select>
            </p>
            <hr>
            <p><span class="question">Яку каву ви полюбляєте пити? </span><br>
                <select name="types[]" size=6 class="input_n" multiple>
                    <option value="еспресо">еспресо</option>
                    <option value="капучіно">капучіно</option>
                    <option value="латте">латте</option>
                    <option value="мокко">мокко</option>
                    <option value="американо">американо</option>
                    <option value="глясе">глясе</option>
                </select>
            </p>
            <input id="b7" class="button" onclick="getNumber()" type="submit" value="Тиць">
            <input id="b7r" class="button" onclick="getNumber()" type="reset" value="Скинути">
        </form>
        <?php
        echo "<hr><hr><span id=\"text_ans\">відповіді там &#8595; &#8595; &#8595;</span><br>";
        echo "<hr><div id=\"answers\">";
        if (
            !isset($_POST['radiobutton']) or !isset($_POST['checkbox1']) or !isset($_POST['feels'])
            or $_POST['feels']=="-" or !isset($_POST['types'])
        ) echo "<h3 id=\"not_enter\">Відповіді не внесено!</h3>";
        else {
            echo "<span>Як часто у Ви п'єте каву ?</span><br>";
            echo "$_POST[radiobutton] <br><br>";
            echo "<span>Кава з цукром ?</span><br>";
            echo "$_POST[checkbox1] <br><br>";
            echo "<span>Що ви відчуваєте, після чашечки кави ?</span><br>";
            echo "$_POST[feels] <br><br>";
            echo "<span>Яку каву ви полюбляєте пити ?</span><br>";
            foreach ($_POST['types'] as $value) {
                echo "$value <br>";
            }
        }
        ?>
    </div>
    <div class="d1">
        <a href="Dudii_lab4.php">Назад</a>
    </div>
</body>

</html>