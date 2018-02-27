<?php


/**
 * hash table to create the hashed password for the encryptation
 */
class hashed
{

  function __construct()
  {

  }
  public function create($value)
  {
    $content=hash_init('md5',HASH_HMAC,HASH_PASSWORD_ENCRY);;
    hash_update($content,$value);
    return hash_final($content);
  }
}



?>
