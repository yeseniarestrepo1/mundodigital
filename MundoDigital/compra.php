<?php
    include ("base.php");
    $con=conectar();
    $sql="SELECT * FROM compra";
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
    <title>compra</title>
</head>
<body>
    
      <div class="container mt-5">
      <div class="row">
     
    <div class="col-sm-4">
    <section class="form-register">
    <h4>FINALIZAR COMPRA</h4>
    <form action="finalizar.php" method="POST">
    <input class="controls" type="text" name="IdCompra" id="IdCompra" placeholder="Codigo Producto">
    <input class="controls" type="text" name="NomProducto" id="NomProducto" placeholder="Nombre Producto">
    <input class="controls" type="text" name="Categoria" id="Categoria" placeholder="Categoria">
    <input class="controls" type="text" name="Cantidad" id="Cantidad" placeholder="Cantidad">
    <input class="controls" type="text" name="Precio" id="Precio" placeholder=" Precio">
    <input class="controls" type="text" name="DirEnvio" id="DirEnvio" placeholder="Direccion de Envio">
    
    <input class="botons" type="submit" value="Finalizar">
    </form>
    <form action="tienda.php">
    <input class="botons" type="submit" value="Cancelar">
    </form>
    </section>
    </div>
    
    <div class="col-sm-8">
    
    <h4>LISTA DE COMPRA</h4>
    <table class="table">
        <thead class="table-dark table-striped">
            <tr>
                <td>codigo</td>
                <td>producto</td>
                <td>categoria</td>
                <td>cantidad</td>
                <td>precio</td>
                <td>envio</td>

            </tr>

        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($query))
              {
                  ?>
                  <tr>
                      <td><?php echo $row['IdCompra']?></td>
                      <td><?php echo $row['NomProducto']?> </td>
                      <td><?php echo $row['Categoria']?> </td>
                      <td><?php echo $row['Cantidad']?> </td>
                      <td><?php echo $row['Precio']?> </td>
                      <td><?php echo $row['DirEnvio']?> </td>
                      
                      <th><a href="actualizar.php ?IdCompra=<?php echo $row['IdCompra']?>" class="btn btn-primary">Editar</a></th>
                      <th><a href="delete.php ?IdCompra=<?php echo $row['IdCompra']?>" class="btn btn-primary">Eliminar</a></th>
                  </tr>
                  <?php 
                      }
                  ?>
             
            
            
        </tbody>

    </table>

    </div>
 








    </div>
</div>

  
</body>
</html>