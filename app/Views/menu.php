<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
		<link type="text/css" rel="stylesheet" href="/tutorial/css/materialize.min.css"  media="screen,projection"/>
	<!-- Refrencias de libreria  de materialize -->
    <link rel="stylesheet" type="text/css" href="/tutorial/css/materialize.css" media="screen,projection"/>
    <!--  Link de Materialize -->
       <link rel="stylesheet" type="text/css" href="/tutorial/css/Estilo_index.css" media="screen,projection"/>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
     <script type="text/javascript" src="/tutorial/js/materialize.js"></script>
</head>
<body>
	<nav id="navegacion" >
    <div class="nav-wrapper">
      <ul class="right hide-on-med-and-down">
      	<!-- ICONO  -->
      	<li>
      		<i class="material-icons">home</i>
      	</li>
      	<!-- LINK PARA REGRESAR EL INICIO -->
      <li>
      	<a href="<?php echo base_url('/Home/Menu') ?>">Incio</a>
  	<!-- Modal Trigger -->
      </li>
      <li>
      	<i class="material-icons">assignment</i>
      </li>
      <li>
      	<a href="<?php echo base_url('/Home/reservaciones') ?>">Reserva</a>
      </li>
      <!-- ICOS DE CONTACTO -->
      <li>
      	<i class="material-icons">exit_to_app</i>
      </li>
      <li>
      	<a href="#">salir</a>
      </li>
      </ul>
    </div>
  </nav>
 <!---->

 <div class="container section" id="Container">
 <div class="carousel carousel-slider" >
    <a class="carousel-item" href="#one!">
    	<img src="https://i.pinimg.com/originals/17/1f/a0/171fa0c79d7dfbb5ed4167fc8675de56.png">
    </a>
    <a class="carousel-item" href="#two!">
    	<img src="https://render.fineartamerica.com/images/rendered/default/print/4.5/8/break/images-medium-5/3600-peter-holme-iii.jpg">
    </a>
    <a class="carousel-item" href="#three!">
    	<img src="https://i.pinimg.com/564x/4e/1f/4e/4e1f4e507d49eee89142f399a4b8f806.jpg">
    </a>
    <a class="carousel-item" href="#five!">
    <img src="https://i.pinimg.com/564x/de/d7/1a/ded71a7ef28c69ad5cfcd8c69c562031.jpg">
    </a>
  </div>
   </div> 
   <!-- tabs para navegar entre las bebidas, promociones, menu del dia --> 
   <div class="row">
   	<div class="col s12">
   		<ul class="tabs">
   			<li id="LI" class=" col s3"><a id="LINK" class="waves-effect  btn" href="<?php echo base_url('/Home/Menus')?>">MENU DEL DIA</a></li>
   			<li id="LI" class=" col s3"><a  id="LINK" class="waves-effect  btn" href="<?php echo base_url('/Home/Bebidas_listas')?>">BEBIDAS</a></li>
        
   			<li id="LI" class=" col s3"><a id="LINK" class="waves-effect  btn" href="<?php echo base_url('/Home/Promociones_Vista')?>">PROMOCIONES</a></li>
   			<li id="LI" class=" col s3"><a id="LINK"class="waves-effect waves-light btn" href="<?php echo base_url('/Home/Ubicacion_GPS')?>">UBICACION</a>
        </li>
   		</ul>
   	</div>
   </div>
    <!-- tabs para navegar entre las bebidas, promociones, menu del dia --> 
  <div id="MENU">
  
 <!--TARJETA PARA MOSTRAR EL MENU -->
 <?php 
 //inicio del while
 $dia=date('D');
 $x=1;
 while ($x<=count($menu)) {
   // code...
  //primer div//
 echo ' <div class="row">';
 //segundo div//
 echo ' <div id="card_contenedor" class="col s12 m7">';
 //tercer div//
 echo ' <div class="card">';
 //cuarto div//
 echo ' <div class="card-image">';
 //imagen//
 echo ' <img id="imag_card" src="https://i.pinimg.com/564x/de/d7/1a/ded71a7ef28c69ad5cfcd8c69c562031.jpg">';
 echo ' <span class="card-title">MENU DEL DIA '.$dia.'</span>';
 //cierre del div de imagen (div 4)//
 echo ' </div>';
  //contenedor de la tarjeta //
 echo ' <div id="card-content" class="card-content">';
 //recorrer la lista de la base de datos
 foreach ($menu as $Menu) {
   // code...
  //if para ver el id existe
  if ($Menu->id_menu==$x) {
    // code...
 echo "<p>";
 echo $Menu->nombre;
 echo "</p>";
 echo ' <p> Detalles I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>';
}
//fin del
}
 echo ' </div>';
 echo ' <div class="card-action">';
 echo '<a href="/reservaciones">This is a link</a>';
 echo ' </div>';
 echo ' </div>';
 echo ' </div>';
 echo ' </div>';
$x++;
 }
    ?>
<!--TARJETA PARA MOSTRAR EL MENU -->
    </div>

</body>
<script type="text/javascript" src="/tutorial/js/tabs.js">
	
</script>
<script type="text/javascript" src="/tutorial/js/materialize.min.js"></script>
</html>