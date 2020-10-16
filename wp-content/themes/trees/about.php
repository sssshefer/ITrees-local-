<?php
/*
Template Name: About
Template Post Type: post, page, product
*/

get_template_part( 'template-parts/header' );
get_template_part( 'template-parts/preloader' ); ?>

<!-- Intro Start -->
<section class="intro d-flex align-items-center" id="about">
    <div class="container-fluid">
        <div class="row">

        </div>
        <div class="row">
            <div class="ml-auto col-4 d-flex align-items-center">
                <div class="intro__text-container">
                    <h3 class="intro__text">
                        Наш сайт создан для людей, нацеленных самостоятельно изучать информационные технологии.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trees End -->

<!-- howToUse Start -->
<section class="howToUse">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="howToUse__title text-center">
                    Как пользоваться нашим сайтом?
                </h1>
            </div>
            <div class="col-md-4">
                <div class="howToUse__cards">
                    <i class="fas howToUse__icons howToUse__tree-icon fa-code-branch"></i>
                    <h2 class="howToUse__steps">
                        Зайдите в раздел деревья
                    </h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="howToUse__cards">
                    <i class="fas howToUse__icons howToUse__hand-icon fa-hand-pointer"></i>
                    <h2 class="howToUse__steps">
                        Выберите интересующие направления
                    </h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="howToUse__cards">
                    <i class="fab howToUse__icons howToUse__book-icon fa-leanpub"></i>
                    <h2 class="howToUse__steps">
                        Изучайте!
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- howToUse Start -->

<?php
get_template_part( 'template-parts/footer' ); ?>
