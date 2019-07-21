<?php
  ob_start();
  require_once 'user_class.php';

  function registerUser($req){
    $sess = new User();
    $user = $sess->addUser($req);
    if(!array_key_exists('id', $user)){
      return $user;
    }
    $address = $sess->addAddress($req, $user['id']);
    if($user['status'] == 200 && $address['status'] == 200 ){

      return array(
        "message" => "User and Address Created Successfully",
        "status" => 200
      );
    }
    else{
      echo 'adding address';
      return array(
        "message" => "Something Went Wrong",
        "status" => 500
      );
    }
  }

  $res = registerUser($_REQUEST);
  if ($res['status'] == '200'){
    header("Location: ../checkout.php");
  }else {
    header("Location: ../register.php");
  }
?>
