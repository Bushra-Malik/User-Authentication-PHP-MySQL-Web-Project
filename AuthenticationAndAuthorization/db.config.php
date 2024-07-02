<?php
define('dbHost','localhost');
define('dbUserName','root');
define('dbPassword','');
define('dbName','authenticationdb');
class Database{
    private $con;
    public function __construct()
    {
        $this->con = new mysqli(dbHost,dbUserName,dbPassword, dbName);
        if($this->con->connect_error){
            die("Error Connective:".$this->con->connect_error);
        }
    }
    public function execQuery($qry){
        $result = $this->con->query($qry);
        $this->con->close();
        return $result;
    }
}
?>