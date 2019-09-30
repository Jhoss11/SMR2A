
<a href="http://192.168.0.203/SMR2A_ADRIAN/smr2a.php">adrii</a>
Jhostin Alexander.Smr2a

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f);

?>


<a href="http://192.168.0.173/smr2a-VCR/smr2a.php">Victor Cabo</a>