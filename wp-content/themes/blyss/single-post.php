<?php

/**
 * Template file for single post (default post type)
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

$categories = get_categories( [
    'taxonomy'     => 'category',
    'type'         => 'post',
    'object_ids'   => $post->ID,
] );
$category = reset($categories);

$author_name = get_the_author_meta('display_name', $post->post_author);
$author_description = get_the_author_meta('description', $post->post_author);
$author_avatar = get_avatar_url($post->post_author, ['size' => '170']);
get_header('blog'); ?>

    <main>

        <div class="blog_post">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        <ul class="breadcrumbs">
                            <li>
                                <a href="<?php echo get_home_url(); ?>">Home</a>
                            </li>
                            <?php $resource_link = get_permalink( get_page_by_path( 'resources' ) ); ?>
                            <li>
                                <?php echo $category->name;?>
                                <!--<a href="<?php /*echo $resource_link . '?category=' . $category->slug; */?>"><?php /*echo $category->name;*/?></a>-->
                            </li>
                            <li>
                                <a href="#"><?php the_title(); ?></a>
                            </li>
                        </ul>
                        <div>
                            <h1 class="blog_post_h1"><?php the_title(); ?></h1>
                            <div class="blog_post_excerpt">
                                <div><?php the_excerpt(); ?></div>
                            </div>
                            <div class="blog_post_author">
                                <p>By <span><?php echo $author_name; ?></span> <span>|</span> <span>Updated on <span><?php the_modified_time('j F Y'); ?></span></span>  </p>
                            </div>
                            <div class="blog_post_featured_image">
                                <?php echo get_post_featured_image(null, 'full'); ?>
                            </div>
                            <div class="blog_post_text">
                               <div><?php the_content(); ?></div>
                            </div>
                            <div class="blog_post_author">
                                <h2>About the Author</h2>
                                <div class="blog_post_author_block">
                                    <div>
                                        <div class="blog_post_author_img">
                                            <img src="<?php echo $author_avatar;?>" alt="<?php echo $author_name; ?>" width="170" height="170">
                                        </div>
                                    </div>
                                    <div class="blog_post_author_text">
                                        <p class="author-title"><?php echo $author_name; ?></p>
                                        <p><?php echo $author_description;?></p>
                                        <a href="/about/" class="main-btn">Know More About Blyss Dental</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $prev = get_previous_post_link('%link', '<span>Previous Post</span>', true);
                            $next = get_next_post_link( '%link', '<span>Next Post</span>', true );
                            ?>
                            <?php if ($prev || $next) { ?>
                                <div class="blog_post_bottom_nav">
                                    <div>
                                        <?php
                                        echo str_replace( '<a ', '<a class="blog_post_prev" ', $prev );
                                        echo str_replace( '<a ', '<a class="blog_post_next" ', $next );
                                        ?>
                                    </div>
                                   <div class="other-link-item">
                                        <a href="<?php echo get_home_url(); ?>/resources">Back to Resources</a>
                                        <a href="javascript:void(0)" class="back-to-top">Back to Top</a>
                                   </div>
                                    
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="side_bar" id="side_bar">
                            <?php if ( is_active_sidebar( 'post_right_1' ) ) : ?>
                                <?php dynamic_sidebar( 'post_right_1' ); ?>
                            <?php endif; ?>
                            <div class="sidebar-ext-widget" onclick="window.open('https://blyssdental.com/contact-us/', '_blank')">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/georgina.png" alt="" width="75" height="75">
                                </figure>
                                <h4>Request a FREE <br>video consult today</h4>
                                <p>Get all your questions answered in just three easy steps!</p>
                                <div class="blog-page-button-wrapper">
                                    <span id="BlogWidgetButton" class="d-block">
                                        <button type="submit">Click here</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal" id="modalgotquestion" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content modal-form-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Got Questions?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <?php echo apply_shortcodes( '[contact-form-7 id="374" title="Got Questions?" html_class="side_bar_form"]' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $results = wp_get_recent_posts([
                'numberposts' => 3,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish',
                'exclude' => $post->ID
            ], OBJECT);
            ?>
            <?php if ($results) { ?>
                <div class="container blog_page_resources">
                    <div class="blog_post_h2">Resources by Topic</div>
                    <div class="row">
                        <?php foreach( $results as $post ) {
                        setup_postdata( $post );
                        ?>
                            <div class="col-lg-4 col-md-6 col-12" itemscope itemtype="https://schema.org/Article">
                                <a class="blog_page_item" itemprop="url" href="<?php the_permalink(); ?>">
                                    <div class="blog_page_item_img">
                                        <?php
                                        $imageP =  get_post_featured_image(null, 'full');
                                        echo str_replace('<img', '<img itemprop="image"', $imageP);
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
                                        <div class="blog_page_item_text" itemprop="articleBody"><?php the_excerpt(); ?></div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>

    </main>

<?php get_footer('blog'); ?>