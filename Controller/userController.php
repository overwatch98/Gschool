<?php 
use Gschool\Model\registerManager;
use Gschool\Model\Manager;
require_once('Model/registerManager.php');

function registView(){
    require 'View/frontend/registerView.php';
}

function listUsers(){
    $registerManager = new RegisterManager();
    $users = $registerManager->findAllUser();
    require 'View/frontend/followlist.php';
}

function exist($field_db, $field_form){
    $registerManager = new RegisterManager();
    $email = $registerManager->fieldExist($field_db, $field_form);
    return $email;
}

function getUser($username){
    $registerManager = new RegisterManager();
    $user = $registerManager->getUserM($username);
    return $user;
}

function regist($username, $email, $password){
    $registerManager = new RegisterManager();
    $regist = $registerManager->register($username, $email, $password);
    return $regist;
}

function connect_user_by_id(){
    $registerManager = new RegisterManager();
    $url = $_GET['url'];
    $url = explode('-', $url);
    $user = $registerManager->userConnect($url[1]);
    require 'View/frontend/accountView.php';
}

function find_user_by_username($username){
    $registerManager = new RegisterManager();
    $user = $registerManager->find_user($username);
    return $user;
}

function dashboardUser(){
    $Manager = new Manager();
    $users = $Manager->all('users');
    require 'View/frontend/dashboard.php';
}

function logout(){
    require 'Core/fonctions/fonctions.php';
    unset($_SESSION['auth']);
        $_SESSION['flash']['success'] = "Vous êtes maintenant déconnecter !";
     redirect("login");
}