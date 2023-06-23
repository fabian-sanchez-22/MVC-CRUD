<?php
include_once "../model/usuario.php";

$usuarioM = new \modelo\Usuario;
$response = $usuarioM->read();

echo json_encode($response);
unset($usuarioM);
unset($response);
