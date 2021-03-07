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
      	<a href="#">Incio</a>
  	<!-- Modal Trigger -->
      </li>
      <!--ICONS DE NOSOTROS  -->
      <li>
      	<i class="material-icons">location_on</i>
      </li>
      <li>
      	<a href="#">Ubicacion</a>
      </li>
      <!-- ICONS DE BLOG -->
      <li>
      	<i class="material-icons">assignment</i>
      </li>
      <li>
      	<a href="#">Reserva</a>
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
   			<li class="tab col s3"><a id="LINK" class="waves-effect  btn" href="#BEBIDA">BEBIDAS</a></li>
   			<li class="tab col s3"><a id="LINK" class="waves-effect  btn" href="#PROMOCIONES">PROMOCIONES</a></li>
   			<li class="tab col s3"><a id="LINK"class="waves-effect waves-light btn" href="#UBICACION">UBICACION</a></li>
   		</ul>
   	</div>
   </div>
   <!-- aqui se va diseñar los div para los taps -->
   <div id="MENU">
   	<!-- aqui se va diseñar  el card para el menu del dia-->
   <div class="row">
   	<div class="col s12 m7">
   		<div class="card">
   			<div class="card-image">
   				<img src="https://i.pinimg.com/564x/4e/1f/4e/4e1f4e507d49eee89142f399a4b8f806.jpg" alt="foto">
   			</div>
   			<div class="card-content" id="card-content">
   				<p> MENUS DEL DIA Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Aperiam doloribus quas, vel repudiandae provident, laboriosam placeat quasi est quos harum explicabo, iusto eos officia debitis, magni accusamus possimus voluptatem expedita!</p>
   			</div>
   			<div class="card-action">
   				<a id="link" href="#"><i class="material-icons">add</i>Reservar</a>
   			</div>
   		</div>
   	</div>
   </div>
   	<!-- aqui se va diseñar  el card para el menu del dia-->
   </div>
   <div id="UBICACION">
   	   	<!-- aqui se va diseñar  el card para el UBICACION-->
   <div id="APIS ">
   	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d241.33384675583005!2d-90.5211511!3d14.5796037!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2ssv!4v1615137100151!5m2!1ses-419!2ssv" allowfullscreen="" loading="lazy"></iframe>
   	</div>
   </div>
   	<!-- aqui se va diseñar  el card para el UBICACION-->
   </div>
   <div id="BEBIDA">
   	   	<!-- aqui se va diseñar  el card para el BEBIDAS-->
   <div class="row">
   	<div class="col s12 m7">
   		<div class="card">
   			<div class="card-image">
   				<img src="#" alt="foto">
   			</div>
   			<div class="card-content" id="card-content">
   				<p> BEBIDAS Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Aperiam doloribus quas, vel repudiandae provident, laboriosam placeat quasi est quos harum explicabo, iusto eos officia debitis, magni accusamus possimus voluptatem expedita!</p>
   			</div>
   			<div class="card-action">
   				<a id="link" href="#"><i class="material-icons">add</i>Reservar</a>
   			</div>
   		</div>
   	</div>
   </div>
   	<!-- aqui se va diseñar  el card para el BEBIDAS-->
   </div>
   <div id="PROMOCIONES">
   	   	<!-- aqui se va diseñar  el card para el PROMOCIONES-->
   <div class="row">
   	<div class="col s12 m7">
   		<div class="card">
   			<div class="card-image">
   				<img src="#" alt="foto">
   			</div>
   			<div class="card-content" id="card-content">
   				<p> PROMOCIONES Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Aperiam doloribus quas, vel repudiandae provident, laboriosam placeat quasi est quos harum explicabo, iusto eos officia debitis, magni accusamus possimus voluptatem expedita!</p>
   			</div>
   		</div>
   	</div>
   </div>
   	<!-- aqui se va diseñar  el card para el PROMOCIONES-->
   </div>
</body>
<script type="text/javascript" src="/tutorial/js/tabs.js">
	
</script>
<script type="text/javascript" src="/tutorial/js/materialize.min.js"></script>
</html>