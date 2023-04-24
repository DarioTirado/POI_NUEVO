<?php
session_start();
if(!isset( $_SESSION['id'])){
    include "conexion.php";
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['']);    
}else{


}






?>