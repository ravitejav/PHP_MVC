<?php

/**
 * mian class for the control all things
 */
class main
{
  public $parameterspassed=false;
  function __construct()
  {
    if (isset($_GET['url']))
    {
      $this->url=$_GET['url'];
    }else {
      $this->url="homepage";
    }
    $this->url=rtrim($this->url,'/');
    $this->list=explode('/',$this->url);
  }
  public function methodincluder()
  {
    if (isset($this->list[0]))
    {
      $this->file="controller/".$this->list[0].".php";
      if (file_exists($this->file))
      {
        include $this->file;
        $this->modobj=new $this->list[0]();
        if(!isset($this->list[1]))
        {
          $this->modobj->index();
        }
      }else
      {
        $message="Url requested is not found";
        $er = new fineerror;
        $er->loadmodel($message);
      }
    }
    if (isset($this->list[1]))
    {
      if(method_exists($this->modobj,$this->list[1]))
      {
        $this->modobj->{$this->list[1]}();
      }else
      {
          $message="Url requested is not found";
          $er = new fineerror;
          $er->loadmodel($message);
      }
    }
  }
  public function methodswithparameters()
  {
    if (isset($this->list[2]))
    {
      if (isset($this->list[1]))
      {
        $this->file="controller/".$this->list[0].".php";
        include $this->file;
        $this->modobj=new $this->list[0]($this->list[0]);
        if(method_exists($this->modobj,$this->list[1]))
        {
          $this->modobj->{$this->list[1]}($this->list[2]);
          $this->parameterspassed=true;
        }else
        {
            $message="Url requested is not found";
            $er = new fineerror;
            $er->loadmodel($message);
        }
      }
    }else
    {
      $this->parameterspassed=false;
    }
  }
}
?>
