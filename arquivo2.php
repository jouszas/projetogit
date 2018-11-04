<?php

class Gato {
   
   private $nome;
   private $sexo;
   private $raca;
    

   public function miar(){

        echo "miau miau!";

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




