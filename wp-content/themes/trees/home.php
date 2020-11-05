<?php
/*
Template Name: Home
Template Post Type: post, page, product
*/

get_template_part( 'template-parts/header' );
get_template_part( 'template-parts/preloader' ); ?>

<!-- timeToStart Start -->
<section class="timeToStart" id="timeToStart">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="timeToStart__title text-center">
<?php the_field('home__title'); ?>
<!--                    <spam style="color:#a9763e">now</spam>!-->
                </h1>
            </div>
            <div class="col-12">
                <h2 class="timeToStart__how text-center">
<?php the_field('home__how'); ?>                </h2>
            </div>
            <div class="col-12">
                <a href="#aboutContent" class="timeToStart__ball text-center">
                    <i class="timeToStart__arrow">
                        ↓
                    </i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- timeToStart End -->


<!-- aboutContent Start -->

<section class="aboutContent" id="aboutContent">
    <div class="container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
</section>

<!-- aboutContent End -->

<?php
get_template_part( 'template-parts/footer' ); ?>

