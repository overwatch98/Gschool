<?php
$title = 'Tableau de bord';
ob_start();
?>
<div class="jumbotron">
    <h4 class="text-center teal-text h4-format">Tableau de bord</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <h4 class="h5-format">Les dernières posts</h4>
            <hr>
            <h5 class="h5-fromat teal-text">Comment avoire du trafic</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente accusamus eos eligendi perferendis delectus. Numquam odio nobis saepe dolore unde vel mollitia ipsam, est vero eius ipsum fuga aperiam voluptatum.</p>
            <h5 class="h5-fromat teal-text">Apprendre à coder</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente accusamus eos eligendi perferendis delectus. Numquam odio nobis saepe dolore unde vel mollitia ipsam, est vero eius ipsum fuga aperiam voluptatum.</p>
            <h5 class="h5-fromat teal-text">Crée un site</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente accusamus eos eligendi perferendis delectus. Numquam odio nobis saepe dolore unde vel mollitia ipsam, est vero eius ipsum fuga aperiam voluptatum.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h5 class="h5-format">Les personnes que vous suivez</h5>
            <hr>
            <ul class="list-group">
                <?php foreach($users as $user) : ?>
                    <li class="list-group-item"><a href="account-<?= $user->id?>-<?= $user->username?>""><?= $user->username ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<?php 
$content = ob_get_clean();
require 'View/frontend/template.php';
?>