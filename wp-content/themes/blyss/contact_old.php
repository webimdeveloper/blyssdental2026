<?php

/**
 * Template Name: Contact Template2
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

get_header(); ?>

    <main>

        <section class="contacts">
            <div class="head-descr-sect_top">
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>

            <div itemscope itemtype="https://schema.org/Pharmacy" class="contacts__wrap">
                <div class="container">
                    <div class="contacts__wrap_left">
                        <div class="map" id="map"></div>
                    </div>
                    <div class="contacts__wrap_right">
                        <div class="contacts__items">
                            <div class="contacts__item">
                                <div class="contacts__item_icon">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/clock2.svg" alt="">
                                </div>
                                <div class="contacts__item_text">
                                    <h4>Hours</h4>
                                    <p itemprop="openingHours" content="Mo,Tu,We,Th,Fr 08:00-20:00"><span>Weekdays:</span> <?=$options['weekdays_hours'];?></p>
                                    <p itemprop="openingHours" content="Sa, Su 06:00-21:00"><span>Saturdays:</span> <?=$options['Saturdays'];?></p>
                                </div>
                            </div>
                            <div class="contacts__item">
                                <div class="contacts__item_icon">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/marker.svg" alt="">
                                </div>
                                <div class="contacts__item_text">
                                    <h4>Where are we?</h4>
                                    <p class="medium-text"><?=$options['addr'];?></p>
                                    <p class="medium-text"><?=$options['city'];?></p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn primary-btn-not-arrow" data-toggle="modal" data-target="#modalBookAnAppointment_2">Contact US</a>
                        <p class="contacts__phone"><span class="medium-text">Phone:</span>  <a itemprop="telephone" content="<?=$options['tel'];?>" href="tel:<?=$options['tel'];?>"><?=$options['tel'];?></a></p>
                    </div>
                </div>
            </div>

        </section>

    </main>
    
    <?php the_content(); ?>

    <!-- Map Goggle -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV5mpjYGeAmh_GvvACHo1v978R9Fg9Fho&callback=initMap" type="text/javascript"></script>

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
    </script>
    <!-- End Map Goggle -->

    <!-- modal contact -->
    <div class="modal" id="modalBookAnAppointment_2" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-form-content">
                <?php echo do_shortcode('[contact-form-7 id="49" title="Contact Us"]'); ?>
            </div>
            <div class="modal-content modal-success-content d-none">
                <div class="success-block">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve" preserveAspectRatio="xMidYMid meet"><g><circle class="wi-circle" cx="50" cy="49.9999657" r="47.5"></circle><circle class="wi-circle-dash" cx="50" cy="49.9999657" r="47.5"></circle>
                            <polyline class="wi-check" points="28.6469955,52.0561066 42.2152748,65.6243896 71.3530045,36.4866562"></polyline>
                            <polyline class="wi-check-dash" points="28.6469955,52.0561066 42.2152748,65.6243896 71.3530045,36.4866562"></polyline></g></svg>
                    <h3>Thank You!</h3>
                    <p>We'll contact with you ASAP. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal contact -->
<?php get_footer(); ?>