<?php

use restaurante\myConfig\myConfig as config;

include_once config::getpath() . 'model/base/restauranteTableBase.class.php';

/**
 * Description of restauranteTable
 *
 * @author Nani
 */
class restauranteTable extends restauranteTableBase {

    static public function getALL() {
        $conn = self::getConexion();
        $sql = 'SELECT id,nombre,direccion,telefono,categoria,propietario,crated_at,update_at,deleted_at FROM restaurante WHERE deleted_at IS NULL';
        $respuesta = $conn->prepare($sql);
        $respuesta->execute();
        return ($respuesta->rowCount() > 0) ? $respuesta->fetchALL(PDO::FETCH_OBJ) : false;
    }

    static public function getById($id) {
        $conn = self::getConexion();
        $sql = 'SELECT id,nombre,direccion,telefono,categoria,propietario,crated_at,update_at,deleted_at'
                . 'FROM restaurante'
                . ' WHERE deleted_at IS NULL'
                . 'id= : id';
        $params = array(
            ':id' => $id
        );
        $respuesta = $conn->prepare($sql);
        $respuesta->execute($params);
        return ($respuesta->rowCount() > 0) ? $respuesta->fetchALL(PDO::FETCH_OBJ) : false;
    }

    public function save() {
        $conn = self::getConexion();
        $sql = 'INSERT INTO restaurante(nombre,direccion,telefono,categoria,propietario) VALUES (:nombre,:direccion,:telefono,:categoria,:propietario)';
        $params = array(
            ':nombre' => $this->getNombre(),
            ':direccion' => $this->getDireccion(),
            ':telefono' => $this->getTelefono(),
            ':categoria' => $this->getCategoria(),
            ':propietario' => $this->getPropietario()
        );
        $respuesta = $conn->prepare($sql);
        $respuesta->execute($params);
        return $conn->lastInsertId(self::SECUENCIA);
    }

    public function update() {
        $conn = self::getConexion();
        $sql = 'UPDATE restaurante SET  nombre = :nombre,direccion = :direccion,telefono = :telefono,categoria = :categoria,propietario = :propietario WHERE id = :id';
        $params = array(
            ':nombre' => $this->getNombre(),
            ':direccion' => $this->getDireccion(),
            ':telefono' => $this->getTelefono(),
            ':categoria' => $this->getCategoria(),
            ':propietario' => $this->getPropietario(),
            ':id' => $this->getId()
        );
        $respuesta = $conn->prepare($sql);
        $respuesta->execute($params);
        return true;
    }

    public function delete($deleteLogical = true) {
        $conn = self::getConexion();
        $params = array(
            ':id' => $this->getId()
        );
        switch ($deleteLogical) {
            case true:
                $sql = 'UPDATE restaurante SET deleted_at = now() WHERE id = :id';

                break;
            case false:
                $sql = 'DELETE FROM restaurante WHERE id=:id';

                break;

            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado logico o fisico');
        }
        $respuesta = $conn->prepare($sql);
        $respuesta->execute($params);
        return true;
    }

}
