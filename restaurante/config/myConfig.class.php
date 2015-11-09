<?php

namespace restaurante\myConfig;

use restaurante\config\config;

/**
 * Description of myConfig
 *
 * @author ItianiMoreno
 */
class myConfig extends config {
  
  static private $DSN;
  static private $persistentConnection;

  /**
   * Obtiene el DSN para la conexión a la base de datos con PDO
   * @return string
   */
  static public function getDSN() {
    return self::$DSN;
  }

  /**
   * Obtiene falso o verdadero para la configuración de conexión persistente
   * a la base de datos con PDO
   * @return boolean
   */
  static public function getPersistentConnection() {
    return self::$persistentConnection;
  }

  /**
   * Fija el DSN para la conexión la base de datos con PDO<br>
   * Ejemplo: mysql:host=localhost;port=3306;dbname=azucar
   * @param string $DSN
   */
  static public function setDSN($DSN) {
    self::$DSN = $DSN;
  }

  /**
   * Fija falso o verdadero para la conexión persistente a la base de datos con
   * la librería PDO
   * @param boolean $persistentConnection Conexión persistente
   */
  static public function setPersistentConnection($persistentConnection) {
    self::$persistentConnection = $persistentConnection;
  }
  
}
