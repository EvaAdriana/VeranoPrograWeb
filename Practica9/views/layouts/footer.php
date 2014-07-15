 
	 <div class="row">
	 	
	 	<div class="col-md-12">
	 		<hr>
	 		<p class="text-center">
	 			
	 			Clase programación web. <br><span class="glyphicon glyphicon-registration-mark"> </span> <?php echo date('Y'); ?>
	 			
	 		</p>
	 	</div>	
	 	
	 </div>
<script type="text/javascript">
        $(document).ready(function() {
           
           $('#form_equipo').bootstrapValidator({
               
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 3,
                        max: 45,
                         message: 'De 3 a 45 caracteres'
                    }
                }
            },
            idpais: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    }
                }
            },
             escudo: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    file: {
                            extension: 'jpeg,png,jpg',
                            type: 'image/jpeg,image/png,image/jpg',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'Archivo no valido'
                        }
                }
            }

        }
    });
    });</script>
 </div> <!-- /container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  <script src="../js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>
  </body>
</html>