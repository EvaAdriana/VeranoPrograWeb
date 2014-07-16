<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Autor.php');
      include ('../../controllers/AutorController.php');
      include ('../../libs/Er.php');
       include ('../layouts/header.php');
   if (isset($_POST['nombre'])){
    
    $autorC=new AutorController();
    $autorC->insertaAutor($_POST);

  }
?>
	<br /><br />
	<div class="container">
    	<div class="row">
            <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
                <form role="form" id="formAutor" method="POST">
                  <h2>Registro Autor</h2>
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                  </div>
                  <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos"  name="apellidos">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                  </div>
                
                   <input type="submit" clase="btn btn-default" value="Guardar"/>
                </form>
             </div>
        </div>
     </div>



      
<?php include ('../layouts/footer.php'); ?>