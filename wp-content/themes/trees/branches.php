<?php
/*
Template Name: Branches
Template Post Type: post, page, product
*/

get_template_part( 'template-parts/header' );
get_template_part( 'template-parts/preloader' ); ?>

<!-- branches Start -->
<section class="branches" id="branches">
    <div class="container-fluid ">
        <div class="row no-gutters">
            <div class="col d-flex justify-content-center">
                <div id='branches-list-wrapper'
                     class="branches-list-wrapper text-center text-uppercase
                     d-flex justify-content-center align-items-center">
                    <div class="branches__title-wrap d-flex">
                        <h1 class="branches__title">
                            IT
                        </h1>
                    </div>
					<?php
					if ( is_page( '11' ) ) {
						wp_nav_menu( [
							'theme_location'  => '',
							'menu'            => 'Branches',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'branches-list ',
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
					?>
                    <ul class="branches-list">
						<?php
						wp_list_pages( array(
							'child_of' => get_the_ID(),
							'title_li' => 0,
							'echo'     => 1,
							'depth'    => 1,
						) );
						}
						?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- branches End -->
<?php
get_template_part( 'template-parts/footer' ); ?>
