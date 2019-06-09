<?php require_once('DbConnect.php');
class BaseController
{
    public $dbConn;

    function __construct()
    {
        $db = new DbConnect;
        $this->dbConn = $db->connect();
    }
}

  ?>