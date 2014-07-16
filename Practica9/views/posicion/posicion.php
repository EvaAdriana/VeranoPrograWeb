<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Posicion.php');
      include ('../../controllers/PosicionController.php');
      include ('../../libs/Er.php');
       include ('../layouts/header.php');
       if (isset($_POST['nombre'])){
    
    $posicionC=new PosicionController();
    $posicionC->insertaPosicion($_POST);

  }
?>
	<br /><br />
	<div class="container">
    	<div class="row">
           <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
                 <h2>Registro Posici&oacute;n</h2>
                <form role="form" id="formPosicion" method="POST">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="ej: Portero" name="nombre">
                  </div>
                  <div class="form-group">
                    <label for="abreviatura">Abreviatura</label>
                    <input type="text" class="form-control" id="abreviatura" placeholder="ej: por" name="abreviatura">
                  </div>
                  <button type="submit" class="btn btn-default">Guardar</button>
                </form>
             </div>
        </div>
     </div>



      
<?php include ('../layouts/footer.php'); ?>