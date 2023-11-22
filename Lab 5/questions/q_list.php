<?php
echo "<main>
<h3>Выполненые задания:</h3>
<ul>";
$directory = 'путькпапке/*';
$subdirectories = glob('questions/*', GLOB_ONLYDIR);
foreach ($subdirectories as $subdirectory) {
    echo "<li><a href='/" . basename($subdirectory) . "'>" . basename($subdirectory) . "</a></li>";
}
echo "</ul></main>"
    ?>