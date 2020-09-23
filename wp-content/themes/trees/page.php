<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trees
 */

get_template_part( 'template-parts/header' );
get_template_part( 'template-parts/preloader' ); ?>

<body>
<!-- Preloader start -->
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

<!-- Preloader End -->

<!-- Header Start -->
<header class="header" id="header">

    <!-- Options Start -->
    <div class="options ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <h3 class="options__language">
                        <?php the_field( 'language' ); ?>:
	                        <?php pll_the_languages( [
		                        'show_flags' => 1,
		                        'show_names' => 0,
		                        'hide_current'=>0,
	                        ] ) ?>
                    </h3>
                </div>
                <!-- Первый вариант с черточками в лого (— sssshefer —) -->
                <!-- <a class="options__logo" href="#">— <spam style="color:#d8a975">s</spam><spam style="color: #a9763e">s</spam><spam style="color:#552f07">s</spam><spam style="color: #a9763e">shefer </spam> —-->
                <div class="col-lg-6 position-relative">
                    <object class="options__logo-img"
                            type="image/svg+xml"
                            data="<?php bloginfo( 'template_directory' ); ?>/img/SVG/blackSpot.svg">
                    </object>
                    <div class="options__logo-ling d-flex justify-content-center">
                        <a class="options__logo" href="#">
                            <spam style="color:#d8a975">s</spam><spam style="color: #a9763e">s</spam><spam style="color:#63390e">s</spam><spam style="color: #a9763e">shefer</spam>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 text-right">
                    <h3 class="options__registration">
                        <a href="<?php the_field( 'userlog' ); ?>">
                            log in
                        </a>
                        /
                        <a href="<?php the_field( 'userreg' ); ?>">
                            sign up
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Options End -->

    <!-- Navigation bar Start -->
    <nav class="navigation-bar d-flex align-items-center">
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col">
                    <ul class="menu d-flex">
                        <li><?php wp_nav_menu( [
								'theme_location'  => '',
								'menu'            => 'Left_navigation',
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
							?>+
                        </li>
                        <li class="ml-auto">
							<?php wp_nav_menu( [
								'theme_location'  => '',
								'menu'            => 'Right_navigation',
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
							?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navigation bar End -->

</header>
<!-- header End -->

<!-- branches Start -->
<section class="branches" id="branches">
    <div class="container-fluid ">
        <div class="row no-gutters">
            <div class="col d-flex justify-content-center">
                <div class="branches-list-wrapper text-center d-flex justify-content-center align-items-center">
                    <div class="branches__title-wrap">
                        <h1 class="branches__title">
                            IT
                        </h1>
                    </div>
                    <ul class="branches-list">
                        <li class="branches-list__item1">
                            <a href="#">
                                WEB
                            </a>
                        </li>
                        <li class="branches-list__item2">
                            <a href="#">
                                Mobile
                            </a>
                        </li>
                        <li class="branches-list__item3">
                            <a href="#">
                                Algorithm
                            </a>
                        </li>
                        <li class="branches-list__item4">
                            <a href="#">
                                Administration
                            </a>
                        </li>
                        <li class="branches-list__item5">
                            <a href="#">
                                Robotics
                            </a>
                        </li>
                        <li class="branches-list__item6">
                            <a href="#">
                                Data scientist
                            </a>
                        </li>
                        <li class="branches-list__item7">
                            <a href="#">
                                Neural network
                            </a>
                        </li>
                        <li class="branches-list__item8">
                            <a href="#">
                                IT Security
                            </a>
                        </li>
                        <li class="branches-list__item9">
                            <a href="#">
                                Cloud computing
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- branches End -->

<?php
get_template_part( 'template-parts/footer' ); ?>
