<?php
  /**
   * Este programa recibe la información del usuario con 
   * respecto a un formulario y lo va a creando
   */
  include "config.php";
  $conexion = connect();
  if(!$conexion) {
    echo "No se pudo conectar con el servidor. <br>
    Cuando llames a apoyo técnico, muéstrales el texto a continuación:";
    echo mysqli_connect_error()."<br>";
    echo mysqli_connect_errno()."<br>";
    exit();
  }
  else {
    if ($_POST['tipo'] == 1) {
      $id = $_POST['idForm'];
      $categoria = $_POST['categoria'];
      $titulo = $_POST['titulo'];
      $rango = $_POST['rango'];
      $SQL_formulario = "INSERT INTO formulario(id_form, id_categoria, titulo, rango) VALUES ('$id', $categoria, '$titulo', $rango)";
      $query_formulario = mysqli_query($conexion,$SQL_formulario);
    }
  }
?>