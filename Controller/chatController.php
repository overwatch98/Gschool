<?php

use Gschool\Model\ChatManager;


function chats(){
    $chatManager = new ChatManager();
    $chats = $chatManager->getAll();
    require 'View/frontend/chatView.php';
}

function insMessage($user_id, $message){
    $chatManager = new ChatManager();
    $message = e($message);
    $chat = $chatManager->addMessage($user_id, $message);
    return $chat;
}