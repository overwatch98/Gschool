<?php
require 'Core/Users/registerUser.php';
$title = 'Inscription'; 
?> 

<?php ob_start(); ?>

    <div class="container">
        <h3 class="text-center teal-text h3-format">Inscrivez-vous</h3><br>
        <?php if (!empty($errors)) : ?>

            <div class="alert alert-danger col-sm-12 col-md-8 col-lg-8 flash-format">
                <h5 class="h5-format">Vous n'avez pas remplis le formulaire corrrectement !</h5>
                    <ul>
                        <?php foreach($errors as $error): ?>
                        <li class="li-format"><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
            </div>

        <?php endif; ?>
        <div class="form-format">
            <form action="" data-parsley-validakte method="post">
            <div class="input-field">
                <label for="username">Pseudo</label>
                <input type="text" required="required" name="username" id="username" class="validate" minlength="3" data-parsley-trigger="keypress">
            </div>
            <div class="input-field">
                <label for="email">Mail</label>
                <input type="email" required="required" name="email" id="email" class="validate" data-parsley-trigger="keypress">
            </div>
            <div class="input-field">
                <label for="password">Mot de passe</label>
                <input type="password" required="required" name="password" id="password" class="validate">
            </div>
            <div class="input-field">
                <label for="password_confirm">Confirmez votre mot de passe</label><br>
                <input type="password" data-parsley-equalto="#password" required="required" name="password_confirm" id="password_confirm" class="validate" data-parsley-trigger="keypress">
            </div>
            <div>
                <button type="submit" class="btn">M'inscrir</button>
            </div><br><br>
        </form>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require 'View/frontend/template.php';?>