<?php
// объявление переменных
$a1 = 0;
$a2 = 0;
$a3 = 1;
$a4 = 1;

$b1 = 0;
$b2 = 1;
$b3 = 0;
$b4 = 1;
//переменные для таблиц сравнения:
$true = true;
$false = false;
$minus = -1;
$srtMinus = strval($minus);
$null = null;
$strPhp = "php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Задание 1</title>
</head>

<body>
    <main>
        <section>
            <!-- Таблица истинности -->
            <table>
                <caption>Таблица истинности</caption>
                <tr>
                    <th>A</th>
                    <th>B</th>
                    <th>!A</th>
                    <th>A||B</th>
                    <th>A&&B</th>
                    <th>A xor B</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td><?php echo !$a1 ?></td>
                    <td><?php echo intval($a1 || $b1) ?></td>
                    <td><?php echo intval($a1 && $b1) ?></td>
                    <td><?php echo intval($a1 xor $b1) ?></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td><?php echo !$a2 ?></td>
                    <td><?php echo intval($a2 || $b2) ?></td>
                    <td><?php echo intval($a2 && $b2) ?></td>
                    <td><?php echo intval($a2 xor $b2) ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td><?php echo intval(!$a3) ?></td>
                    <td><?php echo intval($a3 || $b3) ?></td>
                    <td><?php echo intval($a3 && $b3) ?></td>
                    <td><?php echo intval($a3 xor $b3) ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><?php echo intval(!$a4) ?></td>
                    <td><?php echo intval($a4 || $b4) ?></td>
                    <td><?php echo intval($a4 && $b4) ?></td>
                    <td><?php echo intval($a4 xor $b4) ?></td>
                </tr>
            </table>
        </section>
        <!-- Гибкое сравнение -->
        <section>
            <table>
                <caption>Гибкое сравнение</caption>
                <tr>
                    <th>&nbsp;</th>
                    <th>true</th>
                    <th>false</th>
                    <th>1</th>
                    <th>0</th>
                    <th>-1</th>
                    <th>"-1"</th>
                    <th>null</th>
                    <th>"php"</th>
                </tr>
                <tr>
                    <td>true</th>
                    <td><?php echo $true == $true ?></td>
                    <td><?php echo $true == $false ?></td>
                    <td><?php echo $true == $a3 ?></td>
                    <td><?php echo $true == $a1 ?></td>
                    <td><?php echo $true == $minus ?></td>
                    <td><?php echo $true == $srtMinus ?></td>
                    <td><?php echo $true == $null ?></td>
                    <td><?php echo $true == $strPhp ?></td>
                </tr>
                <tr>
                    <th>false</th>
                    <td><?php echo $false == $true ?></td>
                    <td><?php echo $false == $false ?></td>
                    <td><?php echo $false == $a3 ?></td>
                    <td><?php echo $false == $a1 ?></td>
                    <td><?php echo $false == $minus ?></td>
                    <td><?php echo $false == $srtMinus ?></td>
                    <td><?php echo $false == $null ?></td>
                    <td><?php echo $false == $strPhp ?></td>
                </tr>
                <tr>
                    <th>1</th>
                    <td><?php echo $a3 == $true ?></td>
                    <td><?php echo $a3 == $false ?></td>
                    <td><?php echo $a3 == $a3 ?></td>
                    <td><?php echo $a3 == $a1 ?></td>
                    <td><?php echo $a3 == $minus ?></td>
                    <td><?php echo $a3 == $srtMinus ?></td>
                    <td><?php echo $a3 == $null ?></td>
                    <td><?php echo $a3 == $strPhp ?></td>
                </tr>
                <tr>
                    <th>0</th>
                    <td><?php echo $a1 == $true ?></td>
                    <td><?php echo $a1 == $false ?></td>
                    <td><?php echo $a1 == $a3 ?></td>
                    <td><?php echo $a1 == $a1 ?></td>
                    <td><?php echo $a1 == $minus ?></td>
                    <td><?php echo $a1 == $srtMinus ?></td>
                    <td><?php echo $a1 == $null ?></td>
                    <td><?php echo $a1 == $strPhp ?></td>
                </tr>
                <tr>
                    <th>-1</th>
                    <td><?php echo $minus == $true ?></td>
                    <td><?php echo $minus == $false ?></td>
                    <td><?php echo $minus == $a3 ?></td>
                    <td><?php echo $minus == $a1 ?></td>
                    <td><?php echo $minus == $minus ?></td>
                    <td><?php echo $minus == $srtMinus ?></td>
                    <td><?php echo $minus == $null ?></td>
                    <td><?php echo $minus == $strPhp ?></td>
                </tr>
                </tr>
                <tr>
                    <th>"-1"</th>
                    <td><?php echo $srtMinus == $true ?></td>
                    <td><?php echo $srtMinus == $false ?></td>
                    <td><?php echo $srtMinus == $a3 ?></td>
                    <td><?php echo $srtMinus == $a1 ?></td>
                    <td><?php echo $srtMinus == $minus ?></td>
                    <td><?php echo $srtMinus == $srtMinus ?></td>
                    <td><?php echo $srtMinus == $null ?></td>
                    <td><?php echo $srtMinus == $strPhp ?></td>
                </tr>
                <tr>
                    <th>null</th>
                    <td><?php echo $null == $true ?></td>
                    <td><?php echo $null == $false ?></td>
                    <td><?php echo $null == $a3 ?></td>
                    <td><?php echo $null == $a1 ?></td>
                    <td><?php echo $null == $minus ?></td>
                    <td><?php echo $null == $srtMinus ?></td>
                    <td><?php echo $null == $null ?></td>
                    <td><?php echo $null == $strPhp ?></td>
                </tr>
                <tr>
                    <th>"php"</th>
                    <td><?php echo $strPhp == $true ?></td>
                    <td><?php echo $strPhp == $false ?></td>
                    <td><?php echo $strPhp == $a3 ?></td>
                    <td><?php echo $strPhp == $a1 ?></td>
                    <td><?php echo $strPhp == $minus ?></td>
                    <td><?php echo $strPhp == $srtMinus ?></td>
                    <td><?php echo $strPhp == $null ?></td>
                    <td><?php echo $strPhp == $strPhp ?></td>
                </tr>
            </table>
            <!-- Строгое сравнение -->
            <table>
                <caption>Строгое сравнение</caption>
                <tr>
                    <th>&nbsp;</th>
                    <th>true</th>
                    <th>false</th>
                    <th>1</th>
                    <th>0</th>
                    <th>-1</th>
                    <th>"-1"</th>
                    <th>null</th>
                    <th>"php"</th>
                </tr>
                <tr>
                    <td>true</th>
                    <td><?php echo $true === $true ?></td>
                    <td><?php echo $true === $false ?></td>
                    <td><?php echo $true === $a3 ?></td>
                    <td><?php echo $true === $a1 ?></td>
                    <td><?php echo $true === $minus ?></td>
                    <td><?php echo $true === $srtMinus ?></td>
                    <td><?php echo $true === $null ?></td>
                    <td><?php echo $true === $strPhp ?></td>
                </tr>
                <tr>
                    <th>false</th>
                    <td><?php echo $false === $true ?></td>
                    <td><?php echo $false === $false ?></td>
                    <td><?php echo $false === $a3 ?></td>
                    <td><?php echo $false === $a1 ?></td>
                    <td><?php echo $false === $minus ?></td>
                    <td><?php echo $false === $srtMinus ?></td>
                    <td><?php echo $false === $null ?></td>
                    <td><?php echo $false === $strPhp ?></td>
                </tr>
                <tr>
                    <th>1</th>
                    <td><?php echo $a3 === $true ?></td>
                    <td><?php echo $a3 === $false ?></td>
                    <td><?php echo $a3 === $a3 ?></td>
                    <td><?php echo $a3 === $a1 ?></td>
                    <td><?php echo $a3 === $minus ?></td>
                    <td><?php echo $a3 === $srtMinus ?></td>
                    <td><?php echo $a3 === $null ?></td>
                    <td><?php echo $a3 === $strPhp ?></td>
                </tr>
                <tr>
                    <th>0</th>
                    <td><?php echo $a1 === $true ?></td>
                    <td><?php echo $a1 === $false ?></td>
                    <td><?php echo $a1 === $a3 ?></td>
                    <td><?php echo $a1 === $a1 ?></td>
                    <td><?php echo $a1 === $minus ?></td>
                    <td><?php echo $a1 === $srtMinus ?></td>
                    <td><?php echo $a1 === $null ?></td>
                    <td><?php echo $a1 === $strPhp ?></td>
                </tr>
                <tr>
                    <th>-1</th>
                    <td><?php echo $minus === $true ?></td>
                    <td><?php echo $minus === $false ?></td>
                    <td><?php echo $minus === $a3 ?></td>
                    <td><?php echo $minus === $a1 ?></td>
                    <td><?php echo $minus === $minus ?></td>
                    <td><?php echo $minus === $srtMinus ?></td>
                    <td><?php echo $minus === $null ?></td>
                    <td><?php echo $minus === $strPhp ?></td>
                </tr>
                </tr>
                <tr>
                    <th>"-1"</th>
                    <td><?php echo $srtMinus === $true ?></td>
                    <td><?php echo $srtMinus === $false ?></td>
                    <td><?php echo $srtMinus === $a3 ?></td>
                    <td><?php echo $srtMinus === $a1 ?></td>
                    <td><?php echo $srtMinus === $minus ?></td>
                    <td><?php echo $srtMinus === $srtMinus ?></td>
                    <td><?php echo $srtMinus === $null ?></td>
                    <td><?php echo $srtMinus === $strPhp ?></td>
                </tr>
                <tr>
                    <th>null</th>
                    <td><?php echo $null === $true ?></td>
                    <td><?php echo $null === $false ?></td>
                    <td><?php echo $null === $a3 ?></td>
                    <td><?php echo $null === $a1 ?></td>
                    <td><?php echo $null === $minus ?></td>
                    <td><?php echo $null === $srtMinus ?></td>
                    <td><?php echo $null === $null ?></td>
                    <td><?php echo $null === $strPhp ?></td>
                </tr>
                <tr>
                    <th>"php"</th>
                    <td><?php echo $strPhp === $true ?></td>
                    <td><?php echo $strPhp === $false ?></td>
                    <td><?php echo $strPhp === $a3 ?></td>
                    <td><?php echo $strPhp === $a1 ?></td>
                    <td><?php echo $strPhp === $minus ?></td>
                    <td><?php echo $strPhp === $srtMinus ?></td>
                    <td><?php echo $strPhp === $null ?></td>
                    <td><?php echo $strPhp === $strPhp ?></td>
                </tr>
            </table>
        </section>
        <section>
          <h1>Вывод</h1>
          <p style = "width: 600px">При гибком сравнении оператор == (равенства) принимает операнды любого типа, если два операнда равны, возвращается значение true, в противном случае - false.
              Если операнды имеют разные типы данных, PHP попытается преобразовать их перед сравнением к одному типу, то есть он сравнивает значение после преобразования типов.
          <br>При сравнении строк, содержащих числа, оператор == пытается преобразовать их в числа, что может привести к неожиданным результатам.
          <br>C версии PHP 8. PHP сравнивает строку и число как числа, только если строка представляет собой число. Иначе число будет конвертировано в строку, и будет производиться строковое сравнение.</p>
          <p style = "width: 600px">При строгом сравнении оператор === (идентичности) проверяет два операнда на «идентичность», руководствуясь строгим определением совпадения, это означает, что помимо равенства самих значений операндов, они также должны относиться к одному и тому же типу данных. </p>
        </section>
    </main>
    <script src="./script.js"></script>
</body>

</html>