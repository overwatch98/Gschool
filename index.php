<?php 
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
require 'vendor/autoload.php'; 
try {
    
    if (isset($_GET['url'])){
        $url = $_GET['url'];
        $url = explode('-', $url);
    }else{
        $url[0] = 'home';
    }

    if ($url[0] === 'home'){
        listPost();
    }elseif($url[0] === 'blog'){
        require 'View/frontend/blog.php';
    }elseif ($url[0] === 'dashboard'){
        dashboardUser();
    }elseif ($url[0] === 'followlist'){
        listUsers();
    }elseif ($url[0] === 'register'){
        registView();
    }elseif($url[0] === 'chat'){
        chats();
    }elseif($url[0] === 'post'){
        if (isset($url[1]) && $url[1] > 0){
            post();
        }else{
            throw new Exception("Accun identifiant du billet envoyer");
        }
    }elseif($url[0] === 'addcomment'){
        if (isset($url[1]) && $url[1] > 0){
            if (!empty($_POST['comment'])){
                postComment($url[1], $_SESSION['auth']->id, $_POST['comment']);
            }else{
                throw new Exception("Accun identifiant du commentaire envoyer");
            }
        }
    }elseif($url[0] === 'account'){
        if(isset($url[1]) && $url[1] > 0){
            connect_user_by_id();
        }else{
            redirect("login");
        }
    }elseif($url[0] === 'logout'){
        logout();
    }elseif ($url[0] === 'login'){
        require 'View/frontend/loginView.php';
    }elseif ($url[0] === 'admin'){
        listPostAdmin();
    }elseif ($url[0] === 'addpost'){
        require 'View/backend/addpost.php';
    }elseif ($url[0] === 'homadmin'){
        require 'View/backend/home.php';
    }else{
        throw new Exception("Ouppss page introuvable");
    }
} catch (Exception $e){
    require 'View/frontend/404.php';
}