<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reservaciones</title>	<link type="text/css" rel="stylesheet" href="/tutorial/css/materialize.min.css"  media="screen,projection"/>
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
      	<i class="material-icons">exit_to_app</i>
      </li>
      <li>
      	<a href="#">salir</a>
      </li>
      </ul>
    </div>
  </nav>
	 <!--formulario para reservar -->
	<div class="row">
		<form  action="" class="col s12">
			<div class="row">
				<div class="input-field col s6">
					<input type="text" id="nombne">
					<label for="nombne">Nombre</label>
				</div>
				<div class="input-field col s6">
					<input type="text" id="Apellido">
					<label for="Apellido">Apellido</label>
				</div>
				<div class="input-field col s6">
					<input type="text" id="Direccion">
					<label for="Direccion">Direccion</label>
				</div>
				  <div class="input-field col s6">
				   <select>
                   <option value="" disabled selected>Eliga una opcion</option>
                   <option value="1">Option 1</option>
                   <option value="2">Option 2</option>
                   <option value="3">Option 3</option>
                   </select>
               </div>
               <div class="input-field col s6">
               	<input type="number" min="1" max="50" id="cantidad">
               	<label for="cantidad">Cantidad</label>
               </div>
               <div class="input-field col s6">
               	<label id="Total_pagar">Total a Pagar $500.00</label>

               </div>
			</div>
			 <button>Reservar</button>
		</form>
	</div>
</body>
<script>
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
</script>
</html>