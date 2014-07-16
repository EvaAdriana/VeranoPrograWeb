<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Continente.php');
      include ('../../controllers/ContinenteController.php');
      include ('../../libs/Er.php');
       include ('../layouts/header.php');
  if (isset($_POST['nombre'])){
    
    $continenteC=new ContinenteController();
    $continenteC->insertaContinente($_POST);

  }
?>
	<br /><br />
	<div class="container">
    	<div class="row" align="center">
             <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
               <h2>Registro Continentes</h2>
                <form role="form" action="" method="POST" align="center" id="formContinente">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre del continente" name="nombre">
                  </div>
                  <button type="submit" class="btn btn-default">Guardar</button>
                </form>
             </div>
        </div>
     </div>



      
<?php include ('../layouts/footer.php'); ?>