<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=divice-width, initial-scale=1">
		<title><?= $title ?></title>
		<link rel="stylesheet" href="Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="Public/css/gschool.css">
		<link rel="stylesheet" href="Public/css/menu.css">
		<link href="Public/cssm/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="Public/cssm/styles.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
	<body>

		<nav class="nav-blog" role="navigation">
		    <div class="nav-wrapper container">
		     	<a id="logo-container" href="home" class="brand-logo"><img src="Public/logo/logo.png" class="logo-gs"></a>
		      	<ul class="right hide-on-med-and-down">
					<li><a href="home" class="hoverable chip teal-text">Accueil</a></li>
					<li><a href="blog" class="hoverable chip teal-text">Blog</a><li>
					<li><a href="chat" class="hoverable chip teal-text">Chat</a></li>
					<?php if (isset($_SESSION['auth'])) { ?>
					<li><a href="logout" class="hoverable chip teal-text">Se deconnecter</a></li>
					<li><a href="account&id=<?= $_SESSION['auth'][0]?>" class="hoverable chip teal-text"><?= $_SESSION['auth'][1] ?></a></li>
					<?php } else { ?>
					<li><a href="login" class="hoverable chip teal-text">Se connecter</a></li>
					<?php } ?>
					<?php if (isset($_SESSION['auth']) && $_SESSION['auth'][5] == 1): ?>
						<li><a href="admin" class="hoverable chip teal-text">Back-Office</a></li>
					<?php endif ; ?>
		      	</ul>

		      	<ul id="nav-mobile" class="sidenav">
					<li><a href="home" class="hoverable chip teal-text">Accueil</a></li>
					<li><a href="#" class="hoverable chip teal-text">Blog</a><li>
					<li><a href="chat" class="hoverable chip teal-text">Chat</a></li>
					<?php if (isset($_SESSION['auth'])) { ?>
					<li><a href="logout" class="hoverable chip teal-text">Se deconnecter</a></li>
					<li><a href="account&id=<?= $_SESSION['auth'][0]?>" class="hoverable chip teal-text"><?= $_SESSION['auth'][1] ?></a></li>
					<?php } else { ?>
					<li><a href="login" class="hoverable chip teal-text">Se connecter</a></li>
					<?php } ?>
					<?php if (isset($_SESSION['auth']) && $_SESSION['auth'][5] == 1): ?>
						<li><a href="admin" class="hoverable chip teal-text">Back-Office</a></li>
					<?php endif ; ?>
		      	</ul>
				  <a href="#" data-target="nav-mobile" class="sidenav-trigger">Menu</a>
				  <div class="pseudo-icone">
				  <?php if (isset($_SESSION['auth'])): ?>
					  <a href="account&id=<?= $_SESSION['auth'][0]?>" class="links user-username"><img src="Public/imgs/profil.jpg"></a>
					<?php endif; ?> 
				  </div>
		  	</div>
		</nav>
			<div class="container">
				<?php if (isset($_SESSION['flash'])): ?>
				<?php foreach($_SESSION['flash'] as $type => $msg) :?><br>
				<div class="flash-format col-sm-12 col-md-8 col-lg-8 alert alert-<?= $type ?>">
					<button id="hide" class="close">&times;</button>
					<?= $msg ?>
				</div>
					<?php endforeach ; ?>
					<?php unset($_SESSION['flash']); ?>
				<?php endif ; ?>
			</div>

            <?= $content ?>  

        <footer class="page-footer teal">
            <div class="container" align="center">
                <a href="home"><img src="Public/logo/logo-white.png" class="logo-gs"></a>
                <p class="grey-text text-center text-lighten-4 p-format">We are a team of college students working on this project like it's our full time job. .</p>
            </div>
            <div class="footer-copyright">
                <div class="container footer-content">
                    <p>Copyright GSchool tout droit reservé</p>
                </div>
            </div>
        </footer>

        <script src="Public/js/jquery.min.js"></script>
        <script src="Public/js/popper.min.js"></script>
        <script src="Public/js/materialize.js"></script>
		<script src="Public/js/init.js"></script>
		<script src="Libraries/parsley/parsley.min.js"></script>
		<script src="Public/js/gschool.js"></script>
    </body>
</html>