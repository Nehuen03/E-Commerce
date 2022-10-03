<?php
include 'conex.php';
if (!empty($_POST['nombre_c']) && !empty($_POST['email']) && !empty($_POST['usuario']) && !empty($_POST['contra'])) {
    $name = $_POST['nombre_c'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    $sql2 = "SELECT * FROM registro WHERE correo_electronico = '" . $email . "'";
    $res = mysqli_query($con1, $sql2);
    echo mysqli_num_rows($res);


        if ( mysqli_num_rows($res)>0) {
            
            print("Error en la consulta");
            
        } else {
            echo mysqli_num_rows($res);
            
        $sql = "INSERT INTO registro(nombre_completo,correo_electronico,usuario,contra) VALUES ('$name','$email','$usuario','$contra')";
        mysqli_query ($con1,$sql) or die ("Error en la consulta");
     
        
            header('Location: saliobien.php');
        
    }
    


}else print("Debe completar todos los campos solicitados");
?>
