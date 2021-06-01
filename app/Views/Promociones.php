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
	<div id="PROMOCION">
   	   	<!-- aqui se va diseñar  el card para el PROMOCIONES-->
        <?php
        $x=1;
   # code...
 while ($x <= count($promociones)) {
   # code...
 
   echo '<div class="row">';
   	echo '<div class="col s12 m7">';
   		echo '<div id="card_contenedor" class="card">';
   			echo '<div class="card-image">';
   				echo '<img src="#" alt="foto">';
   			echo '</div>';
   			echo '<div class="card-content" id="card-content">';
        foreach ($promociones as $Promo) {
          # code...
          echo "<p>";
        echo $Promo->Platillo;
        echo "<br>";
        echo $Promo->Bebida;
        echo "<br>";
        echo $Promo->Descripcion;
        echo "<br>";
        echo "$".$Promo->Precio; 
          echo "</p>";
          echo "<br>";
   				echo '<p> PROMOCIONES Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Aperiam doloribus quas, vel repudiandae provident, laboriosam placeat quasi est quos harum explicabo, iusto eos officia debitis, magni accusamus possimus voluptatem expedita!</p>';
          }
   			echo '</div>';
   		echo '</div>';
   	echo '</div>';
   echo '</div>';

$x++;
   }
    ?>
   	<!-- aqui se va diseñar  el card para el PROMOCIONES-->
   </div>
	
</body>
</html>