<?php
include_once("index.html");
echo "<hr />";
echo "<h1>Задание 3</h1>";
echo "<meta charset='UTF-8'>";

$str=file_get_contents("text.txt");
$word= "как";
$arr=explode(". ",$str);
 
foreach($arr as $key=>$item)
{
    if (strpos($item, $word) !== false)
    {
        $arr[$key] = "!".$arr[$key];
    }
}
$result = implode(". ", $arr);
echo "<br><p style='text-align:center; font-size:40px; color:red;'>$str</p>";
echo "<br><p style='text-align:center; font-size:40px; color:green;'>$result</p>";
 ?>