<?php
/*
Template Name: Soonй
Template Post Type: post, page, product
*/

get_template_part( 'template-parts/header' );
get_template_part( 'template-parts/preloader' ); ?>

<!-- soon Start -->
<section class="soon d-flex align-items-center" id="soon">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h1 class="soon__title text-center">
					<?php
					if ( get_language_attributes() == 'lang="en-GB"' ) {
						echo 'Current section will be done soon!';
					} else {
						echo 'Данный раздел скоро будет готов!';
					} ?>
				</h1>

			</div>
		</div>
	</div>
</section>
<!-- soon End -->

<?php
get_template_part( 'template-parts/footer' ); ?>

