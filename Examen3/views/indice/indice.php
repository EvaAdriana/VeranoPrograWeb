<?php 
  session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Indice.php');
      include ('../../controllers/IndiceController.php');
      include ('../../libs/Er.php');
  include ('../layouts/header.php');
  if (isset($_POST['titulo'])){
    
    $indiceC=new IndiceController();
    $indiceC->insertaIndice($_POST);

  }

 ?>
	<br /><br />
	<div class="container">
    	<div class="row">
             <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
                <h2>Registro Indice</h2>
                <form role="form" id="formIndice" method="POST">
                  <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo">
                  </div>
                  <div class="form-group">
                    <label for="numero">Numero</label>
                    <input type="text" class="form-control" id="numero"  name="numero">
                  </div>
                  <div class="form-group">
                    <label for="id_revista">Id revista</label>
                    <select id="id_revista" name="id_revista" class="form-control" required>
                        <option value="" disabled selected>Seleccionar ID Revista</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                  </div>
                 <input type="submit" clase="btn btn-default" value="Guardar"/>
                </form>
             </div>
        </div>
     </div>
      
<?php include ('../layouts/footer.php'); ?>