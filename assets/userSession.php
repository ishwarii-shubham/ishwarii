<?php
  ob_start();
  session_start();
  require_once 'Basecontroller.php';

  class UserSession extends BaseController {
    function sessionCheck() {
      if ($_SESSION){
            return '<br><a href="#">'.$_SESSION['name'].'</a>';
            // return $_SESSION;
          } else {
              if(strpos($_SERVER['PHP_SELF'], 'placeorder.php')){
                header("Location: ../login.php");
              } else {
                return '<br><a href="../login.php">Log In</a>';
              }
          }
    }

    function start($id, $user_id, $user_name) {
      // Setting Session Variables
      $_SESSION['session_id'] = $id;
      $_SESSION['user_id'] = $user_id;
      $_SESSION['name'] = $user_name;
    }

    function end() {
      // Unsetting Session Variables
      session_unset();
      // Destroying Session
      session_destroy();
    }

  }

  function Test(){
    $sess = new UserSession();
    $sess->start('123','user-1','Varun');
    echo $sess->sessionCheck();
    echo $sess->end();
    echo $sess->sessionCheck();
  }

  if($_SESSION && array_key_exists('id', $_REQUEST)){
    if($_REQUEST['id'] == -1){
      session_unset();
      session_destroy();
    }
  }

// Test();

?>
