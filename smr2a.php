
<a href="http://192.168.0.203/SMR2A_ADRIAN/smr2a.php">adrii</a>
Jhostin Alexander.Smr2a

<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
?>

<?php
if(isset($_GET['correo'])){
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['correo']);
	fwrite($f,"\r\n");
}
?>


<html>
<body>
<h1>FORMULARIO</h1>
<form>
	<p>
		Correo electronico: <input type="email" name="correo">
	</p>
	<button>Enviar la informacion</button>
</form>

</html>

<a href="http://192.168.0.173/smr2a-VCR/smr2a.php">Victor Cabo</a>