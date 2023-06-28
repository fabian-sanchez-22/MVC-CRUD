<?php

include_once "../model/usuario.php";

$id = $_GET["id"];

$usuarioM = new\modelo\Usuario;
$usuarioM->setId($id);
$response = $usuarioM->readUpdate();

echo json_encode($response);

unset($usuarioM);
unset($response);