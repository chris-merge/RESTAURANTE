<!DOCTYPE html>
<html lang="en">
<head>
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
   			<li class="tab col s3"><a id="LINK" class="waves-effect  btn" href="#MENU">MENU DEL DIA</a></li>
   			<li class="tab col s3"><a  id="LINK" class="waves-effect  btn" href="#BEBIDA">BEBIDAS</a></li>
   			<li class="tab col s3"><a id="LINK" class="waves-effect  btn" href="#PROMOCION">PROMOCIONES</a></li>
   			<li class="tab col s3"><a id="LINK"class="waves-effect waves-light btn" href="#GPS">UBICACION</a>
        </li>
   		</ul>
   	</div>
   </div>
   <!-- aqui se va diseñar los div para los taps -->
    <div id="MENU">
   <?php
    $x=1;
   while ( $x<=count($menu)) {
     # code...
//   	<!-- aqui se va diseñar  el card para el menu del dia-->
   echo '<div class="row">';
   	echo '<div class="col s12 m7">';
   		echo '<div class="card">';
   			echo '<div class="card-image">';
   			echo '<img src="https://i.pinimg.com/564x/4e/1f/4e/4e1f4e507d49eee89142f399a4b8f806.jpg" alt="foto"';
   			echo '</div>';
   			echo '<div class="card-content" id="card-content">';
        //aqui se ocupa el arrar de todo

          foreach ($menu as $Menu) {
            # code...
            if ($Menu->id_menu==$x) {
              # code...
               echo "<p>";
            echo $Menu->nombre;
            echo "</p>";
            echo "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure magnam dicta eius commodi facere suscipit eos fugit optio debitis impedit. Dolores odio sit sint, sed ipsum non facere totam quasi.</p>";
            }

          }
          
   			echo"</div>";
   			echo '<div class="card-action">';
   echo'<a id="link" href="<?php echo base_url("Home/reservaciones"); ?>"><i class="material-icons">add</i>Reservar</a>';
   			echo "</div>";
   		echo "</div>";
   	echo "</div>";
   echo "</div>";
   	//<!-- aqui se va diseñar  el card para el menu del dia-->
   echo "</div>";
   $x++;
   }
   ?>
   </div>
   <div id="GPS">
   	   	<!-- aqui se va diseñar  el card para el UBICACION-->
   <div>
   	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d241.33384675583005!2d-90.5211511!3d14.5796037!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2ssv!4v1615137100151!5m2!1ses-419!2ssv" allowfullscreen="" loading="lazy"></iframe>
   	</div>
   </div>
   	<!-- aqui se va diseñar  el card para el UBICACION-->
   
   <div id="BEBIDA">
   	   	<!-- aqui se va diseñar  el card para el BEBIDAS-->
        <?php
        $x=1;
       while ($x <= count($bebida)) {
         # code...
       
         # code...
    echo '<div class="row">';
    echo '<div class="col s12 m7">';
      echo '<div class="card">';
        echo '<div class="card-image">';
        echo '<img src="https://i.pinimg.com/564x/4e/1f/4e/4e1f4e507d49eee89142f399a4b8f806.jpg" alt="foto"';
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
   echo "</div>";
      
      $x++;
      }
    ?>
   </div>
   	<!-- aqui se va diseñar  el card para el BEBIDAS-->
   </div>
   <div id="PROMOCION">
   	   	<!-- aqui se va diseñar  el card para el PROMOCIONES-->
        <?php
        $x=1;
   # code...
 while ($x <= count($promociones)) {
   # code...
 
   echo '<div class="row">';
   	echo '<div class="col s12 m7">';
   		echo '<div class="card">';
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
<script type="text/javascript" src="/tutorial/js/tabs.js">
	
</script>
<script type="text/javascript" src="/tutorial/js/materialize.min.js"></script>
</html>