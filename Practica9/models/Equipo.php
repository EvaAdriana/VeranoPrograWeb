<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'equipo';
    public $pk = 'id_equipo';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'id_pais'=>array(),
		'escudo'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $id_pais;
	private $escudo;
       
    
    function Equipo(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from equipo where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = trim($valor);
        }
    }

	public function get_idpais(){
        return $this->idpais;
    }

	public function set_idpais($valor){

        $er = new Er();
        
        if ( !$er->valida_entero($valor) ){
            $this->errores[] = "Este pais (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from equipo where idpais = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este pais (".$valor.") ya esta registrado"; 
        }else{
            $this->idpais = trim($valor);
        }
    }

	public function get_escudo(){
        return $this->escudo;
    }

	public function set_escudo($valor){

		$er = new Er();
        
        if ( !$er->valida_imagen($valor) ){
            $this->errores[] = "(".$valor.") no es imagen";
        }

        $rs = $this->consulta_sql("select * from equipo where escudo = '$valor'");
        $rows = $rs->GetArray();
        
        /*if(count($rows) > 0){
            $this->errores[] = "Este escudo (".$valor.") ya esta registrado"; 
        }else*/{
            $this->escudo = trim($valor);
        }
    }

    


    
    
    
}

?>