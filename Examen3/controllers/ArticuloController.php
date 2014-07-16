<?php
	class ArticuloController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaArticulo($datos){
			echo "<pre>";
		 	print_r($datos);
		  	echo"</pre>";
			$articulo = new Articulo();
			$articulo->set_nombre($datos['nombre']);
			$articulo->set_archivo_pdf($datos['archivo_pdf']);
			$articulo->set_id_status($datos['id_status']);
			if(count($articulo->errores)>0){
				print_r($articulo->errores);
			}
			die();
		}

	}
?>