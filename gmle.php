<?php 
	$str = 'java Extrator "'.$_POST["arquivo"].'"';
	exec($str); 
	echo "Processo finalizado"
?>
