<?php

/**
 * teacher class for the login
 */
class teacher extends Control
{
  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->view->render('homepage/index');
  }
  public function login()
  {
      if (isset($_POST['usernameoft']) && isset($_POST['passvalue']))
      {
        if(!empty($_POST['usernameoft']) && !empty($_POST['passvalue']))
        {
          include 'model/teacher_Model.php';
          $this->model=new teacher_Model;
          $data=$this->model->login();
          if($data)
            header('location:'.URL.'teach');
          else
            $this->view->render('teacher/teacher');
        }else
        {
            header('location:'.URL.'home');
        }
      }else
      {
          header('location:'.URL.'home');
      }
    }
}
?>
