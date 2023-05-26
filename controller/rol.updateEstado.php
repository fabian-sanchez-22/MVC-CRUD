<?php
include_once "../model/rol.php";

$id = $_POST["id"];
$estado = $_POST["estado"];

if ($estado == 'A') {
    $estado = 'I';
} elseif ($estado == 'I') {
    $estado = 'A';
}

$rolM = new \modelo\Rol();
$rolM->setId($id);
$rolM->setEstado($estado);
$response = $rolM->estado();

echo json_encode($response);
unset($rolM);
unset($response);