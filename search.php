<?php
include "conexion.php";

$searchTerm=mysqli_real_escape_string($conn, $_POST['searchTerm']);
$output="";
$sql =mysqli_query($conn, "SELECT usuario WHERE nombre LIKE '%{$searchTerm}%'");
if(mysqli_num_rows($sql)>0){



}else{
$output .= "usuario no encontrado";

}







?>