 
	 <div class="row">
	 	
	 	<div class="col-md-12">
	 		<hr>
	 		<p class="text-center">
	 			
	 			Programación web. <br> Instituto Tecnologico de Celaya. <br><?php echo date('Y'); ?>
	 			
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
    <script type="text/javascript">
        $(document).ready(function() {
           
           $('#formContinente').bootstrapValidator({
               
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
            }
        }
    });
    });</script>
    <script type="text/javascript">
        $(document).ready(function() {
           
           $('#formEstadio').bootstrapValidator({
               
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
            Nombre: {
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
            }
        }
    });
    });</script>
    <script>
      $(document).ready(function() {
          $('#formIntegrante').bootstrapValidator({
                  // Only disabled elements are excluded
                  // The invisible elements belonging to inactive tabs must be validated
                  excluded: [':disabled'],
                  feedbackIcons: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },
                  fields: {
                      nombre: {
                          validators: {
                              notEmpty: {
                                  message: 'El nombre es requerido.'
                              }
                          }
                      },
                      id_pais: {
                          validators: {
                              notEmpty: {
                                  message: 'El pais es necesario'
                              }
                          }
                      },
                      apellido: {
                          validators: {
                              notEmpty: {
                                  message: 'El apellido es requerido.'
                              }
                          }
                      },
                      peso: {
                          validators: {
                              integer: {
                                  message: 'solo enteros'
                              }
                          }
                      },
                      estatura: {
                          validators: {
                              integer: {
                                  message: 'solo enteros'
                              }
                          }
                      },
                      edad: {
                          validators: {
                              integer: {
                                  message: 'solo enteros'
                              }
                          }
                      },
                      foto: {
                          validators: {
                              file: {
                                    extension: 'jpeg,png,jpg',
                                    type: 'image/jpeg,image/png,image/jpg',
                
                                    message: 'Archivo no valido'
                              }
                          }
                      },
                      id_equipo: {
                          validators: {
                              integer: {
                                  message: 'El pais es necesario'
                              }
                          }
                      },
                      numero: {
                          validators: {
                              integer: {
                                  message: 'El numero es necesario'
                              }
                          }
                      },



                      id_posicion: {
                          validators: {
                              notEmpty: {
                                  message: 'La posicion es necesario'
                              }
                          }
                      },
                      id_pais: {
                          validators: {
                              notEmpty: {
                                  message: 'La posicion es necesario'
                              }
                          }
                      },
                  }
              });
      });
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
           
           $('#formPais').bootstrapValidator({
               
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
            bandera: {
                          validators: {
                              file: {
                                    extension: 'jpeg,png,jpg',
                                    type: 'image/jpeg,image/png,image/jpg',
                
                                    message: 'Archivo no valido'
                              }
                          }
                      },
            id_continente: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            }
        }
    });
    });</script>
     <script>
$(document).ready(function() {
    $('#formPosicion').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'El pais es necesario'
                    }
                }
            },
            abreviatura: {
                validators: {
                    notEmpty: {
                        message: 'La abreviatura es requerida'
                    },
                    stringLength: {
                        min: 3,
                        max: 3,
                         message: 'Debe contener 3 caracteres'
                    }
                }
            },
        }
    });
});
</script>
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