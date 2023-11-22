<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Джумабаев Богдан – Лаба 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Лаба 5</h1>
    <?php
    $p = explode('?', $_SERVER['REQUEST_URI'])[0];
    $fn = ($p != '/') ? 'questions' . $p . '/index.php' : 'questions/q_list.php';
    if (file_exists($fn))
        require $fn;
    else
        echo "<h1>404</h1>";
    ?>
</body>

</html>