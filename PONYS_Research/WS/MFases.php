<?php

//error_reporting(0);


require 'DBManager.php';



$manager = new \DBManager(); 
$json = $manager->showFases(); 



echo $json; //imprimir json



?>
