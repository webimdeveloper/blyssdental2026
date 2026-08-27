<?php

/**
 * Template Name: Info Template
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
            <div class="head-descr-sect_top info">
                <div class="container left">
                    <div class="info-text">
                        <h1><?php the_title(); ?> </h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>


	</main>



<?php get_footer(); ?>