<?php

class Cachorro {
   
   private $nome;
   private $sexo;
   private $raca;
    

   public function latir(){

        echo "Au Au!";

   }
  
   public function getNome (){
         
         return $this->nome;

  }

  public function setNome ($n){
      
       $this->nome = $n;
  }

  public function getRaca (){
         
         return $this->raca;

  }

  public function setRaca($r){
      
       $this->raca = $r;
  }

}?>

<?php 


$cachorro = new Cachorro();
$cachorro->setNome("Mel");
$cachorro->setRaca("Golden Retriver");
echo "O nome do meu cachorro é : ".$cachorro->getNome().".E ela gosta de latir!";
echo $cachorro->latir()." - ";
echo "A sua raca é misturada, porem o que prevalece é a raca: ".$cachorro->getRaca();


?>

