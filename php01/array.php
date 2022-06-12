<?php
$arr = ['a','b','c'];
$arr[] = "d";

// echo $arr[0];
echo "<pre>";
var_dump($arr);
echo "</pre>";

// 文字列から配列へ

$str ="one, two, three";
$result = explode(",", $str);

echo "<pre>";
var_dump($result);
echo "</pre>";

?>