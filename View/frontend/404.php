<?php 
$title = 'Erreur 404';
ob_start();?>

<div class="container">
    <h3 class="h3-format mt-5 text-center red-text min-h">
       <?= 'Erreur : ' .$e->getMessage(); ?>
    </h3>
</div>

<?php 
$content = ob_get_clean();
require 'View/frontend/template.php';
?>