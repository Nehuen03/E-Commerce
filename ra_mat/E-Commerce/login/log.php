<?php
include 'conex.php';
$cor=$_POST['cor'];
$cont=$_POST['cont'];
$sql1 = "SELECT * FROM registro WHERE correo_electronico='".$cor."' and contra='".$cont."'";

$var=$con->prepare($sql1);
if($var->execute()){
    if($var->num_rows()>0){
    header('Location: saliobien.php');
   
    }else echo 'Los datos son invalidos';
}

?>