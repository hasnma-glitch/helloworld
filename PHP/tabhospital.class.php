<?php
class Tablugarexemplo{
  private $lugar;
  private $logradouro;
  private $numero;
  private $complemento;
  private $telefone;
  private $referencia;
  private $latitude;
  private $longitude;
  private $capacidade;
  private $cidade;
  private $bairro;
  private $estado;
  private $cep;

   public function getHospital(){return $this->hospital;}
   public function setHospital($hospital)
   {$this->hospital=$hospital;}
   
   public function getLogradouro(){return $this->logradouro;}
   public function setLogradouro($logadouro)
   {$this->logradouro=$logadouro;}
   
   public function getNumero(){return $this->numero;}
   public function setNumero($numero)
   {$this->numero=$numero;}
    
   public function getComplemento(){return $this->complemento;}
   public function setComplemento($complemento)
   {$this->complemento=$complemento;}
   
   public function getId_lugar(){return $this->id_lugar;}
   public function setId_lugar($id_lugar)
   {$this->id_lugar=$id_lugar;}
   
   public function getTelefone(){return $this->telefone;}
   public function setTelefone($telefone)
   {$this->telefone=$telefone;}
   
   public function getReferencia(){return $this->referencia;}
   public function setReferencia($referencia)
   {$this->referencia=$referencia;} 
   
   public function getLatitude(){return $this->latitude;}
   public function setLatitude($latitude)
   {$this->latitude=$latitude;}
   
   public function getLongitude(){return $this->longitude;}
   public function setLongitude($longitude)
   {$this->longitude=$longitude;}

   public function getCapacidade(){return $this->capacidade;}
   public function setCapacidade($capacidade)
   {$this->capacidade=$capacidade;}

   public function getBairro(){return $this->bairro;}
   public function setBairro($bairro)
   {$this->bairro=$bairro;}   
   
   public function getCidade(){return $this->cidade;}
   public function setCidade($cidade)
   {$this->cidade=$cidade;}
   
   public function getEstado(){return $this->estado;}
   public function setEstado($estado)
   {$this->estado=$estado;}
   
   public function getCep(){return $this->cep;}
   public function setCep($cep)
   {$this->cep=$cep;}
   
   }
?>