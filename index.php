<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Задание 1
        echo "Задание 1</br>";

        function cube($a)
        {
            return pow($a, 3);
        }

        echo cube(3);


        //Задание 2
        echo "</br></br>Задание 2</br>";

        function calcSumNumber($a1, $a2)
        {
            return $a1 + $a2;
        }

        echo calcSumNumber(4, 5);


        //Задание 3
        echo "</br></br>Задание 3</br>";

        function GetDayOfWeek($day){
            $NameDay = [
              '1' => 'Понедельник',
              '2' => 'Вторник',
              '3' => 'Среда',
              '4' => 'Четверг',
              '5' => 'Пятница',
              '6' => 'Суббота',
              '7' => 'Воскресенье'
            ];
            return $NameDay[$day];
            
        }

        echo GetDayOfWeek(3);
        
        //Задание 4
        echo "</br></br>Задание 4</br>";

        function checkNegativeNumber($a)
        {
            return ($a < 0);
        }

        echo checkNegativeNumber(-1) ? "true" : "false"  ;


        //Задание 5
        echo "</br></br>Задание 5</br>";

        function getDigitsSum($digit)
        {
            $num = "$digit";
            $sum = 0;

            for ($i = 0; $i < strlen($num); $i++) {
                $sum += $num[$i];
            }
            return $sum;
        }

        echo getDigitsSum(89898989898);


        //Задание 6
        echo "</br></br>Задание 6</br>";

        for($i = 1; $i <=2020; $i++){
            if (getDigitsSum($i) == 13)
            echo $i . ' ';
        }


        //Задание 7
        echo "</br></br>Задание 7</br>";

        function isEven($number)
        {
            return ($number % 2 == 0);
        }

        echo isEven(44) ? "true" : "false";


        //Задание 8
        echo "</br></br>Задание 8</br>";

        function translitString($string)
        {
            $arRusLetters = [
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й','К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф','Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я','а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й','к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф','х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
            ];

            $arTranslitLetters = [
                'A', 'B', 'V', 'G', 'D', 'E', 'IO', 'ZH', 'Z', 'I', 'I','K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F','H', 'C', 'CH', 'SH', 'SH', '`', 'Y', '`', 'E', 'IU', 'IA','a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'i','k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f','h', 'c', 'ch', 'sh', 'sh', '`', '``', '`', 'e', 'iu', 'ia'
            ];

            return str_replace($arRusLetters, $arTranslitLetters, $string);
        }

        echo translitString("Не люблю писать сочинения по рус литу");

        //Задание 9

        echo "</br></br>Задание 9</br>";
        
        $e = 2147;
        $e = $e % 10;
        if($e == 1){
            echo($e . " " . "яблоко");
        }
        elseif($e > 1 && $e < 5){
            echo($e . " " . "яблока");
        }
        else{
            echo($e . " " . "яблок");
        }

        //Задание 11

        echo "</br></br>Задание 11</br>";

        function getDigitSum($number)
        {
            $sum = getDigitsSum($number);
            if($sum < 10)return $sum;
            else return getDigitSum($sum);
        }  

        echo getDigitSum(12345678);
        
        
        
        //Задание 14

        echo "</br></br>Задание 14</br>";

        $texts = 'ola';
        if($texts == strrev($texts)){
            echo "Полиндром";
        }
        else{
            echo 'Не полиндром';
        }
        //Задание 15

        echo "</br></br>Задание 15</br>";

        $rows = 20; // количество строк, tr
        $cols = 20; // количество столбцов, td

        echo '<table border="1">';

        for ($tr=1; $tr<=$rows; $tr++){ 
        echo '<tr>';
        for ($td=1; $td<=$cols; $td++){ 
            echo '<td>'. $tr*$td .'</td>';
        }
        echo '</tr>';
        }

        echo '</table>';

        //Задание 16

        echo "</br></br>Задание 16</br>";

        $string = "five and two and one hundreed";
        $words  = explode(' ', $string);

        $longestWordLength = 0;
        $longestWord = '';

        foreach ($words as $word) {
        if (strlen($word) > $longestWordLength) {
            $longestWordLength = strlen($word);
            $longestWord = $word;
        }
        }

        echo $longestWord;

        //Задание 18

        echo "</br></br>Задание 18</br>";
        $text = 'sdfghjklkjhgfdfghj yfguhijokpjuhy gtfrgtjhyiuojpouy dxgfcyugihl uopyhgfhgtjyuhi';
        echo(wordwrap($text, 13, '<br>*******************<br>'))
    ?>
</body>
</html>


