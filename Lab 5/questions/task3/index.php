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
    Дано натуральное n. Создать квадратную матрицу A,
    размера nxn, элементы которой заданы по следующему правилу
 -->

<body>
    <a href="/">Назад</a>
    <?php
    function solve3($n)
    {
        $m = array();

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($i > $j) {
                    $m[$i][$j] = $n / ($i + 1);
                } else {
                    $m[$i][$j] = $j + 1;
                }

            }
        }

        $latex = "\\left(\\begin{matrix}\\n";

        foreach ($m as $s) {
            $latex .= "@@" . implode("@%26@", $s) . "@\\\\@\\n";
        }

        // Завершение строки LaTeX для матрицы
        $latex .= "\\end{matrix}\\right)";
        return $latex;
    }

    // Router
    if (isset($_GET['n'])) {
        $result = solve3($_GET['n']);
        header("Location: /task3?result=" . urlencode(json_encode($result)));
        exit;
    } else if (isset($_GET['result'])) {
        echo '<h1>Результат задания 3:</h1>';
        echo '<div id="latex-expression"></div>';
        echo '<script src="script.js"></script>';
    } else {
        echo '<h1>Задание 3</h1>
        <p>Дано натуральное n. Создать квадратную матрицу A, 
        размера nxn, элементы которой заданы по следующему правилу:</p>
        <img src="/img3.png" style="max-width:200px" />
        <p>Введите числа для подсчета выражени:</p>
        <form id="inputForm">
            <label for="n">Число n:</label>
            <input type="text" value="12" id="n" name="n" required pattern="[0-9]+">
            <br />
            <button type="submit">Решить</button>
        </form>';
    }
    ?>
</body>

</html>