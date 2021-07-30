<?php
    include ("dato.php");
    $con = conectar();

    /* debo declarar una variable por cada campo de la tabla*/

   
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono= $_POST['telefono'];
    $mensaje= $_POST['mensaje'];
    
    

    $sql="INSERT INTO`contacto` VALUES(' $nombre','$correo', '$telefono','$mensaje')";
    $query=mysqli_query($con,$sql);

    if($query)
    {
        header("location:contacto.php");
    }
?>