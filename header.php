<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="header_img">
				<a href="<?= path('/'); ?>"><img src="<?php echo get_template_directory_uri() . '/asset/img/NeedForJobv2.png' ?>" /></a>

			</div>
            <i class="fa-solid fa-bars responsive_button hidden"></i>
			<?php
			if (!empty(is_user_logged_in())) {
				$user_id = get_current_user_id();
				$user_meta = get_user_meta($user_id);
			}
			?>
			<div class="navigation">
				<nav>
					<ul>
						<li><a href="<?= path('/'); ?>">Accueil</a></li>

						<!--MENU QUAND CONNECTÉ-->
						<?php if (!empty(is_user_logged_in())) { ?>
							<li><a href="<?= path('logout'); ?>">Se déconnecter</a></li>
							<?php if ($user_meta['user_meta_role'][0] == 'utilisateur') { ?>
								<li><a href="<?= path('profil'); ?>">Mon profil</a></li>
								<li><a href="select">Voir les modèles</a></li>
							<?php } ?>
							<?php if ($user_meta['user_meta_role'][0] == 'recruteur') { ?>
								<li><a href="<?= path('profil'); ?>">Mon Profil</a></li>
								<li><a href="<?= path('recruteur'); ?>">Liste des CVs</a></li>
							<?php } ?>

							<!--MENU QUAND DECONNECTÉ-->
						<?php  } else { ?>
							<li><a href="<?= path('select'); ?>">Nos modèles</a></li>
							<li><a href="<?= path('login'); ?>">Connexion</a></li>
							<li><a href="<?= path('register'); ?>">Inscription</a></li>
						<?php } ?>



					</ul>
				</nav>
			</div>
		</div>

	</header>

    <div class="header_responsive hidden">
        <ul>
            <li><a href="<?= path('/'); ?>">Accueil</a></li>

            <!--MENU QUAND CONNECTÉ-->
            <?php if (!empty(is_user_logged_in())) { ?>
                <li><a href="<?= path('logout'); ?>">Se déconnecter</a></li>
                <?php if ($user_meta['user_meta_role'][0] == 'utilisateur') { ?>
                    <li><a href="<?= path('profil'); ?>">Mon profil</a></li>
                    <li><a href="select">Voir les modèles</a></li>
                <?php } ?>
                <?php if ($user_meta['user_meta_role'][0] == 'recruteur') { ?>
                    <li><a href="<?= path('profil'); ?>">Mon Profil</a></li>
                    <li><a href="<?= path('recruteur'); ?>">Liste des CVs</a></li>
                <?php } ?>

                <!--MENU QUAND DECONNECTÉ-->
            <?php  } else { ?>
                <li><a href="<?= path('select'); ?>">Nos modèles</a></li>
                <li><a href="<?= path('login'); ?>">Connexion</a></li>
                <li><a href="<?= path('register'); ?>">Inscription</a></li>
            <?php } ?>
        </ul>
    </div>