<?php

$options = get_option('blyss_option');

?>
<footer>
    <div class="footer">
        <div class="container">
            <div class="footer-items" itemscope itemtype="https://schema.org/WPFooter">
                <div class="nav-address" itemscope itemtype="https://schema.org/Organization">
					<a href="/"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo-white.png" width="270" height="72" itemprop="name" alt="Blyss"></a>
                    <div class="d-flex">
                        <a href="#" class="maps-link" data-toggle="modal" data-target="#modalmaps">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/maps-small.png" width="120" height="90" itemprop="name" alt="Blyss">
                        </a>
                        <div>
                            <p itemprop="address"><?=$options['addr'];?></p>
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
                    <a style="white-space:nowrap;" href="tel:<?=$options['tel'];?>" class="bold-link reverse" itemprop="telephone"><?=$options['tel'];?></a>
                    <ul class="social-icons">
                        <li><a href="https://instagram.com/blyssdentalsandiego?igshid=MzRlODBiNWFlZA==" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/in.svg" alt="Blyss Dental Instagram Page"></a></li>
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

<script src="<?php echo get_template_directory_uri();?>/assets/js/scripts-f54301c7cf.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "url": "https://blyssdental.com/",
        "logo": "<?php echo get_template_directory_uri();?>/assets/images/logo.png"
    }
</script>

<div class="modal" id="modalmaps" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-form-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.940124942886!2d-117.2645958845125!3d32.95259018091926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc08b21ae7d663%3A0xacbf1217b9453eee!2zODA3IENhbWlubyBEZWwgTWFyLCBEZWwgTWFyLCBDQSA5MjAxNCwg0KHQqNCQ!5e0!3m2!1sru!2sua!4v1633543259047!5m2!1sru!2sua" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

<?php wp_footer(); ?>

</body>
</html>