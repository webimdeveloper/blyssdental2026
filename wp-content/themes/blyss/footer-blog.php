<?php

$options = get_option('blyss_option');

?>
<footer class="footer_blog">
    <div class="information-block-mobile">
        <div class="container">
            <div class="information-block">
                <h2>Get Our Dental Wellness Newsletter!</h2>
                <div class="enter-block">
                    <?php echo do_shortcode('[contact-form-7 id="416" title="Get Our Dental Wellness Newsletter!"]'); ?>
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
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/maps-small.webp" width="120" height="90" alt="Blyss">
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
            <div class="footer-bottom-text">
                <p>© <?php echo date("Y"); ?> Blyss. Cosmetic & Restorative Dentistry</p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

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
            <?php echo do_shortcode('[contact-form-7 id="229" title="Book your appointment"]'); ?>
        </div>
        <div class="modal-content modal-success-content d-none">
            <div class="success-block">
                <svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve" preserveAspectRatio="xMidYMid meet"><g><circle class="wi-circle" cx="50" cy="49.9999657" r="47.5"></circle><circle class="wi-circle-dash" cx="50" cy="49.9999657" r="47.5"></circle>
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
        <a href="tel:858-799-0570"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/call.svg" alt="Call Us" width="48px" height="48px"> Call Us</a>
        <a href="javascript:void(0)" data-toggle="modal" data-target="#modalBookAnAppointment_2"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/mail.svg" alt="Email Us" width="48px" height="48px"> Contact Us</a>
        <a href="https://maps.app.goo.gl/2oAaf9fjyvRYCU1r6?g_st=com.google.maps.preview.copy" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/location.svg" alt="View Direction" width="48px" height="48px"> Directions</a>
    </div>
<!-- end mobile footer widget -->

<?php wp_footer(); ?>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous"
      referrerpolicy="no-referrer" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" media="print" onload="this.media='all'; this.onload=null;" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer">

<!--<script src="<?php /*echo get_template_directory_uri();*/?>/assets/js/scripts-f54301c7cf.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script async src="https://cdn.pagesense.io/js/blyssdental/a8b6e5b3959b4c25aa829f0b38c53be5.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--<script src="<?php /*echo get_template_directory_uri();*/?>/assets/js/script.js"></script>-->


<script type="text/javascript">
    jQuery(document).ready(function($){
        $(".contact-trigger").click(function(){
            var title = $("title").text();
            $("#blog_post").val(title);
        })
    })
</script>
</body>
</html>