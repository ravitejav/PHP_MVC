<?php

/**
 * home page controller to control the login and signup
 */
class home extends Control
{
  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->view->render('homepage/index');
  }
  public function teacher()
  {
    $this->view->render('teacher/teacher');
  }
  public function student()
  {
    $this->view->render('student/student');
  }
  public function login()
  {
    if (isset($_POST['username']) && isset($_POST['passvalue']))
    {
      if(!empty($_POST['username']) && !empty($_POST['passvalue']))
      {
        include 'model/home_Model.php';
        $this->model=new home_Model;
        $data=$this->model->login();
        if($data)
          header('location:'.URL.'member');
        else
          $this->view->render('login/index');
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
