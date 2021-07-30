<?php
    include ("dato.php");
    $con=conectar();
    $sql="SELECT * FROM contacto";
    $query=mysqli_query($con,$sql);
   
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>contacto</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-11">
<center><h1>MUNDO DIGITAL</h1></center></div>
<div class="col-sm-1">
<img src="img/logo.png" alt=""></div><br> 
</div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">INICIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tienda.php">TIENDA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formulario.html">BUZON DE SUGERENCIAS</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br><br><br>
<div class="container">
    <div class="row">
      <div class="col-sm-6">
      <h2>CONTACTO</h2><br><br>
      <img src="img/facebook.png" alt="">
      <img src="img/whasap.png" alt=""><br><br>
      <p>DESARROLLADORES</p>
      <p>JUAN JOSE VALDERRAMA</p>
      <p>ALEXANDRA ARIAS</p>
      <p>YESENIA RESTREPO</p>
      <p>TECNICOS EN DESARROLLO DE SOFTWARE</p>
      
      </div>
      <div class="col-sm-6">
      <form action="enviar.php" method="POST">
   
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre">
    <input class="controls" type="text" name="correo" id="correo" placeholder="Email">
    <input class="controls" type="text" name="telefono" id="telefono" placeholder="Telefono o Celular">
    <input class="controls" type="text" name="mensaje" id="mensaje" placeholder="Mensaje">
    
    <input class="botons btn btn-primary" type="submit"  value="ENVIAR">
    
    
    

    </form>
      </div>

</div>



</div>

</body>
</html>