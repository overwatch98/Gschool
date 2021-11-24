<?php
require 'Core/fonctions/fonctions.php';
$error = '';
if (!empty($_POST)){
    extract($_POST);
    $user = find_user_by_username($username);
    if(!$user){
        $error = "Identifiant ou mot de pase incorrect";
    }else{
        if ($password == password_verify($password, $user->password)){
            $_SESSION['auth'] = $user;
            if($_SERVER['HTTP_REFERER'] != 'register'){
                redirect('dashboard');
            }else{
                redirect('account-' . $_SESSION['auth']->id);
            }
        }else{
            $error = "Identifiant ou mot de pase incorrect";
        }
    }
}