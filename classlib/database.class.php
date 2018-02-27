<?php

/**
 * class for the database connection and exectuing the query
 */
class database
{

  function __construct($db_name,$db_host,$db_user,$db_pass)
  {
    $this->db_name=$db_name;
    $this->db_host=$db_host;
    $this->db_user=$db_user;
    $this->db_pass=$db_pass;
  }
  public function connect()
  {
    if($this->con=mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name))
    {
      if($this->dbcon=mysqli_select_db($this->con,$this->db_name))
      {

      }else
      {
        $_SESSION['logic']='Databse is not avalible now, try again later';
        header('location:./Error.php');
      }
    }else
    {
        $_SESSION['logic']='Establishment of connection to databse is not possible now, try again later';
        header('location:./Error.php');
    }
  }
}




?>
