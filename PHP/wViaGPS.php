<?php
	require_once "classes/daotabl.class.php";


	$cidade =  addslashes($_POST['cidade']);
	$estado =  addslashes($_POST['estado']);

		
	//instancia objeto
	$dao = new DaoTabl;
	
			
	//envia o objeto da classe MODEL para o método da classe DAO
   	echo $dao->w_busca('',$cidade,$estado);  		
?>