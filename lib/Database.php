<?php

class Database {

    private $dbServer = 'localhost';
    private $userDb='root';
    private $passDb='';
    private $nameDb='db_pprac';
    public $pdo;

    public function __construct(){
        if (!isset($this->pdo)){
            try{
                $link = new PDO('mysql:host='.$this->dbServer.';dbname'.$this->nameDb, $this->userDb, $this->passDb);
//                $link =  new PDO('mysql:host=' . $this->dbServer . ';dbname=' . $this->nameDb . ';charset=utf8', '' . $this->userDb . '', '' . $this->passDb . '');
                $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $link->exec("SET CHARACTER SET utf8");
                $this->pdo = $link;
            } catch (PDOException $exception){
                die("Failed to connect".$exception->getMessage());
            }
        }
    }

}