<?php 

require_once 'arquivo.php';  
require_once 'arquivo2.php';

?>

<?php 


$cachorro = new Cachorro();
$gato = new Gato();


$cachorro->setNome("Mel");
$cachorro->setRaca("Golden Retriver");
echo "O nome da minha cachorra é : ".$cachorro->getNome().". Ela gosta de latir - ";
echo $cachorro->latir()." - ";
echo "A sua raca é misturada, porem o que prevalece é a raca: ".$cachorro->getRaca()."<br/>";


$gato->setNome("Gina");
$gato->setRaca("Cat street");
echo "O nome da minha gata é : ".$gato->getNome().". Ela gosta de miar para caralio - ";
echo $gato->miar()." - ";
echo "A sua raca é : ".$gato->getRaca();


?>