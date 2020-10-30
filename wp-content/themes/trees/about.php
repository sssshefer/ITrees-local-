<?php
/*
Template Name: About
Template Post Type: post, page, product
*/

get_template_part( 'template-parts/header' );
get_template_part( 'template-parts/preloader' ); ?>

<!-- intro Start -->
<section class="intro" id="intro">
    <div class="container-fluid no-padding">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <div class="intro__wrap">
                    <h1 class="intro__title">About <spam><spam style="color:#d8a975">I</spam>Trees</spam></h1>
                    <div class="intro__text-wrap">
                        <h3 class="intro__text">
                            Наш сайт создан для людей, нацеленных самостоятельно изучать информационные технологии
                        </h3>
                    </div>
                    <a href="#whichUsers" class="intro__button">
                        <i class="timeToStart__arrow">
                            Подробнее
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- intro End -->

<!-- whichUsers Start -->
<section class="whichUsers" id="whichUsers">

</section>
<!-- whichUsers End -->

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
                        Зайдите в раздел <a class="howToUse__link" href="#trees">Деревья</a>
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
<!-- howToUse End -->

<!-- perspectives Start-->
<section class="perspectives" id="perspectives">
    <div class="container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
</section>
<!-- perspectives End -->

<?php
get_template_part( 'template-parts/footer' ); ?>
