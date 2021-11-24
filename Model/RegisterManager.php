<?php

namespace Gschool\Model;

class RegisterManager extends Manager{

    public function register($username, $email, $password){
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO users SET username = ?, email = ?, password = ?, created = NOW()");
        $user = $req->execute([$username, $email, $password]);
        return $user;
    }

    public function findAllUser(){
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM users");
        return $req;
    }

    public function fieldExist($field_db, $field_form){
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT id FROM users WHERE $field_db = ?");
        $req->execute([$field_form]);
        $user = $req->fetch();
        return $req;
    }

    public function getUserM($username){
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT * FROM users WHERE username = ?");
        $req->execute([$username]);
        $user = $req->fetch();
        return $user;
    }

    public function userConnect($id){
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT id, username, email, password, admin, DATE_FORMAT(created, '%d-%m-%Y') AS regist_at FROM users WHERE id = ?");
        $req->execute([$id]);
        $user = $req->fetch();
        return $user;
    }

    public function find_user($username){
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT * FROM users WHERE username = :username OR email = :username");
        $req->execute(['username' => $username]);
        $user = $req->fetch();
        return $user;
    }

    public function exist($fiedl_name, $username){
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT * FROM users WHERE username = ?");
        $user = $req->execute([$fiedl_name, $username]);
        return $user;
    }

}