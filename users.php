<?php
session_start();

if($_POST){
require_once ("conexion.php");


  if($_POST['action_c']=='busquedatal')
  {
  
      if(!empty($_POST['nombre']))
      {
          $arrcurso = array();
          $id = intval($_POST['nombre']);
          $query_select = mysqli_query($conn,"SELECT * FROM usuario WHERE id_user = $id");
          $num_rows = mysqli_num_rows($query_select);
  
  if ($num_rows>0) {
    
      $arrcurso = mysqli_fetch_assoc($query_select);
   echo json_encode($arrcurso, JSON_UNESCAPED_UNICODE);

  
  } else {
    echo "notData" ;
  }
  exit;
      }
  
  
  }
  

  }
