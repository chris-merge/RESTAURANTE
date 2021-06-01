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
	 <div id="GPS">
   	   	<!-- aqui se va diseñar  el card para el UBICACION-->
   <div>
   	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d241.33384675583005!2d-90.5211511!3d14.5796037!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2ssv!4v1615137100151!5m2!1ses-419!2ssv" allowfullscreen="" loading="lazy"></iframe>
   	</div>
   </div>
   	<!-- aqui se va diseñar  el card para el UBICACION-->
</body>
</html>