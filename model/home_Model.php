<?php

/**
 * home class model
 */
class home_Model extends model
{

  function __construct()
  {
    parent::__construct();
  }
  public function login()
  {
    $q="SELECT `id`,`username` FROM `user` WHERE `username`='".$_POST['username']."' AND `password`='".hashed::create($_POST['passvalue'])."'";
    $queryobj=new queryexc;
    $this->data=$queryobj->exc($q,$this->db->con);
    if($this->data[0]===1)
    {
      $_SESSION['username']=$_POST['username'];
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
