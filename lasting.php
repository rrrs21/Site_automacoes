<?php 
	$str = 'java -jar conversor.jar "'.$_POST["arquivo"].'"';
	exec($str); 
	echo "Processo finalizado"
?>

