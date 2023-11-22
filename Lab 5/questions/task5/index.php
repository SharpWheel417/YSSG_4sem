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
    Дана матрица А(n,m). Сформировать одномерный массив В(n), элементами которого 
    являются суммы элементов i-ой строки.
-->

<body>
    <a href="/">Назад</a>
    <h1>Задание 5</h1>

    <?php
    if (isset($_GET['matrix'])) {
        // Получение введенной матрицы
        $matrix = $_GET['matrix'];

        // Разбиение матрицы на строки
        $rows = explode("\n", $matrix);

        // Инициализация массива для сумм элементов строк
        $result = [];

        // Обработка каждой строки матрицы
        foreach ($rows as $row) {
            // Разбиение строки на элементы
            $elements = explode(" ", trim($row));

            // Суммирование элементов строки
            $sum = array_sum($elements);

            // Добавление суммы в результат
            $result[] = $sum;
        }

        // Вывод результата
        echo "<p><b><i>Результат:</i> " . implode(", ", $result) . "</b></p>";
    }
    ?>

    <form id="inputForm">
        <label for="matrix">Введите матрицу A (разделители: пробелы и переносы строк):</label><br>
        <textarea name="matrix" id="matrix" rows="5" cols="50"></textarea><br>
        <input type="submit" value="Сформировать массив">
    </form>
    </form>
</body>

</html>