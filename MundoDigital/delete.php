<?php 
include ('base.php');
$con=conectar();
$IdCompra=$_GET['IdCompra'];

$sql="DELETE FROM compra WHERE IdCompra=$IdCompra";
$query=mysqli_query($con,$sql);

if($query)
{
   header("location:compra.php");
}





?>