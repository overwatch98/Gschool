<?php

namespace Gschool\Model;

class ChatManager extends Manager{

    public function getAll(){
        $db = $this->dbConnect();
        $req = $db->query("SELECT users.id, users.username, chat.id, chat.user_id, chat.message, chat.created FROM chat LEFT JOIN users ON users.id = chat.user_id ORDER BY created DESC");
        return $req;
    }

    public function addMessage($user_id, $message){
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO chat SET user_id = ?, message = ?, created = NOW()");
        $chat = $req->execute([$user_id, $message]);
        return $chat;
    }

}