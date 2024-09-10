<?php

/**

 * Template Name:  2 Row Gallery Page

 * @package WordPress

 * @subpackage eastwest

 * @since CMVA 1.0

 */
get_header(); 
$gallery_banner = get_field('gallery_banner');
?>
<section class="hero_bnnr innr_bnr">
    <img src="<?php echo $gallery_banner['url'];?>" alt="">
    <div class="top_text_div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?php the_title();?></h2>
                    <ul class="brdcamp">
                        <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                        <li>Gallery</li>
                        <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="gallery">
    <div class="container">
        <div class="row">
            <?php if( have_rows('gallery') ): while( have_rows('gallery') ) : the_row();
                    $gallery_image = get_sub_field('gallery_image');
            ?>
            <div class="col-lg-6 col-md-6">
                <img src="<?php echo $gallery_image['url'];?>" alt="<?php echo $gallery_image['title'];?>">
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>