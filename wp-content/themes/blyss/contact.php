<?php

/**
 * Template Name: Contact Template
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

get_header('contact'); ?>

    <main>

        <section class="contacts">
            <div class="contacts__wrap">
                <div class="container">
                    <div class="contacts__wrap_info">
                        <?php if(get_field('contact_us_page_title')):?>
                            <?php the_field('contact_us_page_title'); ?>
                        <?php endif;?>
                        <?php if(get_field('contact_us_page_sub_title')):?>
                            <?php the_field('contact_us_page_sub_title'); ?>
                        <?php endif;?>
                        <?php if(get_field('5_reasons')):?>
                            <?php the_field('5_reasons'); ?>
                        <?php endif;?>
                        <div class="contacts__items">
                            <div class="contacts__item">
                                <div class="contacts__item_icon">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/clock2.svg" alt="">
                                </div>
                                <div class="contacts__item_text">
                                    <?php if(get_field('contact_hour_title')):?>
                                        <?php the_field('contact_hour_title'); ?>
                                    <?php endif;?>
                                    <p>
                                        <span class="d-block">
                                            <?php if(get_field('weekday_title')):?>
                                                <?php the_field('weekday_title'); ?>
                                            <?php endif;?>
                                        </span> <?=$options['monday_thursday'];?>
                                    </p>
                                    <p>
                                        <span class="d-block">
                                            <?php if(get_field('tuesdays_wednesdays')):?>
                                                <?php the_field('tuesdays_wednesdays'); ?>
                                            <?php endif;?>
                                        </span> <?=$options['tuesday_wednesday'];?>
                                    </p>
                                    <p>
                                        <span class="d-block">
                                            <?php if(get_field('other_day_title')):?>
                                                <?php the_field('other_day_title'); ?>
                                            <?php endif;?>
                                        </span> <?=$options['fridays'];?>
                                    </p>
                                </div>
                            </div>
                            <div class="contacts__item">
                                <div class="contacts__item_icon">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/marker.svg" alt="">
                                </div>
                                <div class="contacts__item_text">
                                    <?php if(get_field('location_title')):?>
                                        <?php the_field('location_title'); ?>
                                    <?php endif;?>
                                    <p class="medium-text"><?=$options['addr'];?></p>
                                    <p class="medium-text"><?=$options['city'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact_form">
                        <h2>
                            <?php if(get_field('call_us_label')):?>
                                <?php the_field('call_us_label'); ?>
                            <?php endif;?>
                            <a itemprop="telephone" content="<?=$options['tel'];?>" href="tel:<?=$options['tel'];?>"><?=$options['tel'];?></a>
                            <?php if(get_field('send_message_label')):?>
                                <?php the_field('send_message_label'); ?>
                            <?php endif;?>
                        </h2>
                        <iframe 
          src="https://link.blyssdental.com/widget/form/SZkDUqTRVSJqTqyw2IiD" 
          style="width:100%;height:100%;border:none;border-radius:0px"
          id="inline-SZkDUqTRVSJqTqyw2IiD" 
        data-layout="{'id':'INLINE'}"
        data-trigger-type="alwaysShow"
        data-trigger-value=""
        data-activation-type="alwaysActivated"
        data-activation-value=""
        data-deactivation-type="neverDeactivate"
        data-deactivation-value=""
        data-form-name="   "
        data-height="802"
        data-layout-iframe-id="inline-SZkDUqTRVSJqTqyw2IiD"
        data-form-id="SZkDUqTRVSJqTqyw2IiD"
        title="   "
      >
        </iframe>
                    </div>

                </div>
                <div class="container">
                    <div class="contacts__map">
                        <a href="https://www.google.com/maps/place/Blyss+Dental+Dr.+Carrasco/@32.9527882,-117.2657975,16z/data=!4m6!3m5!1s0x80dc09071b94e8f1:0xfa37b09163f7e456!8m2!3d32.9525902!4d-117.2624072!16s%2Fg%2F11m2j89c8w" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/map.jpg" alt="" width="1770" height="490">
                        </a>
                    </div>
                </div>
            </div>

        </section>
        <div class="svd-widget container">
        <div class="svd-box">
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
            <div class="contact-page-button-wrapper">
                <span id="ContactWidgetButton" class="d-block">
                    <button type="button">Get Started</button>
                </span>
            </div>
        </div>
    </div>                       
    </main>
    
    <?php the_content(); ?>

    <!-- Map Goggle -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV5mpjYGeAmh_GvvACHo1v978R9Fg9Fho&callback=initMap"></script>

    <script>
        function initMap() {
            var uluru = {lat: <?=$options['map_lat'];?>, lng: <?=$options['map_long'];?>};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru
            });
            var marker = new google.maps.Marker({
                title: 'Hello World',
                position: uluru,
                map: map,
                icon: {
                    url: "<?php echo get_stylesheet_directory_uri();?>/assets/images/marker.svg",
                    scaledSize: new google.maps.Size(45, 45)
                }

            });
        }
        jQuery(document).ready(function($) {
            var scrollTo = $(".contacts__wrap")
            $(".svd-box").click(function() {
                var urlToOpen = "https://appointments.blyssdental.com/appointment-request";
                window.open(urlToOpen, '_blank');
            })
        })
    </script>
    <!-- End Map Goggle -->

<?php get_footer(); ?>