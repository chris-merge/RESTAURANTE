<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bebidas</title>
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
   

	<div id="BEBIDA">
   	   	<!-- aqui se va diseñar  el card para el BEBIDAS-->
        <?php
        $x=1;
       while ($x <= count($bebida)) {
         # code...
       
         # code...
    echo '<div class="row">';
    echo '<div class="col s12 m7">';
      echo '<div id="card_contenedor" class="card">';
        echo '<div class="card-image">';
        echo '<img src="https://i.pinimg.com/564x/4e/1f/4e/4e1f4e507d49eee89142f399a4b8f806.jpg" alt="foto"/>';
        echo '</div>';
        echo '<div class="card-content" id="card-content">';
        //aqui se ocupa el arrar de todo
          foreach ($bebida as $Bebida) {        
              # code...
            if ($Bebida->Id_bebida==$x) {
              # code...
            echo "<p>";
            echo $Bebida->nombre;
            echo "</p>";
            echo "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure magnam dicta eius commodi facere suscipit eos fugit optio debitis impedit. Dolores odio sit sint, sed ipsum non facere totam quasi.</p>";
            }
            //fin del if
            }
          
        echo"</div>";
        echo '<div class="card-action">';
   echo'<a id="link" href="<?php echo base_url("Home/reservaciones"); ?>"><i class="material-icons">add</i>Reservar</a>';
        echo "</div>";
      echo "</div>";
    echo "</div>";
   echo "</div>";
    //<!-- aqui se va diseñar  el card para el menu del dia-->
      
      $x++;
      }
    ?>
   </div>
   	<!-- aqui se va diseñar  el card para el BEBIDAS-->
  
	
</body>
</html>