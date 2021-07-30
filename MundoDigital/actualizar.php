<?php
   include ("base.php");
   $con=conectar();
   $IdCompra=$_GET['IdCompra'];
   $sql="SELECT * FROM  compra WHERE IdCompra='$IdCompra'";
   $query=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($query);
  



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>actualizar</title>
</head>
<body>
<div class="col-sm-12">
    <section class="form-register">
    <h4>ACTUALIZAR COMPRA</h4>
    <form action="update.php" method="POST">
    <input class="controls" type="text" name="IdCompra" id="IdCompra" placeholder="Codigo Producto" value="<?php echo $row['IdCompra'] ?>">
    <input class="controls" type="text" name="NomProducto" id="NomProducto" placeholder="Nombre Producto" value="<?php echo $row['NomProducto'] ?>">
    <input class="controls" type="text" name="Categoria" id="Categoria" placeholder="Categoria" value="<?php echo $row['Categoria'] ?>">
    <input class="controls" type="text" name="Cantidad" id="Cantidad" placeholder="Cantidad" value="<?php echo $row['Cantidad'] ?>">
    <input class="controls" type="text" name="Precio" id="Precio" placeholder=" Precio" value="<?php echo $row['Precio'] ?>">
    <input class="controls" type="text" name="DirEnvio" id="DirEnvio" placeholder="Direccion de Envio" value="<?php echo $row['DirEnvio'] ?>">
    
    <input class="botons" type="submit" value="Actualizar datos">
    </form>
</section>
</div>


</body>
</html>
   