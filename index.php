<?php require_once 'arquivo.php';   ?>

<?php 


$cachorro = new Cachorro();
$cachorro->setNome("Mel");
$cachorro->setRaca("Golden Retriver");
echo "O nome da minha cachorra é : ".$cachorro->getNome().". Ela gosta de latir - ";
echo $cachorro->latir()." - ";
echo "A sua raca é misturada, porem o que prevalece é a raca: ".$cachorro->getRaca();


?>