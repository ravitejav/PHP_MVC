<?php

/**
 * teacher class model
 */
class teacher_Model extends model
{
  function __construct()
  {
    parent::__construct();
  }
  public function login()
  {
    $q="SELECT `id`,`username` FROM `teacher` WHERE `username`='".$_POST['usernameoft']."' AND `password`='".hashed::create($_POST['passvalue'])."'";
    $queryobj=new queryexc;
    $this->data=$queryobj->exc($q,$this->db->con);
    if($this->data[0]===1)
    {
      $_SESSION['usernameoft']=$_POST['username'];
      $_SESSION['passvalue']=$_POST['passvalue'];
      $_SESSION['id']=$this->data[1]['id'];
      return true;
    }else
    {
        return false;
    }
  }
}

 ?>
