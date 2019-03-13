<?php

include_once 'Session.php';
include 'Database.php';

class User{

    public $nameDb;

    public function __construct(){
        $this->nameDb = new Database();


    }

    public function userRegistration($data){
        $name = $data['name'];
        $username = $data['username'];
        $email = $data['email'];
        $password = md5($data['name']);
//        $chk_email = $this->emailCheck($email);

        if (empty($name) || empty($username) || empty($email) || empty($password)){
            $msg = "<div class='alert-danger'><strong>Error!!!</strong></div>";
            return $msg;
        }
        if (strlen($username)<3){
            $msg = "<div class='alert-danger'><strong>Username is too short!!!</strong></div>";
            return $msg;
        }
        if (strlen($username)<3){
            $msg = "<div class='alert-danger'><strong>Username is too short!!!</strong></div>";
            return $msg;
        } elseif (preg_match('/[^a-z0-9_-]+/i', $username)){
            $msg = "<div class='alert-danger'><strong>Username is not valid!!!</strong></div>";
            return $msg;
        }
        if (filter_var($email,FILTER_VALIDATE_EMAIL)===false){
            $msg = "<div class='alert-danger'><strong>Email is not valid!!!</strong></div>";
            return $msg;
        }

        if (emailCheck($email)==true){
            $msg = "<div class='alert-danger'><strong>Email is already exist!!!</strong></div>";
            return $msg;
        }

        $sql = "INSERT INTO tbl_user (name, username, email, password) 
                VALUES(:name, :username, :email, :password) ";
        $query = $this->nameDb->pdo->prepare($sql);
        $query->bindValue(':name', "%{$name}%");
        $query->bindValue(':username', "%{$username}%");
        $query->bindValue(':email', "%{$email}%");
        $query->bindValue(':password', "%{$password}%");
        $result = $query->execute();
        if ($result){
            $msg = "<div class='alert-success'><strong>VALUE INSERTED</strong></div>";
            return $msg;
        } else {
            $msg = "<div class='alert-danger'><strong>NOT INSERTED</strong></div>";
            return $msg;
        }

    }

    public function emailCheck($email){
        $sql = "SELECT email FROM tbl_user WHERE email= :email";
        $query = $this->nameDb->pdo->prepare($sql);
//        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':email', "%{$email}%");
        $query->execute();
        if ($query->rowCount()>0){
            return true;
        } else {
            return false;
        }
    }

}