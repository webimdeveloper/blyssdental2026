<?php

/**
 * Template Name: Insurance Template
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

		<section class="insurance">
            <div class="head-descr-sect_top">
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="insurance-list">
                <div class="container">
                    <div class="row">
                        <?php
                        $acf_fields = get_fields($post->ID);
                        echo '<pre>';
                        //var_dump($acf_fields);
                        echo '</pre>';
                        foreach ($acf_fields as $logo) { ?>
                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="item" itemscope itemtype="https://schema.org/InsuranceAgency">
                                    <div class="image" >
                                        <img src="<?=$logo['url'];?>" itemprop="image" alt="<?=$logo['alt'];?>">
                                    </div>
                                    <div class="text">
                                        <p class="name" itemprop="name"><?=$logo['title'];?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>

	</main>
<?php get_footer(); ?>