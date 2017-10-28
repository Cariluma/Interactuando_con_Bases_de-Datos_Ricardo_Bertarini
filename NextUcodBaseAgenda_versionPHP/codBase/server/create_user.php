<?php

require('conector.php');

$con = new ConectorBD();
if ($con->initConexion('agenda');

$hash = password_hash('1234', PASSWORD_DEFAULT);

$data['username']= '"ricardob"';
$data['password']= '"'.$hash.'"';
$data['nombre']='"Ricardo Bertarini"';
$data['fecha_nacimiento']='"1975-11-01"';

$con->insertData('usuarios', $data);




?>
