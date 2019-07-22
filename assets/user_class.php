
<?php
  // require_once 'UserSession.php'
  require_once 'Basecontroller.php';

  class User extends BaseController {

    function addUser($req){
      try {
        $user_detail = array(
            $req['email_add'],
            $req['user_pass'],
            $req['f_name'].' '.$req['l_name'],
            $req['phone']
          );
        $query = 'INSERT INTO `user`(`username`, `password`, `name`, `phone`) VALUES (\''.implode('\',\'',$user_detail).'\')';
        $stmt = $this->dbConn->prepare($query);
        $stmt->execute();
        $id = $this->dbConn->lastInsertId();

        // Session Start
        ob_start();
        session_start();
        $_SESSION['session_id'] = $id;
        $_SESSION['user_id'] = $id;
        $_SESSION['name'] = $req['f_name'];

        return array(
          "message" => "User Added",
          "status" => 200,
          "id" => $id
        );
      }catch (Exception $e){
        return array(
          "message" => "User Exists",
          "status" => 500
        );
      }
    }

    function addAddress($req, $user_id){
      $user_address = array(
        $user_id,
        $req['f_name'].' '.$req['l_name'],
        $req['phone'],
        $req['full_add'],
        $req['zip_code'],
        $req['city'],
        $req['state'],
        $req['country']
      );
      $query = 'INSERT INTO `address`(`user_id`, `name`, `phone`, `detail`, `pin`, `city`, `state`, `country`) VALUES (\''.implode('\',\'',$user_address).'\')';
      $stmt = $this->dbConn->prepare($query);
      try {
        $stmt->execute();
        return array(
          "message" => "Address Added",
          "status" => 200,
          "id" => $this->dbConn->lastInsertId()
        );
      }
      catch(Exception $e) {
        return array(
          "message" => "Something Went Wrong",
          "status" => 500
        );
      }
    }

    function logIN($user_id, $pass){
      $query = 'select * from user where username= \''.$user_id.'\' and password = \''.$pass.'\'';
      $stmt = $this->dbConn->prepare($query);
      // $stmt->bindParam(":user_id", $user_id);
      // $stmt->bindParam(":pass", $pass);
      $stmt->execute();
      echo $stmt->rowCount();
      if ($stmt->rowCount() > 0){
        require_once 'UserSession.php';
        $sess = new UserSession();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $sess->start($row['id'],$row['username'],$row['name']);
        header("Location: ./index.php");
      }else {
        header("Location: ./login.php?form_action=-2");
      }
    }

  }

?>
