<?php
use restaurante\model\model;
/**
 * Description of resturanteTableBase
 *
 * @author Nani
 */
class resturanteTableBase  extends model {
    private $id;
    private $nombre;
    private $direccion;
    private $telefono;
    private $categoria;
    private $propietario;
    private $createdAt;
    private $updatedAt;
    private $deletedAt;
    const SECUENCIA='';
    
}

function getId() {
    return $this->id;
}

 function getNombre() {
    return $this->nombre;
}

 function getDireccion() {
    return $this->direccion;
}

 function getTelefono() {
    return $this->telefono;
}

 function getCategoria() {
    return $this->categoria;
}

 function getPropietario() {
    return $this->propietario;
}

 function getCreatedAt() {
    return $this->createdAt;
}

 function getUpdatedAt() {
    return $this->updatedAt;
}

 function getDeletedAt() {
    return $this->deletedAt;
}

 function setId($id) {
    $this->id = $id;
}

 function setNombre($nombre) {
    $this->nombre = $nombre;
}

 function setDireccion($direccion) {
    $this->direccion = $direccion;
}

 function setTelefono($telefono) {
    $this->telefono = $telefono;
}

 function setCategoria($categoria) {
    $this->categoria = $categoria;
}

 function setPropietario($propietario) {
    $this->propietario = $propietario;
}

 function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
}

 function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
}

 function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
}


