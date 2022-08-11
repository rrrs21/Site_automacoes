<?php 
	$str = 'java -jar demo.jar "'.$_POST["arquivo"].'"';
	exec($str); 
	echo "Processo finalizado"
?>
