<?php
include ("base.php");
$con=conectar();

    $IdCompra = $_POST['IdCompra'];
    $NomProducto = $_POST['NomProducto'];
    $Categoria= $_POST['Categoria'];
    $Cantidad=$_POST['Cantidad'];
    $Precio=$_POST['Precio'];
    $Envio=$_POST['DirEnvio'];

    $sql="UPDATE compra SET NomProducto=' $NomProducto',Categoria='$Categoria',Cantidad='$Cantidad',Precio=' $Precio',
    DirEnvio=' $Envio' WHERE IdCompra='$IdCompra'";

    $query=mysqli_query($con,$sql);

    if($query)
    {
        header('location:compra.php');
    }




?>