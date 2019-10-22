
<?php

$meses = [
'a'=>['mes'=>'Enero','dias'=>'31','estacion'=>'invierno'],
'b'=>['mes'=>'Febrero','dias'=>'28/29','estacion'=>'invierno'],
'd'=>['mes'=>'Marzo','dias'=>'31','estacion'=>'primavera'],
'e'=>['mes'=>'Abril','dias'=>'30','estacion'=>'primavera'],
'f'=>['mes'=>'Mayo','dias'=>'31','estacion'=>'primavera'],
'f'=>['mes'=>'Junio','dias'=>'30','estacion'=>'verano'],
'g'=>['mes'=>'Julio','dias'=>'31','estacion'=>'verano'],
'h'=>['mes'=>'Agosto','dias'=>'30','estacion'=>'verano'],
'i'=>['mes'=>'Septiembre','dias'=>'31','estacion'=>'otoño'],
'j'=>['mes'=>'Octubre','dias'=>'30','estacion'=>'otoño'],
'k'=>['mes'=>'Noviembre','dias'=>'31','estacion'=>'otoño'],
'm'=>['mes'=>'Diciembre','dias'=>'30','estacion'=>'invierno'],
];










/*

echo '<pre>';

print_r($meses);
echo '<pre>';

echo $meses['b'];
*/
foreach($meses as $mes){
	echo ' Tiene ';
	echo $mes['dias'].' dias ';
	echo ' y es ';
	echo $mes['mes']. ' y su estacion es ';
	echo $mes['estacion'].'.';
	echo '<br>';
}
?>
 
