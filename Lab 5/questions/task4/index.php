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
    Дан одномерный массив, состоящий из n целочисленных элементов. 

        Ввести массив с клавиатуры
        Найти максимальный отрицательный элемент.
        Вычислить произведение отрицательных элемситов массива.
        Вывести ненулевые элементы на экран в обратном порядке.
-->

<body>
    <a href="/">Назад</a>
    <h1>Задание 4</h1>
    <?php
    function solve1($array)
    {
        $maxNegative = null;
        $product = 1;
        $nonZeroElements = [];

        foreach ($array as $element) {
            if ($element < 0 && ($maxNegative === null || $element > $maxNegative)) {
                $maxNegative = $element;
            }

            if ($element < 0) {
                $product *= $element;
            }

            if ($element != 0) {
                $nonZeroElements[] = $element;
            }
        }

        $reversedElements = array_reverse($nonZeroElements);

        return [
            'maxNegative' => $maxNegative,
            'product' => $product,
            'reversedElements' => $reversedElements
        ];
    }

    // Ввод массива с использованием HTML тега input
    if (isset($_POST['array'])) {
        $array = array_map('intval', explode(' ', $_POST['array']));

        $result = solve1($array);
        if (isset($result['maxNegative'])) {
            echo "Максимальный отрицательный элемент: " . $result['maxNegative'] . "<br />";
        }
        echo "Произведение отрицательных элементов: " . $result['product'] . "<br />";
        echo "Ненулевые элементы в обратном порядке: "
            . implode(', ', $result['reversedElements']) . "<br />";
        echo "<script>document.addEventListener('DOMContentLoaded', "
            . "() => document.getElementById('array').value = '"
            . implode(' ', $array) . "');</script>";
    }
    ?>

    <form method="POST" action="">
        <label for="array">Введите элементы массива (через пробел): </label>
        <input type="text" name="array" id="array">
        <input type="submit" value="Отправить">
    </form>
</body>

</html>