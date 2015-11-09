<?php

use restaurante\controller\controller;
use restaurante\view\view;

/**
 * Description of exception
 *
 * @author ItianiMoreno
 */
class sohoException extends controller {

  public function execute() {
    $variables = array(
        'title' => 'Ocurrio un error en el sistema',
        'exc' => $this->exc
    );
    view::defineView('restaurante', 'exception', $variables, 'html');
  }

}
