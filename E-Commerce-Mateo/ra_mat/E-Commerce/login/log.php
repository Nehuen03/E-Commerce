<?php
include 'conex.php';
$cor = $_POST['cor'];
$cont = $_POST['cont'];
$sql1 = "SELECT * FROM registro WHERE correo_electronico='" . $cor . "' and contra='" . $cont . "'";
$res = mysqli_query($con1, $sql1);


if (mysqli_num_rows($res) > 0) {
    header('Location: saliobien.php');
} else echo 'Los datos son invalidos';
