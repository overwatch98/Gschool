<?php
require 'Core/Users/loginUser.php';
$title = 'Connexion'; 
isConnect();
?> 

<?php ob_start(); ?>

    <div class="container min-h">
        <h3 class="text-center teal-text h3-format">Connectez-vous</h3><br>
        <form action="" data-parsley-validate method="post" class="form-format">
            <?php if (!empty($error)) : ?>
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
            <?php endif ; ?>
            <div class="input-field">
                <label for="username">Pseudo ou email </label>
                <input type="text" name="username" id="username" class="validate" required="required">
            </div>
            <div class="input-field">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="validate" required="required">
            </div>
            <div>
                <button type="submit" class="btn">Me connecter</button><br><br>
                <strong>Pas encore de compte ? <a href="register">Inscrivez-vous </a></strong>
            </div><br><br>
        </form>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require 'View/frontend/template.php';?>