<?php 
use Gschool\Model\Validator;


if(!empty($_POST)){
    $errors = [];
    if (empty($_POST['username']) || !preg_match("/^[a-zA-Z0-9_]+$/", $_POST['username'])){
        $errors['username'] = "Votre pseudo n'est pas valide (Alphanumerique) minimum 3 carractères";
    }else{
        //$user = exist('username', $_POST['username']);
        if ($user){
            $errors['username'] = "Ce pseudo est déjà pris ";
        }
    }
    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Votre adress email n'est pas valide";
    }else{
        //$user = exist('email', $_POST['email']);
        if ($user){
            $errors['email'] = "Cet email est déjà utilisé pour un autre compte";
        }
    }if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $errors['password'] = "Vous devez rentré un mot de passe valide minimum 6 carractères";
    }if (empty($errors)){
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $username = format($_POST['username']);
        regist($username, $_POST['email'], $password);
        $user = getUser($_POST['username']);
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = "Féllicitation {$_SESSION['auth']->username} votre compte a été bien crée ! ";
        redirect('account-' . $_SESSION['auth']->id);
    }
}