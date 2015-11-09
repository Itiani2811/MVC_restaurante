<?php

namespace restaurante\dispatcher;

use restaurante\myConfig\myConfig as config;
use restaurante\view\view;

include_once config::getPath() . 'lib/restaurante/model.class.php';
include_once config::getPath() . 'lib/restaurante/view.class.php';
include_once config::getPath() . 'lib/restaurante/controller.class.php';

/**
 * Description of dispatcher
 *
 * @author ItianiMoreno
 */
class dispatcher {
  
  static private $module;
  static private $action;

  static public function main() {
    try {
      self::getModuleAndAction();
      $filename = self::checkFile();
      include_once $filename;
      $controller = new self::$action();
      $controller->execute();
      view::renderView();
    } catch (\PDOException $exc) {
      include config::getPath() . 'controller/restaurante/sohoException.class.php';
      $exception = new \sohoException($exc);
      $exception->execute();
      view::renderView();
    }
  }
  
  static private function getModuleAndAction() {
    if (isset($_SERVER['PATH_INFO']) === true) {
      $data = explode('/', $_SERVER['PATH_INFO']);
      self::$module = $data[1];
      self::$action = $data[2];
    } else {
      self::$module = config::getDefaultModule();
      self::$action = config::getDefaultAction();
    }
  }
  
  static private function checkFile() {
    $filename = config::getPath() . 'controller/' . self::$module . '/' . self::$action . '.class.php';
    if (is_file($filename) === false) {
      throw new \PDOException('El módulo y acción solicitado no existe');
    }
    return $filename;
  }

}
