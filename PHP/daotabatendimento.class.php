<?php
require_once "tab1.class.php";
require_once "conecta.class.php";
 
class DaoTab1{
	
	
	
  public function wListar(){
   $sql = "SELECT * FROM pessoas WHERE cep LIKE :cep AND estado LIKE :estado;";
				$stmt = Conecta::abrirConexao()->prepare($sql);
				$stmt->bindValue(':cep', $cep);
				$stmt->bindValue(':estado', $estado);
				$stmt->execute();
				
				//se existir...
				if ($linha = $stmt->fetch(PDO::FETCH_OBJ)){
					
   
   $sql="select * from tab1;";
   $stmt=Conecta::abrirConexao()->prepare ($sql);
   $stmt->execute();
   $matriz=array();
    While($linha=$stmt->fetch(PDO::FETCH_OBJ)){
	 $vetor['id_']=$linha->id_;
	 $vetor['id_funcionario']=$linha->id_funcionario;
	  array_push($matriz,$vetor);
	  }
	    return json_encode($matriz);
	   }
	   
  }
	   
	    public function aLugar ($lugar){
			   //saber se o usuario existe na tabela tabusuario
			  $sql="select * from lugar a, nome f , estabelecimento h 
			  where h.lugar like :lugar 
			  and a.id_nome=f.id_
			  and h.id_= h.id_l;";
			  
			  $stmt=Conecta::abrirConexao()->prepare ($sql);
			  $stmt->bindValue(':hospital',$hospital);
			  $stmt->execute();
			  $matriz=array();
			  while($linha=$stmt->fetch(PDO::FETCH_OBJ)){
					$vetor['hospital']=$linha->hospital;
					$vetor['perfil']=$linha->perfil;
					array_push($matriz,$vetor);
			  }
			  return json_encode($matriz);
	   }
	}
?>