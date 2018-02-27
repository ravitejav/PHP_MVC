<?

/**
 * error page model viewer
 */
class error_Model extends Model
{
  function __construct()
  {

  }
  public function loadview($error_notification)
  {
    session_start();
    $_SESSION['errornameof']=$error_notification;
    
  }
}


?>
