<?php

namespace restaurante\controller;

/**
 * Description of controller
 *
 * @author ItianiMoreno
 */
abstract class controller {
  
  protected $exc;

  public function __construct(\PDOException $exc = null) {
    $this->exc = $exc;
  }

  abstract public function execute();
}
