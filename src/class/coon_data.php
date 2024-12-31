<?php

class connection_db
{
    private $host = 'localhost';
    private $dbName = 'DriveLoc';
    private $userName = 'root';
    private $pw = '1234';

    public $conx;

    public function __construct()
    {
        try {
            $this->conx = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->userName, $this->pw);
            $this->conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conx->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("CONNECTION FAILED :" . $e->getMessage());
        }
    }
}



?>



