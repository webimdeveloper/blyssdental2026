<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <main>
 *
 * @package WordPress
 * @subpackage Blyss
 * @since Blyss 1.0
 */

$options = get_option('blyss_option');

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T4MPTQF');</script>
    <!-- End Google Tag Manager -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous"
          referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.min.css">


    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <!-- Custom Browsers Color End -->

    <?php wp_head(); ?>
    <!--<script src="https://cdn.pagesense.io/js/blyssdental/a8b6e5b3959b4c25aa829f0b38c53be5.js"></script>-->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T4MPTQF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php wp_body_open(); ?>
    <div itemscope itemtype="https://schema.org/Organization">
        <meta itemprop="name" content="<?php bloginfo( 'description' ); ?>" />
        <link itemprop="url" href="<?php echo get_template_directory_uri();?>" />
        <link itemprop="image" href="<?php echo get_template_directory_uri();?>/assets/images/logo.png" />
        <link itemprop="logo" href="<?php echo get_template_directory_uri();?>/assets/images/logo.png" />
        <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
            <meta itemprop="addressLocality" content="<?=$options['city'];?>" />
            <meta itemprop="streetAddress" content="<?=$options['addr'];?>" />
        </div>
        <meta itemprop="telephone" content="<?=$options['tel'];?>" />
    </div>
    <header class="header-contact">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="mobile-flex">
                    <a class="navbar-brand" href="/">
                        <img srcset="<?php echo get_template_directory_uri();?>/assets/images/logo.png 520w,
                        <?php echo get_template_directory_uri();?>/assets/images/logo-2x.png 992w" sizes="(max-width: 520px) 270px, 992px" src="<?php echo get_template_directory_uri();?>/assets/images/logo-2x.png" alt="Blyss">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse justify-content-end" id="navbarCollapse">
                    <div class="navbar-nav">
                        <div class="d-flex flex-lg-row flex-column align-items-lg-center">
                            <div class="d-flex align-items-center align-items-lg-baseline">
                                <span class="text">Questions? Call Us:</span>
                                <a href="tel:<?=$options['tel'];?>" class="bold-link"><?=$options['tel'];?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>