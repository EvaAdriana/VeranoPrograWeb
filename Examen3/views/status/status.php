<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Status.php');
      include ('../../controllers/StatusController.php');
      include ('../../libs/Er.php');
       include ('../layouts/header.php');
   if (isset($_POST['status'])){
    
    $statusC=new StatusController();
    $statusC->insertaStatus($_POST);

  }
?>
	<br /><br />
	<div class="container">
    	<div class="row">
            <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
                <form role="form" id="formStatus" method="POST">
                  <h2>Registro Status</h2>
                  <div class="form-group">
                    <label for="status">Nombre Status</label>
                    <input type="text" class="form-control" id="status" name="status">
                  </div>
                
                   <input type="submit" clase="btn btn-default" value="Guardar"/>
                </form>
             </div>
        </div>
     </div>



      
<?php include ('../layouts/footer.php'); ?>