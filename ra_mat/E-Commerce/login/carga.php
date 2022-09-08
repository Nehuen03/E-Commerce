<?php
include 'conex.php';
if (!empty($_POST['nombre_c']) && !empty($_POST['email']) && !empty($_POST['usuario']) && !empty($_POST['contra'])) {
    $name = $_POST['nombre_c'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    $sql2 = "SELECT * FROM registro WHERE correo_electronico = '" . $email . "'";
    $var1 = $con->prepare($sql2);
    if ($var1->execute()) {
        if ($var1->num_rows()==1) {
            print_r($var1);
            print("Error en la consulta");
            
        } else {
            $var1->close();
        $sql = "INSERT INTO registro(nombre_completo,correo_electronico,usuario,contra) VALUES ('$name','$email','$usuario','$contra')";
        $stnt = $con->prepare($sql);
        //$stnt->bindParam(":nombre_completo",$name); 
        //$stnt->bindParam("correo_electronico",$email); 
        //$stnt->bindParam(":usuario",$usuario); 
        //$stnt->bindParam(":contra",$contra);
        if ($stnt->execute()) {
            header('Location: saliobien.php');
        } else print("Error en la consulta");
    }
} 

}else print("Debe completar todos los campos solicitados");
?>
