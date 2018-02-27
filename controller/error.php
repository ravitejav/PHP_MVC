<?php

/**
 * error class
 */
class fineerror extends Control
{
  function __construct()
  {
    parent::__construct();
  }
  public function loadmodel($error_message)
  {
    include "model/error_Model.php";
    $classname="error_Model";
    $modelobj=new $classname;
    $modelobj->loadview($error_message);
    $this->view->render("error/errorv");
  }
}

?>
