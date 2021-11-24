<?php 
$title = 'Personnes';
ob_start()?>

<div class="jumbotron">
    <h4 class="h4-format teal-text text-center">Listes des Membres</h4>
</div>
<div class="container">
    <div class="row">
    <?php foreach($users as $user):?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="card-panel">
                <div class="follow-user-img">
                <a href="account-<?= $user->id?>"><img src="Public/imgs/profil.jpg" alt=""></a>
                    <hr>
                    <a href="account-<?= $user->id?>-<?= $user->username?>"><strong class="teal-text"><?= format($user->username) ?></strong></a>
                    <a href="#" style="margin-top: 10px;" class="btn btn-small">Suivre</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>
<?php
$content = ob_get_clean();
require 'View/frontend/template.php';
?>