<?php

namespace restaurante\view;

use restaurante\myConfig\myConfig as config;

/**
 * Description of view
 *
 * @author ItianiMoreno

 */
class view {
  
  static private $view;
  static private $variables;
  static private $format;

  static public function defineView($module, $view, $variables, $format) {
    $filename = config::getPath() . 'view/' . $module . '/' . $view . 'View.' . $format . '.php';
    if (is_file($filename) === true) {
      self::$view = $filename;
      self::$variables = $variables;
      self::$format = $format;
    } else {
      throw new \PDOException('La vista a usar no existe');
    }
  }
  
  static public function renderView() {
    if(is_array(self::$variables) === true) {
      extract(self::$variables);
    }
    include_once self::$view;
  }
  
}