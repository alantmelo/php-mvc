<?php

namespace Core;
use PDO;
class DB {
    private $host;
    private $port;
    private $user;
    private $pass;
    private $dbname;
    protected $conn;
    
   public function __construct() {
       $this->host = "localhost";
       $this->port = "3306";
       $this->user = "root";
       $this->pass = "";
       $this->dbname = "mvc";
       $this->conn = new PDO ( "mysql:host=".$this->host.";dbname=".$this->dbname."", $this->user, $this->pass );
   }
   
    
}
