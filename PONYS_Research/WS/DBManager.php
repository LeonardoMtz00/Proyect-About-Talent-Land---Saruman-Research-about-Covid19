<?php

class DBManager{


	//variables globales, acceder a ellas con "this.", en vez de . es ->
	private $db;
	private $host;
	private $user;
	private $pass;


	function __construct() { //variables para conexion de base de datos
		$this->db = 'ictrp';
		$this->host = 'localhost';
		$this->user = 'root';
		$this->pass = 'root';
	}

	//OPEN: intenta conectarse al host y regresa enlaze, conexion, pero si no funciona, el die (detiene ejecucion de programa y manda mensaje. Hasta donde encuentre un die se detiene.
	private function open() {
		//mandar todos los valores
		$usr = mysqli_connect( 
			$this->host,
			$this->user,
			$this->pass,
			$this->db

		) or die('Error connecting to DB');
		return $usr;
	}

	private function close($usr){
		mysqli_close($usr);
	}




	public function showPaises() {
		$usr = $this->open(); 

		$sql = "SELECT  Countries, count(*) as 'cantidad' FROM trials WHERE Countries not like '%,%' and Countries not like '%;%' and Countries not like '??%' group by Countries ORDER BY count(*) DESC"; 

		$resultArray = mysqli_query($usr, $sql); 

		$resultados = array();

		while( ($fetch = mysqli_fetch_array($resultArray, MYSQLI_ASSOC)) != NULL) {
			array_push($resultados, $fetch);//añade al arreglo de resultados
		}

		$this->close($usr); 

		//******************* CAMBIO
		/*$regresa = new \stdClass(); 
		$regresa->code = 200;//no hay tronado hasta este punto, enviamos codigo 200
		$regresa->resultados = $resultados; //ponemos resultados, todo en nuestro stdClass */


		return json_encode($resultados); //transformar stdClass a JSON
	}

	

	public function showFases() {
		$usr = $this->open(); 

		$sql = "SELECT  Phase_c, count(*) as 'cantidad' FROM trials WHERE Phase_c like 'N/A' or Phase_c like 'Phase 2' or Phase_c like 'Phase 1' or Phase_c like 'Phase 3' or Phase_c like 'Phase 4' group by Phase_c ORDER BY count(*) DESC"; 

		$resultArray = mysqli_query($usr, $sql); 

		$resultados = array();

		while( ($fetch = mysqli_fetch_array($resultArray, MYSQLI_ASSOC)) != NULL) {
			array_push($resultados, $fetch);//añade al arreglo de resultados
		}

		$this->close($usr); 

		//******************* CAMBIO


		return json_encode($resultados); //transformar stdClass a JSON
	}







	

		

}


?>