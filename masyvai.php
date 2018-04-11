<?php
$m=[1,3,10,5];
echo in_array(5, $m). "<br>";
var_dump(in_array(5,$m)); echo "<br>";
var_dump(in_array(5,$m)); echo "<br>";
list($a,$b) =$m;
echo $a. "" . $b ."<br>";
$s = "ccc aaa ddd bbb";
$m = explode('', $s);
var_dump($m); echo '<br>';
sort($m);
var_dump($m); echo '<br>';
echo implode( '', $m) . '<br>';


?>