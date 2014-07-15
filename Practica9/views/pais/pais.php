<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Pais.php');
      include ('../../controllers/PaisController.php');
      include ('../../libs/Er.php');
       include ('../layouts/header.php');
?>
	<br /><br />
	<div class="container">
    	<div class="row">
            <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
                <form role="form" id="formPais">
                  <h2>Registro Pa&iacute;s</h2>
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre del país" name="nombre">
                  </div>
                  <div class="form-group">
                    <label for="bandera">Bandera</label>
                    <input type="file" id="bandera" name="bandera">
                    <p class="help-block">Seleccione imagen de la bandera</p>
                  </div>
                  <div class="form-group">
                    <label for="id_continente">Continente:</label>
                    <select id="id_continente" name="id_continente" class="form-control" required>
                      <option value="" disabled selected>Seleccionar</option>
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