<?php
	class AutorController{
		
		public $muestra_errores = false;

		function __construct(){
			 //parent::Equipo();
		}
		
		public function insertaAutor($datos){
			echo "<pre>datos:"; //muestra los espacios que envia.
    		print_r($datos);
    		echo "</pre>";
			$autor = new Autor();
			$autor->set_nombre($datos['nombre']);
			$autor->set_apellidos($datos['apellidos']);
			$autor->set_email($datos['email']);
			
			if (count($autor->errores)>0) {
				print_r($autor->errores);
			}
			die();
		}


	}


?>