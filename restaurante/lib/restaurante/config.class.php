<?php

namespace restaurante\config;

/**
 * Description of config
 *
 * @author ItianiMoreno
 */
class config {
  
  static private $path;
  static private $url;
  static private $driver;
  static private $host;
  static private $port;
  static private $dbName;
  static private $dbUser;
  static private $dbPassword;
  static private $defaultModule;
  static private $defaultAction;
  static private $cookieNameSession;

  /**
   * Obtiene la dirección física del proyecto en el servidor<br>
   * Ejemplo<br>
   * MAC:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/Applications/MAMP/htdocs/azucar/<br>
   * Linux:&nbsp;&nbsp;&nbsp;/var/www/azucar/<br>
   * Windows:&nbsp;c:/xampp/htdocs/azucar/<br>
   * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c:/wamp/www/azucar/<br>
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @return string
   */
  static public function getPath() {
    return self::$path;
  }

  /**
   * Obtiene la dirección URL del proyecto<br>
   * Ejemplo<br>
   * http://localhost/azucar/web/<br>
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @return string
   */
  static public function getUrl() {
    return self::$url;
  }

  /**
   * Obtiene el controlador que se usará para la conexión a la base de datos<br>
   * Ejemplo<br>
   * Para PostgreSQL sería pgsql<br>
   * Para MySQL sería mysql<br>
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @return string
   */
  static public function getDriver() {
    return self::$driver;
  }

  /**
   * Obtiene la dirección IP de la base de datos<br>
   * Ejemplo: localhost o 127.0.0.1 entre otros
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @return string
   */
  static public function getHost() {
    return self::$host;
  }

  /**
   * Obtiene el puerto de conexión de la base de datos<br>
   * Ejemplo:<br>
   * MySQL su puerto es 3306<br>
   * PostgreSQL su puerto es 5432
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @return integer
   */
  static public function getPort() {
    return self::$port;
  }

  /**
   * Obtiene el nombre de la base de datos a usar
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @return string
   */
  static public function getDbName() {
    return self::$dbName;
  }

  /**
   * Obtiene el usaurio de la base de datos
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @return string
   */
  static public function getDbUser() {
    return self::$dbUser;
  }

  /**
   * Obtiene la contraseña de la base detos
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @return string
   */
  static public function getDbPassword() {
    return self::$dbPassword;
  }

  /**
   * Obtiene el nombre del módulo por defecto del sistema
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @return string
   */
  static public function getDefaultModule() {
    return self::$defaultModule;
  }

  /**
   * Obtiene el nombre de la acción por defecto del sistema
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @return string
   */
  static public function getDefaultAction() {
    return self::$defaultAction;
  }
  
  /**
   * Obtiene el nombre de la cookie para el manejo de sesión
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @return string
   */
  static public function getCookieNameSession() {
    return self::$cookieNameSession;
  }

  /**
   * Fija la dirección física del proyecto en el servidor<br>
   * Ejemplo<br>
   * MAC:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/Applications/MAMP/htdocs/azucar/<br>
   * Linux:&nbsp;&nbsp;&nbsp;/var/www/azucar/<br>
   * Windows:&nbsp;c:/xampp/htdocs/azucar/<br>
   * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c:/wamp/www/azucar/<br>
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @return string
   */
  static public function setPath($path) {
    self::$path = preg_replace('/\\\\|\//', DIRECTORY_SEPARATOR, $path);
  }

  /**
   * Fija la dirección URL del proyecto<br>
   * Ejemplo<br>
   * http://localhost/azucar/web/<br>
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @return string
   */
  static public function setUrl($url) {
    self::$url = $url;
  }

  /**
   * Fija el controlador que se usará para la conexión a la base de datos<br>
   * Ejemplo<br>
   * Para PostgreSQL sería pgsql<br>
   * Para MySQL sería mysql<br>
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @param string $driver Controlador
   */
  static public function setDriver($driver) {
    self::$driver = $driver;
  }

  /**
   * Fija la dirección IP de la base de datos<br>
   * Ejemplo: localhost o 127.0.0.1 entre otros
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @param string $host Dirección IP
   */
  static public function setHost($host) {
    self::$host = $host;
  }

  /**
   * Fija el puerto de conexión de la base de datos<br>
   * Ejemplo:<br>
   * MySQL su puerto es 3306<br>
   * PostgreSQL su puerto es 5432
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @param integer $port Puerto
   */
  static public function setPort($port) {
    self::$port = $port;
  }

  /**
   * Fija el nombre de la base de datos a usar
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @param string $dbName Nombre de la base de datos
   */
  static public function setDbName($dbName) {
    self::$dbName = $dbName;
  }

  /**
   * Fija el usaurio de la base de datos
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @param string $dbUser Usuario
   */
  static public function setDbUser($dbUser) {
    self::$dbUser = $dbUser;
  }

  /**
   * Fija la contraseña de la base de datos
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @param string $dbPassword Contraseña
   */
  static public function setDbPassword($dbPassword) {
    self::$dbPassword = $dbPassword;
  }

  /**
   * Fija el nombre del módulo por defecto del sistema
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @param string $defaultModule Nombre del módulo
   */
  static public function setDefaultModule($defaultModule) {
    self::$defaultModule = $defaultModule;
  }

  /**
   * Fija el nombre de la acción por defecto del sistema
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @param string $defaultAction Nombre de la acción
   */
  static public function setDefaultAction($defaultAction) {
    self::$defaultAction = $defaultAction;
  }
  
  /**
   * Fija el nombre de la cookie para el manejo de sesión
   * @author Itiani Moreno <itiani2811@gmail.com>
   * @version 1.0
   * @param string $cookieNameSession Nombre de la cookie
   */
  static public function setCookieNameSession($cookieNameSession) {
    self::$cookieNameSession = $cookieNameSession;
  }

}