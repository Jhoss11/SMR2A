<html>
<body>
	<h1>FORMULARIO</h1>
	<form>
</body>	
	<p>
		URL Pagina Principal: <input type="text" name="homepage">
		Nombre Completo: <input type="text" name="nombrecompleto">
		Correo electronico: <input type="email" name="correo">
		
	</p>
		<button>Enviar la informacion</button>
	</form>

</html>


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


<?php
if(isset($_GET['homepage'])&&isset($_GET['nombrecompleto'])){
	$f=fopen('url.txt','a');
	fwrite($f,$_GET['homepage']);
	fwrite($f,$_GET['nombrecompleto']);
	fwrite($f,"\r\n");
}
?>	

	
	
