<?php
/**
 * homepage controller to control over the sign in of student and teacher
 */
class homepage extends control
{
  function __construct()
  {
      parent::__construct();
  }
  public function index()
  {
    $this->view->render('homepage/index');
  }
}




?>
