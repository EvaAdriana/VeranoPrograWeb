<?php
	class LoginController extends Usuario{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Usuario();
		}
		
		public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from usuario where email = '".$datos['email']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if (trim($rows['0']['password']) == trim(md5($datos['password']))) {
        			$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		}else{
		     		$this->muestra_errores = true;
		     		echo md5($datos['password'])." ".$rows['0']['password'];
		     		die();
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}

		}

		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}

	}


?>