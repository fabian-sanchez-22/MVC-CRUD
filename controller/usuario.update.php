<?php
include_once "../model/usuario.php";

$id = $_POST["id"];
$tipoDoc = $_POST["tipoDoc"];
$identificacion = $_POST["identificacion"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$genero = $_POST["genero"];
$rol = $_POST["rol"];

$usuarioM = new \modelo\Usuario;

$usuarioM->setId($id);
$usuarioM->setTipoDoc($tipoDoc);
$usuarioM->setIdentificacion($identificacion);
$usuarioM->setNombre($nombre);
$usuarioM->setApellido($apellido);
$usuarioM->setCorreo($correo);;
$usuarioM->setGenero($genero);
$usuarioM->setRol($rol);


$response = $usuarioM->update();

echo json_encode($response);
unset($usuarioM);
unset($response);