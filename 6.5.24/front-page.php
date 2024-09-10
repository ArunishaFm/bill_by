<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header();

$banner_image = get_field('banner_image');
$original_link = get_field('original_link');
$original_image = get_field('original_image');
$subscribe_image = get_field('subscribe_image');
?>

<section class="hero_bnnr">
 <?php if ($banner_image != '') { ?>
 <img src="<?php echo $banner_image['url']; ?>" alt="">
 <?php } else { ?>
 <img src="<?php bloginfo('template_url'); ?>/assets/images/hero-bnnr.png" alt="About Image"/>
 <?php } ?>
    <div class="top_text_div">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <p><?php echo get_field('banner_title');?></p>
                    <h1><?php echo get_field('banner_content');?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec_2">
    <div class="container">
        <div class="col-12">
            <h2><?php echo get_field('work_title');?></h2>
        </div>
        <div class="row">
			<?php if( have_rows('gallery_list') ): while( have_rows('gallery_list') ) : the_row();
                    $gallery_image = get_sub_field('gallery_image');
                    
            ?>
            <div class="col-lg-3 col-md-6">
                <a href="<?php echo get_sub_field('gallery_link');?>">
                    <div class="card">
                        <div class="img">
                            <img src="<?php echo $gallery_image['url'];?>" alt="">
                        </div>
                        <div class="txt">
                            <h3><?php echo get_sub_field('gallery_title'); ?></h3>
                            <p><?php echo get_sub_field('gallery_content'); ?></p>
                        </div>
                    </div>
                </a>
            </div>
			  <?php endwhile; endif; ?>
            
        </div>
        
    </div>
</section>
<section class="sec_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-7">
                <div class="side_bnr">
                    <img src="<?php echo $original_image['url']; ?>" alt="" class="side_img">
                    <div class="top_txt">
                        <div class="txt">
                            <h2><?php echo get_field('banner_title');?></h2>
                            <p><?php echo get_field('banner_title');?></p>
                            <a href="<?php echo $original_link['url']; ?>" class="btn"><?php echo $original_link['title']; ?></a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-5">
                <div class="sbscr">
                    <h2><?php echo get_field('subscribe_title');?></h2>
                    <p><?php echo get_field('subscribe_content');?></p>
                    <a href="#subscribe" class="btn">Subscribe</a>
                    <img src="<?php echo $subscribe_image['url']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="commision">
    <div class="container">
        <div class="col-12">
            <h2><?php echo get_field('commission_title');?></h2>
            <p><?php echo get_field('commission_content');?></p>
        </div>
        <div class="row">
			<?php
				$args = array(
				    'post_type'      => 'product',
				    'posts_per_page' => 6, // Display all posts. Change to the number of posts you want to show.
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
				    while ($query->have_posts()) : $query->the_post();
			?>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="">
                    <p><?php the_title();?></p>
                </div>
            </div>
            <?php
			    endwhile;
			    wp_reset_postdata();
			else :
			    echo 'No posts found';
			endif;
			?>
        </div>
        <div class="row">
            <div class="col-12">
                <h5 class="cntct_line"><a href="#!" class="btn">Contact Us </a>to Commission a Painting</h5>
            </div>
        </div>


    </div>
</section>
<section class="blog homeblog">
    <div class="container">
        <div class="col-12">
            <h2><?php echo get_field('blog_title');?></h2>
            <p><?php echo get_field('blog_sub_title');?></p>
        </div>
        <div class="row">
			<?php
				$args = array(
				    'post_type'      => 'post',
				    'posts_per_page' => 3, // Display all posts. Change to the number of posts you want to show.
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
				    while ($query->have_posts()) : $query->the_post();
			?>
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="">
                    <div class="txt">
                        <h4><?php the_title(); ?></h4>
                        <a href="<?php the_permalink();?>" class="btn">Read more</a>
                    </div>
                </div>
            </div>
            <?php
			    endwhile;
			    wp_reset_postdata();
			else :
			    echo 'No posts found';
			endif;
			?>
        </div>
    </div>
</section>
<?php
get_footer();