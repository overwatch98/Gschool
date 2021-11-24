<?php

namespace Gschool\Model;
use PDO;

class Manager {

    protected $db;

    public function dbConnect(){
        $this->db = new PDO("mysql:host=localhost;dbname=gschool;charset=utf8", 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $this->db;
    }

    public function query($statement, $params = false){
        if($params){
            $req = $this->dbConnect()->prepare($statement);
            $req->execute([$params]);
        }
        $req = $this->dbConnect()->query($statement);
        return $req;
    }

    public function all($table){
        $req = $this->dbConnect()->query("SELECT * FROM $table");
        return $req;
    }

}