<?php
	require_once "classes/tab.class.php";
	require_once "classes/daotab.class.php";

	$nome_usuario = addslashes($_POST['nome_usuario']);
	$data_nascimento =  addslashes($_POST['data_nascimento']);
	$sexo =  addslashes($_POST['sexo']);
	$cpf =   addslashes($_POST['cpf']);
	$logradouro = addslashes($_POST['logradouro']);
	$telefone =  addslashes($_POST['telefone']);
	$id_convenio =  addslashes($_POST['id']);
		
	//instancia objeto
	$a = new Tab;
	$dao = new DaoTab;
	
	//envia dados para a classe MODEL			
	$a->setNome_usuario($nome_usuario);
	$a->setData_nascimento($data_nascimento);
	$a->setSexo($sexo);
	$a->setCpf($cpf);
	$a->setLogradouro($logradouro);
	$a->setTelefone($telefone);
	$a->setId_convenio($id_convenio);

	//envia o objeto da classe MODEL para o método da classe DAO
   	echo $dao->wCadastrar($a);  		
?>