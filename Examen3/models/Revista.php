
<?php

class Revista extends Modelo{
    public $nombre_tabla = 'revista';
    public $pk = 'id_revista';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'portada'=>array(),
        'fecha'=>array(),
        'volumen'=>array(),
        'titulo'=>array(),
        'subtitulo'=>array(),
        'id_club'=>array(),
        'numero'=>array(),
        'clave'=>array(),
        'directorio'=>array(),
        'editorial'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $portada;
    private $fecha;
    private $volumen;
    private $titulo;
    private $subtitulo;
    private $id_club;
    private $numero;
    private $clave;
    private $directorio;
    private $editorial;
    
    function Revista(){
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
    }

 public function get_portada(){
        return $this->portada;
    } 

    public function set_portada($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este portada (".$valor.") no es valido";
        }
    }

	public function get_fecha(){
        return $this->fecha;
    }

	public function set_fecha($valor){

        $er = new Er();
        
        if ( !$er->valida_fecha($valor) ){
            $this->errores[] = "Esta fecha (".$valor.") no es valida";
        }
    }

	public function get_volumen(){
        return $this->volumen;
    }

	public function set_volumen($valor){

		$er = new Er();
        
        if ( !$er->valida_entero($valor) ){
            $this->errores[] = "Este volumen (".$valor.") no es valido";
        }

    }

    public function get_titulo(){
        return $this->titulo;
    } 

    public function set_titulo($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este titulo (".$valor.") no es valido";
        }
    }

    public function get_subtitulo(){
        return $this->subtitulo;
    } 

    public function set_subtitulo($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este subtitulo (".$valor.") no es valido";
        }
    }

    public function get_id_club(){
        return $this->id_club;
    } 

    public function set_id_club($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este id_club (".$valor.") no es valido";
        }
    }

   public function get_numero(){
        return $this->numero;
    } 

    public function set_numero($valor){

        $er = new Er();
        
        if ( !$er->valida_entero($valor) ){
            $this->errores[] = "Este numero (".$valor.") no es valido";
        }
    }

    public function get_directorio(){
        return $this->directorio;
    } 

    public function set_directorio($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este directorio (".$valor.") no es valido";
        }
    }

    public function get_editorial(){
        return $this->editorial;
    } 

    public function set_editorial($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este editorial (".$valor.") no es valido";
        }
    }
    


    
    
    
}

?>