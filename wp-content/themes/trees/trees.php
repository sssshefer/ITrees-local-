<?php
/*
Template Name: Trees
Template Post Type: post, page, product
*/

get_template_part( 'template-parts/header' );
get_template_part( 'template-parts/preloader' ); ?>

<!-- Trees Start -->
<section class="trees" id="trees">
    <div class="container-fluid ">
        <div class="row no-gutters">
            <div class="col d-flex justify-content-center">
                <div id='trees-list-wrapper'
                     class="trees-list-wrapper text-center text-uppercase
                     d-flex justify-content-center align-items-center">
                    <div class="trees__title-wrap d-flex">
                        <h1 class="trees__title">
                            <?php
                            if(get_the_ID()=='10'){
                                echo 'IT';
                            }else{
	                            the_title_attribute();
                            }
                            ?>
                        </h1>
                    </div>
                    <ul class="trees-list">
						<?php
						$args = wp_list_pages( array(
							'child_of' => get_the_ID(),
							'title_li' => 0,
							'echo'     => 0,
							'depth'    => 1,
						) );
						if ( $args ) {
							echo $args;
						} else {
							echo 'nooone';
						}
						?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trees End -->

<?php
get_template_part( 'template-parts/footer' ); ?>
