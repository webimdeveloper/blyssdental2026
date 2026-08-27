<?php

/**
 * Template Name: BBLP Template
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
get_header(); ?>
<script>
  jQuery($ => {
    // The speed of the scroll in milliseconds
    const speed = 1000;

    $('a[href*="#"]')
      .filter((i, a) => a.getAttribute('href').startsWith('#') || a.href.startsWith(`${location.href}#`))
      .unbind('click.smoothScroll')
      .bind('click.smoothScroll', event => {
        const targetId = event.currentTarget.getAttribute('href').split('#')[1];
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
          event.preventDefault();
          $('html, body').animate({ scrollTop: $(targetElement).offset().top }, speed);
        }
      });
  });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

<!--BBLP Header-->
<section class="bblp-header">
    <div class="container">
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="bblp-logo"><a href="<?php echo get_option('home'); ?>"><img src="<?php the_field('bblp_header_logo');?>"/></a></div>
        </div>
        
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="bblp-header-content">
		<div class="star-icon"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
	    <?php the_field('bblp_header_right_content');?></div>
        </div>
        </div>        
	</div>
</section>
<!--BBLP Header-->

<!--BBLP Hero-->
<section class="bblp-hero" id="form-hero">
    <div class="container">
        <div class="row">        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="bblp-hero-content"><?php the_field('bblp_hero_left_content');?></div>
        </div>        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="bblp-hero-image"><?php the_field('bblp_hero_right_content');?></div>
        </div>        
        </div>        
	</div>
</section>
<!--BBLP Hero-->

<!--BBLP Video-->
<section class="bblp-video-section">
    <div class="container">
        <div class="row">   
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><?php the_field('bblp_video_content');?></div>     
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><div class="bblp-video"><img src="<?php the_field('bblp_video_left');?>"/></div></div>        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><div class="bblp-video"><img src="<?php the_field('bblp_video_right');?>"/></div></div>        
        </div>        
	</div>
</section>
<!--BBLP Video-->

<!--BBLP Third Section-->
<section class="bblp-third-section" style="background:#ffffff url(<?php the_field('bblp_third_section_bg');?>) no-repeat; background-size:cover;">
    <div class="container">
        <div class="row">   
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><?php the_field('bblp_third_section_content');?></div>          
        </div>        
	</div>
</section>
<!--BBLP Third Section-->

<!--BBLP Fourth Section-->
<section class="bblp-fourth-section">
    <div class="container">
        <div class="row">   
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="bblp-fourth-video"><img src="<?php the_field('bblp_fourth_section_video');?>"/></div>
        <div class="bblp-fourth-button">
        <a href="<?php the_field('bblp_fourth_section_button_link');?>"><?php the_field('bblp_fourth_section_button');?></a>
        </div>		
		<?php the_field('bblp_fourth_section_content');?></div>          
        </div>
		
		<div class="row">   
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="bblp-fourth-content-box color-shade-01">
        <div class="bblp-fourth-content-image"><img src="<?php the_field('bblp_fourth_section_box_01_image');?>"/></div>	
        <?php the_field('bblp_fourth_section_box_01');?></div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="bblp-fourth-content-box color-shade-02">
		<div class="bblp-fourth-content-image"><img src="<?php the_field('bblp_fourth_section_box_02_image');?>"/></div>
		<?php the_field('bblp_fourth_section_box_02');?></div>
		</div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="bblp-fourth-content-box color-shade-03">
		<div class="bblp-fourth-content-image"><img src="<?php the_field('bblp_fourth_section_box_03_image');?>"/></div>
		<?php the_field('bblp_fourth_section_box_03');?></div>
		</div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="bblp-fourth-content-box color-shade-04">
		<div class="bblp-fourth-content-image"><img src="<?php the_field('bblp_fourth_section_box_04_image');?>"/></div>
		<?php the_field('bblp_fourth_section_box_04');?></div>
		</div>
        </div>		
	</div>
</section>
<!--BBLP Fourth Section-->

<!--BBLP Fifth Section-->
<section class="bblp-fifth-section" style="background:#ffffff url(<?php the_field('bblp_fifth_section_bg');?>) no-repeat; background-size:cover;">
    <div class="container">
        <div class="row">   
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="bblp-fifth-img"><img src="<?php the_field('bblp_fifth_section_image');?>"/></div>
        </div> 
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<?php the_field('bblp_fifth_right_content');?>
        <div class="bblp-fifth-button"><a href="<?php the_field('bblp_fifth_button_link');?>"><?php the_field('bblp_fifth_button');?></a></div>
        </div>          
        </div>        
	</div>
</section>
<!--BBLP Fifth Section-->

<!--BBLP Price Section-->
<section class="bblp-price-section">
    <div class="container">
        <div class="row">   
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h2><?php the_field('bblp_price_section_h2');?></h2></div>  
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><?php the_field('bblp_price_section_content');?></div>         
        </div>        
	</div>
</section>
<!--BBLP Price Section-->

<!--BBLP Review Section-->
<section class="bblp-review-section">
    <div class="container">
        <div class="row">   
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><?php the_field('bblp_reviews_top_content');?></div>  
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="bblp-reviews-left-col">
		<div class="bblp-reviews-logo"><img src="<?php the_field('bblp_reviews_left_logo');?>"/></div>
		<?php the_field('bblp_reviews_left_content');?></div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		<div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><div class="review-box"><?php the_field('bblp_reviews_box_01');?></div></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><div class="review-box"><?php the_field('bblp_reviews_box_02');?></div></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><div class="review-box"><?php the_field('bblp_reviews_box_03');?></div></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><div class="review-box"><?php the_field('bblp_reviews_box_04');?></div></div>
        </div>
        </div>           
        </div>        
	</div>
</section>
<!--BBLP Review Section-->

<!--BBLP Doctor Section-->
<section class="bblp-doctor-section">
    <div class="container">
        <div class="row">    
        <div class="col-xs-12 col-sm-4 col-md-5 col-lg-5">
		<div class="bblp-doctor-image"><img src="<?php the_field('bblp_doctor_left_image');?>"/></div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-7 col-lg-7">
		<div class="bblp-doctor-content"><?php the_field('bblp_doctor_right_content');?></div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="bblp-doctor-logos-bar"><img src="<?php the_field('bblp_doctor_logos_01');?>"/><img src="<?php the_field('bblp_doctor_logos_02');?>"/><img src="<?php the_field('bblp_doctor_logos_03');?>"/><img src="<?php the_field('bblp_doctor_logos_04');?>"/><img src="<?php the_field('bblp_doctor_logos_05');?>"/></div>
        </div>
        
        </div>
	</div>
</section>
<!--BBLP Doctor Section-->

<!--BBLP Health Section-->
<section class="bblp-health-section" style="background:#ffffff url(<?php the_field('bblp_health_section_bg');?>) no-repeat; background-size:cover;">
    <div class="container">
        <div class="row">    
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h2><?php the_field('bblp_health_section_heading');?></h2>
        </div>        
        </div>
	</div>
</section>
<!--BBLP Health Section-->

<!--BBLP Bottom Section-->
<section class="bblp-bottom-section" style="background:#ffffff url(<?php the_field('bblp_bottom_section_bg');?>) no-repeat; background-size:cover;">
    <div class="container">
        <div class="row">    
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<?php the_field('bblp_bottom_section_content');?>
        <div class="bottom-button"><a href="<?php the_field('bblp_bottom_section_button_link');?>"><?php the_field('bblp_bottom_section_button');?></a></div>
        </div>        
        </div>
	</div>
</section>
<!--BBLP Bottom Section-->

<!--BBLP Footer-->
<section class="bblp-footer">
    <div class="container">
        <div class="row">    
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><?php the_field('bblp_footer_left_content');?></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="bblp-footer-right"><?php the_field('bblp_footer_right_content');?></div> 
        </div>       
        </div>
	</div>
</section>
<!--BBLP Footer-->

<?php get_footer(); ?>