<?php
    include ("db.php");
    $con=conectar();
    $sql="SELECT * FROM registrarse";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);

?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>registrarse</title>
</head>
<body>
<div class="container">
<section class="form-register">
    <div class="col-sm-12">
    <h4>REGISTRO CLIENTE</h4>
    <form action="insertar.php" method="post">
   
    <input class="controls" type="text" name="id" id="id" placeholder="Identificacion">
    <input class="controls" type="text" name="usuario" id="usuario" placeholder="Usuario">
    <input class="controls" type="text" name="contraseña" id="contraseña" placeholder="Contraseña">
    
    <input class="botons" type="submit" value="Insertar">
    

    </form>
    <form action="index.html">
    <input class="botons" type="submit" value="Iniciar Sesion">
    </form>

    
    </div>
    </section>
  

</body>
</html>