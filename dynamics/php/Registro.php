<?php
  include "Config.php";
  // Falta validación de variables
  $conexion = connect();
  if(!$conexion) {
    echo "No se pudo conectar con el servidor. <br>
    Cuando llames a apoyo técnico, muéstrales el texto a continuación:";
    echo mysqli_connect_error()."<br>";
    echo mysqli_connect_errno()."<br>";
    exit();
  }
  else {
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $fecha = $_POST['fecha'];
    $correo = $_POST['correo'];
    $id1 = $_POST['id1'];
    $id2 = $_POST['id2'];
    $password = $_POST['password'];
    $tipo = $_POST['tipo'];
  
    if($tipo == "alumno"){
      $tipo = 1;
    }elseif ($tipo == "profesor") {
      $tipo = 2;
    }else{
      $tipo = 3;
    }

    $SQL_usr = "INSERT INTO usuario(id_usuario, id_tipo, password, nacimiento, correo, extra, nombre, paterno, materno) VALUES ('$id1', $tipo, '$password', '$fecha', '$correo', '$id2', '$nombre', '$paterno', '$materno')";
    $query_usr = mysqli_query($conexion,$SQL_usr);
  
    echo $SQL_usr;
  }
?>
