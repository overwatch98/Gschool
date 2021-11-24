<?php
require 'Core/Users/chat.php';
$title = 'Chat';
isLogged();
?> 

<?php ob_start(); ?>

<div class="container chat-body">
    <form action="" method="post" class="col s12">
        <div>
            <label for="message">Votre message : </label>
            <textarea class="materialize-textarea" name="message" id="message" row="5"></textarea>
        </div><br>
        <div>
            <button type="submit" name="addmsg" class="btn">Envoyer</button>
        </div>
    </form><br><br>
    <?php while ($data = $chats->fetch()) : ?>
        <div class="card-panel">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <div class="chat-avatar">
                        <a href="account-<?=  $data->user->id ?>"><img src="Public/imgs/profil.jpg" alt=""></a>
                    </div>
                    <span><a href="account-<?= $data->id ?>"class="teal-text"> <?= format($data->username) ?></a></span>
                    <hr class="chat-hr">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <p>
                        <?= $data->message ?>
                    </p>
                    <em><?= $data->created ?></em>
                </div>
            </div>
        </div>
    <?php endwhile ; ?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require 'View/frontend/template.php'; ?>