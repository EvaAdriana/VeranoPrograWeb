<?php
	class IndiceController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaIndice($datos){
			echo "<pre>";
		 	print_r($datos);
		  	echo"</pre>";
			$indice = new Indice();
			$indice->set_titulo($datos['titulo']);
			$indice->set_numero($datos['numero']);
			$indice->set_id_revista($datos['id_revista']);
			if(count($indice->errores)>0){
				print_r($indice->errores);
			}
			die();
		}

		

	}
?>