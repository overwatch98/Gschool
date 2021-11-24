<?php 
$title = "Ajout d'une article";
ob_start();  ?>

<div class="container min-h">
    <h2 class="h2-format teal-text text-center mb-5">Ajouter un article</h2>
    <hr><br>
    <form action="" method="post">
        <div class="input-field">
            <label for="title">Titre :</label>
            <input type="text" name="title" id="title" class="validate">
        </div>
        <div>
            <label for="post">Votre article : </label>
            <textarea class="materialize-textarea" name="post" id="post"></textarea>
        </div>
        <div class="mb-5 mt-3 pb-5">
            <button type="submit" class="btn">Ajouter</button>
        </div>
    </form>
</div>

<?php $content = ob_get_clean(); 
require 'View/backend/template.php';
?>