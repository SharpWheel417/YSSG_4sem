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

<!-- 
    Дано натуральное n, действительное число x. Вычислить:
 -->

<body>
    <a href="/">Назад</a>
    <?php
    function factorial($n)
    {
        if ($n === 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    function solve2($x, $n)
    {
        $terms = array_map(function ($i) use ($x) {
            return $x ** $i / factorial($i);
        }, range(1, $n));
        $result = array_sum($terms);
        $latex = "\\sum_{i=1}^n\\frac{x^i}{i!}=" . $result;
        return urlencode($latex);
    }
    if (isset($_GET['x']) && isset($_GET['n'])) {
        header("Location: /task2?result=" . solve2($_GET['x'], $_GET['n']));
        exit;
    } else if (isset($_GET['result'])) {
        echo '<h1>Результат задания 2:</h1>';
        echo '<div id="latex-expression"></div>';
        echo '<script src="script.js"></script>';
    } else {
        echo '<h1>Задание 2</h1>
        <p>Введите числа для подсчета выражения</p>
        <form id="inputForm">
            <label for="x">Число x:</label>
            <input type="text" value="4" id="x" name="x" required pattern="[0-9]+">
            <br />
            <label for="y">Число n:</label>
            <input type="text" value="12" id="n" name="n" required pattern="[0-9]+">
            <br />
            <button type="submit">Решить</button>
        </form>';
    }
    ?>
</body>

</html>