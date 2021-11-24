<?php 

if (!function_exists("redirect")){
    function redirect($page){
        header('Location: ' . $page);
        exit();
    }
}

if (!function_exists("it_is_me")){
    function it_is_me($id, $sessionId){
        if($id === $sessionId){
            return true;
        }
    }
}

if (!function_exists('e')){
    function e($variable){
        return nl2br(htmlspecialchars($variable));
    }
}

if(!function_exists('format')){
    function format($variable){
       return ucfirst(strtolower($variable));
    }
}

if (!function_exists('isLogged')){
    function isLogged(){
        if(!isset($_SESSION['auth'])){
            $_SESSION['flash']['danger'] = "Veuillez vous connecter pour acceder á cette page !";
            redirect("login");
        }
    }
}

if (!function_exists('isAdmin')){
    function isAdmin(){
        if($_SESSION['auth']->admin != 1){
            $_SESSION['flash']['danger'] = "Attention vous n'avez pas le droit d'acceder á cette page !";
            redirect("login");
        }
    }
}

if (!function_exists('isConnect')){
    function isConnect(){
        if(isset($_SESSION['auth'])){
            redirect('account&id=' . $_SESSION['auth']->id);
        }
    }
}