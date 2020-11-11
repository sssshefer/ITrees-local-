<!-- Footer start -->
<footer class="footer" id ='footer'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-5 text-center">
                <div class="options__logo-ling">
                    <a class="options__logo" href="<?php get_home_url() ?>"><!-- TODO home page with if php -->
                        <spam style="color:#d8a975">s</spam><spam style="color: #a9763e">s</spam><spam style="color:#63390e">s</spam><spam style="color: #a9763e">shefer —</spam>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 ml-auto d-flex justify-content-center align-items-center">
                <h3 class="footer__contact-title">
	                <?php
	                if ( get_language_attributes() == 'lang="en-GB"' ) {
		                echo 'connect';
	                } else {
		                echo 'связь';
	                } ?>
                </h3>
                <ul class="footer__contact d-flex align-items-center">
                    <li>
                        <a href="mailto:arkadiy.shefer@gmail.com">
                            <i class="far fa-envelope"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://vk.com/sssshefer">
                            <i class="fab fa-vk"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/_sssshefer_/">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/sssshefer">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
<?php wp_footer(); ?>

<!-- Main.js -->
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
</body>
</html>