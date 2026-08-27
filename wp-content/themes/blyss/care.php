<?php

/**
 * Template Name: Care Template
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

get_header(); ?>

    <main>

		<section class="care">
            <div class="head-descr-sect_top">
                <div class="container">
                    <?php if(get_field('care_page_title')):?>
                        <?php the_field('care_page_title'); ?>
                    <?php endif;?>
                </div>
            </div>

            <div class="care__visuale">
                <div class="container">
                    <?php $headerimg = get_field('header_image');?>
                    <img src="<?php echo esc_url($headerimg['url']); ?>" alt="<?php echo esc_attr($headerimg['alt']); ?>" />
                </div>
            </div>

            <div class="care__items">
                <div class="container">
                    <div class="care__item">
                        <?php if(get_field('title_item1')):?>
                            <?php the_field('title_item1'); ?>
                        <?php endif;?>
                        <?php if(get_field('description_item1')):?>
                            <?php the_field('description_item1'); ?>
                        <?php endif;?>
                    </div>
                    <div class="care__item">
                        <?php if(get_field('title_item2')):?>
                            <?php the_field('title_item2'); ?>
                        <?php endif;?>
                        <?php if(get_field('description_item_2')):?>
                            <?php the_field('description_item_2'); ?>
                        <?php endif;?>
                    </div>
                    <div class="care__item">
                        <?php if(get_field('title_item3')):?>
                            <?php the_field('title_item3'); ?>
                        <?php endif;?>
                        <?php if(get_field('description_item_3')):?>
                            <?php the_field('description_item_3'); ?>
                        <?php endif;?>
                    </div>
                    <div class="care__item">
                        <?php if(get_field('title_item4')):?>
                            <?php the_field('title_item4'); ?>
                        <?php endif;?>
                        <?php if(get_field('description_item_4')):?>
                            <?php the_field('description_item_4'); ?>
                        <?php endif;?>
                    </div>
                </div>
            </div>

            <div class="care__descr">
                <div class="container">
                    <?php if(get_field('care_slogan')):?>
                        <?php the_field('care_slogan'); ?>
                    <?php endif;?>
                </div>
            </div>     
        </section>
        <div class="svd-widget container">
        <div class="svd-box" onclick="window.open('https://appointments.blyssdental.com/appointment-request', '_blank')">
            <figure>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/georgina-large.png" alt="" width="275" height="275">
            </figure>
            <h4>Do you want to improve your smile?</h4>
            <h4>Do you have a dental concern?</h4>
            <p>Our online consults haven't stopped! We are working hard to make sure your dental needs don't have to wait! Connect with us today and get all of your questions answered for free in three easy steps.</p>
            <ul class="svd-options">
                <li>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/camera.svg" alt="" width="38" height="38">
                    <span>Upload a smile photo or area of concern.</span>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/video.svg" alt="" width="38" height="38">
                    <span>We will create a personalized video with recommendations.</span>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/appointments-icon.svg" alt="" width="38" height="38">
                    <span>View your video and schedule an appointment.</span>
                </li>
            </ul>
            <div class="care-page-button-wrapper">
                <span id="CareWidgetButton" class="d-block">
                    <button type="submit">Get Started</button>
                </span>
            </div>
        </div>
    </div>
	</main>
	<?php the_content(); ?>
<?php get_footer(); ?>