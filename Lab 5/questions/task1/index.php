<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Лаба 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.11.1/katex.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.11.1/katex.min.js"></script>
</head>

<!-- Заданы значения действительных х, у, z. Вычислить значения выражений a и b. -->

<body>
    <a href="/">Назад</a>
    <?php

//Функция факториала
    function fac($number){
    $factorial = 1; // Инициализация переменной для хранения факториала
    for ($i = 1; $i <= $number; $i++) {// Вычисление факториала
        $factorial *= $i;
    }
    return $factorial;}// Возвращение факториала



    function solve1($x, $y, $z)
    {
        $pi = 3.14;
        $a = log10(abs($y-pow(abs($x),0.5)))*($x-($y/($z+pow($x, 2)/(4*$z))));
        // $a = (1 + pow(sin($x + $y - $pi / 2), 2))
        //     / (2 + abs($x - 2 * $x / (1 + pow($x, 2) * pow($y, 2))))
        //     + $x;
        $b = $y-((pow($x,2)/fac(3)*$y)+(pow($z,2)/(fac(5)*$x)));

         $latex1 = "a=\\frac{1+\\sin\\left(x+y-\\pi/2\\right)^{2}}";
         $latex2 = "{2+|x-2x/(1+x^{2}+y^{2})|}+x=" . round($a, 2);
         $latex3 = "b=\\cos\\left(\\arctan\\frac{1}{2z}\\right)^2=" . round($b, 2);
        return urlencode( . $latex2 . "\\newline\\@" . $latex3);
        echo "".$a."".$b."";
        // return $a, $b;
    }
    if (isset($_GET['x']) && isset($_GET['y']) && isset($_GET['z'])) {
        header("Location: /task1?result=" . solve1($_GET['x'], $_GET['y'], $_GET['z']));
        exit;
    } else if (isset($_GET['result'])) {
        echo '<h1>Результат задания 1:</h1>';
        echo '<div id="latex-expression"></div>';
        echo '<script src="script.js"></script>';
    } else {
        echo '<h1>Задание 1</h1>
        <p>Введите числа для подсчета выражения</p>
        <form id="inputForm">
            <label for="x">Число x:</label>
            <input type="text" id="x" name="x" required pattern="[0-9]+">
            <br />
            <label for="y">Число y:</label>
            <input type="text" id="y" name="y" required pattern="[0-9]+">
            <br />
            <label for="y">Число z:</label>
            <input type="text" id="z" name="z" required pattern="[0-9]+">
            <br />
            <button type="submit">Решить</button>
        </form>';
    }
    ?>
</body>

</html>