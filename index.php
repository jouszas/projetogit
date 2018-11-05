<?php 

require_once 'arquivo.php';  
require_once 'arquivo2.php';
require_once 'animal.php';
require_once 'cavalo.php';
require_once 'ponei.php';

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
echo "A sua raca é : ".$gato->getRaca()."<br/>";


//---------------------------------------------------------------

$ponei = new Ponei();
$ponei->nome = "Ponei Maldito";
$ponei->crina = "A crina é menor do que a do cavalo";
echo "O nome do meu ponei é : ".$ponei->nome."<br/>";
echo "Caracteriscas da crina: ".$ponei->crina;



?>