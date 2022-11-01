<!DOCTYPE html>
<html lang="en">
<?php
include './conex.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="logindos.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="log.php"  method="post" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" name="cor" placeholder="Correo Electronico" required>
                        <input type="password" name="cont" placeholder="Contraseña" required>
                        <button class="boton_login">Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="carga.php" method="post" class="formulario__register" method="get">
                        <h2>Regístrarse</h2>
                        <input type="text" name="nombre_c" placeholder="Nombre Copleto" required>
                        <input type="text" name="email" placeholder="Correo Electronico" required>
                        <input type="text" name="usuario" placeholder="Usuario" required>
                        <input type="password" name="contra" placeholder="Contraseña" required>
                        <button class="boton_register">Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="logindos.js"></script>
</body>
</html>