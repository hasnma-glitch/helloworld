<?php
	require_once "classes/conecta.class.php";
	require_once "classes/daotab.class.php";

	$bairro =  addslashes($_POST['bairro']);
	$cidade =  addslashes($_POST['cidade']);
	$estado =  addslashes($_POST['estado']);
	$dao = new DaoTabLugar;
			
   	echo $dao->w_busca($bairro,$cidade,$estado);	
	
	
?>
