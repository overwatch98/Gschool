<?php

if(isset($_POST['addmsg'])){
    if (!empty($_POST['message'])){
        insMessage($_SESSION['auth']->id, $_POST['message']);
        redirect('chat');
    }else{
        $_SESSION['flash']['danger'] = "Veuillez renter un message !";
    }
}