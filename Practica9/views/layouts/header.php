<?php 
  define('BASEURL','http://localhost/verano_web/proyecto1');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    </script>
    <script>$(document).ready(
            function(){
                $('#radioEntrenador').click(
                    function(){
                      $('#formJugador').hide('fast');
                      $('#formEntrenador').show(2000);
                    }
                  );
                $('#radioJugador').click(
                    function(){
                      $('#formEntrenador').hide('fast');
                      $('#formJugador').show(2000);
                    }
                  );
            });</script>
    <script type="text/javascript" src="../js/jquery.fancybox.pack.js"></script>
    <link href="../css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />    
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet" />
    <!--<link  href="../css/style.css" rel="stylesheet" >-->
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
    <!--<script src="../js/jquery-1.10.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
          <!-- Required JS -->
    <script src="../js/moment.min.js"></script>
    <script src="../js/bootstrap-datetimepicker.min.js"></script>
    <script src="../js/jquery.raty.min.js"></script>

    <!--<link href="../css/offcanvas.css" rel="stylesheet">-->
    <title>Proyecto 1</title>
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="menu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Programación Web</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" id="menu2">
            <li class="active" id="menu3" ><a href="../equipo/equipo.php">Equipo</a></li>
            <li class="active"><a href="../continente/continente.php">Continente</a></li>
            <li class="active"><a href="../estadio/estadio.php">Estadio</a></li>
            <li class="active"><a href="../integrante/integrante.php">Integrante</a></li>
            <li class="active"><a href="../pais/pais.php">Pais</a></li>
            <li class="active"><a href="../posicion/posicion.php">Posicion</a></li>
         </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
              <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
          </ul>
          

        </div><!--/.nav-collapse -->
      </div>
    </div>
    <br><br><br>
    <div class="container theme-showcase" role="main">

