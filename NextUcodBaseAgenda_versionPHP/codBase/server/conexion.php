<?php
//Conexion a la base de datos
  $mysqli = new mysqli('localhost', 'root','12345','agenda');
  if($mysqli->connect_errno){
    echo "Error: " .$mysqli->connect_error;
  }else{
  //  echo "la conexion fue exitosa";
  }
//Cierre de la base de Datos
  $mysqli->close();
 ?>
