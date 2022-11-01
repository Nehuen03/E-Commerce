<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
        <title>Sign up</title>
    </head>
    <body>
        <header>
            <a href="./index.html">Inicio</a>
        </header>
        <h1>Sign up</h1>
        <span>or <a href="login.php">Login</a></span>
        <form action="" method="post">
            <?php
            include('conex.php');
            include("carga.php");
            ?>
            <input type="text" name="user" id="usuario" placeholder="Usuario">
            <input type="email" name="email" id="email" placeholder="E-mail">
            <input type="password" name="password" id="contraseña" placeholder="Contraseña">
            <input class="boton" type="submit" value="Registrar" name="registro">
        </form>
    </body>
</html>