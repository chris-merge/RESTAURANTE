<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Bienvenido A Restaurante Chocolo</title>
	 <link type="text/css" rel="stylesheet" href="/Restaurante/css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="/Restaurante/css/materialize.min.css" media="screen,projection"/>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<!--navar del menu-->
	 <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><i class="material-icons">copyright</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url()?>/Home/Salir_Session"><i class="material-icons">input</i></a></li>
      </ul>
    </div>
  </nav>
  <!--titiulo del pagina-->
  <center>
	
	</center>
	<?php 
 
	if (isset($usuario)) {
		// header("location:".base_url()."index.php/success/page/home/$data");
		 header("location:".base_url()."/Restaurante/app/views/index.php");
		# code...
		//forech para navegar en los campos de la tabla usuaruiio
		foreach ($usuario as $user) {
			# code...
		//primer if
		if ( $user->name=="cris") {
			# code...
			echo "<center>";
			echo "<h1>!Binvenido Es un placer Atenderles!</h1>";
			echo "</center>";
			echo '<a href=" '.base_url().'/Home/Menu_Dia" class="waves-effect waves-light btn">Registar</a>';

		}
		}
		//fin de forecach
	
	}
	else
	{
		echo "fallo";
	}
	 ?>
</body>
</html>