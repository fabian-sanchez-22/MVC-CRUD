<?php
namespace modelo;

use PDOException;


include_once "conexion.php";
class Rol
{
    private $id;
    private $nombreRol;
    private $estado = 'A';
    private $conexion;

    public function __construct()
    {
        $this->conexion = new \Conexion();
    }

    public function create(){
        try {
            $request = $this->conexion->getConPDO()->prepare("INSERT INTO roles(nombreRol,estado) VALUES(?,?)");
            $request->bindParam(1, $this->nombreRol);
            $request->bindParam(2, $this->estado);
            $request->execute();
            return "Rol creado";
            
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function read()
    {
        try {
            $sql = $this->conexion->getConPDO()->prepare("SELECT * FROM roles");
            $sql->execute();
            $response = $sql->fetchAll(\PDO::FETCH_ASSOC);
            return $response;
        } catch (PDOException $e) {
            return "Error" . $e->getMessage();
        }
    }

    public function update(){
    try {
        $sql = $this->conexion->getConPDO()->prepare("UPDATE roles SET nombreRol=? WHERE id =?");
        $sql->bindParam(1, $this->nombreRol);
        $sql->bindParam(2, $this->id);
        $sql->execute();
        return "Rol Modificado";
    } catch (PDOException $e) {
        return "Error" . $e->getMessage();
    }
    }

    public function delete(){
    try {
        $sql = $this->conexion->getConPDO()->prepare("DELETE FROM roles WHERE id=?");
        $sql->bindParam(1, $this->id);
        $sql->execute();
        return "Rol Eliminado";
    } catch (PDOException $e) {
        return "Error" . $e->getMessage();
    }
    }

    public function estado(){
    try {
        $sql = $this->conexion->getConPDO()->prepare("UPDATE roles SET estado=? WHERE id=?");
        $sql->bindParam(1, $this->estado);
        $sql->bindParam(2, $this->id);
        $sql->execute();
        return "Estado actualizado";
    } catch (PDOException $e) {
        return "Error " . $e->getMessage();
    }
    }


    public function readUpdate(){
    
        try {
            $sql = $this->conexion->getConPDO()->prepare("SELECT * FROM roles WHERE id=?");
            $sql->bindParam(1, $this->id);
            $sql->execute();
            $result = $sql->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return "Error: " .$e->getMessage();
        }
    }



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombreRol
     */
    public function getNombreRol()
    {
        return $this->nombreRol;
    }

    /**
     * Set the value of nombreRol
     */
    public function setNombreRol($nombreRol): self
    {
        $this->nombreRol = $nombreRol;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}