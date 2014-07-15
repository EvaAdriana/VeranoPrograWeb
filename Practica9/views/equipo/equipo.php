<?php
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Equipo.php');
      include ('../../controllers/EquipoController.php');
      include ('../../libs/Er.php');
       include ('../layouts/header.php');
    if (isset($_POST['nombre'])){
    
    $equipoC=new EquipoController();
    $equipoC->insertaEquipo($_POST);

  }
?>

     <div class="row" align="center"><!--inicio de renglon-->
      <div class="col-md-4"></div>
        <div class="col-md-4" align="center">
              <h2 align="center">Registro de Equipo</h2>
              
              <!--Inicia form-->
                <form action="" id="form_equipo" method="POST" align="center">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Enter nombre">
                        </div>
                        <div class="form-group">
                            <label for="idpais">Pais:</label>
                            <select class="form-control" name="idpais" placeholder="Enter Pais">
                              <option value=""></option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                        </div> 
                        <div class="form-group">
                              <label for="escudo">Escudo:</label>
                              <input type="file" name="escudo" id="escudo">
                              <p class="help-block">Selecciona una imagen para agregar.</p>
                        </div>
                        <div class="form-group">
                           <input type="submit" clase="btn btn-default" value="Guardar"/>
                        </div>
                </form>
            <!--fin de form-->
         </div>             
    </div><!--fin de renglon-->

<?php include ('../layouts/footer.php'); ?>
 
