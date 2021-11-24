<?php 
require 'Core/Users/loginUser.php';
$title = 'Accueil'; 
?> 

<?php ob_start(); ?>
<div class="home-body">
    <div class="imgban">
        <img src="Public/imgs/blogbanner.jpg" alt="image">
    </div>
    <div class="button">
        <div class="inner-banner">
            <p class="btn-para">Gschool Learn how to be the developper from scratch !!! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore veniam, fuga cupiditate labore ullam facere. Reiciendis sequi,  <a href="register" style="color: #00ecd5;">Rejoingnez la communauté Gshool !!!</a></p>
            <button class="btn begin"><a href="register" style="color: #fff;">Commençez</a></button>   
        </div>
        <?php if (!isset($_SESSION['auth'])) : ?>
        <div class="inner-login">
            <?php if (!empty($error)) : ?>
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
            <?php endif ; ?>
            <form action="" data-parsley-validate method="post" class="col s12">
                <div class="input-field">
                    <label style="color: #fff;" for="username">Pseudo ou email </label>
                    <input type="text" name="username" id="username" class="validate" required="required">
                </div>
                <div class="input-field">
                    <label style="color: #fff;" for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" class="validate" required="required">
                </div>
                <div>
                    <button type="submit" class="btn">Me connecter</button>
                </div>
            </form>
        </div>
    <?php endif ; ?>
    </div>
    <div class="container home">
        <div class="row">
            <?php foreach($posts as $data){ 
                $post = substr($data->content, 0, 200);
                ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h4 class="teal-text post-title"><?= $data->title ?></h4>
                    <p class="home-posts"><?= e($post) ?> ...</p>
                    <a href="post-<?= $data->id ?>" class="hoverable chip">(Voire la suite)</a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>