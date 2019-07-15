<?php

class DbConnect
{
    private $servername = "localhost";
    private $username = "varun";
    private $password = "VP#niru#1996";
    private $database = "ishwarii";

    function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

$db = new DbConnect;
$db->connect();


?>
