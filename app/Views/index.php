<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido al login</title>
 <link type="text/css" rel="stylesheet" href="/Restaurante/css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="/Restaurante/css/materialize.min.css" media="screen,projection"/>
</head>
<style>
  /*estilo de formulario*/
  form{
  height: auto;
  width: 400px;
  align-content: center;
  border:1px solid black ;
  border-radius: 15px;
  /*estilo de formulario*/
}
/*estilo de label */
h1{
  color: white;
}
label{
  font-family: italic;
  font-size: 25px ;

}
body{
  background-image: url(https://i.ibb.co/j8SR2Rt/Superfoods.jpg);
}
</style>
<body  >
<!--   -->
<!---->
<center>
<h1 class="flow-text">Binevenio Al Restaurante Y Comida Rapida "chocoloco"</h1>
 </center>
 <!--  barra de progreso pero para adorno -->
 <div class="progress">
      <div class="indeterminate"></div>
  </div>
   <!--  barra de progreso pero para adorno -->
   <!-- Formulario-->  
<center>
  <?php
  echo ' <form  action="'.base_url('/Home/Ingresar').'" method="post">';
  echo ' <div class="row">';
  echo ' <div class="input-field ">';
  echo '<input id="name" type="text" class="validate" name="nombre">';
  echo ' <label class="active" for="name">Usuario</label>';
  echo '</div>';
  echo '<div class="input-field ">';
  echo '  <input name="pass" id="pass" type="password" class="validate">';
  echo ' <label class="active" for="pass">Contraceña</label>';
  echo ' </div>';
  echo "<button  class='btn waves-effect waves-light' type='submit'>Ingresar</button>";
  echo " <a href='#' class='waves-effect waves-light btn'>Registar</a>";
  echo '</div>';
  echo '</form>';
  echo '</center>';
  ?>
       
</body>
 <script type="text/javascript" src="/Restaurante/js/materialize.min.js"></script>
</html>