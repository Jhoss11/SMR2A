<?php
function calcula($a,$b,$c) {
$r='acutangulo';
if($a==90 or $b==90 or $c==90)
	$r='rectangulo';
if($a>90 or $b>90 or $c>90)
	$r='obtusangulo';
echo $r;
}
echo calcula(90,50,60).' => rectangulo<br/>';
echo calcula(50,90,40).' => rectangulo<br/>';
echo calcula(40,50,90).' => rectangulo<br/>';
echo calcula(100,50,40).' => obtusangulo<br/>';
echo calcula(80,100,40).' => obtusangulo<br/>';
echo calcula(60,60,60).' => acutangulo<br/>';

?>