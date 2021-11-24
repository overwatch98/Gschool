<?php

namespace Gschool\Model;

class PostManager extends Manager{

    public function getAll(){
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%Y à %H:%i:%s') AS creation_date_fr FROM posts ORDER BY creation_date DESC");
        $req = $req->fetchAll(\PDO::FETCH_OBJ);
        return $req;
    }

    public function getPost($postId){
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%Y à %H:%i:%s') AS creation_date_fr FROM posts WHERE id = ?");
        $req->execute([$postId]);
        $post = $req->fetch();
        return $post;

    }

}