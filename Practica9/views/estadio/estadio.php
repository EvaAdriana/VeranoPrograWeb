<?php 
  session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Estadio.php');
      include ('../../controllers/EstadioController.php');
      include ('../../libs/Er.php');
  include ('../layouts/header.php');
  if (isset($_POST['Nombre'])){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
?>
	<br /><br />
	<div class="container">
    	<div class="row">
             <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
                <h2>Registro Estadio</h2>
                <form role="form" id="formEstadio">
                  <div class="form-group">
                    <label for="Nombre">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" placeholder="Nombre del estadio" name="Nombre">
                  </div>
                 <input type="submit" clase="btn btn-default" value="Guardar"/>
                </form>
             </div>
        </div>
     </div>
      
<?php include ('../layouts/footer.php'); ?>