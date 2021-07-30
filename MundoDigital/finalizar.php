<?php
    include ("base.php");
    $con = conectar();

    /* debo declarar una variable por cada campo de la tabla*/

   
    $IdCompra = $_POST['IdCompra'];
    $NomProducto = $_POST['NomProducto'];
    $Categoria= $_POST['Categoria'];
    $Cantidad=$_POST['Cantidad'];
    $Precio=$_POST['Precio'];
    $Envio=$_POST['DirEnvio'];
    
    

    $sql="INSERT INTO`compra` VALUES( '$IdCompra', '$NomProducto','$Categoria','$Cantidad','$Precio','$Envio')";
    $query=mysqli_query($con,$sql);

    if($query)
    {
        header("location:compra.php");
    }
?>