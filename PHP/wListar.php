<?php

	require_once "classes/conecta.class.php";

	require_once "classes/tab1.class.php";

	require_once "classes/daotab1.class.php";



	$data_nascimento =  addslashes($_POST['data_nascimento']);

	$cpf =  addslashes($_POST['cpf']);



	$dao = new DaoTab1;

	

	//envia o objeto da classe MODEL para o método da classe DAO

   	echo $dao->wListar($cpf,$data_nascimento);  	

//echo $cpf." ".$data_nascimento; 		

?>