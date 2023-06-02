<?php

include_once "../model/rol.php";
$id = $_GET ['id'];

$rolM = new \modelo\Rol;
$rolM->setId($id);
$response = $rolM->readUpdate();

echo json_encode($response);
unset($rolM);
unset($response);