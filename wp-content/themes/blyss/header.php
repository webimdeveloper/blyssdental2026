<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <main>
 *
 * V3 header layout (ported from Elementor Theme Builder "Header V3 (Simple)",
 * post 8784) - see header.old.php for the previous classic markup.
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
    <!--<meta name="description" content="<?php /*bloginfo( 'description' ); */?>">-->
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

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/modal-video.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">

    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//cdn.pagesense.io">
    
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <!-- Custom Browsers Color End -->

    <?php wp_head(); ?>

    <!-- New header design (V3) dependencies, ported from Elementor Theme Builder header (post 8784) -->
    <link rel='stylesheet' id='widget-mega-menu-css' href='https://blyssdental.com/wp-content/plugins/elementor-pro/assets/css/widget-mega-menu.min.css?ver=4.2.2' media='all' />
    <link rel='stylesheet' id='e-animation-fadeIn-css' href='https://blyssdental.com/wp-content/plugins/elementor/assets/lib/animations/styles/fadeIn.min.css?ver=4.2.3' media='all' />
    <link rel='stylesheet' id='global-2-frontend-desktop-css' href='https://blyssdental.com/wp-content/uploads/elementor/css/global-2-frontend-desktop.css?ver=header-v3-1' media='all' />
    <link rel='stylesheet' id='global-2-frontend-tablet-css' href='https://blyssdental.com/wp-content/uploads/elementor/css/global-2-frontend-tablet.css?ver=header-v3-1' media='(max-width:1024px)' />
    <link rel='stylesheet' id='global-2-frontend-mobile-css' href='https://blyssdental.com/wp-content/uploads/elementor/css/global-2-frontend-mobile.css?ver=header-v3-1' media='(max-width:767px)' />
    <link rel='stylesheet' id='local-8784-frontend-desktop-css' href='https://blyssdental.com/wp-content/uploads/elementor/css/local-8784-frontend-desktop.css?ver=header-v3-1' media='all' />
    <link rel='stylesheet' id='local-8784-frontend-tablet-css' href='https://blyssdental.com/wp-content/uploads/elementor/css/local-8784-frontend-tablet.css?ver=header-v3-1' media='(max-width:1024px)' />
    <link rel='stylesheet' id='local-8784-frontend-mobile-css' href='https://blyssdental.com/wp-content/uploads/elementor/css/local-8784-frontend-mobile.css?ver=header-v3-1' media='(max-width:767px)' />
    <link rel='stylesheet' id='elementor-post-8784-css' href='https://blyssdental.com/wp-content/uploads/elementor/css/post-8784.css?ver=header-v3-1' media='all' />

    <meta property="article:author" content="<?php echo get_the_author_meta('display_name', $post->post_author);?>">
</head>

<body <?php body_class( 'elementor-template-full-width elementor-kit-4952 elementor-page' ); ?>>

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T4MPTQF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
    <?php wp_body_open(); ?>
    <div itemscope itemtype="https://schema.org/Organization">
        <meta itemprop="name" content="<?php bloginfo( 'description' ); ?>" />
        <link itemprop="url" href="https://blyssdental.com/" />
        <link itemprop="image" href="<?php echo get_template_directory_uri();?>/assets/images/logo.png" />
        <link itemprop="logo" href="<?php echo get_template_directory_uri();?>/assets/images/logo.png" />
        <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
            <meta itemprop="addressLocality" content="<?=$options['city'];?>" />
            <meta itemprop="streetAddress" content="<?=$options['addr'];?>" />
        </div>
        <meta itemprop="telephone" content="<?=$options['tel'];?>" />
    </div>

<header data-elementor-type="header" data-elementor-id="8784" class="elementor elementor-8784 elementor-location-header" data-elementor-post-type="elementor_library">
			<div class="elementor-element elementor-element-1f441858 e-con e-atomic-element e-flexbox-base wa-header " data-id="1f441858" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="1f441858" data-e-type="e-flexbox" data-id="1f441858">
    <section class="elementor-element elementor-element-54985610 e-con e-atomic-element e-div-block-base e-54985610-fad9b2e " data-id="54985610" data-element_type="e-div-block" data-e-type="e-div-block" data-interaction-id="54985610" data-e-type="e-div-block" data-id="54985610">
    <div class="elementor-element elementor-element-6a1f0a82 e-con e-atomic-element e-flexbox-base e-6a1f0a82-8b5afc7 " data-id="6a1f0a82" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="6a1f0a82" data-e-type="e-flexbox" data-id="6a1f0a82">
    <div class="elementor-element elementor-element-2d3e4b7 e-con e-atomic-element e-flexbox-base e-2d3e4b7-b355102 " data-id="2d3e4b7" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="2d3e4b7" data-e-type="e-flexbox" data-id="2d3e4b7">
    			<div class="e-5bfe36cd-ed6addd e-svg-base" data-interaction-id="5bfe36cd" data-e-type="widget" data-id="5bfe36cd"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" style="width: 100%; height: 100%; overflow: unset;" id="Layer_1" data-name="Layer 1" viewBox="0 0 10 14"><path d="M5,0C2.24,0,0,2.23,0,4.98c0,3.69,4.05,8.11,4.86,8.96.08.08.2.08.28,0,.81-.85,4.86-5.27,4.86-8.96C10,2.23,7.77,0,5,0ZM5,7.45c-1.38,0-2.5-1.12-2.5-2.49s1.12-2.49,2.5-2.49,2.5,1.12,2.5,2.49-1.12,2.49-2.5,2.49Z" fill="#fff"></path></svg></div>					<p class="e-b29aa9f-afbbcb5 e-paragraph-base" data-interaction-id="b29aa9f" data-e-type="widget" data-id="b29aa9f">807 Camino Del Mar</p>
		
</div>
			<p class="e-6ee83c95-3eb0eb0 ws_item-dot-pseudo e-paragraph-base" data-interaction-id="6ee83c95" data-e-type="widget" data-id="6ee83c95">Del Mar, CA 92014</p>
					<p class="ws_item-dot-pseudo e-148327f9-6af39cb e-paragraph-base" data-interaction-id="148327f9" data-e-type="widget" data-id="148327f9">Serving all of San Diego</p>
		
</div>

