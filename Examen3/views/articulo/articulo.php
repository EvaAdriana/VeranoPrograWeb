<?php 
  session_start();
   include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Articulo.php');
      include ('../../controllers/ArticuloController.php');
      include ('../../libs/Er.php');
  include ('../layouts/header.php');
   if (isset($_POST['nombre'])){
    
    $articuloC=new ArticuloController();
    $articuloC->insertaArticulo($_POST);

  }

  ?>
	<br /><br />
	<div class="container">
      <form role="form" id="formArticulo" method="POST">
    	   <div class="row">
            <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
                <h2>Registro Articulo</h2>
              
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                  </div>
                  <div class="form-group">
                    <label for="resumen">Resumen</label>
                      <textarea type="text" id="resumen" class="form-control" name="resumen" ></textarea>                  
                  </div>
                  <div class="form-group">
                    <label for="abstract">Abstract</label>
                      <textarea type="text" id="abstract" class="form-control" name="abstract" ></textarea>                  
                  </div>
                  <div class="form-group">
                    <label for="introduccion">Introduccion</label>
                      <textarea type="text" id="introduccion" class="form-control" name="introduccion" ></textarea>                  
                  </div>
                  <div class="form-group">
                    <label for="metodologia">Metodologia</label>
                      <textarea type="text" id="metodologia" class="form-control" name="metodologia" ></textarea>                  
                  </div>
                  <div class="form-group">
                    <label for="contenido">Contenido</label>
                      <textarea type="text" id="contenido" class="form-control" name="contenido" ></textarea>                  
                  </div>
                  <div class="form-group">
                     <label for="fecha_creacion">Fecha de creacion</label>
                     <div class='input-group date' id='datetimepicker2'>
                            <input type='text' id="fecha_creacion" name="fecha_creacion" class="form-control" required/>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
                      </div>
                  </div> 
                  <div class="form-group">
                    <label for="archivo_pdf">Archivo PDF</label>
                    <input type="file" id="archivo_pdf" name="archivo_pdf">
                    <p class="help-block">Solo archivos .pdf</p>
                  </div>
                   <div class="form-group">
                      <label for="id_status">ID Statusid_status</label>
                      <select id="id_status" name="id_status" class="form-control" required>
                        <option value="" disabled selected>Seleccionar ID Estatus</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                     <div class="form-group">
                    <label for="concluciones">Concluciones</label>
                      <textarea type="text" id="concluciones" class="form-control" name="concluciones" ></textarea>                  
                  </div>
                   <div class="form-group">
                    <label for="referencias">Referencias</label>
                      <textarea type="text" id="referencias" class="form-control" name="referencias" ></textarea>                  
                  </div>
                   <div class="form-group">
                    <input align="rigth" type="submit" clase="btn btn-default" value="Guardar">   
                  </div> 
                  
             </div>
        </div>
          </form>
     </div>
     



      
<?php include ('../layouts/footer.php'); ?>