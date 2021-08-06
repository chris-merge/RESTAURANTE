<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Refrencias de libreria  de materialize -->
<link rel="stylesheet" type="text/css" href="/tutorial/css/materialize.css" media="screen,projection"/>
<link rel="stylesheet" type="text/css" href="/tutorial/css/materialize.min.css" media="screen,projection"/>
    <title>Document</title>
</head>
<body>
    <!-- Formulario para Registrarse-->
    <form  style="height: 400px;, width: 500px; border: 2px solid red;">
        <div class="row">
            <div class="input-field">
            <input type="text" id="NombreUser" class="validate"name="NombreUser">
            <label class="active" for="NombreUser">Ingrese Su Nombre</label>
            <div class="input-field">
                <input type="text" id="Apellido" class="validate" name="Apellido">
                <label class="active" for="Apellido">Ingrese Su Apellido</label>
            </div>
            <div class="input-field">
                <input type="password" id="password" class="validate" name="password">
                <label class="active" for="password">Ingrese Su Contraseña</label>
            </div>
            <div class="input-field">
                <input type="text" id="Direccion" class="validate" name="Direccion">
                <label class="active" for="NombreUser">Ingrese Su Direcion</label>
            </div>
        </div>
    </form>
</body>
<script type="text/javascript" src="/tutorial/js/materialize.min.js"></script>
</html>