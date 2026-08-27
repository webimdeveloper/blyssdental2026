<?php

/**
 * Template Name: Resource Template
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
global  $post;

get_header(); ?>

    <main>
        <div class="blog_page">
            <!-- Recent -->
            <?php
            $result_main = wp_get_recent_posts( [
                'numberposts'      => 1,
                'orderby'          => 'post_date',
                'order'            => 'DESC',
                'post_type'        => 'post',
                'post_status'      => 'publish',
            ], OBJECT );
            $result_add = wp_get_recent_posts( [
                'numberposts'      => 3,
                'offset'           => 1,
                'orderby'          => 'post_date',
                'order'            => 'DESC',
                'post_type'        => 'post',
                'post_status'      => 'publish',
            ], OBJECT );
            ?>
            <?php if ($result_main || $result_add) { ?>
                <div class="blog_page_most_recent">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 blog_page_top_title">
                                <?php if(get_field('resource_header_title')):?>
                                    <?php the_field('resource_header_title'); ?>
                                <?php endif;?>
                                <?php if(get_field('resource_header_description')):?>
                                    <?php the_field('resource_header_description'); ?>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="row">
                            <?php if ($result_main) { ?>
                                <?php foreach( $result_main as $post ) {
                                    setup_postdata( $post );
                                    ?>
                                <div class="col-xl-8 col-lg-7 col-12 pr-xl-0" itemscope itemtype="http://schema.org/Article">
                                    <a class="blog_page_big_item" href="<?php the_permalink(); ?>" itemprop="url">
                                        <div class="blog_page_item_img" itemprop="image">
                                            <?php
                                            $imageM =  get_post_featured_image(null, 'full');
                                            echo str_replace('<img', '<img itemprop="image"', $imageM);
                                            ?>
                                        </div>
                                        <div class="blog_page_item_info">
                                            <?php
                                            $categories = get_categories( [
                                                'taxonomy'     => 'category',
                                                'type'         => 'post',
                                                'object_ids'   => $post->ID,
                                            ] );
                                            $categories_str = '';
                                            foreach ($categories as $category) {
                                                $categories_str .= $category->name . ',';
                                            }
                                            $categories_str = rtrim($categories_str, ',');
                                            ?>
                                            <div class="blog_page_h3 type_four" itemprop="articleSection"><?php echo $categories_str;?></div>
                                            <div class="blog_page_h4" itemprop="headline"><?php the_title(); ?></div>
                                            <p>By <span itemprop="author"><?php the_author(); ?></span></p>
                                            <div class="blog_page_item_text" itemprop="articleBody"><?php the_excerpt(); ?></div>
                                        </div>
                                    </a>
                                </div>
                                <?php }
                                wp_reset_postdata();
                                ?>
                            <?php } ?>
                            <?php if ($result_add) { ?>
                                <div class="col-xl-4 col-lg-5 col-12 pl-xl-0 blog_page_list">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <?php if(get_field('resource_sidebar_title')):?>
                                            <?php the_field('resource_sidebar_title'); ?>
                                        <?php endif;?>
                                        <?php if(get_field('resource_siebar_link')):?>
                                            <?php the_field('resource_siebar_link'); ?>
                                        <?php endif;?>
                                    </div>

                                    <div class="blog_page_items">
                                        <?php foreach( $result_add as $post ) {
                                            setup_postdata( $post );
                                            ?>
                                            <a class="blog_page_item" itemscope itemtype="http://schema.org/Article" href="<?php the_permalink(); ?>">
                                                <div class="blog_page_item_row">
                                                    <div class="blog_page_item_img">
                                                        <?php
                                                        $imageС =  get_post_featured_image(null, 'full');
                                                        echo str_replace('<img', '<img itemprop="image"', $imageС);
                                                        ?>
                                                    </div>
                                                    <div class="blog_page_item_info">
                                                        <?php
                                                        $categories = get_categories( [
                                                            'taxonomy'     => 'category',
                                                            'type'         => 'post',
                                                            'object_ids'   => $post->ID,
                                                        ] );
                                                        $categories_str = '';
                                                        foreach ($categories as $category) {
                                                            $categories_str .= $category->name . ',';
                                                        }
                                                        $categories_str = rtrim($categories_str, ',');
                                                        ?>
                                                        <div class="blog_page_h3 type_two" itemprop="articleSection"><?php echo $categories_str;?></div>
                                                        <div class="blog_page_h4" itemprop="headline" title="<?php the_title(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 40, '...'); ?></div>
                                                        <p class="d-none">By <span itemprop="author"><?php the_author(); ?></span></p>
                                                    </div>
                                                </div>
                                                <div class="blog_page_item_text" itemprop="articleBody"><?php the_excerpt(); ?></div>
                                            </a>
                                        <?php }
                                        wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End Recent -->

            <!-- Videos -->
            <?php
            $args = array(
                'post_type'=> 'videos',
                'order'    => 'ASC',
                'posts_per_page' => -1
            );

            $the_query = new WP_Query( $args );
            if ($the_query->have_posts() ) : ?>
            <?php $i = 0; ?>
                <div class="blog_page_featured_videos">
                    <div class="container">
                        <?php if(get_field('video_title')):?>
                            <?php the_field('video_title'); ?>
                        <?php endif;?>
                        <div class="owl-carousel owl-theme blog_page_carousel">
                            <?php
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post();

                               

                                $custom = get_post_custom();

                                if (isset($custom['youtube_id'])) {
                            ?>
                            <?php if ( $i % 2 ==  0) : ?>
                                <div class="item">
                            <?php endif; ?>
                            
                                <div class="video-item js-modal-btn" data-video-id="<?php echo $custom['youtube_id'][0];?>">
                                    <div class="blog_page_featured_video">
                                        <img src="//img.youtube.com/vi/<?php echo $custom['youtube_id'][0];?>/0.jpg" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="blog_page_h4"><?php the_title(); ?></div>
                                </div>
                            <?php if ( $i % 2 != 0 ) : ?>
                                </div>
                            <?php endif; ?>

                            <?php $i++; } endwhile; // End Loop. ?>

                            <?php if ( $i % 2 != 0 ) : ?>
                                </div>
                            <?php endif; ?>
                            <?php
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            ?>
            <!-- End Videos -->

            <!-- Categories -->
            <?php
            $categories = get_categories( [
                'taxonomy'     => 'category',
                'type'         => 'post',
            ] );

            if ($categories) {
            ?>
                <div class="blog_page_resources">
                    <div class="container">
                        <?php if(get_field('topic_title')):?>
                            <?php the_field('topic_title'); ?>
                        <?php endif;?>
                        <?php if(get_field('topic_description')):?>
                            <?php the_field('topic_description'); ?>
                        <?php endif;?>
                        <div class="blog_page_tabs">
                            <ul class="nav nav-pills" id="blog_page_tab" role="tablist">
                                <li>
                                    <a class="blog_page_h3 active" id="all-tab" data-category="all">All</a>
                                </li>
                                <?php
                                foreach ($categories as $index => $category) { ?>
                                    <li>
                                        <a class="blog_page_h3 type_<?= ($index + 1);?>" id="<?php echo $category->slug?>-tab"  data-category="<?php echo $category->slug?>"><?php echo $category->name?></a>
                                    </li>
                                <?php }
                                ?>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                    <div class="container">
                                        <div class="row"></div>
                                        <?php if(get_field('view_more_button')):?>
                                            <?php the_field('view_more_button'); ?>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End Categories -->
        </div>
	</main>

<?php get_footer('blog'); ?>