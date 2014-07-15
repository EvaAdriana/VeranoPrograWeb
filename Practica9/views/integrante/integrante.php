<?php 
  session_start();
   include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Integrante.php');
      include ('../../controllers/IntegranteController.php');
      include ('../../libs/Er.php');
  include ('../layouts/header.php');
  if (isset($_POST['nombre'])){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
?>
	<br /><br />
	<div class="container">
      <form role="form" id="formIntegrante">
    	   <div class="row">
            <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
                <h2>Registro Integrantes</h2>
              
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre del integrante" name="nombre">
                  </div>
                  <div class="form-group">
                    <label for="apellido">Apellido(s)</label>
                    <input type="text" class="form-control" id="apellido" placeholder="Apellido(s) del integrante" name="apellido">
                  </div>
                  <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="text" class="form-control" id="peso" placeholder="Peso en Kg" name="peso">
                  </div>
                  <div class="form-group">
                    <label for="estatura">Estatura</label>
                    <input type="text" class="form-control" id="estatura" placeholder="Estatura en metros" name="estatura">
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" id="foto" name="foto">
                    <p class="help-block">Foto del integrante del Equipo</p>
                  </div>
                  <div class="form-group">
                    <label for="Edad">Edad</label>
                    <input type="number" class="form-control" id="Edad" name="Edad">
                  </div>
                   <div class="form-group">
                      <label for="id_equipo">Equipo:</label>
                      <select id="id_equipo" name="id_equipo" class="form-control" required>
                        <option value="" disabled selected>Seleccionar Equipo</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  <div class="form-group">
                        <div class="radio">
                            <label>
                              <input type="radio" name="optionsRadios1" id="radioJugador" value="jugador">
                              Jugador
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                              <input type="radio" name="optionsRadios1" id="radioEntrenador" value="entrenador">
                              Entrenador
                            </label>
                        </div>
                  </div>
                
             </div>
        </div>
        <div class="row" id="formJugador" style="display:none">
         <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
                <h3>Jugador</h3>
              <div class="form-group">
                <label for="numero">N&uacute;mero</label>
                <input type="number" class="form-control" id="numero" placeholder="Número de la playera" name="numero">
              </div>
              <div class="form-group">
                <label for="id_posicion">Posici&oacute;n:</label>
                <select id="id_posicion" name="id_posicion" class="form-control" required>
                  <option value="" disabled selected>Seleccionar</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
          </div>
          </div>
          <div class="row" id="formEntrenador" style="display:none">
           <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
          <h3>Entrenador</h3>
              <div class="form-group">
                <label for="idpais">Pa&iacute;s</label>
                <input type="text" class="form-control" id="idpais" placeholder="Nacionalidad del entrenador" name="idpais">
              </div>
          </div>
          </div>
          <div class="row">
           <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
            <input type="submit" clase="btn btn-default" value="Guardar"/>
          </div>
          </div>
          </form>
     </div>
     



      
<?php include ('../layouts/footer.php'); ?>