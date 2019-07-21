<?php
  include('DbConnect.php');
  class BaseController
  {
      public $dbConn;

      function __construct()
      {
          $db = new DbConnect;
          $this->dbConn = $db->connect();
      }

      function lastInsertId(){
        return $this->$dbConn->lastInsertId();
      }
  }
?>
