<?php
if (!empty($_POST['registro'])) {
    if (empty($_POST['user']) or empty($_POST['email']) or empty($_POST['password'])) {
        echo '<div class="alerta">Campos Incompletos</div>';
    } else {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = hash('sha256', $_POST['password']);
        $sql = $con->query("INSERT INTO users(user,email,password) VALUES ('$user','$email','$password')");
        if ($sql == 1) {
            echo '<div class="success">Usuario registrado correctamente</div>';
        } else {
            echo '<div class="alerta">Error al registrar</div>';
        }
    }
}

if (!empty($_GET['login'])) {
    if (empty($_GET['user']) or empty($_GET['password'])) {
        echo '<div class="alerta">Campos Incompletos</div>';
    } else {
        $user = $_GET['user'];
        $password = hash('sha256', $_GET['password']);
        session_start();

        $sql = "SELECT user,password FROM users WHERE user = '$user'";
        $resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

        $fila = mysqli_fetch_array($resultado);
    }

    if ($user == $fila['user'] && $password == $fila['password']) {
        header("Location: index.php");
    } else {
        echo '<div class="alerta">Error de logueo!</div>';
    }
}
