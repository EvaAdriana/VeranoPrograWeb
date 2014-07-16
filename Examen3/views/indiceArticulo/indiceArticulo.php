<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/IndiceArticulo.php');
      include ('../../controllers/IndiceArticuloController.php');
      include ('../../libs/Er.php');
       include ('../layouts/header.php');
  if (isset($_POST['id_indice'])){
    
    $indiceArticuloC=new IndiceArticuloController();
    $indiceArticuloC->insertaIndiceArticulo($_POST);

  }
?>
	<br /><br />
	<div class="container">
    	<div class="row" align="center">
             <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
               <h2>Indice Articulo</h2>
                <form role="form" action="" method="POST" align="center" id="formIndiceArticulo">
                  <div class="form-group">
                    <label for="id_indice">Id indice</label>
                    <select id="id_indice" name="id_indice" class="form-control" required>
                        <option value="" disabled selected>Seleccionar ID Indice</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="id_articulo">Id articulo</label>
                    <select id="id_articulo" name="id_articulo" class="form-control" required>
                        <option value="" disabled selected>Seleccionar ID Articulo</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="numero">Numero</label>
                    <input type="text" class="form-control" id="numero" name="numero">
                  </div>
                  <button type="submit" class="btn btn-default">Guardar</button>
                </form>
             </div>
        </div>
     </div>



      
<?php include ('../layouts/footer.php'); ?>