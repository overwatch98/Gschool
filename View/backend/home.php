<?php

$title = 'Adminstration';
isAdmin();
ob_start();
?>

<div class="container home-back-table">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12">
			<h2 class="h2-format teal-text">Zonne résever</h2>
			<hr>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 mt-5 pt-3">
			<a href="addpost" class="btn">Ajouter un article</a>
		</div>
	</div>
	<h4 class="h5-format">Listes de tous les articles</h4>
		<hr><br>
		<?php foreach($posts as $post) :?>
		<div class="row">
			<div class="home-back-posts col-md-8">
				<a href="post-<?= $post['id']?>">
					<h5 class="h5-format teal-text">
						<?= $post['title'] ?>
					</h5>
					<em class="black-text"><?= $post['creation_date_fr'] ?></em>
				</a>
			</div>
			<div class="home-back-btn-posts col-md-4">
				<a href="editPost-<?= $post['id'] ?>" class="chip hoverable green darken-3 text-white">Editer</a>
				<a href="deletePost-<?= $post['id'] ?>" class="chip hoverable red darken-2 text-white">Supprimer</a>
				<hr>
			</div>
		</div>
		<?php endforeach ; ?>
</div>

<?php $content = ob_get_clean();
require 'View/backend/templat.php'; 
?>