<?php
function calcular(){
	$a=4;
	$b=6;
	$r=null;
	
	$r=$r.($a+$b).'<br>';
	$r=$r.($a-$b).'<br>';
	$r=$r.($a*$b).'<br>';
	$r=$r.($a/$b).'<br>';
	return $r;
}
echo calcular();
$a=calcular();
echo $a;
calcular();
calcular();
?>