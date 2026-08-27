<?php

/**
 * Template Name: About Template
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

		<section class="about-descr">
            <div class="head-descr-sect_top">
                <div class="container">
                    <?php if(get_field('about_header_title')):?>
                        <?php the_field('about_header_title'); ?>
                    <?php endif;?>
                    <?php if(get_field('header_sub_title')):?>
                        <?php the_field('header_sub_title'); ?>
                    <?php endif;?>
                </div>
            </div>
            <div class="about-descr__bottom">
                <div class="container about-descr__bottom_container">
                    <div class="about-descr__bottom_left">
                        <?php if(get_field('slogan')):?>
                            <?php the_field('slogan'); ?>
                        <?php endif;?>
                        <?php $dentistimg = get_field('doctor_image');?>
                        <img src="<?php echo esc_url($dentistimg['url']); ?>" alt="<?php echo esc_attr($dentistimg['alt']); ?>" />
                    </div>
                    <div class="about-descr__bottom_right">
                    <?php if(get_field('dentist_name')):?>
                            <?php the_field('dentist_name'); ?>
                        <?php endif;?>
                        <?php if(get_field('dentist_category')):?>
                            <?php the_field('dentist_category'); ?>
                        <?php endif;?>
                        <?php if(get_field('dentist_description')):?>
                            <?php the_field('dentist_description'); ?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </section>

        <section class="prof-affil">
            <div class="container">
                <?php if(get_field('Affiliations Title')):?>
                    <?php the_field('Affiliations Title'); ?>
                <?php endif;?>
                <div class="prof-affil__items owl-carousel">
                    <div class="prof-affil__item">
                        <?php $aff1 = get_field('affiliations_1');?>
                        <img src="<?php echo esc_url($aff1['url']); ?>" alt="<?php echo esc_attr($aff1['alt']); ?>" />
                    </div>
                    <div class="prof-affil__item">
                        <?php $aff2 = get_field('affiliations_2');?>
                        <img src="<?php echo esc_url($aff2['url']); ?>" alt="<?php echo esc_attr($aff2['alt']); ?>" />
                    </div>
                    <div class="prof-affil__item">
                        <?php $aff3 = get_field('affiliations_3');?>
                        <img src="<?php echo esc_url($aff3['url']); ?>" alt="<?php echo esc_attr($aff3['alt']); ?>" />
                    </div>
                    <div class="prof-affil__item">
                        <?php $aff4 = get_field('affiliations_4');?>
                        <img src="<?php echo esc_url($aff4['url']); ?>" alt="<?php echo esc_attr($aff4['alt']); ?>" />
                    </div>
                    <div class="prof-affil__item">
                        <?php $aff5 = get_field('affiliations_5');?>
                        <img src="<?php echo esc_url($aff5['url']); ?>" alt="<?php echo esc_attr($aff5['alt']); ?>" />
                    </div>
                    <div class="prof-affil__item">
                        <?php $aff6 = get_field('affiliations_6');?>
                        <img src="<?php echo esc_url($aff6['url']); ?>" alt="<?php echo esc_attr($aff6['alt']); ?>" />
                    </div>
                </div>
            </div>
        </section>

	</main>

<?php the_content(); ?>

<?php get_footer(); ?>