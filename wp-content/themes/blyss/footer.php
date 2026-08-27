<?php

$options = get_option('blyss_option');

?>
<footer>
    <div class="information-block-mobile">
        <div class="container">
            <div class="information-block">
                <h2>Ready to schedule your appointment?</h2>
                <div class="bottom-buttons">
                    <button class="primary-btn" type="button" onclick="window.open('https://appointments.blyssdental.com/appointment-request','_blank')">Request a Consultation </button>
                </div>
            </div>
        </div>
    </div>    
    <div class="footer">
        <div class="container">
            <div class="footer-items">
                <div class="nav-address">
					<a href="/"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo-white.png" width="270" height="72" alt="Blyss"></a>
                    <div class="d-flex">
                        <a href="#" class="maps-link" data-toggle="modal" data-target="#modalmaps">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/maps-small.png" width="120" height="90" alt="Blyss">
                        </a>
                        <div>
                            <p><?=$options['addr'];?></p>
                            <p><?=$options['city'];?> • <?=$options['tel'];?></p>
                        </div>
                    </div>
                </div>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container'       => false,
                    'container_class'       => false,
                    'container_id'    => false,
                    'menu_class'    => false,
                    'items_wrap'    => '%3$s',
                    'walker'    => new Footer_Nav_Menu_Walker()
                ]);
                ?>
                <div class="nav-contacts">
                    <p>Call us today: </p>
                    <a style="white-space:nowrap;" href="tel:<?=$options['tel'];?>" class="bold-link reverse"><?=$options['tel'];?></a>
                    <ul class="social-icons">
                        <li><a href="https://www.instagram.com/drgeorginacarrasco/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/in.svg" alt="Blyss Dental Instagram Page"></a></li>
                        <li><a href="https://www.facebook.com/drgeorginacarrasco/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/fb.svg" alt="Blyss Dental Facebook Page"></a></li>
                        <li><a href="https://www.youtube.com/@drgeorginacarrasco" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/yt.png" alt="Blyss Dental Youtube Page"></a></li>
                        <li><a href="https://www.tiktok.com/@drgeorginacarrasco" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/tk.png" alt="Blyss Dental Tik Tok Page"></a></li>
                        <li><a href="https://www.linkedin.com/in/georgina-carrasco-23724b190/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/lin.png" alt="Blyss Dental LinkedIn Page"></a></li>
                        <li><a href="https://g.co/kgs/VKgi35C" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/gl.png" alt="Blyss Dental Google Business Page"></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom-text" itemscope itemtype="https://schema.org/WPFooter">
                <p>© <span itemprop="copyrightYear"><?php echo date("Y"); ?></span> Blyss. Cosmetic & Restorative Dentistry</p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous"
      referrerpolicy="no-referrer" />

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script src="<?php echo get_template_directory_uri();?>/assets/js/scripts-f54301c7cf.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.scroltable.js"></script>
<script async src="https://cdn.pagesense.io/js/blyssdental/a8b6e5b3959b4c25aa829f0b38c53be5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="modal" id="modalmaps" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-form-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.940124942886!2d-117.2645958845125!3d32.95259018091926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc08b21ae7d663%3A0xacbf1217b9453eee!2zODA3IENhbWlubyBEZWwgTWFyLCBEZWwgTWFyLCBDQSA5MjAxNCwg0KHQqNCQ!5e0!3m2!1sru!2sua!4v1633543259047!5m2!1sru!2sua" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

<!-- modal contact -->
    <div class="modal" id="modalBookAnAppointment_2" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-form-content">
                <div class="modal-header">
                    <h5 class="modal-title">Book your appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <iframe 
          src="https://link.blyssdental.com/widget/form/uZTi73zLUU8zGTzMyczN" 
          style="width:100%;height:100%;border:none;border-radius:27px"
          id="inline-uZTi73zLUU8zGTzMyczN" 
        data-layout="{'id':'INLINE'}"
        data-trigger-type="alwaysShow"
        data-trigger-value=""
        data-activation-type="alwaysActivated"
        data-activation-value=""
        data-deactivation-type="neverDeactivate"
        data-deactivation-value=""
        data-form-name="    "
        data-height="633"
        data-layout-iframe-id="inline-uZTi73zLUU8zGTzMyczN"
        data-form-id="uZTi73zLUU8zGTzMyczN"
        title="    "
      >
        </iframe>
        <script src="https://link.blyssdental.com/js/form_embed.js"></script>
            </div>
            <div class="modal-content modal-success-content d-none">
                <div class="success-block">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve" preserveAspectRatio="xMidYMid meet"><g><circle class="wi-circle" cx="50" cy="49.9999657" r="47.5"></circle><circle class="wi-circle-dash" cx="50" cy="49.9999657" r="47.5"></circle>
                            <polyline class="wi-check" points="28.6469955,52.0561066 42.2152748,65.6243896 71.3530045,36.4866562"></polyline>
                            <polyline class="wi-check-dash" points="28.6469955,52.0561066 42.2152748,65.6243896 71.3530045,36.4866562"></polyline></g></svg>
                    <h3>Thank You!</h3>
                    <p>We'll contact with you ASAP. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal contact -->

    <!-- mobile footer widget -->
        <div class="mobile-footer-widget">
            <a href="tel:858-799-0570"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/call.svg" alt="Call Us" width="48" height="48"> Call Us</a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalBookAnAppointment_2"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/mail.svg" alt="Email Us" width="48" height="48"> Contact Us</a>
            <a href="https://maps.app.goo.gl/2oAaf9fjyvRYCU1r6?g_st=com.google.maps.preview.copy" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/location.svg" alt="View Direction" width="48" height="48"> Directions</a>
        </div>
    <!-- end mobile footer widget -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src='https://blyssdental.com/wp-content/themes/blyss/assets/js/jquery-modal-video.min.js?ver=1.0' id='blyss-modal-video-js'></script>

<script>
    //js for modal video
    $(".js-modal-btn").modalVideo({channel: 'youtube', youtube: {autoplay: 1, modestbranding: 1}});

    //js for carousel
    $('.review-block .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        margin: 20,
        navText: ['<span class="arrow-owl arrow-left"></span>', '<span class="arrow-owl arrow-right"></span>'],
        items : 1
    })
</script>
</body>
</html>