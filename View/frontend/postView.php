<?php
$title = $post->title;
isLogged();
?>

<?php ob_start(); ?>

<div class="jumbotron">
    <h3 class="light teal-text text-center"><?= $post->title ?></h3>
</div>
<div class="container"><hr>
    <div class="post-content">
        <p class="p-format"><?= e($post->content) ?></p>
        <a href="#" class="hoverable chip btn btn-small blue accent-2">J'aime</a>
        <a href="#" class="hoverable chip btn btn-small red darken-2">Je n'aime pas</a><br><br>
        <a href="home" class="hoverable chip teal lighten-2">Retour</a>
    </div>
    <h4 class="teal-text text-center">Commentaires</h4><hr><hr>
    <form action="addcomment-<?= $post->id ?>" method="post">
        <div class="comment-section">
            <label for="comment">Commentaire : </label>
        </div>
        <div>
            <textarea class="materialize-textarea" name="comment" id="comment"></textarea>
        </div><br>
        <div>
            <button type="submit" name="postComment" class="btn">Envoyer</button>
        </div>
    </form><br><br>
    <?php while ($data = $comments->fetch()) : ?>
        <div class="comment-content">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-2">
                    <div class="chat-avatar">
                        <img src="Public/imgs/profil.jpg" alt="">
                    </div>
                    <strong class="teal-text "><?= format($data->username) ?></strong>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-10">
                    <div>
                        <p><?= e($data->comment) ?> </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile ; ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'View/frontend/template.php'; ?>