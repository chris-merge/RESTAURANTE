<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <!-- aqui se va diseñar los div para los taps -->
    <div id="MENU">

   <?php
    $x=1;
   while ( $x<=count($menu)) {
     # code...
//    <!-- aqui se va diseñar  el card para el menu del dia-->
   echo '<div id="Card_UI" class="row">';
    echo '<div class="col s12 m7">';
      echo '<div id="card_contenedor" class="card">';
        echo '<div class="card-image">';
  echo '<img src="https://i.pinimg.com/564x/de/d7/1a/ded71a7ef28c69ad5cfcd8c69c562031.jpg">';
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
   
</body>
</html>