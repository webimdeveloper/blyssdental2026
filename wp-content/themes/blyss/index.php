<?php

/**
 * Template Name: Main Template
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

get_header();
?>
<main>

		<div class="first-screen">
            <div class="container h-100">
                <div class="text">
                    <?php if(get_field('banner_primary_title')):?>
                        <?php the_field('banner_primary_title'); ?>
                    <?php endif;?>
                    <div class="small-text">
                        <?php if(get_field('banner_caption')):?>
                                <?php the_field('banner_caption'); ?>
                        <?php endif;?>
                    </div>
                    <div class="bottom-buttons">
						<button class="primary-btn" type="button" onclick="window.open('https://appointments.blyssdental.com/appointment-request','_blank')">Request a Consultation </button>
                    </div>
                </div>
            </div>
            <div class="image-play">
                <?php if(get_field('banner_image')):?>
                    <div class="photo-back" style="background-image: url(<?php the_field('banner_image'); ?>)"></div>
                <?php endif;?>
                <div class="video-play js-modal-btn" data-video-id="Y2hJvLjzM1c">
                    <div class="pulse">
                        <div class="pulse-1">
                            <br>
                        </div>
                        <div class="pulse-2">
                            <br>
                        </div>
                        <div class="pulse-3">
                            <br>
                        </div>
                    </div>
                    <p>Watch Intro Video by <br>
                        Dr. Georgina Carrasco</p>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="list-items svg">
                <?php if( have_rows('first_group') ): //child group field
                    while( have_rows('first_group') ): the_row(); 
                        // vars
                        $iconfirst = get_sub_field('icon_first');
                        $titlefirst = get_sub_field('title_first');
                        $description_first = get_sub_field('description_first');
                        ?>
                        <div class="item">
                            <div class="item-icon">
                                <img src="<?php echo esc_url($iconfirst['url']); ?>" alt="<?php echo esc_attr($iconfirst['alt']); ?>" />
                            </div>
                            <div class="item-text">
                                <?php echo $titlefirst ?>
                                <p><?php echo $description_first ?></p>
                            </div>
                        </div>	
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if(get_field('section_title')):?>
                    <div class="item item-title"><?php the_field('section_title'); ?></div>
                <?php endif;?>
                <?php if( have_rows('second_group') ): //child group field
                    while( have_rows('second_group') ): the_row(); 
                        // vars
                        $iconsecond = get_sub_field('icon_second');
                        $titlesecond = get_sub_field('title_second');
                        $description_second = get_sub_field('description_second');
                        ?>
                        <div class="item">
                            <div class="item-icon">
                                <img src="<?php echo esc_url($iconsecond['url']); ?>" alt="<?php echo esc_attr($iconsecond['alt']); ?>" />
                            </div>
                            <div class="item-text">
                                <?php echo $titlesecond ?>
                                <p><?php echo $description_second ?></p>
                            </div>
                        </div>	
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if( have_rows('third_group') ): //child group field
                    while( have_rows('third_group') ): the_row(); 
                        // vars
                        $iconthird = get_sub_field('icon_third');
                        $titlethird = get_sub_field('title_third');
                        $description_third = get_sub_field('description_third');
                        ?>
                        <div class="item">
                            <div class="item-icon">
                                <img src="<?php echo esc_url($iconthird['url']); ?>" alt="<?php echo esc_attr($iconthird['alt']); ?>" />
                            </div>
                            <div class="item-text">
                                <?php echo $titlethird ?>
                                <p><?php echo $description_third ?></p>
                            </div>
                        </div>	
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if( have_rows('fourth_group') ): //child group field
                    while( have_rows('fourth_group') ): the_row(); 
                        // vars
                        $iconfourth = get_sub_field('icon_fourth');
                        $titlefourth = get_sub_field('title_fourth');
                        $description_fourth = get_sub_field('description_fourth');
                        ?>
                        <div class="item">
                            <div class="item-icon">
                                <img src="<?php echo esc_url($iconfourth['url']); ?>" alt="<?php echo esc_attr($iconfourth['alt']); ?>" />
                            </div>
                            <div class="item-text">
                                <?php echo $titlefourth ?>
                                <p><?php echo $description_fourth ?></p>
                            </div>
                        </div>	
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if( have_rows('fifth_group') ): //child group field
                    while( have_rows('fifth_group') ): the_row(); 
                        // vars
                        $iconfifth = get_sub_field('icon_fifth');
                        $titlefifth = get_sub_field('title_fifth');
                        $description_fifth = get_sub_field('description_fifth');
                        ?>
                        <div class="item">
                            <div class="item-icon">
                                <img src="<?php echo esc_url($iconfifth['url']); ?>" alt="<?php echo esc_attr($iconfifth['alt']); ?>" />
                            </div>
                            <div class="item-text">
                                <?php echo $titlefifth ?>
                                <p><?php echo $description_fifth ?></p>
                            </div>
                        </div>	
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="background-text">
            <div class="text w-100">
                <?php if(get_field('background_text')):?>
                    <?php the_field('background_text'); ?>
                <?php endif;?>
                <button class="primary-btn" type="button" onclick="window.open('https://appointments.blyssdental.com/appointment-request','_blank')">Request a Consultation </button>
            </div>
        </div>
        <div class="container">
            <div class="images">
                <div class="img-with-text">
                <?php $dentistImage = get_field('photo_of_dentist');?>
                <img src="<?php echo esc_url($dentistImage['url']); ?>" alt="<?php echo esc_attr($dentistImage['alt']); ?>" />
                    <div class="name">
                        <?php if(get_field('dentist_type')):?>
                            <span><?php the_field('dentist_type'); ?></span>
                        <?php endif;?>
                        <?php if(get_field('dentist_name')):?>
                            <p><?php the_field('dentist_name'); ?></p>
                        <?php endif;?>
                    </div>
                </div>
                <div class="text">
                    <?php if(get_field('philosophy_title')):?>
                        <?php the_field('philosophy_title'); ?>
                    <?php endif;?>
                    <?php $diagram = get_field('diagram');?>
                    <img src="<?php echo esc_url($diagram['url']); ?>" alt="<?php echo esc_attr($diagram['alt']); ?>" />
                    <?php if(get_field('philosophy_description')):?>
                        <p><?php the_field('philosophy_description'); ?></p>
                    <?php endif;?>
                </div>
            </div>
            <div class="list-values">
                <?php if( have_rows('value_first') ): //child group field
                        while( have_rows('value_first') ): the_row(); 
                            // vars
                            $valuetitle = get_sub_field('value_title_first');
                            $valuedescription = get_sub_field('value_description_first');
                            ?>
                            <div class="item first">
                                <?php echo $valuetitle ?>
                                <?php echo $valuedescription ?>
                            </div>	
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if( have_rows('value_second') ): //child group field
                        while( have_rows('value_second') ): the_row(); 
                            // vars
                            $valuetitlesecond = get_sub_field('value_title_second');
                            $valuedescriptionsecond = get_sub_field('value_description_second');
                            ?>
                            <div class="item first">
                                <?php echo $valuetitlesecond ?>
                                <?php echo $valuedescriptionsecond ?>
                            </div>	
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if( have_rows('value_third') ): //child group field
                        while( have_rows('value_third') ): the_row(); 
                            // vars
                            $valuetitlethird = get_sub_field('value_title_third');
                            $valuedescriptionthird = get_sub_field('value_description_third');
                            ?>
                            <div class="item first">
                                <?php echo $valuetitlethird ?>
                                <?php echo $valuedescriptionthird ?>
                            </div>	
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if( have_rows('value_fourth') ): //child group field
                        while( have_rows('value_fourth') ): the_row(); 
                            // vars
                            $valuetitlefourth = get_sub_field('value_title_fourth');
                            $valuedescriptionfourth = get_sub_field('value_description_fourth');
                            ?>
                            <div class="item first">
                                <?php echo $valuetitlefourth ?>
                                <?php echo $valuedescriptionfourth ?>
                            </div>	
                        <?php endwhile; ?>
                    <?php endif; ?>
            </div>
        </div>
        <div class="bg-services">
            <div class="container">
                <div class="services">
                    <div class="list-items">
                        <div class="item">
                            <?php if(get_field('services_first')):?>
                                <div class="item-text">
                                    <?php the_field('services_first'); ?>
                                    <?php the_field('service_first_description'); ?>
                                </div>
                            <?php endif;?>
                        </div>
                        <div class="item">
                            <?php if(get_field('services_second')):?>
                                <div class="item-text">
                                    <?php the_field('services_second'); ?>
                                    <?php the_field('service_second_description'); ?>
                                </div>
                            <?php endif;?>
                        </div>
                        <div class="item">
                            <?php if(get_field('services_third')):?>
                                <div class="item-text">
                                    <?php the_field('services_third'); ?>
                                    <?php the_field('service_third_description'); ?>
                                </div>
                            <?php endif;?>
                        </div>
                        <div class="item">
                            <?php if(get_field('services_furth_copy')):?>
                                <div class="item-text">
                                    <?php the_field('services_furth_copy'); ?>
                                    <?php the_field('service_fourth_description'); ?>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="text">
                        <?php if(get_field('service_section_title')):?>
                            <div class="item-text">
                                <?php the_field('service_section_title'); ?>
                                <?php the_field('service_section_description'); ?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="table-values">
                <?php if(get_field('table_title')):?>
                    <?php the_field('table_title'); ?>
                <?php endif;?>
                <div class="table-properties">
                    <div class="item item-title">
                        <div></div>
                        <div>
                            <h4>Other Dental Practices</h4>
                        </div>
                        <div>
                            <h4>Blyss Dental</h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>5-year guarantee</p>
                        </div>
                        <div class="values">
                            <div class="first-column">
                                <p class="ico ico-no">
                                    <span></span>
                                </p>
                            </div>
                            <div class="second-column">
                                <p class="ico ico-yes">
                                    <span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Use only top materials </p>
                        </div>
                        <div class="values">
                            <div class="first-column">
                                <p>sometimes</p>
                            </div>
                            <div class="second-column">
                                <p class="ico ico-yes">
                                    <span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>On-time appointments <span>(with compensation for extra wait)</span> </p>
                        </div>
                        <div class="values">
                            <div class="first-column">
                                <p>unlikely</p>
                            </div>
                            <div class="second-column">
                                <p class="ico ico-yes">
                                    <span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Non-rushed appointments</p>
                        </div>
                        <div class="values">
                            <div class="first-column">
                                <p>sometimes</p>
                            </div>
                            <div class="second-column">
                                <p class="ico ico-yes">
                                    <span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Zero tolerance for infection control infractions</p>
                        </div>
                        <div class="values">
                            <div class="first-column">
                                <p>enforcement varies</p>
                            </div>
                            <div class="second-column">
                                <p class="ico ico-yes">
                                    <span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Gentle-touch procedures</p>
                        </div>
                        <div class="values">
                            <div class="first-column">
                                <p>sometimes</p>
                            </div>
                            <div class="second-column">
                                <p class="ico ico-yes">
                                    <span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Ethical treatment plans <span>(no upselling)</span> </p>
                        </div>
                        <div class="values">
                            <div class="first-column">
                                <p>varies</p>
                            </div>
                            <div class="second-column">
                                <p class="ico ico-yes">
                                    <span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Online consultation</p>
                        </div>
                        <div class="values">
                            <div class="first-column">
                                <p>sometimes</p>
                            </div>
                            <div class="second-column">
                                <p class="ico ico-yes">
                                    <span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="name">
                            <p>Virtual estimates </p>
                        </div>
                        <div class="values">
                            <div class="first-column">
                                <p class="ico ico-no">
                                    <span></span>
                                </p>
                            </div>
                            <div class="second-column">
                                <p class="ico ico-yes">
                                    <span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="review-block">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="review-text">
                            <h2>Don’t take our word for it. <br> Here’s what our patients are saying.</h2>
                            <div class="review-list">
								<?php echo do_shortcode('[trustindex no-registration=google]'); ?>
                                <div class="owl-carousel list-items">
                                    <div class="item">
                                        <div class="item-text">
                                            <h3>Gabriel Kent</h3>
                                            <div class="rating-icons">
                                                <span class="wp-stars">
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                            <p>Highly recommended. Dr. Georgina and her team are super friendly, they made me feel comfortable for my dental x-rays, oral exam and teeth cleaning. Great prices too, so I am happy to say I have a new dentist!</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-text">
                                            <h3>roberto R</h3>
                                            <div class="rating-icons">
                                                <span class="wp-stars">
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                            <p>I was shopping around for dental implants in San Diego, also went to a few dentists, wasn't really confident with their recommendations Then saw Dr. Georgina, she had the best office and attitude, all kinds of advanced 3D equipment. She took the time to explain everything to me very well. Done with the implants, super satisfied with the results! Highly recommend!</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-text">
                                            <h3>Ava Colasin</h3>
                                            <div class="rating-icons">
                                                <span class="wp-stars">
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                            <p>I had such a great experience here! The staff was very sweet and attentive. I really appreciated the relaxing atmosphere (music and ocean views). Dr. Carrasco was amazing and I felt I was taken very well care of. Thank you Blyss dental for my fantastic first visit!</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-text">
                                            <h3>Caralyn Barker</h3>
                                            <div class="rating-icons">
                                                <span class="wp-stars">
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                            <p>I love Blyss Dental!!  My first time going was such a wonderful experience.  Best dentist I’ve ever been to.  Dr. Carrasco has become my absolute favorite.  Will be seeing just her from now on.!</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-text">
                                            <h3>Kendall Wood</h3>
                                            <div class="rating-icons">
                                                <span class="wp-stars">
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="wp-star">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="17" height="17" viewBox="0 0 1792 1792">
                                                            <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fc0"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                            <p>Best dental experience I’ve had. She did an amazing job with my tooth extraction and the whole process was smooth. The pricing is extremely reasonable and the office is very clean.</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="main-btn" data-toggle="modal" data-target="#modalReviews">Read Google Reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="review-video">
                            <div class="image-review-video">
                                <div class="image js-modal-btn" data-video-id="b2grt20hpro">
                                    <img src="https://blyssdental.com/wp-content/themes/blyss/assets/images/photo.jpg" alt="">
                                </div>
                                <div class="name">
                                    <p>Michele Tankersley</p>
                                    <p>San Diego, California</p>
                                </div>
                            </div>
                            <div class="video-play js-modal-btn" data-video-id="b2grt20hpro">
                                <div class="pulse">
                                    <div class="pulse-1">
                                        <br>
                                    </div>
                                    <div class="pulse-2">
                                        <br>
                                    </div>
                                    <div class="pulse-3">
                                        <br>
                                    </div>
                                    <p>Watch Michelle's Review</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php

$args = array(
    'post_type'=> 'testimonials',
    'order'    => 'ASC'
);

$the_query = new WP_Query( $args );
if($the_query->have_posts() ) : ?>

    <section class="reviews">
        <div class="container">
            <div class="carousel-block">
                <?php if(get_field('review_title')):?>
                    <?php the_field('review_title'); ?>
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
                                <div><?php the_content(); ?></div>
                            </div>
                        </div>

                    <?php
                    endwhile;
                    wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    </section>

<?php
else:
endif;

?>
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
            <div class="home-widget-button-wrapper">
                <span id="HomeWidgetButton" class="d-block">
                    <button type="submit">Get Started</button>
                </span>
            </div>
        </div>
    </div>
	</main>
	
	<?php the_content(); ?>

<?php get_footer(); ?>