<?php

namespace Libs\Database;

use PDO;
use PDOException;

class MySQL
{
    private $dbhost;
    private $dbname;
    private $dbuser;
    private $dbpass;
    private $db;
    public function __construct(
        $dbhost = "localhost:8080",
        $dbname = "eimg_project",
        $dbuser = 'root',
        $dbpass = ''
    ) {
        $this->dbhost = $dbhost;
        $this->dbname = $dbname;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
    }
    public function connect()
    {
        try {
            $this->db = new PDO("mysql:dbhost=$this->dbhost;dbname=$this->dbname", $this->dbuser, $this->dbpass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
            return $this->db;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
