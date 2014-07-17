 
	 <div class="row">
	 	
	 	<div class="col-md-12">
	 		<hr>
	 		<p class="text-center">
	 			
	 			Programación web. <br> Instituto Tecnologico de Celaya. <br><?php echo date('Y'); ?>
	 			
	 		</p>
	 	</div>	
	 	
	 </div>

 </div> <!-- /container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../js/moment.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.js"></script>
    <script src="../js/main.js"></script>
  <script src="../js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>
  <script type="text/javascript">
        $(document).ready(function() {
           
           $('#datetimepicker1').datetimepicker({
                       language: 'es'
                });
           $('#formRevista').bootstrapValidator({
               
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
            numero: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 1,
                        max: 10,
                         message: 'De 10 a 45 caracteres'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                       message: 'Ingrese solo valores numericos'
                    }
                }
            },
            clave: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 3,
                        max: 45,
                        message: 'De 3 a 45 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                       message: 'La clave solo puede tener letras, numeros y guion bajo'
                    }
                }
            },
            volumen: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 1,
                        max: 5,
                         message: 'De 1 a 5 caracteres'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                       message: 'El volumen solo puede tener numeros'
                    }
                }
            },
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            portada: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                     file: {
                            extension: 'jpeg,png,jpg',
                            type: 'image/jpeg,image/png,image/jpg',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'Archivo no valido'
                        }
                }
            },
            titulo: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            subtitulo: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            club: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            }
          
        }
    });
    });</script>
     <script type="text/javascript">
        $(document).ready(function() {
     
           $('#datetimepicker2').datetimepicker({
                       language: 'es'
                });
           $('#formArticulo').bootstrapValidator({
               
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
                        min: 10,
                        max: 500,
                         message: 'De 10 a 500 caracteres'
                    }
                }
            },
            resumen: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    }
                }
            },
            abstract: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            introduccion: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            metodologia: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            contenido: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            fecha_creacion: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            conclusiones: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            agradecimientos: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            referencias: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            id_status: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
              archivo_pdf: {
                    validators: {
                        file: {
                            extension: 'pdf',
                            message: 'Solo archivos .pdf'
                        }
                    }
                }
          
        }
    });
    });</script>

     <script type="text/javascript">
        $(document).ready(function() {
    
         
           $('#formAutor').bootstrapValidator({
               
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
                        min: 10,
                        max: 100,
                         message: 'De 10 a 100 caracteres'
                    }
                }
            },
            apellidos: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 10,
                        max: 200,
                         message: 'De 10 a 200 caracteres'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'El email es requerido'
                    },
                    emailAddress: {
                        message: 'Este no es un email valido'
                    }
                }
            }
          
        }
    });
    });</script>
     <script type="text/javascript">
        $(document).ready(function() {
    
         
           $('#formIndice').bootstrapValidator({
               
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
            titulo: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 10,
                        max: 100,
                         message: 'De 10 a 100 caracteres'
                    }
                }
            },
            numero: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                      regexp: {
                        regexp: /^[0-9]+$/,
                       message: 'Solo numeros'
                    }
                }
            },
            id_revista: {
                validators: {
                    notEmpty: {
                        message: 'El email es requerido'
                    }
                }
            }
          
        }
    });
    });</script>
    <script type="text/javascript">
        $(document).ready(function() {
    
         
           $('#formIndiceArticulo').bootstrapValidator({
               
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
          
            numero: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                      regexp: {
                        regexp: /^[0-9]+$/,
                       message: 'Solo numeros'
                    }
                }
            },
            id_articulo: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                      regexp: {
                        regexp: /^[0-9]+$/,
                       message: 'Solo numeros'
                    }
                }
            },
        id_indice: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                      regexp: {
                        regexp: /^[0-9]+$/,
                       message: 'Solo numeros'
                    }
                }
            }
          
        }
    });
    });</script>
      <script type="text/javascript">
        $(document).ready(function() {
    
         
           $('#formStatus').bootstrapValidator({
               
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
          
            status: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    }
                      
                }
            }
          
        }
    });
    });</script>
  </body>
</html>