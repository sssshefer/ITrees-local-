<?php
/*
Template Name: Trees-end
Template Post Type: post, page, product
*/

get_template_part( 'template-parts/header' );
get_template_part( 'template-parts/preloader' ); ?>

<!-- trees Start -->
<section class="trees-end d-flex" id="trees-end">
    <div class="container-fluid no-padding">
        <div class="row no-gutters height-100 d-flex ">
            <div class="trees-end__title-wrap trees__title-wrap">
                <h1 class="trees-end__title trees__title">
					<?php the_title_attribute(); ?>
                </h1>
            </div>
            <a href="<?php echo get_page_link('237') ?>" class="trees-end-level-wrap">
                <h2 class="trees-end-level">
                    Beginner
                </h2>
            </a>
            <a href="<?php echo get_page_link('240') ?>" class="trees-end-level-wrap">
                <h2 class="trees-end-level">
                    Intermediate
                </h2>
            </a>
            <a href="<?php echo get_page_link('242') ?>" class="trees-end-level-wrap">
                <h2 class="trees-end-level">
                    Advanced
                </h2>
            </a>
        </div>
    </div>
</section>
<!-- trees End -->

<?php
get_template_part( 'template-parts/footer' ); ?>
