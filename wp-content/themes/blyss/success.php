<?php

/**
 * Template Name: Success
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

$form_id = get_query_var('form');
$title = esc_html( get_the_title() );
switch ($form_id) {
    case 374: {
        $title = 'Thank you for your Signing Up.';
    }
}

get_header("contact"); ?>

    <main class="thanks">

		<section class="about-descr">
            <div class="head-descr-sect_top info">
                <div class="container">
                    <h1><?php echo $title; ?> </h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </section>


	</main>



<?php get_footer('success'); ?>