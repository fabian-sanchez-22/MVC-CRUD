<?php

include_once "../model/rol.php";

$nombreRol = $_POST["txtRolMod"];
$id = $_POST["id"];

$rolM = new \modelo\Rol;
$rolM->setNombreRol($nombreRol);
$rolM->setId($id);

$response = $rolM->update();
echo json_encode($response);
unset($rolM);
unset($response);
