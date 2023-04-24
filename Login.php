<?php

include "conexion.php";
include "ingresar.php";

if(isset($_POST['btnRegister'])){
    $nombre = mysqli_real_escape_string($conn, $_POST['name']);
    $correo = mysqli_real_escape_string($conn, $_POST['email']);
    $passw = mysqli_real_escape_string($conn, $_POST['passw']);
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

    $select = "SELECT * FROM usuario WHERE correo = '$correo' && passw = '$passw' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        echo 'El usuario ya existe';

    } else {

            echo "Si entro";
            $insert = "INSERT INTO usuario (nombre, correo, passw, foto, estado) VALUES ('$nombre', '$correo', '$passw', '$foto', 1)";

            mysqli_query($conn, $insert);
            echo "<script>Swal.fire('Error', 'Ingresando', 'sucess');</script>";
            header('location:mainscreen.php');
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Estilo_Login.css">
    <link rel="stylesheet" href="assets/css/modalRegistro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <title>Document</title>
</head>
<body>
    
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #000000;"></i>
                <span class="h1 fw-bold mb-0">Logo</span>
              </div>
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form style="width: 23rem;" method="post">
      
                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
      
                  <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email">Email address</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password" id="passw" name="passw" class="form-control form-control-lg" />
                    <label class="form-label" for="passw">Password</label>
                  </div>
      
                  <div class="pt-1 mb-4">
                    
                    <button class="btn btn-primary btn-info btn-lg btn-block" id="btnLogin" name="btnLogin" type="submit">Login</button>
                  </div>
      
                  <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                  <p>Don't have an account? <a href="#!" data-bs-target="#modalRegistro" data-bs-toggle="modal" class="link-info">Register here</a></p>
      
                </form>
      
              </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
      </section>

      <!--MODAL REGISTRO-->
      <div class="modal fade" role="dialog" tabindex="-1" id="modalRegistro">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registrate</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form_register" class="form_register" method="post" enctype="multipart/form-data">
                        <label class="form-label">Nombre:&nbsp;</label>
                        <input class="form-control form_input" type="text" id="name" name="name" placeholder="Ej. John">
                        
                        <label class="form-label">Correo:&nbsp;</label>
                        <input class="form-control form_input" type="text" id="email" name="email" placeholder="Ej. John">

                        <label class="form-label" style="margin-left: -12px;">Password:&nbsp;</label>
                        <input class="form-control form_input" type="password" id="passw" name="passw" placeholder="Ej. John">
                        
                        <label class="form-label">Foto:&nbsp;</label>
                        <input class="form-control form_input" type="file" id="foto" name="foto" placeholder="Ej. John">
                        
                        <div class="modal-footer">
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" id="btnRegister" name="btnRegister" type="submit">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
</body>

</html>