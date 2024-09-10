<?php

/**

 * Template Name: About Page

 * @package WordPress

 * @subpackage eastwest

 * @since CMVA 1.0

 */
get_header(); 
$about_image = get_field('about_image');
$collection_image_1 = get_field('collection_image_1');
$collection_image_2 = get_field('collection_image_2');
$collection_image_3 = get_field('collection_image_3');
$collection_image_4 = get_field('collection_image_4');
$collection_link = get_field('collection_link');
$banner_image = get_field('banner_image');
?>
<section class="hero_bnnr innr_bnr">    
	<?php if ($inner_banner_icon != '') { ?>
      <img src="<?php echo $banner_image['url'];?>" alt="">
    <?php } else { ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/innr-bnr.jpg" alt="">
    <?php } ?>
    <div class="top_text_div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?php the_title();?></h2>
                    <ul class="brdcamp">
                        <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                        <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="abt-top">
            <h3><?php echo get_field('inner_banner_title');?></h3>
            <p><?php echo get_field('inner_banner_content');?> <span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feather.svg" alt=""></span></p>
        </div>
        <div class="abt-mid">
            <div class="row">
                <div class="col-md-4 od2">
                <?php echo get_field('about_left_content');?>
                </div>
                <div class="col-md-4 od1">
                    <div class="abtmid">
                        <img src="<?php echo $about_image['url'];?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 od3">
                <?php echo get_field('about_right_content');?>
                </div>
            </div>
        </div>
        <div class="abt-btm">
            <span class="quotes quotes-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/quotes1.svg" alt=""></span>
            <span class="quotes quotes-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/quotes2.svg" alt=""></span>
            <?php echo get_field('about_content');?>
            
        </div>

        <div class="abt-gallery">
            <div class="row align-items-center">
                <div class="col-md-7 gap20">
                    <div class="row m-0">
                        <div class="col-md-4 p-0 w40 midalign">
                            <a href="<?php echo $collection_link['url'];?>" class="link">View Collection >></a>
                        </div>
                        <div class="col-md-8 p-0 w60">
                            <img src="<?php echo $collection_image_1['url'];?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <img src="<?php echo $collection_image_2['url'];?>" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row gap20">
                        <div class="col-md-12">
                            <img src="<?php echo $collection_image_3['url'];?>" alt="">
                        </div>
                        <div class="col-md-12">
                            <img src="<?php echo $collection_image_4['url'];?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>