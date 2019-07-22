<?php
	require_once "classes/conecta.class.php";

	//inicia a sessão
	session_cache_expire(1);
	session_name(sha1('nome do Database'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
	session_start();

	$id = $_SESSION['paciente'];

	$sql="select * from atendimento a, paciente p, funcionario f 
			 where a.id_usuario = p.id_usuario AND a.id_funcionario = f.id_funcionario
			 AND a.id_usuario =".$id;
	$stmt=Conecta::abrirConexao()->prepare ($sql);
	$stmt->execute();

?>
