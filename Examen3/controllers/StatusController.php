<?php
	class StatusController{
		
		public $muestra_errores = false;

		function __construct(){
			 //parent::Equipo();
		}
		
		public function insertaStatus($datos){
			echo "<pre>datos:"; //muestra los espacios que envia.
    		print_r($datos);
    		echo "</pre>";
			$status = new Status();
			$status->set_status($datos['status']);
			
			if (count($status->errores)>0) {
				print_r($status->errores);
				die();
			}
			$status->inserta($status->get_atributos());
		}


	}


?>