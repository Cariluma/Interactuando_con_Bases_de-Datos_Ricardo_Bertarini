<?php

  require('access.php');

  $con = new ConectorBD();

  if ($con->initConexion('agenda_db')=='OK') {
      $conexion = $con->getConexion();

      $insert = $conexion->prepare('INSERT INTO usuarios (correo_electronico, nombre, contrasena, fecha_nacimiento) VALUES (?,?,?,?)');
      $insert->bind_param("sssd", $correo_electronico, $nombre, $contrasena, $fecha_nacimiento);

      $correo_electronico = "ricardo@mail.com";
      $nombre = 'Ricardo';
      $contrasena = '12345';
      $fecha_nacimiento = '1975/01/11';
      $insert->execute();

      $correo_electronico = "icardo@mail.com";
      $nombre = 'icardo';
      $contrasena = '1234';
      $fecha_nacimiento = '1976/01/11';
      $insert->execute();

      $correo_electronico = "cardo@mail.com";
      $nombre = 'cardo';
      $contrasena = '123';
      $fecha_nacimiento = '1977/01/11';
      $insert->execute();

      echo "Se insertaron los registros exitosamente";

      $con->cerrarConexion();

    }else {
      echo "Se presentó un error en la conexión";
    }











/*
  if ($con->initConexion('agenda_db')=='OK') {

    $datos['correo_electronico'] = "ricardo@mail.com";
    $datos['nombre'] = "Ricardo";
    $datos['contrasena'] = "12345";
    $datos['fecha_nacimiento'] = "1975/01/11";

    $datos['correo_electronico'] = "icardo@mail.com";
    $datos['nombre'] = "icardo";
    $datos['contrasena'] = "2345";
    $datos['fecha_nacimiento'] = "1976/01/11";

    $datos['correo_electronico'] = "cardo@mail.com";
    $datos['nombre'] = "cardo";
    $datos['contrasena'] = "345";
    $datos['fecha_nacimiento'] = "1977/01/11";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se insertaron los datos correctamente";
    }else echo "Se ha producido un error en la inserción";

    $con->cerrarConexion();

  }else {
    echo "Se presentó un error en la conexión";
  }

*/


 ?>
