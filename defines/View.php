<?php

/**
 * mian view page controller
 */
class View
{
  function __construct()
  {

  }
  public function render($path)
  {
    include "view/".$path.".php";
  }
}




?>
