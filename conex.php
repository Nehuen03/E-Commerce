<?php
$con = mysqli_connect('localhost','root','','sentir');
$con->set_charset('utf8');
if (!$con){
    die('Conexion fallida');
}
?>