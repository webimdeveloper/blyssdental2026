<?php

/**
 * Template Name: Difference Page
 *
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Blyss
 * @since Blyss 1.0
 */

$options = get_option('blyss_option');

get_header(); ?>

    <main>

        <section class="benefits">
            <div class="head-descr-sect_top">
                <div class="container">
                    <?php if(get_field('difference_header_title')):?>
                        <?php the_field('difference_header_title'); ?>
                    <?php endif;?>
                    <?php if(get_field('difference_header_description')):?>
                        <?php the_field('difference_header_description'); ?>
                    <?php endif;?>
                </div>
            </div>
            <div class="benefits__items">
                <?php if( have_rows('benefits_1') ): //child group field
                    while( have_rows('benefits_1') ): the_row(); 
                        // vars
                        $benefit1img = get_sub_field('section_image');
                        $benefit1title = get_sub_field('section_title');
                        $benefit1subtitle = get_sub_field('section_sub_title');
                        $benefit1description = get_sub_field('section_description');
                        ?>
                        <div class="benefits__item benefits__item_first">
                            <div class="container">
                                <div class="photo photo-shadow">
                                    <img src="<?php echo esc_url($benefit1img['url']); ?>" alt="<?php echo esc_attr($benefit1img['alt']); ?>" />
                                </div>
                                <div class="text-content">
                                    <?php echo $benefit1title ?>
                                    <?php echo $benefit1subtitle ?>
                                    <?php echo $benefit1description ?>
                                </div>
                            </div>
                        </div>	
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if( have_rows('benefits_2') ): //child group field
                    while( have_rows('benefits_2') ): the_row(); 
                        // vars
                        $benefit2img = get_sub_field('section2_image');
                        $benefit2title = get_sub_field('section_title2');
                        $benefit2subtitle = get_sub_field('section_sub_title2');
                        $benefit2description = get_sub_field('section_description2');
                        ?>
                        <div class="benefits__item benefits__item_second">
                            <div class="container">
                                <div class="text-content">
                                    <?php echo $benefit2title ?>
                                    <?php echo $benefit2subtitle ?>
                                    <?php echo $benefit2description ?>
                                </div>
                                <div class="photo">
                                    <img src="<?php echo esc_url($benefit2img['url']); ?>" alt="<?php echo esc_attr($benefit2img['alt']); ?>" />
                                </div>
                            </div>
                        </div>	
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if( have_rows('benefits_3') ): //child group field
                    while( have_rows('benefits_3') ): the_row(); 
                        // vars
                        $benefit3img = get_sub_field('section_image3');
                        $benefit3title = get_sub_field('section_title3');
                        $benefit3subtitle = get_sub_field('section_sub_title3');
                        $benefit3description = get_sub_field('section_description3');
                        ?>
                        <div class="benefits__item benefits__item_first">
                            <div class="container">
                                <div class="photo" style="max-width: 466px;">
                                    <img src="<?php echo esc_url($benefit3img['url']); ?>" alt="<?php echo esc_attr($benefit3img['alt']); ?>" />
                                </div>
                                <div class="text-content">
                                    <?php echo $benefit3title ?>
                                    <?php echo $benefit3subtitle ?>
                                    <?php echo $benefit3description ?>
                                    <div class="tiny-widget" onclick="window.open('https://app.smilevirtual.com/georgina-carrasco/sign-up', '_blank')">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/georgina.png" alt="" width="75" height="75">
                                        </figure>
                                        <h4>Request A FREE <br>Video Consult Today</h4>
                                        <p>Get all your questions answered in just three easy steps!</p>
                                    </div>
                                </div>
                            </div>
                        </div>	
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if( have_rows('benefits_4') ): //child group field
                    while( have_rows('benefits_4') ): the_row(); 
                        // vars
                        $benefit4img = get_sub_field('section_image4');
                        $benefit4title = get_sub_field('section_title4');
                        $benefit4subtitle = get_sub_field('section_sub_title4');
                        $benefit4description = get_sub_field('section_description4');
                        ?>
                        <div class="benefits__item benefits__item_second">
                            <div class="container">
                                <div class="text-content">
                                    <?php echo $benefit4title ?>
                                    <?php echo $benefit4subtitle ?>
                                    <?php echo $benefit4description ?>
                                </div>
                                <div class="photo">
                                    <img src="<?php echo esc_url($benefit4img['url']); ?>" alt="<?php echo esc_attr($benefit4img['alt']); ?>" />
                                </div>
                            </div>
                        </div>	
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if( have_rows('benefits_5') ): //child group field
                    while( have_rows('benefits_5') ): the_row(); 
                        // vars
                        $benefit5img = get_sub_field('section_image5');
                        $benefit5title = get_sub_field('section_title5');
                        $benefit5subtitle = get_sub_field('section_sub_title5');
                        $benefit5description = get_sub_field('section_description5');
                        ?>
                        <div class="benefits__item benefits__item_first">
                            <div class="container">
                                <div class="photo">
                                    <img src="<?php echo esc_url($benefit5img['url']); ?>" alt="<?php echo esc_attr($benefit5img['alt']); ?>" />
                                </div>
                                <div class="text-content">
                                    <?php echo $benefit5title ?>
                                    <?php echo $benefit5subtitle ?>
                                    <?php echo $benefit5description ?>
                                </div>
                            </div>
                        </div>	
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>

        <?php

$args = array(
    'post_type'=> 'testimonials',
    'order'    => 'ASC'
);

$the_query = new WP_Query( $args );
if($the_query->have_posts() ) : ?>

<div class="container">
    <div class="carousel-block">
        <?php if(get_field('carousel_title')):?>
            <?php the_field('carousel_title'); ?>
        <?php endif;?>
        <div class="owl-carousel owl-carousel__list-items list-items">

<?php
    while ( $the_query->have_posts() ) :
        $the_query->the_post(); ?>

        <div class="item">
            <div class="item-icon">
                <?php echo get_the_post_thumbnail();?>
            </div>
            <div class="item-text">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
        </div>

    <?php
    endwhile;
    wp_reset_postdata(); ?>

        </div>
    </div>
</div>

<?php
else:
endif;

?>

    </main>
    
    <?php the_content(); ?>

<?php get_footer(); ?>