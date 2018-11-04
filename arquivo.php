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

}?>

<?php 


$cachorro = new Cachorro();
$cachorro->setNome("Mel");
echo "O nome do meu cachorro é : ".$cachorro->getNome().", e ela gosta de latir!";
echo $cachorro->latir();


?>

