<?php
/**
 * main model class
 */
class Model
{
  function __construct()
  {
    $this->db=new database(DB_NAME,DB_HOST,DB_USER,DB_PASS);
    $this->db->connect();
  }
}


 ?>
