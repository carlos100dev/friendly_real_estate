<?php defined('__ROOT__') OR exit('No direct access allowed');

class Controller{
  public function __construct(){
    $this->view = new View();
  }
}
