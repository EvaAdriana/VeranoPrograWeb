<?php
	class IndiceArticuloController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaIndiceArticulo($datos){
			echo "<pre>";
		 	print_r($datos);
		  	echo"</pre>";
			$indiceArticulo = new indiceArticulo();
			$indiceArticulo->set_id_indice($datos['id_indice']);
			$indiceArticulo->set_id_articulo($datos['id_articulo']);
			$indiceArticulo->set_numero($datos['numero']);
			
			if(count($indiceArticulo->errores)>0){
				print_r($indiceArticulo->errores);
			}
			die();
		}

	}
?>