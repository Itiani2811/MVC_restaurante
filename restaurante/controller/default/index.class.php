<?php

use restaurante\controller\controller;
use restaurante\view\view;

/**
 * Description of index
 *
 * @author ItianiMoreno
 */
class index extends controller {

  public function execute() {
    
    $respuesta = 2 + 5;
    $mensaje = 'Hola desde el controlador';
    
    $variables = array(
        'title' => 'Titulo de la página',
        'respuesta' => $respuesta,
        'mensaje'=> $mensaje
    );
    
    view::defineView('default', 'index', $variables, 'html');
  }

}
