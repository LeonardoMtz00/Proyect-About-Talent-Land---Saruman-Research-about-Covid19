<?php

//error_reporting(0); //status 0, no mostrar errores

//ENDPOINT es punto de acceso a mi web service

require 'DBManager.php'; //manejador de base de datos, que seria como mi "import"



$manager = new \DBManager(); //creamos clase dinamicamente
$json = $manager->showPaises(); //si no es nulo invocamos a find y mandamos id 



echo $json; //imprimir json



?>