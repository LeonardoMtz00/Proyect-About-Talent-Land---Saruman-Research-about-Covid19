<?php



require 'DBManager.php'; 



$manager = new \DBManager(); 
$json = $manager->showPaises(); 



echo $json; //imprimir json



?>