</section>
<section class="elementor-element elementor-element-7f7d2ee2 e-con e-atomic-element e-div-block-base e-7f7d2ee2-a94ef28 " data-id="7f7d2ee2" data-element_type="e-div-block" data-e-type="e-div-block" data-interaction-id="7f7d2ee2" data-e-type="e-div-block" data-id="7f7d2ee2">
    <div class="elementor-element elementor-element-45e5373b e-con e-atomic-element e-flexbox-base e-45e5373b-00e83a8 " data-id="45e5373b" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="45e5373b" data-e-type="e-flexbox" data-id="45e5373b">
    			<a href="/" target="_self" class="e-42605ac0-08c7f42 e-svg-base" data-interaction-id="42605ac0" data-e-type="widget" data-id="42605ac0"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" style="width: 100%; height: 100%; overflow: unset;" id="Layer_1" data-name="Layer 1" viewBox="0 0 240 66"><g><path d="M102.43,44.43c-.72,0-1.35-.16-1.87-.5-.52-.33-.93-.79-1.21-1.38-.28-.59-.43-1.28-.43-2.06s.14-1.46.43-2.06c.28-.59.69-1.06,1.21-1.39.52-.33,1.15-.5,1.87-.5.86,0,1.57.21,2.1.64.54.43.88,1.03,1.03,1.81h-1.16c-.11-.45-.32-.81-.65-1.08-.33-.27-.77-.4-1.32-.4-.5,0-.93.12-1.3.36-.37.24-.65.58-.84,1.02-.2.44-.3.97-.3,1.59s.1,1.15.3,1.59c.2.45.48.79.84,1.02.37.24.8.35,1.3.35.56,0,1-.13,1.32-.39s.54-.61.65-1.05h1.16c-.15.75-.49,1.34-1.03,1.77-.54.42-1.24.64-2.1.64Z" fill="#233556"></path><path d="M110.93,44.43c-.71,0-1.33-.16-1.87-.5-.54-.33-.96-.79-1.27-1.38-.31-.59-.46-1.28-.46-2.06s.15-1.46.46-2.05c.31-.59.73-1.05,1.27-1.39.54-.33,1.16-.5,1.87-.5s1.36.17,1.9.5c.54.33.96.8,1.26,1.39.3.59.45,1.28.45,2.05s-.15,1.47-.45,2.06c-.3.59-.72,1.05-1.26,1.38s-1.17.5-1.9.5ZM110.94,43.46c.51,0,.95-.12,1.33-.36.38-.24.67-.58.88-1.02.21-.44.31-.97.31-1.59s-.1-1.15-.31-1.59c-.21-.44-.5-.78-.88-1.02-.38-.24-.82-.35-1.33-.35s-.95.12-1.33.35c-.38.24-.67.57-.89,1.02-.21.44-.32.97-.32,1.59s.11,1.15.32,1.59c.21.44.51.78.89,1.02.38.24.82.36,1.33.36Z" fill="#233556"></path><path d="M118.98,44.43c-.54,0-1.02-.1-1.42-.3s-.72-.48-.95-.84c-.23-.36-.34-.79-.34-1.27h1.11c0,.28.07.53.2.76.12.23.3.41.54.54.24.13.53.2.87.2.3,0,.55-.05.76-.15.21-.1.38-.24.49-.42.11-.18.17-.38.17-.61,0-.27-.06-.49-.18-.66-.12-.17-.28-.32-.48-.43-.2-.11-.43-.21-.7-.3-.26-.09-.54-.18-.83-.28-.58-.2-1.02-.45-1.3-.76-.28-.31-.43-.72-.43-1.22,0-.43.1-.8.3-1.12.2-.32.47-.56.83-.74.36-.18.78-.27,1.26-.27s.9.09,1.26.27c.36.18.64.43.84.75.2.32.31.69.31,1.12h-1.12c0-.2-.05-.39-.15-.58-.1-.19-.25-.34-.44-.46s-.44-.18-.73-.18c-.24,0-.45.03-.64.12s-.34.21-.44.38-.16.37-.16.6.05.42.14.56c.09.14.23.26.42.36.18.1.4.19.64.28.24.08.51.18.81.28.37.12.69.27.98.45.28.18.51.41.67.69s.25.64.25,1.07c0,.38-.09.73-.28,1.06-.19.33-.47.59-.84.8-.37.21-.84.31-1.39.31Z" fill="#233556"></path><path d="M123.53,44.3v-7.62h1.24l2.5,5.15,2.49-5.15h1.26v7.62h-1.05v-5.71l-2.29,4.65h-.81l-2.28-4.64v5.7h-1.05Z" fill="#233556"></path><path d="M133.32,44.3v-7.62h4.66v.89h-3.61v2.44h3.29v.87h-3.29v2.52h3.61v.89h-4.66Z" fill="#233556"></path><path d="M141.83,44.3v-6.72h-2.18v-.89h5.43v.89h-2.19v6.72h-1.05Z" fill="#233556"></path><path d="M146.92,44.3v-7.62h1.05v7.62h-1.05Z" fill="#233556"></path><path d="M153.52,44.43c-.72,0-1.35-.16-1.87-.5-.52-.33-.93-.79-1.21-1.38-.28-.59-.43-1.28-.43-2.06s.14-1.46.43-2.06c.28-.59.69-1.06,1.21-1.39.52-.33,1.15-.5,1.87-.5.86,0,1.57.21,2.1.64.54.43.88,1.03,1.03,1.81h-1.16c-.11-.45-.32-.81-.65-1.08-.33-.27-.77-.4-1.32-.4-.5,0-.93.12-1.3.36-.37.24-.65.58-.84,1.02-.2.44-.3.97-.3,1.59s.1,1.15.3,1.59c.2.45.48.79.84,1.02.37.24.8.35,1.3.35.56,0,1-.13,1.32-.39s.54-.61.65-1.05h1.16c-.15.75-.49,1.34-1.03,1.77-.54.42-1.24.64-2.1.64Z" fill="#233556"></path><path d="M161.68,44.3l2.71-7.62h1.15l2.71,7.62h-1.13l-2.16-6.31-2.17,6.31h-1.11ZM162.91,42.41l.3-.87h3.47l.3.87h-4.06Z" fill="#233556"></path><path d="M170.08,44.3v-7.62h1.05l3.77,5.84v-5.84h1.05v7.62h-1.05l-3.77-5.83v5.83h-1.05Z" fill="#233556"></path><path d="M178.26,44.3v-7.62h2.27c.86,0,1.57.16,2.13.47.56.31.98.75,1.25,1.32.27.57.41,1.25.41,2.03s-.14,1.46-.41,2.02c-.27.57-.69,1-1.24,1.31-.56.31-1.27.46-2.14.46h-2.27ZM179.32,43.38h1.17c.68,0,1.22-.12,1.62-.35s.69-.56.86-1c.17-.43.26-.94.26-1.54s-.09-1.12-.26-1.56c-.17-.44-.46-.77-.86-1-.4-.23-.94-.35-1.62-.35h-1.17v5.79Z" fill="#233556"></path><path d="M189.82,44.3v-7.62h1.05v7.62h-1.05ZM190.7,40.86v-.89h4.05v.89h-4.05ZM194.52,44.3v-7.62h1.05v7.62h-1.05Z" fill="#233556"></path><path d="M201.2,44.43c-.71,0-1.33-.16-1.87-.5-.54-.33-.96-.79-1.27-1.38-.31-.59-.46-1.28-.46-2.06s.15-1.46.46-2.05c.31-.59.73-1.05,1.27-1.39.54-.33,1.16-.5,1.87-.5s1.36.17,1.9.5c.54.33.96.8,1.26,1.39.3.59.45,1.28.45,2.05s-.15,1.47-.45,2.06c-.3.59-.72,1.05-1.26,1.38s-1.17.5-1.9.5ZM201.22,43.46c.51,0,.95-.12,1.33-.36.38-.24.67-.58.88-1.02.21-.44.31-.97.31-1.59s-.1-1.15-.31-1.59c-.21-.44-.5-.78-.88-1.02-.38-.24-.82-.35-1.33-.35s-.95.12-1.33.35c-.38.24-.67.57-.89,1.02-.21.44-.32.97-.32,1.59s.11,1.15.32,1.59c.21.44.51.78.89,1.02.38.24.82.36,1.33.36Z" fill="#233556"></path><path d="M206.85,44.3v-7.62h1.05v6.76h3.38v.86h-4.43Z" fill="#233556"></path><path d="M213.28,44.3v-7.62h1.05v7.62h-1.05Z" fill="#233556"></path><path d="M219.06,44.43c-.54,0-1.02-.1-1.42-.3s-.72-.48-.95-.84c-.23-.36-.34-.79-.34-1.27h1.11c0,.28.07.53.2.76.12.23.3.41.54.54.24.13.53.2.87.2.3,0,.55-.05.76-.15.21-.1.38-.24.49-.42.11-.18.17-.38.17-.61,0-.27-.06-.49-.18-.66-.12-.17-.28-.32-.48-.43-.2-.11-.43-.21-.7-.3-.26-.09-.54-.18-.83-.28-.58-.2-1.02-.45-1.3-.76-.28-.31-.43-.72-.43-1.22,0-.43.1-.8.3-1.12.2-.32.47-.56.83-.74.36-.18.78-.27,1.26-.27s.9.09,1.26.27c.36.18.64.43.84.75.2.32.31.69.31,1.12h-1.12c0-.2-.05-.39-.15-.58-.1-.19-.25-.34-.44-.46s-.44-.18-.73-.18c-.24,0-.45.03-.64.12s-.34.21-.44.38-.16.37-.16.6.05.42.14.56c.09.14.23.26.42.36.18.1.4.19.64.28.24.08.51.18.81.28.37.12.69.27.98.45.28.18.51.41.67.69s.25.64.25,1.07c0,.38-.09.73-.28,1.06-.19.33-.47.59-.84.8-.37.21-.84.31-1.39.31Z" fill="#233556"></path><path d="M225.18,44.3v-6.72h-2.18v-.89h5.43v.89h-2.19v6.72h-1.05Z" fill="#233556"></path><path d="M230.26,44.3v-7.62h1.05v7.62h-1.05Z" fill="#233556"></path><path d="M236.87,44.43c-.72,0-1.35-.16-1.87-.5-.52-.33-.93-.79-1.21-1.38-.28-.59-.43-1.28-.43-2.06s.14-1.46.43-2.06c.28-.59.69-1.06,1.21-1.39.52-.33,1.15-.5,1.87-.5.86,0,1.57.21,2.1.64.54.43.88,1.03,1.03,1.81h-1.16c-.11-.45-.32-.81-.65-1.08-.33-.27-.77-.4-1.32-.4-.5,0-.93.12-1.3.36-.37.24-.65.58-.84,1.02-.2.44-.3.97-.3,1.59s.1,1.15.3,1.59c.2.45.48.79.84,1.02.37.24.8.35,1.3.35.56,0,1-.13,1.32-.39s.54-.61.65-1.05h1.16c-.15.75-.49,1.34-1.03,1.77-.54.42-1.24.64-2.1.64Z" fill="#233556"></path><path d="M99.2,57.35v-7.62h2.27c.86,0,1.57.16,2.13.47.56.31.98.75,1.25,1.32.27.57.41,1.25.41,2.03s-.14,1.46-.41,2.02c-.27.57-.69,1-1.24,1.31-.56.31-1.27.46-2.14.46h-2.27ZM100.25,56.44h1.17c.68,0,1.22-.12,1.62-.35s.69-.56.86-1c.17-.43.26-.94.26-1.54s-.09-1.12-.26-1.56c-.17-.44-.46-.77-.86-1-.4-.23-.94-.35-1.62-.35h-1.17v5.79Z" fill="#233556"></path><path d="M107.29,57.35v-7.62h4.66v.89h-3.61v2.44h3.29v.87h-3.29v2.52h3.61v.89h-4.66Z" fill="#233556"></path><path d="M114.08,57.35v-7.62h1.05l3.77,5.84v-5.84h1.05v7.62h-1.05l-3.77-5.83v5.83h-1.05Z" fill="#233556"></path><path d="M123.98,57.35v-6.72h-2.18v-.89h5.43v.89h-2.19v6.72h-1.05Z" fill="#233556"></path><path d="M129.07,57.35v-7.62h1.05v7.62h-1.05Z" fill="#233556"></path><path d="M134.85,57.48c-.54,0-1.02-.1-1.42-.3s-.72-.48-.95-.84c-.23-.36-.34-.79-.34-1.27h1.11c0,.28.07.53.2.76.12.23.3.41.54.54.24.13.53.2.87.2.3,0,.55-.05.76-.15.21-.1.38-.24.49-.42.11-.18.17-.38.17-.61,0-.27-.06-.49-.18-.66-.12-.17-.28-.32-.48-.43-.2-.11-.43-.21-.7-.3-.26-.09-.54-.18-.83-.28-.58-.2-1.02-.45-1.3-.76-.28-.31-.43-.72-.43-1.22,0-.43.1-.8.3-1.12.2-.32.47-.56.83-.74.36-.18.78-.27,1.26-.27s.9.09,1.26.27c.36.18.64.43.84.75.2.32.31.69.31,1.12h-1.12c0-.2-.05-.39-.15-.58-.1-.19-.25-.34-.44-.46s-.44-.18-.73-.18c-.24,0-.45.03-.64.12s-.34.21-.44.38-.16.37-.16.6.05.42.14.56c.09.14.23.26.42.36.18.1.4.19.64.28.24.08.51.18.81.28.37.12.69.27.98.45.28.18.51.41.67.69s.25.64.25,1.07c0,.38-.09.73-.28,1.06-.19.33-.47.59-.84.8-.37.21-.84.31-1.39.31Z" fill="#233556"></path><path d="M140.97,57.35v-6.72h-2.18v-.89h5.43v.89h-2.19v6.72h-1.05Z" fill="#233556"></path><path d="M146.05,57.35v-7.62h2.5c.58,0,1.06.1,1.43.3.37.2.65.47.83.81.18.34.27.72.27,1.15s-.09.78-.27,1.13c-.18.34-.46.62-.84.83-.38.21-.86.31-1.46.31h-1.41v3.09h-1.05ZM147.1,53.44h1.37c.52,0,.9-.13,1.15-.4.25-.26.37-.6.37-1.02s-.12-.75-.36-1c-.24-.25-.63-.37-1.16-.37h-1.37v2.79ZM149.93,57.35l-1.59-3.38h1.16l1.66,3.38h-1.22Z" fill="#233556"></path><path d="M154.78,57.35v-2.83l-2.44-4.79h1.19l1.91,4h-.26l1.9-4h1.18l-2.43,4.79v2.83h-1.05Z" fill="#233556"></path></g><g><circle cx="43.73" cy=".84" r=".69" fill="#8cc4b9"></circle><circle cx="43.73" cy="28.1" r=".69" fill="#8cc4b9"></circle><path d="M55.05,13.78h-9.37c-.02-.07-.05-.13-.08-.2l6.13-6.13c.27-.27.27-.71,0-.98-.27-.27-.71-.27-.98,0l-6.13,6.13c-.06-.03-.13-.06-.2-.08V3.15c0-.38-.31-.69-.69-.69s-.69.31-.69.69v9.37c-.07.02-.13.05-.2.08l-6.13-6.13c-.27-.27-.71-.27-.98,0-.27.27-.27.71,0,.98l6.13,6.13c-.03.06-.06.13-.08.2h-9.37c-.38,0-.69.31-.69.69s.31.69.69.69h9.37c.02.07.05.13.08.2l-6.13,6.13c-.27.27-.27.71,0,.98.14.14.31.2.49.2s.35-.07.49-.2l6.13-6.13c.06.03.13.06.2.08v9.37c0,.38.31.69.69.69s.69-.31.69-.69v-9.37c.07-.02.13-.05.2-.08l6.13,6.13c.14.14.31.2.49.2s.35-.07.49-.2c.27-.27.27-.71,0-.98l-6.13-6.13c.03-.06.06-.13.08-.2h9.37c.38,0,.69-.31.69-.69s-.31-.69-.69-.69Z" fill="#8cc4b9"></path><circle cx="30.1" cy="14.47" r=".69" fill="#8cc4b9"></circle><circle cx="57.36" cy="14.47" r=".69" fill="#8cc4b9"></circle></g><g><path d="M6.4,37.71c1.33-.76,2.85-1.15,4.55-1.15,1.82,0,3.46.43,4.92,1.29,1.45.86,2.6,2.08,3.44,3.64.84,1.57,1.26,3.38,1.26,5.45s-.42,3.87-1.26,5.47c-.84,1.6-1.99,2.85-3.46,3.73-1.47.89-3.1,1.33-4.9,1.33s-3.28-.38-4.6-1.15c-1.32-.76-2.31-1.74-2.98-2.92v3.73H0v-29.35h3.36v12.86c.69-1.21,1.7-2.19,3.03-2.96ZM16.19,42.96c-.62-1.13-1.45-2-2.5-2.59-1.05-.59-2.2-.89-3.46-.89s-2.37.3-3.42.91c-1.05.6-1.89,1.48-2.51,2.62-.63,1.15-.94,2.47-.94,3.97s.31,2.87.94,4.01c.63,1.15,1.47,2.02,2.51,2.62,1.05.6,2.19.91,3.42.91s2.41-.3,3.46-.91c1.05-.6,1.88-1.48,2.5-2.62.62-1.15.92-2.5.92-4.05s-.31-2.86-.92-3.99Z" fill="#233556"></path><path d="M28.19,27.8v29.35h-3.36v-29.35h3.36Z" fill="#233556"></path><path d="M46.3,37.04h3.59c-.46,1.31-1.47,4.3-3.05,8.97-1.18,3.51-2.17,6.38-2.96,8.59-1.88,5.21-3.2,8.39-3.97,9.53-.77,1.14-2.09,1.72-3.97,1.72-.46,0-.81-.02-1.06-.06-.25-.04-.55-.11-.91-.21v-3.13c.56.17.97.27,1.23.31s.47.06.67.06c.6,0,1.04-.1,1.32-.31s.52-.47.71-.77c.06-.1.28-.62.65-1.56.37-.94.64-1.64.81-2.09l-7.15-21.04h3.68l5.18,16.65,5.22-16.65Z" fill="#233556"></path><path d="M56.63,56.69c-1.33-.53-2.37-1.27-3.14-2.22-.77-.95-1.19-2.04-1.27-3.27h3.74c.11,1.01.62,1.84,1.53,2.48.92.64,2.11.96,3.6.96,1.38,0,2.47-.28,3.26-.85.8-.57,1.19-1.28,1.19-2.14s-.42-1.55-1.27-1.98c-.85-.43-2.16-.86-3.94-1.28-1.62-.39-2.94-.79-3.96-1.2-1.02-.41-1.9-1.01-2.63-1.81-.73-.8-1.09-1.85-1.09-3.16,0-1.04.33-1.98.99-2.85.66-.86,1.6-1.55,2.82-2.05,1.22-.5,2.61-.76,4.18-.76,2.41,0,4.36.57,5.85,1.7,1.49,1.13,2.28,2.69,2.39,4.66h-3.62c-.08-1.06-.54-1.91-1.37-2.55-.84-.64-1.96-.96-3.36-.96-1.3,0-2.33.26-3.1.78-.77.52-1.15,1.2-1.15,2.03,0,.67.23,1.21.7,1.65.46.43,1.05.78,1.75,1.03.7.26,1.68.55,2.92.87,1.56.39,2.84.78,3.82,1.16.98.38,1.82.96,2.53,1.72.7.76,1.07,1.76,1.09,2.99,0,1.11-.33,2.11-.99,2.99-.66.89-1.6,1.58-2.81,2.09-1.21.5-2.59.76-4.16.76-1.67,0-3.17-.27-4.5-.79Z" fill="#233556"></path><path d="M76.42,56.69c-1.33-.53-2.37-1.27-3.14-2.22-.77-.95-1.19-2.04-1.27-3.27h3.74c.11,1.01.62,1.84,1.53,2.48.92.64,2.11.96,3.6.96,1.38,0,2.47-.28,3.26-.85.8-.57,1.19-1.28,1.19-2.14s-.42-1.55-1.27-1.98c-.85-.43-2.16-.86-3.94-1.28-1.62-.39-2.94-.79-3.96-1.2-1.02-.41-1.9-1.01-2.63-1.81-.73-.8-1.09-1.85-1.09-3.16,0-1.04.33-1.98.99-2.85.66-.86,1.6-1.55,2.82-2.05,1.22-.5,2.61-.76,4.18-.76,2.41,0,4.36.57,5.85,1.7,1.49,1.13,2.28,2.69,2.39,4.66h-3.62c-.08-1.06-.54-1.91-1.37-2.55-.84-.64-1.96-.96-3.36-.96-1.3,0-2.33.26-3.1.78-.77.52-1.15,1.2-1.15,2.03,0,.67.23,1.21.7,1.65.46.43,1.05.78,1.75,1.03.7.26,1.68.55,2.92.87,1.56.39,2.84.78,3.82,1.16.98.38,1.82.96,2.53,1.72.7.76,1.07,1.76,1.09,2.99,0,1.11-.33,2.11-.99,2.99-.66.89-1.6,1.58-2.81,2.09-1.21.5-2.59.76-4.16.76-1.67,0-3.17-.27-4.5-.79Z" fill="#233556"></path></g></svg></a>					<div class="e-3e425a4d-5ec2dab e-svg-base" data-interaction-id="3e425a4d" data-e-type="widget" data-id="3e425a4d"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" style="width: 100%; height: 100%; overflow: unset;" id="Layer_1" data-name="Layer 1" viewBox="0 0 165.42 48.91"><g><circle cx="147.37" cy="6.53" r=".87" fill="#8cc4b9"></circle><circle cx="147.37" cy="40.82" r=".87" fill="#8cc4b9"></circle><path d="M161.63,22.81h-11.8c-.03-.09-.06-.17-.1-.25l7.73-7.71c.34-.34.34-.89,0-1.23-.34-.34-.89-.34-1.23,0l-7.73,7.71c-.08-.04-.16-.07-.25-.1v-11.78c0-.48-.39-.87-.87-.87s-.87.39-.87.87v11.78c-.09.03-.17.06-.25.1l-7.73-7.71c-.34-.34-.89-.34-1.23,0-.34.34-.34.89,0,1.23l7.73,7.71c-.04.08-.07.16-.1.25h-11.8c-.48,0-.87.39-.87.87s.39.87.87.87h11.8c.03.09.06.17.1.25l-7.73,7.71c-.34.34-.34.89,0,1.23.17.17.39.26.62.26s.45-.09.62-.26l7.73-7.71c.08.04.16.07.25.1v11.78c0,.48.39.87.87.87s.87-.39.87-.87v-11.78c.09-.03.17-.06.25-.1l7.73,7.71c.17.17.39.26.62.26s.45-.09.62-.26c.34-.34.34-.89,0-1.23l-7.73-7.71c.04-.08.07-.16.1-.25h11.8c.48,0,.87-.39.87-.87s-.39-.87-.87-.87Z" fill="#8cc4b9"></path><circle cx="130.2" cy="23.68" r=".87" fill="#8cc4b9"></circle><circle cx="164.54" cy="23.68" r=".87" fill="#8cc4b9"></circle></g><g><path d="M8.23,12.73c1.71-.98,3.67-1.47,5.85-1.47,2.35,0,4.46.55,6.33,1.66,1.87,1.11,3.35,2.67,4.43,4.68,1.08,2.01,1.62,4.35,1.62,7.01s-.54,4.97-1.62,7.03c-1.08,2.06-2.56,3.66-4.45,4.8-1.89,1.14-3.99,1.71-6.31,1.71s-4.23-.49-5.93-1.47c-1.7-.98-2.97-2.23-3.83-3.75v4.8H0V0h4.33v16.53c.89-1.55,2.19-2.82,3.9-3.8ZM20.85,19.48c-.79-1.46-1.86-2.57-3.21-3.33-1.35-.76-2.83-1.14-4.45-1.14s-3.05.39-4.4,1.16c-1.35.78-2.43,1.9-3.24,3.37s-1.21,3.18-1.21,5.11.4,3.68,1.21,5.16,1.89,2.6,3.24,3.37c1.35.78,2.82,1.16,4.4,1.16s3.1-.39,4.45-1.16c1.35-.78,2.42-1.9,3.21-3.37.79-1.47,1.19-3.21,1.19-5.2s-.4-3.67-1.19-5.13Z" fill="#233556"></path><path d="M36.29,0v37.72h-4.33V0h4.33Z" fill="#233556"></path><path d="M59.61,11.87h4.62c-.59,1.69-1.9,5.53-3.93,11.53-1.52,4.52-2.79,8.2-3.81,11.04-2.41,6.7-4.12,10.78-5.11,12.26-.99,1.47-2.69,2.21-5.11,2.21-.59,0-1.04-.02-1.36-.07-.32-.05-.71-.14-1.17-.27v-4.02c.73.21,1.25.34,1.58.39s.61.07.86.07c.77,0,1.34-.13,1.71-.4s.67-.6.92-.99c.08-.13.36-.8.83-2.01.48-1.21.83-2.11,1.04-2.69l-9.2-27.04h4.74l6.67,21.4,6.72-21.4Z" fill="#233556"></path><path d="M72.91,37.13c-1.71-.68-3.06-1.63-4.05-2.85-.99-1.22-1.54-2.62-1.64-4.21h4.82c.14,1.3.79,2.36,1.97,3.18,1.18.82,2.72,1.24,4.64,1.24,1.78,0,3.18-.36,4.2-1.09,1.02-.73,1.54-1.65,1.54-2.76s-.55-1.99-1.64-2.54c-1.09-.55-2.78-1.1-5.07-1.64-2.08-.51-3.78-1.02-5.1-1.54-1.32-.52-2.44-1.3-3.38-2.33-.94-1.03-1.41-2.38-1.41-4.06,0-1.33.43-2.55,1.28-3.66.85-1.11,2.07-1.99,3.64-2.64,1.57-.65,3.36-.97,5.38-.97,3.11,0,5.62.73,7.53,2.19,1.91,1.46,2.94,3.45,3.07,5.99h-4.66c-.1-1.36-.69-2.45-1.77-3.28-1.08-.82-2.52-1.24-4.33-1.24-1.67,0-3.01.33-4,1-.99.67-1.49,1.54-1.49,2.61,0,.86.3,1.56.9,2.11.6.55,1.35,1,2.25,1.33.9.33,2.16.71,3.77,1.12,2.01.51,3.65,1.01,4.92,1.5,1.26.49,2.35,1.23,3.25,2.21.9.98,1.37,2.27,1.41,3.85,0,1.43-.43,2.71-1.28,3.85-.85,1.14-2.06,2.04-3.61,2.68-1.55.65-3.34.97-5.35.97-2.15,0-4.08-.34-5.79-1.02Z" fill="#233556"></path><path d="M98.39,37.13c-1.71-.68-3.06-1.63-4.05-2.85-.99-1.22-1.54-2.62-1.64-4.21h4.82c.14,1.3.79,2.36,1.97,3.18,1.18.82,2.72,1.24,4.64,1.24,1.78,0,3.18-.36,4.2-1.09,1.02-.73,1.54-1.65,1.54-2.76s-.55-1.99-1.64-2.54c-1.09-.55-2.78-1.1-5.07-1.64-2.08-.51-3.78-1.02-5.1-1.54-1.32-.52-2.44-1.3-3.38-2.33-.94-1.03-1.41-2.38-1.41-4.06,0-1.33.43-2.55,1.28-3.66.85-1.11,2.07-1.99,3.64-2.64,1.57-.65,3.36-.97,5.38-.97,3.11,0,5.62.73,7.53,2.19,1.91,1.46,2.94,3.45,3.07,5.99h-4.66c-.1-1.36-.69-2.45-1.77-3.28-1.08-.82-2.52-1.24-4.33-1.24-1.67,0-3.01.33-4,1-.99.67-1.49,1.54-1.49,2.61,0,.86.3,1.56.9,2.11.6.55,1.35,1,2.25,1.33.9.33,2.16.71,3.77,1.12,2.01.51,3.65,1.01,4.92,1.5,1.26.49,2.35,1.23,3.25,2.21.9.98,1.37,2.27,1.41,3.85,0,1.43-.43,2.71-1.28,3.85-.85,1.14-2.06,2.04-3.61,2.68-1.55.65-3.34.97-5.35.97-2.15,0-4.08-.34-5.79-1.02Z" fill="#233556"></path></g></svg></div>				<div class="elementor-element elementor-element-460e10d5 elementor-widget__width-auto e-fit_to_content e-n-menu-layout-horizontal e-n-menu-tablet elementor-widget elementor-widget-n-menu" data-id="460e10d5" data-element_type="widget" data-e-type="widget" id="wa-menu-top-v3" data-settings="{&quot;menu_items&quot;:[{&quot;item_title&quot;:&quot;About&quot;,&quot;_id&quot;:&quot;3b5b3ec&quot;,&quot;item_dropdown_content&quot;:&quot;yes&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;Services&quot;,&quot;_id&quot;:&quot;c29c2e8&quot;,&quot;item_dropdown_content&quot;:&quot;yes&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;Resource&quot;,&quot;item_dropdown_content&quot;:&quot;yes&quot;,&quot;_id&quot;:&quot;392912e&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;Contact Us&quot;,&quot;_id&quot;:&quot;c3d0620&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;\/contact-us\/&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_dropdown_content&quot;:&quot;no&quot;,&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;}],&quot;menu_item_title_distance_from_content&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:12,&quot;sizes&quot;:[]},&quot;open_animation&quot;:&quot;fadeIn&quot;,&quot;item_position_horizontal&quot;:&quot;center&quot;,&quot;menu_item_title_distance_from_content_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;content_width&quot;:&quot;fit_to_content&quot;,&quot;menu_item_title_distance_from_content_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:8,&quot;sizes&quot;:[]},&quot;open_on&quot;:&quot;click&quot;,&quot;item_position_horizontal_tablet&quot;:&quot;start&quot;,&quot;item_layout&quot;:&quot;horizontal&quot;,&quot;horizontal_scroll&quot;:&quot;disable&quot;,&quot;breakpoint_selector&quot;:&quot;tablet&quot;}" data-widget_type="mega-menu.default">
				<div class="elementor-widget-container">
							<nav class="e-n-menu" data-widget-number="117" aria-label="Menu">
					<button class="e-n-menu-toggle" id="menu-toggle-117" aria-haspopup="true" aria-expanded="false" aria-controls="menubar-117" aria-label="Menu Toggle">
			<span class="e-n-menu-toggle-icon e-open">
				<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 27 21"><path d="M1.5,1.5h24M1.5,10.5h24M1.5,19.5h24" fill="none" stroke="#233656" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path></svg>			</span>
			<span class="e-n-menu-toggle-icon e-close">
				<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 23 21"><line x1="1.5" y1="1.5" x2="21.5" y2="19.5" fill="none" stroke="#233656" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></line><line x1="1.5" y1="19.5" x2="21.5" y2="1.5" fill="none" stroke="#233656" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></line></svg>			</span>
		</button>
					<div class="e-n-menu-wrapper" id="menubar-117" aria-labelledby="menu-toggle-117">
				<ul class="e-n-menu-heading">
								<li class="e-n-menu-item">
				<div id="e-n-menu-title-1171" class="e-n-menu-title e-click">
					<div class="e-n-menu-title-container">												<span class="e-n-menu-title-text">
							About						</span>
					</div>											<button id="e-n-menu-dropdown-icon-1171" class="e-n-menu-dropdown-icon e-focus" data-tab-index="1" aria-haspopup="true" aria-expanded="false" aria-controls="e-n-menu-content-1171" >
							<span class="e-n-menu-dropdown-icon-opened">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" data-name="Layer 1" viewBox="0 0 9.81 6.32"><defs><mask id="mask" x="-9.4" y="-12.52" width="12.73" height="12.73" maskUnits="userSpaceOnUse"></mask></defs><g mask="url(#mask)"><path d="M-3.04-2.62l-1.41,1.41L-3.04.21l1.41-1.41-1.41-1.41ZM1.91-7.57l-1.41-1.41-4.95,4.95,1.41,1.41,1.41,1.41L3.32-6.15l-1.41-1.41ZM-3.04-2.62l1.41-1.41-4.95-4.95-1.41,1.41-1.41,1.41L-4.45-1.2l1.41-1.41Z" fill="#233556"></path></g><polyline points=".71 5.61 4.91 1.41 9.11 5.61" fill="none" stroke="#233556" stroke-miterlimit="10" stroke-width="2"></polyline></svg>								<span class="elementor-screen-only">Close About</span>
							</span>
							<span class="e-n-menu-dropdown-icon-closed">
								<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 9.81 6.32"><polyline points="9.11 .71 4.91 4.91 .71 .71" fill="none" stroke="#233556" stroke-miterlimit="10" stroke-width="2"></polyline></svg>								<span class="elementor-screen-only">Open About</span>
							</span>
						</button>
									</div>
									<div class="e-n-menu-content">
						<div id="e-n-menu-content-1171" data-tab-index="1" aria-labelledby="e-n-menu-dropdown-icon-1171" class="elementor-element elementor-element-1dbc9ca wa-hover-overlay e-flex e-con-boxed e-con e-child" data-id="1dbc9ca" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-dd3ca26 e-con e-atomic-element e-flexbox-base e-dd3ca26-98cd20b wa-inner-wrapper-menu " data-id="dd3ca26" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="dd3ca26" data-e-type="e-flexbox" data-id="dd3ca26">
    <div class="elementor-element elementor-element-22081f0 e-con e-atomic-element e-flexbox-base e-22081f0-1e5e904 " data-id="22081f0" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="22081f0" data-e-type="e-flexbox" data-id="22081f0">
    <div class="elementor-element elementor-element-8875aba e-con e-atomic-element e-flexbox-base e-8875aba-04547ef " data-id="8875aba" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="8875aba" data-e-type="e-flexbox" data-id="8875aba">
    			<h3 data-interaction-id="e44daaf" class="wa-h3-menu-drop e-heading-base" data-e-type="widget" data-id="e44daaf"><a href="/about/" target="_self" class="e-heading-link-base">
		About Us
	</a></h3>
					<h3 data-interaction-id="2b1be42" class="wa-h3-menu-drop e-heading-base" data-e-type="widget" data-id="2b1be42"><a href="/difference/" target="_self" class="e-heading-link-base">
		The Blyss Experience
	</a></h3>
					<h3 data-interaction-id="c5e0e43" class="wa-h3-menu-drop e-heading-base" data-e-type="widget" data-id="c5e0e43"><a href="/how-we-care/" target="_self" class="e-heading-link-base">
		How we care
	</a></h3>
		
</div>

</div>

</div>
			</div>
				</div>
							</div>
							</li>
					<li class="e-n-menu-item">
				<div id="e-n-menu-title-1172" class="e-n-menu-title e-click">
					<div class="e-n-menu-title-container">												<span class="e-n-menu-title-text">
							Services						</span>
					</div>											<button id="e-n-menu-dropdown-icon-1172" class="e-n-menu-dropdown-icon e-focus" data-tab-index="2" aria-haspopup="true" aria-expanded="false" aria-controls="e-n-menu-content-1172" >
							<span class="e-n-menu-dropdown-icon-opened">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" data-name="Layer 1" viewBox="0 0 9.81 6.32"><defs><mask id="mask" x="-9.4" y="-12.52" width="12.73" height="12.73" maskUnits="userSpaceOnUse"></mask></defs><g mask="url(#mask)"><path d="M-3.04-2.62l-1.41,1.41L-3.04.21l1.41-1.41-1.41-1.41ZM1.91-7.57l-1.41-1.41-4.95,4.95,1.41,1.41,1.41,1.41L3.32-6.15l-1.41-1.41ZM-3.04-2.62l1.41-1.41-4.95-4.95-1.41,1.41-1.41,1.41L-4.45-1.2l1.41-1.41Z" fill="#233556"></path></g><polyline points=".71 5.61 4.91 1.41 9.11 5.61" fill="none" stroke="#233556" stroke-miterlimit="10" stroke-width="2"></polyline></svg>								<span class="elementor-screen-only">Close Services</span>
							</span>
							<span class="e-n-menu-dropdown-icon-closed">
								<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 9.81 6.32"><polyline points="9.11 .71 4.91 4.91 .71 .71" fill="none" stroke="#233556" stroke-miterlimit="10" stroke-width="2"></polyline></svg>								<span class="elementor-screen-only">Open Services</span>
							</span>
						</button>
									</div>
									<div class="e-n-menu-content">
						<div id="e-n-menu-content-1172" data-tab-index="2" aria-labelledby="e-n-menu-dropdown-icon-1172" class="elementor-element elementor-element-1268d472 wa-hover-overlay e-con-full e-flex e-con e-child" data-id="1268d472" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-3bbcc65 e-con e-atomic-element e-flexbox-base e-3bbcc65-57fcace wa-inner-wrapper-menu " data-id="3bbcc65" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="3bbcc65" data-e-type="e-flexbox" data-id="3bbcc65">
    <div class="elementor-element elementor-element-3b66f08 e-con e-atomic-element e-flexbox-base e-3b66f08-452a378 " data-id="3b66f08" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="3b66f08" data-e-type="e-flexbox" data-id="3b66f08">
    <div class="elementor-element elementor-element-314a802 e-con e-atomic-element e-flexbox-base e-314a802-1392dc4 " data-id="314a802" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="314a802" data-e-type="e-flexbox" data-id="314a802">
    			<h3 data-interaction-id="4b2b2bc" class="wa-h3-menu-drop e-heading-base" data-e-type="widget" data-id="4b2b2bc"><a href="/service-page-cosmetic-dentistry/" target="_self" class="e-heading-link-base">
		Cosmetic Dentistry
	</a></h3>
					<h4 data-interaction-id="30ce18b" class="e-30ce18b-14a4ec4 e-heading-base" data-e-type="widget" data-id="30ce18b"><a href="/service-page-veneers/" target="_self" class="e-heading-link-base">
		Dental Veneers
	</a></h4>
					<h4 data-interaction-id="c313480" class="e-c313480-3885da7 e-heading-base" data-e-type="widget" data-id="c313480"><a href="/service-page-teeth-whitening/" target="_self" class="e-heading-link-base">
		Teeth Whitening
	</a></h4>
					<h4 data-interaction-id="3714a3c" class="e-3714a3c-b70081b e-heading-base" data-e-type="widget" data-id="3714a3c"><a href="/service-page-clear-aligners/" target="_self" class="e-heading-link-base">
		Invisalign®
	</a></h4>
		
</div>
<div class="elementor-element elementor-element-79d9b2b e-con e-atomic-element e-flexbox-base e-79d9b2b-b88f806 " data-id="79d9b2b" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="79d9b2b" data-e-type="e-flexbox" data-id="79d9b2b">
    			<h3 data-interaction-id="6b3d3c3" class="wa-h3-menu-drop e-heading-base" data-e-type="widget" data-id="6b3d3c3">Holistic Dentistry</h3>
					<h4 data-interaction-id="cf75118" class="e-cf75118-0aa80bc e-heading-base" data-e-type="widget" data-id="cf75118"><a href="/smart-amalgam-mercury-filling-removal-san-diego/" target="_self" class="e-heading-link-base">
		Safe Silver Filling Removal
	</a></h4>
					<h4 data-interaction-id="457be45" class="e-457be45-82b9bb5 e-heading-base" data-e-type="widget" data-id="457be45"><a href="/holistic-dental-ozone-therapy-in-del-mar/" target="_self" class="e-heading-link-base">
		Dental Ozone Therapy
	</a></h4>
					<h4 data-interaction-id="3e58875" class="e-3e58875-445e807 e-heading-base" data-e-type="widget" data-id="3e58875"><a href="/saliva-testing-san-diego/" target="_self" class="e-heading-link-base">
		Saliva Testing for Oral Health
	</a></h4>
					<h4 data-interaction-id="485187e" class="e-485187e-70916fa e-heading-base" data-e-type="widget" data-id="485187e"><a href="/ceramic-dental-implants-del-mar/" target="_self" class="e-heading-link-base">
		Ceramic Dental Implants
	</a></h4>
		
</div>
<div class="elementor-element elementor-element-dcb5072 e-con e-atomic-element e-flexbox-base e-dcb5072-ea87b4c " data-id="dcb5072" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="dcb5072" data-e-type="e-flexbox" data-id="dcb5072">
    			<h3 data-interaction-id="897b323" class="wa-h3-menu-drop e-heading-base" data-e-type="widget" data-id="897b323"><a href="/service-page-dental-implants/" target="_self" class="e-heading-link-base">
		Restorative Dentistry
	</a></h3>
					<h4 data-interaction-id="243559f" class="e-243559f-55c12ca e-heading-base" data-e-type="widget" data-id="243559f"><a href="/service-page-dental-implants/" target="_self" class="e-heading-link-base">
		Dental Implants
	</a></h4>
					<h4 data-interaction-id="bcb1fbb" class="e-bcb1fbb-d80ca6d e-heading-base" data-e-type="widget" data-id="bcb1fbb"><a href="/service-page-dental-crowns/" target="_self" class="e-heading-link-base">
		Dental Crowns
	</a></h4>
		
</div>
<div class="elementor-element elementor-element-a142861 e-con e-atomic-element e-flexbox-base e-a142861-6584d7b " data-id="a142861" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="a142861" data-e-type="e-flexbox" data-id="a142861">
    			<h3 data-interaction-id="c7f36e3" class="wa-h3-menu-drop e-heading-base" data-e-type="widget" data-id="c7f36e3"><a href="/service-page-overview/" target="_self" class="e-heading-link-base">
		Our Treatments
	</a></h3>
					<h3 data-interaction-id="0c66c6f" class="wa-h3-menu-drop e-heading-base" data-e-type="widget" data-id="0c66c6f"><a href="/service-page-dental-emergency/" target="_self" class="e-heading-link-base">
		Dental Emergency Care
	</a></h3>
		
</div>

</div>

</div>
		</div>
							</div>
							</li>
					<li class="e-n-menu-item">
				<div id="e-n-menu-title-1173" class="e-n-menu-title e-click">
					<div class="e-n-menu-title-container">												<span class="e-n-menu-title-text">
							Resource						</span>
					</div>											<button id="e-n-menu-dropdown-icon-1173" class="e-n-menu-dropdown-icon e-focus" data-tab-index="3" aria-haspopup="true" aria-expanded="false" aria-controls="e-n-menu-content-1173" >
							<span class="e-n-menu-dropdown-icon-opened">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" data-name="Layer 1" viewBox="0 0 9.81 6.32"><defs><mask id="mask" x="-9.4" y="-12.52" width="12.73" height="12.73" maskUnits="userSpaceOnUse"></mask></defs><g mask="url(#mask)"><path d="M-3.04-2.62l-1.41,1.41L-3.04.21l1.41-1.41-1.41-1.41ZM1.91-7.57l-1.41-1.41-4.95,4.95,1.41,1.41,1.41,1.41L3.32-6.15l-1.41-1.41ZM-3.04-2.62l1.41-1.41-4.95-4.95-1.41,1.41-1.41,1.41L-4.45-1.2l1.41-1.41Z" fill="#233556"></path></g><polyline points=".71 5.61 4.91 1.41 9.11 5.61" fill="none" stroke="#233556" stroke-miterlimit="10" stroke-width="2"></polyline></svg>								<span class="elementor-screen-only">Close Resource</span>
							</span>
							<span class="e-n-menu-dropdown-icon-closed">
								<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 9.81 6.32"><polyline points="9.11 .71 4.91 4.91 .71 .71" fill="none" stroke="#233556" stroke-miterlimit="10" stroke-width="2"></polyline></svg>								<span class="elementor-screen-only">Open Resource</span>
							</span>
						</button>
									</div>
									<div class="e-n-menu-content">
						<div id="e-n-menu-content-1173" data-tab-index="3" aria-labelledby="e-n-menu-dropdown-icon-1173" class="elementor-element elementor-element-10d25dc2 wa-hover-overlay e-flex e-con-boxed e-con e-child" data-id="10d25dc2" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-8e6161d e-con e-atomic-element e-flexbox-base e-8e6161d-1891ec5 wa-inner-wrapper-menu " data-id="8e6161d" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="8e6161d" data-e-type="e-flexbox" data-id="8e6161d">
    <div class="elementor-element elementor-element-166b485 e-con e-atomic-element e-flexbox-base e-166b485-361bb73 " data-id="166b485" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="166b485" data-e-type="e-flexbox" data-id="166b485">
    <div class="elementor-element elementor-element-6dcbbca e-con e-atomic-element e-flexbox-base e-6dcbbca-858570b " data-id="6dcbbca" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="6dcbbca" data-e-type="e-flexbox" data-id="6dcbbca">
    			<h3 data-interaction-id="2d3ff42" class="wa-h3-menu-drop e-heading-base" data-e-type="widget" data-id="2d3ff42"><a href="/resources/" target="_self" class="e-heading-link-base">
		Articles
	</a></h3>
					<h3 data-interaction-id="be7f2d0" class="wa-h3-menu-drop e-heading-base" data-e-type="widget" data-id="be7f2d0"><a href="/accepted-dental-insurance-in-san-diego-california/" target="_self" class="e-heading-link-base">
		Insurance
	</a></h3>
		
</div>

</div>

</div>
			</div>
				</div>
							</div>
							</li>
					<li class="e-n-menu-item">
				<div id="e-n-menu-title-1174" class="e-n-menu-title">
					<a class="e-n-menu-title-container e-focus e-link" href="/contact-us/">												<span class="e-n-menu-title-text">
							Contact Us						</span>
					</a>									</div>
							</li>
						</ul>
			</div>
		</nav>
						</div>
				</div>
		<div class="elementor-element elementor-element-665f15ff e-con e-atomic-element e-flexbox-base e-665f15ff-f2b7386 " data-id="665f15ff" data-element_type="e-flexbox" data-e-type="e-flexbox" data-interaction-id="665f15ff" data-e-type="e-flexbox" data-id="665f15ff">
    			<span class="ws_hero-phone e-2b11c0e5-6940791 wa-hover-link-color-reset e-paragraph-base" data-interaction-id="2b11c0e5" data-e-type="widget" data-id="2b11c0e5"><a href="tel:8587990570" target="_self" class="e-paragraph-link-base">
		858-799-0570
	</a></span>
					<a href="https://appointments.blyssdental.com/appointment-request" target="_blank" class="e-204c71a6-e9070c8 wa-btn-primary wa-hover-link-color-reset e-button-base" data-interaction-id="204c71a6" data-e-type="widget" data-id="204c71a6" >
		Book a Visit
	</a>		
</div>

</div>

</section>

</div>
		</header>

<?php
// Defer this JS (Elementor core/pro bundles + config + sticky header script) to wp_footer,
// matching how Elementor natively loads it on pages it renders directly. Loading it here
// (early, right after the header) caused Elementor's own widget-handler registration for
// the mega menu to run before the rest of the page existed, breaking dropdown clicks.
ob_start();
?>

<style>
  header:has(> .wa-header) {
    position: sticky;
    top: 0;
    z-index: 1000;
    width: 100%;
    transform: translateZ(0);
    transition: transform 0.3s cubic-bezier(0.45, 0, 0.55, 1);
  }

  header:has(> .wa-header).nav-up {
    transform: translateY(-100%);
  }
</style>

<script>
(function () {
  var header = document.querySelector('header:has(> .wa-header)');
  if (!header) return;

  var lastY     = window.scrollY;
  var ticking   = false;
  var threshold = header.offsetHeight * 0.5;

  window.addEventListener('load', function () {
    threshold = header.offsetHeight * 0.5;
  });

  function closeMenus() {
    header.querySelectorAll('.e-n-menu-dropdown-icon[aria-expanded="true"]')
      .forEach(function (btn) {
        btn.setAttribute('aria-expanded', 'false');

        var panelId = btn.getAttribute('aria-controls');
        if (!panelId) return;

        var panel = document.getElementById(panelId);
        if (!panel) return;

        panel.classList.remove('e-active', 'animated', 'fadeIn');
        panel.style.display = 'none';
      });
  }

  function update() {
    var y     = window.scrollY;
    var delta = y - lastY;

    if (y > threshold) {
      if (delta > 5) {
        closeMenus();
        header.classList.add('nav-up');
      } else if (delta < -5) {
        header.classList.remove('nav-up');
      }
    } else {
      header.classList.remove('nav-up');
    }

    lastY   = y;
    ticking = false;
  }

  window.addEventListener('scroll', function () {
    if (!ticking) {
      requestAnimationFrame(update);
      ticking = true;
    }
  }, { passive: true });
})();
</script>

<script>
// Mega-menu dropdown stretch fix.
// Elementor's own "StretchedMenuItemContent" handler (mega-menu-stretch-content
// bundle) is supposed to set the --stretch-left/--stretch-right/--stretch-width
// CSS custom properties that widget-mega-menu.min.css uses to make the dropdown
// panel span the full viewport width instead of just its narrow nav-item box.
// On pages that use this hardcoded header (not rendered by Elementor itself),
// that handler never runs, so those custom properties stay unset and the panel
// falls back to the width of its positioned ancestor (~450px), rendering far to
// the right instead of stretched under the nav. This replicates the same
// calculation manually whenever a dropdown panel becomes active.
(function () {
  function applyStretch(content) {
    var parent = content.offsetParent;
    if (!parent) return;
    var parentRect = parent.getBoundingClientRect();
    var vw = document.documentElement.clientWidth;
    content.style.setProperty('--stretch-left', (-parentRect.left) + 'px');
    content.style.setProperty('--stretch-right', (-(vw - parentRect.right)) + 'px');
    content.style.setProperty('--stretch-width', vw + 'px');
  }

  function stretchAllActive() {
    document.querySelectorAll('.e-n-menu-content.e-active').forEach(applyStretch);
  }

  document.addEventListener('click', function () {
    requestAnimationFrame(stretchAllActive);
  }, true);

  window.addEventListener('resize', stretchAllActive);

  var mo = new MutationObserver(function (mutations) {
    mutations.forEach(function (m) {
      var el = m.target;
      if (el.classList && el.classList.contains('e-n-menu-content') && el.classList.contains('e-active')) {
        applyStretch(el);
      }
    });
  });
  document.querySelectorAll('.e-n-menu-content').forEach(function (el) {
    mo.observe(el, { attributes: true, attributeFilter: ['class'] });
  });
})();
</script>


<?php
$blyss_header_v3_deferred_scripts = ob_get_clean();
add_action( 'wp_footer', function() use ( $blyss_header_v3_deferred_scripts ) {
	echo $blyss_header_v3_deferred_scripts;
} );
