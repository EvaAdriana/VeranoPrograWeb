<?php
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Revista.php');
      include ('../../controllers/RevistaController.php');
      include ('../../libs/Er.php');
       include ('../layouts/header.php');
    if (isset($_POST['nombre'])){
    
    $revistaC=new RevistaController();
    $revistaC->insertaRevista($_POST,$_FILES);

  }
?>

     <div class="row" align="center"><!--inicio de renglon-->
      <div class="col-md-4"></div>
        <div class="col-md-4" align="center">
              <h2 align="center">Revista</h2>
              
              <!--Inicia form-->
          <form action="" id="formRevista" method="POST" enctype="multipart/form-data" align="center">
                        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" class="form-control" name="nombre" required>
          </div>
          <div class="form-group">
            <label for="portada">Portada</label>
            <input type="file" id="portada" class="form-control" name="portada" required>
           </div> 
          <div class="form-group">
             <label for="fecha">Fecha de publicacion</label>
             <div class='input-group date' id='datetimepicker1'>
                    <input type='text' id="fecha" name="fecha" class="form-control" required/>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
              </div>
          </div> 
          <div class="form-group">
            <label for="volumen">Volumen</label>
            <input type="text" id="volumen" class="form-control" name="volumen" required>
          </div> 
          <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
          </div> 
          <div class="form-group">
            <label for="subtitulo">Subtitulo</label>
            <input type="text" id="subtitulo" class="form-control" name="subtitulo" required>           
          </div> 
          <div class="form-group">
            <label for="id_club">Club</label>
            <input type="text" id="id_club" class="form-control" name="id_club" required>
          </div> 
          <div class="form-group">
            <label for="numero">Numero</label>
            <input type="text" id="numero" class="form-control" name="numero" required>
          </div> 
          <div class="form-group">
            <label for="clave">Clave</label>
            <input type="text" id="clave" class="form-control" name="clave" required>
          </div> 
          <div class="form-group">
            <label for="directorio">Directorio</label>
            <textarea type="text" id="directorio" class="form-control" name="directorio" ></textarea>
          </div> 
          <div class="form-group">
            <label for="editorial">Editorial</label>
            <textarea type="text" id="editorial" class="form-control" name="editorial" ></textarea>
          </div> 
           <div class="form-group">
                    <label for="id_status">Id Status</label>
                    <select id="id_status" name="id_status" class="form-control" required>
                        <option value="" disabled selected>Seleccionar ID Status</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                  </div>
                 
          <div class="form-group">
            <input align="rigth" type="submit" clase="btn btn-default" value="Guardar">   
          </div> 
                </form>
            <!--fin de form-->
         </div>             
    </div><!--fin de renglon-->

<?php include ('../layouts/footer.php'); ?>
 
