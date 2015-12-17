<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>
 <div id="page" role="main">

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
     <header class="page-title-wrapper">
       <h1 class="page-heading"><?php the_title(); ?></h1>
   	 </header>
     <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
     <div class="page-container">
       <div class="page-content-wrapper">
         <div class="page-content">
           <p><?php the_content(); ?></p>
           <div class="customer-review-wrapper">
             <div class="review-quotes-circle">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons-svg/quotation-marks.svg" alt="Quotation marks icon" />
             </div>
             <div class="review-comment-wrapper">
               <p class="review-comment">
                 <?php the_field('customer_review'); ?>
               </p>
               <h2><?php the_field('customer_name'); ?></h2>
               <h3 class="subheader"><?php the_field('customer_rating'); ?></h3>
             </div>
           </div>
         </div>
       </div>
       <div class="page-featured-image">
         <?php get_template_part( 'parts/featured-image' ); ?>
       </div>
     </div>
   </article>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>


 </div>

 <?php get_footer(); ?>
