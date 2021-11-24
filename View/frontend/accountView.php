<?php $title = 'Mon compte';
isLogged();
?>
<?php ob_start(); ?>
	<div class="jumbotron jum-account">
	</div>
    <div class="container">
		<div class="avatar">
			<img src="Public/imgs/profil.jpg" alt="">
			<h4 class="teal-text h4-format"><?= format($user->username) ?>
			<h4>
				<hr>
		</div>
		<?php if (it_is_me($user->id, $_SESSION['auth']->id)):?>
			<div class="center">
				<a href="#" id="btn-account-edit" class="btn btn-small">Modifier mon profil</a>
				<div id="box-edit" class="col-md-4 center">
					<form action="">
						<div class="input-field">
							<label for="user">Email</label>
							<input type="text" id="user" class="validate">
						</div>
					</form>
				</div>
			</div><br>
		<?php else: ?>
			<div class="center">
				<a href="#" class="btn btn-small">Suivre cette personne</a>
			</div>
		<?php endif; ?>
    	<div class="account-profil-content">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h5 class="h5-format">À propos</h5>
					<hr>
					<table>
						<tr>
							<th>Email</th>
							<th>Inscription</th>
						</tr>
						<tr>
							<td><?= $user->email ?></td>
							<td><?= $user->regist_at ?></td>
						</tr>
					</table>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h5 class="h5-format">Biographie</h5>
					<hr>
					<div class="card-panel">
						<div class="card-content">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum facere libero excepturi. Aut odio laudantium consectetur aspernatur
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="twitte-body">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12">
					<h4 class="h4-format">Les dernier twittes</h4>
					<hr>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, voluptatum, vitae alias laboriosam harum debitis quos quis veniam facilis eaque deserunt cupiditate. Magnam quibusdam dolores tenetur sequi architecto illo accusamus.
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<h4 class="h4-format">Posts</h4>
					<hr>
					<ul>
						<li class="list-group-item"><a href="#">Apprendre à coder</a></li>
						<li class="list-group-item"><a href="#">Learn Node JS</a></li>
						<li class="list-group-item"><a href="#">Comment avoir du trafique</a></li>
					</ul>
				</div>
			</div>
		</div>       
    </div>

<?php $content = ob_get_clean(); ?>

<?php require 'View/frontend/template.php';?>