<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>
<footer id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="sbcrb">
                    <h2>Subscribe To Our Newsletter</h2>
                    <?php echo do_shortcode('[contact-form-7 id="a96b532" title="Subscribe Form"]');?>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-2">
				<?php $footer_logo = get_field('footer_logo', 'option');?>
                        <a href="<?php bloginfo('url'); ?>"><img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['title']; ?>"></a>
            </div>

            <div class="col-lg-6 offset-lg-1">
                <ul class="pge_links">
                   <?php wp_nav_menu(array('theme_location' => 'footer', 'class' => 'list-group-item', 'container' => '', 'items_wrap' => '%3$s')); ?>
                </ul>
            </div>


            <div class="col-lg-2 offset-lg-1">
                <ul class="scl">
                    <li>
                        <a href="<?php echo get_field('linkdin_link', 'option');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkdin.svg" alt=""></a>
                    </li>

                    <li>
                        <a href="<?php echo get_field('instagram_link', 'option');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Instagram.svg" alt=""></a>
                    </li>

                    <li>
                        <a href="<?php echo get_field('facebook_link', 'option');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Facebook.svg" alt=""></a>
                    </li>



                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <p>
                    @ 2024 AMY SPITZER. All Rights Reserved
                </p>
            </div>

            <div class="col-lg-3 col-md-6 offset-lg-6">
                <ul>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/terms-of-services/">Terms of Services</a>
                    </li>

                    <li>
                        <a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.slimNav_sk78.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#navigation nav').slimNav_sk78();
    var owl = $('.slider');


});
</script>
<?php wp_footer(); ?>

</body>
</html>