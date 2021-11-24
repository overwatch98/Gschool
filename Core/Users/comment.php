<?php

if (isset($_POST['postComment']) && !empty($_POST['postComment'])){
    postComment($post['id'], $_SESSION['auth']->id, $_POST['comment']);
}