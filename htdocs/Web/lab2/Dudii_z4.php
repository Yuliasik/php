<?php
require("../config.php");
?>
<html>

<head>
    <title>Завдання 4</title>
    <link rel='stylesheet' href='Dudii_style.css' type='text/css' />
</head>

<body>
    <div id="div4" class="verh">
        <div id="block_top">
            <?php
            $array = array(
                "Дощовик коричневий", "Клаварія блідо-бура", "Хрящ-молочник блакитний",
                "Зірковик мішкоподібний", "Родотус", "Мухомор цезаря"
            );
            if (isset($_GET['name'])) {
                $name = $_GET['name'];
            } else $name =  random_int(0, 5);
            echo "<p id=\"search\">Виберіть гриб:  <span id=\"name\">\"$array[$name]\"</span></p>";

            $number = array(9, 9, 9, 9);   
            $n_name =  random_int(0, 3);
            $repl = array($n_name => $name);
            $number = array_replace($number, $repl);
            if (isset($_GET['number0']) and isset($_GET['number1']) and isset($_GET['number2']) and isset($_GET['number3'])) {
                $n0 = $_GET['number0'];
                $n1 = $_GET['number1'];
                $n2 = $_GET['number2'];
                $n3 = $_GET['number3'];
                $number = array($n0, $n1, $n2, $n3);
            } else {
                for ($j = 0; $j < 4; $j++) {
                    if ($j == $n_name) continue;
                    else {
                        while ($number[$j] == 9) {
                            $n =  random_int(0, 5);
                            if (!in_array($n, $number)) {
                                $repl = array($j => $n);
                                $number = array_replace($number, $repl);
                            }
                        }
                    }
                }
            }
            echo "<br>";
            for ($k = 0; $k < 4; $k++) {
                switch ($number[$k]) {
                    case 0:
                        echo "<a href=\"Dudii_z4.php?val=0&number0=$number[0]&number1=$number[1]&number2=$number[2]&number3=$number[3]&name=$name\"><img class=\"photo\" src=\"image/Dudii_ph_1.jpg\" alt=\"Lycoperdon umbrinum\"></a>";
                        break;
                    case 1:
                        echo "<a href=\"Dudii_z4.php?val=1&number0=$number[0]&number1=$number[1]&number2=$number[2]&number3=$number[3]&name=$name\"><img class=\"photo\" src=\"image/Dudii_ph_2.jpg\" alt=\"Klavaria\"></a>";
                        break;
                    case 2:
                        echo "<a href=\"Dudii_z4.php?val=2&number0=$number[0]&number1=$number[1]&number2=$number[2]&number3=$number[3]&name=$name\"><img class=\"photo\" src=\"image/Dudii_ph_3.jpg\" alt=\"Milk cartilage\"></a>";
                        break;
                    case 3:
                        echo "<a href=\"Dudii_z4.php?val=3&number0=$number[0]&number1=$number[1]&number2=$number[2]&number3=$number[3]&name=$name\"><img class=\"photo\" src=\"image/Dudii_ph_4.jpg\" alt=\"The asterisk is bag-shaped\"></a>";
                        break;
                    case 4:
                        echo "<a href=\"Dudii_z4.php?val=4&number0=$number[0]&number1=$number[1]&number2=$number[2]&number3=$number[3]&name=$name\"><img class=\"photo\" src=\"image/Dudii_ph_5.jpg\" alt=\"Rhodotus\"></a>";
                        break;
                    case 5:
                        echo "<a href=\"Dudii_z4.php?val=5&number0=$number[0]&number1=$number[1]&number2=$number[2]&number3=$number[3]&name=$name\"><img class=\"photo\" src=\"image/Dudii_ph_6.jpg\" alt=\"Amanita caesarea\"></a>";
                        break;
                    default:
                        echo "";
                        break;
                }
            }

            echo "<br>";
            echo "<div id=\"block_in\">";

            if (isset($_GET['val'])) {
                $n = $_GET['val'];
               
                echo "<p id=\"choose\">Ви вибрали гриб: $array[$n]</p>";
            } else $n =  100000;

            if ($n == $name) {
                switch ($n) {
                    case 0:
                        echo "<a href=\"Dudii_z4.php\"><img class=\"photo_true\" src=\"image/Dudii_ph_1.jpg\" alt=\"Lycoperdon umbrinum\" title=\"Натисніть, щоб спробувати ще раз\"></a>";
                        break;
                    case 1:
                        echo "<a href=\"Dudii_z4.php\"><img class=\"photo_true\" src=\"image/Dudii_ph_2.jpg\" alt=\"Klavaria\" title=\"Натисніть, щоб спробувати ще раз\"></a>";
                        break;
                    case 2:
                        echo "<a href=\"Dudii_z4.php\"><img class=\"photo_true\" src=\"image/Dudii_ph_3.jpg\" alt=\"Milk cartilage\" title=\"Натисніть, щоб спробувати ще раз\"></a>";
                        break;
                    case 3:
                        echo "<a href=\"Dudii_z4.php\"><img class=\"photo_true\" src=\"image/Dudii_ph_4.jpg\" alt=\"The asterisk is bag-shaped\" title=\"Натисніть, щоб спробувати ще раз\"></a>";
                        break;
                    case 4:
                        echo "<a href=\"Dudii_z4.php\"><img class=\"photo_true\" src=\"image/Dudii_ph_5.jpg\" alt=\"Rhodotus\" title=\"Натисніть, щоб спробувати ще раз\"></a>";
                        break;
                    case 5:
                        echo "<a href=\"Dudii_z4.php\"><img class=\"photo_true\" src=\"image/Dudii_ph_6.jpg\" alt=\"Amanita caesarea\" title=\"Натисніть, щоб спробувати ще раз\"></a>";
                        break;
                    default:
                        echo "";
                        break;
                }
                echo "<div id=\"text1\">";
                switch ($n) {
                    case 0:
                        echo "Даний вид гриба виростає в Північній Америці, Європі і Китаї. Він відкритою шапки не має. Спори виникають у нього всередині, в пружному кулясте тіло. Спори, дозріваючи, в центрі тіла утворюють Глібу, яка має характерну текстуру і колір.";
                        break;
                    case 1:
                        echo "Фіолетовий гриб? Так-так, буває і такий. Виростає клаварія до 10 см заввишки і до 7 см завширшки. Зазвичай росте на землі";
                        break;
                    case 2:
                        echo "Цей таємничий гриб синього кольору росте у хвойних і листяних лісах Північної та Центральної Америки, а також Східної Азії. Гриб їстівний, тож його запросто можна придбати на сільських ринках Мексики, Гватемали та Китаю.";
                        break;
                    case 3:
                        echo "Бувалі грибники вважають цей гриб неїстівним за його гіркий присмак. Росте зірковик на гниючих деревах у Північній Америці і Європі. За незвичайний форму тіла гриба бразильці прозвали його «зіркою землі».";
                        break;
                    case 4:
                        echo "Рідкісний гриб, занесений до Червоної книги. Зазвичай «оселяється» на гнилих деревах, пнях, чи колодах. Збирають його в деяких регіонах Північної Америки, Африки, Європи та Азії. Дозрілі гриби мають яскраво-рожевий колір.";
                        break;
                    case 5:
                        echo "Це дуже незвичайні їстівні гриби,які ростуть в Північній Америці і Південній Європі. Вперше їх описав в 1772 році Джованні Антоніо Скополія. Гриб має яскраву помаранчеву шапку, спороносні жовті пластинки і ніжку. Його дуже любили стародавні римляни, називаючи його «болетус».";
                        break;
                    default:
                        echo "";
                        break;
                }           
                echo "</div>";
            }
            else{
                switch ($n) {
                    case 0:
                        echo "<a href=\"Dudii_z4.php\"><img class=\"photo_false\" src=\"image/Dudii_ph_1.jpg\" alt=\"Lycoperdon umbrinum\" title=\"Натисніть, щоб спробувати ще раз\"></a>";
                        break;
                    case 1:
                        echo "<a href=\"Dudii_z4.php\"><img class=\"photo_false\" src=\"image/Dudii_ph_2.jpg\" alt=\"Klavaria\" title=\"Натисніть, щоб спробувати ще раз\"></a>";
                        break;
                    case 2:
                        echo "<a href=\"Dudii_z4.php\"><img class=\"photo_false\" src=\"image/Dudii_ph_3.jpg\" alt=\"Milk cartilage\" title=\"Натисніть, щоб спробувати ще раз\"></a>";
                        break;
                    case 3:
                        echo "<a href=\"Dudii_z4.php\"><img class=\"photo_false\" src=\"image/Dudii_ph_4.jpg\" alt=\"The asterisk is bag-shaped\" title=\"Натисніть, щоб спробувати ще раз\"></a>";
                        break;
                    case 4:
                        echo "<a href=\"Dudii_z4.php\"><img class=\"photo_false\" src=\"image/Dudii_ph_5.jpg\" alt=\"Rhodotus\" title=\"Натисніть, щоб спробувати ще раз\"></a>";
                        break;
                    case 5:
                        echo "<a href=\"Dudii_z4.php\"><img class=\"photo_false\" src=\"image/Dudii_ph_6.jpg\" alt=\"Amanita caesarea\" title=\"Натисніть, щоб спробувати ще раз\"></a>";
                        break;
                    default:
                        echo "";
                        break;
                }
            }
            ?>

        </div>
        <!-- <div id="block_bottom"> -->
        <?php
        // if (!isset($_GET['val'])) echo 'Аргументи не введені(';
        // else {
        //     $x = $_GET['val'];
        //     echo $x;
        // }
        ?>
        <!-- </div> -->
        <!-- <div class="osn3">
            <?php
            // if (!isset($_POST['num1']) or !isset($_POST['num2'])) echo 'Аргументи не введені(';
            // else {
            //     $x = $_POST['num1'];
            //     $y = $_POST['num2'];
            //     if ($x > 0 and $y > 0) {
            //         echo "<p>F(x) = ";
            //         if ($x * $y < -100) echo $x / 2 * $y;
            //         elseif ($x * $y > 20) echo pow($x, 2) - $x * $y;
            //         else echo pow($x, 3) + 2;
            //         echo " </p>";
            //     } else echo "Введені числа не натуральні";
            // }
            ?>
        </div> -->
    </div>
    <div class="d1">
        <a href="Dudii_lab2.php">Назад</a>
    </div>
</body>

</html>