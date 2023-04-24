<?php
include "conexion.php";

if(isset($_POST['btnLogin'])){
    
    $correo = mysqli_real_escape_string($conn, $_POST['email']);
    $passw = mysqli_real_escape_string($conn, $_POST['passw']);
    

    $select = "SELECT * FROM usuario WHERE correo = '$correo' && passw = '$passw' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        echo "<script>Swal.fire('Ingresando', 'Empezando Sesion', 'success');</script>";
        header('location:mainscreen.php');
    } else {
        
        echo "<script>Swal.fire('Warning', 'No se enontro al usuario', 'warning');</script>";
        header('location:Login.php');    
        
    }
}

?>