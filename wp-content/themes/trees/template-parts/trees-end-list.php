<?php
/*
Template Name: Trees-end-list
Template Post Type: post, page, product
*/

get_template_part( 'template-parts/header' );
get_template_part( 'template-parts/preloader' ); ?>

<!-- trees Start -->
<section class="trees-end-list" id="trees-end-list">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 text-center d-flex align-items-center">
                <div class="trees-end-list__title-wrap">
                    <h1 class="trees-end-list__title trees__title">
			            <?php the_title_attribute(); ?>
                    </h1>
                </div>
            </div>
            <div class="col-lg-7">
                <ul class="trees-end-list__topics">
	                <?php
	                $args = wp_list_pages( array(
		                'child_of' => get_the_ID(),
		                'title_li' => 0,
		                'echo'     => 0,
		                'depth'    => 1,
	                ) );
	                echo $args;
	                ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- trees End -->

<?php
get_template_part( 'template-parts/footer' ); ?>
