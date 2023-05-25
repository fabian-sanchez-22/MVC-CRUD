<?php 
include_once "../model/rol.php";

$nombreRol = $_POST ["txtRol"];
$rolM = new \modelo\Rol();
$rolM->setNombreRol($nombreRol);
$response = $rolM->create();
echo json_encode($response);


unset($rolM);
unset($response);