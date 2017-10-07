<?php

require('../server/conector.php');

$con = new ConectorBD();

if ($con->initConexion()=='OK'){
    $datos['nombres'] = "'Ricardo Bertarini'";
    $datos['correo'] = "'ricardo@gmail.com'";
    $datos['password'] = "'".password_hash("123",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'1990/05/19'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";

    $datos['nombres'] = "'Lucas Bertarini'";
    $datos['correo'] = "'lucas@gmail.com'";
    $datos['password'] = "'".password_hash("123",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'1997/05/19'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";

    $datos['nombres'] = "'Martin Bertarini'";
    $datos['correo'] = "'martin@gmail.com'";
    $datos['password'] = "'".password_hash("123",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'1986/01/19'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";


    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}


 ?>
