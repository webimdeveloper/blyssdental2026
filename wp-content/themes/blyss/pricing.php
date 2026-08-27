<?php

/**
 * Template Name: Pricing Template
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

$first = 'First';
$second = 'Second';
$third = 'Third';
$restorative = 'Restorative';
$cosmetic = 'Cosmetic Dentistry';
$implants = 'Dental Implants';

$custom = get_post_custom();

get_header(); ?>

    <main>

        <section class="pricing">

            <div class="head-descr-sect_top">
                <div class="container">
                    <?php if(get_field('pricing_header_title')):?>
                        <?php the_field('pricing_header_title'); ?>
                    <?php endif;?>
                    <?php if(get_field('pricing_header_subtitle')):?>
                        <?php the_field('pricing_header_subtitle'); ?>
                    <?php endif;?>
                    <?php if(get_field('pricing_header_paragraph')):?>
                        <?php the_field('pricing_header_paragraph'); ?>
                    <?php endif;?>
                </div>
            </div>
            <?php if (isset($custom[$first])) { ?>
                <div class="pricing__items">
                    <div class="container">
                        <?php foreach ($custom[$first] as $first_block) {
                            $parts = explode(':', $first_block);
                            ?>
                            <div class="pricing__item">
                                <h4><?=$parts[0];?></h4>
                                <p><?=$parts[1];?></p>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="pricing__item_bg"></div>
                </div>
            <?php } ?>

            <?php if (isset($custom[$restorative])) { ?>
                <div class="pricing__items-center">
                    <div class="container">
                        <div class="pricing__item-table">

                            <div class="pricing__item-table_head">
                            <?php if(get_field('pricing_head_column')):?>
                                <?php the_field('pricing_head_column'); ?>
                            <?php endif;?>
                            <?php if(get_field('pricing_head_value')):?>
                                <?php the_field('pricing_head_value'); ?>
                            <?php endif;?>
                            </div>

                            <?php foreach ($custom[$restorative] as $restorative_block) {
                                $parts = explode(':', $restorative_block);
                                ?>
                                <div class="pricing__item-table_row">
                                    <p class="row-title"><?=$parts[0];?> </p>
                                    <p class="row-value"><?=$parts[1];?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($custom[$second])) { ?>
                <div class="pricing__items">
                    <div class="container">

                        <?php foreach ($custom[$second] as $second_block) {
                            $parts = explode(':', $second_block);
                            ?>
                            <div class="pricing__item">
                                <h4><?=$parts[0];?></h4>
                                <p><?=$parts[1];?></p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="pricing__item_bg"></div>
                </div>
            <?php } ?>
            <?php if (isset($custom[$cosmetic]) || isset($custom[$implants])) { ?>
                <div class="pricing__items-space-beetwen">
                    <div class="container">
                        <?php if (isset($custom[$cosmetic])) { ?>
                            <div class="pricing__item-table">

                                    <div class="pricing__item-table_head">
                                        <?php if(get_field('second_table_head_column')):?>
                                            <?php the_field('second_table_head_column'); ?>
                                        <?php endif;?>
                                        <?php if(get_field('second_table_head_value')):?>
                                            <?php the_field('second_table_head_value'); ?>
                                        <?php endif;?>
                                    </div>

                                    <?php foreach ($custom[$cosmetic] as $cosmetic_block) {
                                        $parts = explode(':', $cosmetic_block);
                                        ?>
                                        <div class="pricing__item-table_row">
                                            <p class="row-title"><?=$parts[0];?> </p>
                                            <p class="row-value"><?=$parts[1];?></p>
                                        </div>
                                    <?php } ?>
                            </div>
                        <?php } ?>

                        <?php if (isset($custom[$implants])) { ?>
                            <div class="pricing__item-table">

                                <div class="pricing__item-table_head">
                                    <?php if(get_field('pricing_third_table_head_column')):?>
                                        <?php the_field('pricing_third_table_head_column'); ?>
                                    <?php endif;?>
                                    <?php if(get_field('pricing_third_tale_head_value')):?>
                                        <?php the_field('pricing_third_tale_head_value'); ?>
                                    <?php endif;?>
                                </div>

                                <?php foreach ($custom[$implants] as $implants_block) {
                                    $parts = explode(':', $implants_block);
                                    ?>
                                    <div class="pricing__item-table_row">
                                        <p class="row-title"><?=$parts[0];?> </p>
                                        <p class="row-value"><?=$parts[1];?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($custom[$third])) { ?>
                <div class="pricing__items">
                    <div class="container">

                        <?php foreach ($custom[$third] as $third_block) {
                            $parts = explode(':', $third_block);
                            ?>
                            <div class="pricing__item">
                                <h4><?=$parts[0];?></h4>
                                <p><?=$parts[1];?></p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="pricing__item_bg-last"></div>
                </div>
            <?php } ?>

        </section>

    </main>
    
    <?php the_content(); ?>

<?php get_footer(); ?>