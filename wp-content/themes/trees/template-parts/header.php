<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon/logo3.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon/logo3.png"
          type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="<?php bloginfo( 'template_directory' ); ?>/styles/fonts/Font_Awesome/fontawesome-all.min.css">
    <!-- Bootstrap-reboot CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap/bootstrap-reboot.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap/bootstrap.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/main.css">
    <script> a = 0</script>
	<?php wp_head(); ?>
</head>
<body>

<!-- preloader Start -->
<div id="page-preloader">
    <div class="windows8">
        <div class="wBall" id="wBall_1">
            <div class="wInnerBall"></div>
        </div>
        <div class="wBall" id="wBall_2">
            <div class="wInnerBall"></div>
        </div>
        <div class="wBall" id="wBall_3">
            <div class="wInnerBall"></div>
        </div>
        <div class="wBall" id="wBall_4">
            <div class="wInnerBall"></div>
        </div>
        <div class="wBall" id="wBall_5">
            <div class="wInnerBall"></div>
        </div>
    </div>
</div>
<!-- preloader End -->

<!-- header Start -->
<header class="header" id="header">

    <!-- options Start -->
    <div class="options ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <h3 class="options__language">
                        <i class="fas fa-globe"></i>
						<?php
						if ( get_language_attributes() == 'lang="en-GB"' ) {
							echo 'Language';
						} else {
							echo 'Язык';
						} ?>:
						<?php pll_the_languages( [
							'show_flags'   => 1,
							'show_names'   => 0,
							'hide_current' => 0,
						] ) ?>
                    </h3>
                </div>
                <div class="col-lg-6 position-relative">
                    <svg class="options__logo-svg-wrap" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 404.44 295.09">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill:#1d1d1b;
                                    stroke: #cecece;
                                    stroke-width: 2px;
                                    stroke-linejoin: round;
                                }
                            </style>
                        </defs>
                        <g id="Слой_2">
                            <g id="Слой_1-2">
                                <path class="cls-1" id="svg-path"
                                      d="M404.43.16c.05,55.32-.05,109.85,0,165.17L202.22,285.09,0,165.33C.07,109.76,0,55.72,0,.15,134.77.7,269.68-.39,404.43.16Z"/>
                            </g>
                        </g>
                    </svg>
                    <div class="options__logo-link d-flex justify-content-center">
                        <a class="options__logo" href="<?php if ( get_language_attributes() == 'lang="en-GB"' ) {
	                        echo get_page_link('43');
                        } else {
	                        echo get_page_link('140');
                        }?>"><!-- TODO change url to home page with if in php -->
                            <spam style="color:#d8a975">I</spam><spam style="color:#a9763e">Trees</spam>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 text-right">
                    <h3 class="options__registration">
                        <a href="<?php if ( get_language_attributes() == 'lang="en-GB"' ) {
	                        echo get_page_link(164);
                        } else {
	                        echo get_page_link(166);
                        } ?>">
							<?php
							if ( get_language_attributes() == 'lang="en-GB"' ) {
								echo 'Log in';
							} else {
								echo 'Вход';
							} ?>
                        </a>
                        /
                        <a href="<?php if ( get_language_attributes() == 'lang="en-GB"' ) {
	                        echo get_page_link(160);
                        } else {
	                        echo get_page_link(162);
                        } ?>">
							<?php
							if ( get_language_attributes() == 'lang="en-GB"' ) {
								echo 'Sign up';
							} else {
								echo 'Регистрация';
							} ?>
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- options End -->

    <!-- navigation-bar Start -->
    <nav class="navigation-bar d-flex align-items-center">
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col">
                    <ul class="menu d-flex">
                        <li>
							<?php
							if ( get_language_attributes() == 'lang="en-GB"' ) {
								wp_nav_menu( [
									'theme_location'  => 'primary',
									'menu'            => 'English menu - left',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'menu__part d-flex justify-content-end',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => '',
								] );
							} else {
								wp_nav_menu( [
									'theme_location'  => 'primary',
									'menu'            => 'Русское меню - левое',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'menu__part d-flex justify-content-end',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => '',
								] );
							}

							?>
                        </li>
                        <li class="ml-auto">
							<?php
							if ( get_language_attributes() == 'lang="en-GB"' ) {
								wp_nav_menu( [
									'theme_location'  => 'primary',
									'menu'            => 'English menu - right',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'menu__part d-flex justify-content-start',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => '',
								] );
							} else {
								wp_nav_menu( [
									'theme_location'  => 'primary',
									'menu'            => 'Русское меню - правое',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'menu__part d-flex justify-content-start',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => '',
								] );
							}
							?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navigation-bar End -->

</header>
<!-- header End -->
