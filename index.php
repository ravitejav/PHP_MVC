<?php
//main class for the url control
include 'defines/Model.php';
include 'defines/View.php';
include 'defines/Control.php';
include 'controller/error.php';
include 'defines/main.php';


//all sub class and constants
include 'defines/constants.php';
include 'classlib/database.class.php';
include 'classlib/query_exc.class.php';
include 'classlib/hash.php';

$obj=new main;
$obj->methodswithparameters();
if (!($obj->parameterspassed))
{
  $obj->methodincluder();
}

?>
