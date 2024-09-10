<?php

/**

 * Template Name: Contact Page

 * @package WordPress

 * @subpackage eastwest

 * @since CMVA 1.0

 */
get_header(); 
$contact_image = get_field('contact_image');
$contact_address_image = get_field('contact_address_image');
?>
<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-us-img">
                    <img src="<?php echo $contact_image['url'];?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="contacttxt">
                    <h3><?php echo get_field('contact_title');?></h3>
                    <p><?php echo get_field('contact_sub_title');?></p>
                    <?php echo do_shortcode('[contact-form-7 id="aa2ebc2" title="Contact Form"]');?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-row">
    <div class="container">
        <div class="cnrowinner" style="background: url('<?php echo $contact_address_image['url'];?>') no-repeat 0 0;">
            <ul>
                <li>
                    <h4>Email</h4>
                    <a href="mailto:<?php echo get_field('mail', 'option');?>" class="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cn-mail.svg" alt="">
                        <span><?php echo get_field('mail', 'option');?></span>
                    </a>
                </li>
                <li>
                    <h4>Phone</h4>
                    <a href="tel:<?php echo get_field('phone', 'option');?>" class="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cn-phone.svg" alt="">
                        <span><?php echo get_field('phone', 'option');?></span>
                    </a>
                </li>
                <li>
                    <h4>Instagram</h4>
                    <a href="<?php echo get_field('instagram_link', 'option');?>" target="_blank" class="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cn-insta.svg" alt="">
                        <span>instagram.com/amy spitzer fine art</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>