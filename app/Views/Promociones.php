<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- referencias de css de materializa-->
	<link rel="stylesheet" type="text/css" href="/tutorial/css/materialize.css" media="screen,projection"/>
    <!--  referencias a la hoja de stilos personalizada -->
     <link rel="stylesheet" type="text/css" href="/tutorial/css/Estilo_index.css" media="screen,projection"/>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
     <script type="text/javascript" src="/tutorial/js/materialize.js"></script>
</head>
<body>
	   <!-- tabs para navegar entre las bebidas, promociones, menu del dia --> 
   <div class="row">
   	<div class="col s12">
   		<ul class="tabs">
   			<li class=" col s3"><a id="LINK" class="waves-effect  btn" href="<?php echo base_url('/Home/Menus')?>">MENU DEL DIA</a></li>
   			<li class=" col s3"><a  id="LINK" class="waves-effect  btn" href="<?php echo base_url('/Home/Bebidas_listas')?>">BEBIDAS</a></li>
        
   			<li class=" col s3"><a id="LINK" class="waves-effect  btn" href="<?php echo base_url('/Home/Promociones_Vista')?>">PROMOCIONES</a></li>
   			<li class=" col s3"><a id="LINK"class="waves-effect waves-light btn" href="<?php echo base_url('/Home/Ubicacion_GPS')?>">UBICACION</a>
        </li>
   		</ul>
   	</div>
   </div>
   <!-- aqui se va diseñar los div para los taps -->

   <!--TARJETA PARA MOSTRAR EL MENU -->
    <div id="PROMOCION">
      <!--TARJETA PARA MOSTRAR EL MENU -->
 <?php 
 //mostrar el dia
 date_default_timezone_set('UTC');
 $dia=date("D"); 
 //inicio del while
 $x=1;

 while ($x<=count($promociones)) {
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
 echo ' <span class="card-title">'.$dia.'</span>';
 //cierre del div de imagen (div 4)//
 echo ' </div>';
  //contenedor de la tarjeta //
 echo ' <div id="card-content" class="card-content">';
 //recorrer la lista de la base de datos
 foreach ($promociones as $Promo) {
   // code..
    // code...
        echo $Promo->Platillo;
        echo "<br>";
        echo $Promo->Bebida;
        echo "<br>";
        echo $Promo->Descripcion;
        echo "<br>";
        echo "$".$Promo->Precio; 
        echo "</p>";
        echo "<br>";
 echo ' <p> Detalles I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>';
}
 echo ' </div>';
 echo ' <div class="card-action">';
 echo ' <a href="#">This is a link</a>';
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
</html>