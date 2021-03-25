<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bienvenid@s</title>
	<!-- Refrencias de libreria  de materialize -->
	<link type="text/css" rel="stylesheet" href="/tutorial/css/materialize.min.css"  media="screen,projection"/>
	<!-- Refrencias de libreria  de materialize -->
    <link rel="stylesheet" type="text/css" href="/tutorial/css/materialize.min.css" media="screen,projection"/>
    <!-- link de css del estilo al index -->
    <link rel="stylesheet" type="text/css" href="/tutorial/css/Estilo_index.css" media="screen,projection"/>
    <!--  Link de Materialize -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
<!-- FUNCION DE JS PARA MODAL-->
<script>
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });

 $(document).ready(function(){
    $('.modal').modal();
  });
</script>
</head>

<body>
	<!--  -->
	<nav id="navegacion" >
    <div class="nav-wrapper">
      <ul class="right">
      	<!-- ICONO  -->
      	<li>
      		<i class="material-icons">account_circle</i>
      	</li>
      	<!-- LINK PARA REGRESAR EL INICIO -->
      <li>
      	<a href="#modal" class="modal-trigger">Login</a>
    <!-- Modal Trigger -->
   <!-- Modal Structure -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <!--  LOGIN -->
	<h5 id="title_forms">Para poder Ordnear Resgistrese </h5>
	<form action="<?php echo base_url('/Home/Validadcion') ?>" method="POST" >
    <div class="row">
    <div class="input-field ">
    <input id="NAME" type="text" class="validate" name="NAME">
    <label class="active" for="NAME">Usuario</label>
    </div>
    <div class="input-field ">
    <input name="PASS" id="PASS" type="password" class="validate">
    <label class="active" for="PASS">Contraceña</label>
    </div>
    <div id="btn">
    <button  class='btn waves-effect waves-light' type='submit'>Ingresar</button>
    <a class="waves-effect waves-light btn" href="<?php echo base_url('/Home/Menu') ?>">Registar</a>
    </div>
    </div>
    </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
     <!--  LOGIN -->
  </div>
  	<!-- Modal Trigger -->
      </li>
      <!--ICONS DE NOSOTROS  -->
      <li>
      	<i class="material-icons">perm_contact_calendar</i>
      </li>
      <li>
      	<a href="#">Nosotros</a>
      </li>
      <!-- ICONS DE BLOG -->
      <li>
      	<i class="material-icons">textsms</i>
      </li>
      <li>
      	<a href="#">BLOG</a>
      </li>
      <!-- ICOS DE CONTACTO -->
      <li>
      	<i class="material-icons">contact_mails</i>
      </li>
      <li>
      	<a href="#">Contacto</a>
      </li>
      </ul>
    </div>
  </nav>
  <!--  -->
  <!-- barra de proceso adorno -->
  <div class="progress">
      <div class="indeterminate"></div>
  </div>
	<!-- HEADER DE LA PAGIAN PRINCIPAL  -->
		
	<!--ENCABEZADO DE LA PAGINA   -->
	<header class="side-header inicio">
		<!-- el side bar-->
		<h1 > !COMIDA RAPIDA!</h1>	
		<div id="id_logo">
			
		</div>
    </header>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium exercitationem natus explicabo saepe minus debitis similique modi esse perspiciatis accusantium aspernatur aperiam dolorem placeat, fugiat, quibusdam repellat quia eaque vel.</p>
    <!-- FIN DE HEADER DE LA PAGIAN PRINCIPAL  -->
    <!-- FIN DE  FORMULARIO -->
    <!-- SECCION DE MISION VISSION nosotros  -->
    <section>
    <!-- Mision -->
    <div class="barra">
    <div>
    <h3 id="Mision">Mision</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, laborum, cumque fuga natus laboriosam nemo iste illo repellendus repudiandae obcaecati eius fugiat explicabo vel. Quia nostrum minus doloribus assumenda, architecto?</p>
    </div>
    <!--Vision  -->
    <div>
    <h3 id="Vision">Vision</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam laborum expedita sint perspiciatis, adipisci saepe rem vitae ut rerum esse eius, earum quasi reprehenderit voluptas ipsa blanditiis cupiditate tempora ipsum.</p>
    </div>
    </div>
	<!-- DETALLE DE QUE SE VENTE  -->

	<section class="contenedor section">
		<!--ARTICULO DE LA PAGINA  -->
		<div id="article">
		<article>
	<h3>La Mejor Comida</h3>
	<p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Aperiam, repudiandae tempore aspernatur repellat totam obcaecati magni accusantium exercitationem consequatur voluptatibus illum quae ipsa praesentium debitis quam est! Corrupti perferendis, cupiditate!</p>
	</article>
	</div>
	</section>
	<!-- DETALLE DE QUE SE VENTE  -->
	<section class="informacion">
		<div id="inf">
	<blockquote>
		EL personal administrativo se compromete a ofrecer la mejor comida, con las medidas de proteccíon para garantizar la calidad de nuestros productos
	</blockquote>
	</div>
	<p id="sociedad">-" MYPIME S.A De C.V"-</p>
	</section>
</body>

	<!-- MAS sobre Nosotros los creadores y produtores de la empresa  -->
	<footer>
	<nav id="footer">
		<ul>
		<li>
		<i class="material-icons">code</i>		
		</li>
		<li>
		<a href="#">Desarrolladores</a>
		</li>
		<li><a href="#">Todos lo derechos Reservados 2021</a>
		</li>
		</ul>
	</nav>
	<!--DERECHOS DE AUTOR  -->
	
	<!-- SECCION DE MISION VISSION nosotros  -->
	</footer>
<script type="text/javascript" src="/tutorial/js/materialize.min.js"></script>
</html>