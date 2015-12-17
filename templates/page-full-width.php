<?php
/*
Template Name: Full Width Map
*/
get_header(); ?>

<?php get_template_part( 'parts/featured-image' ); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header class="page-title-wrapper">
        <h1 class="page-heading"><?php the_title(); ?></h1>
    	 </header>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.1761287601125!2d-86.86274538438823!3d30.402744381753436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8891212a393b7e5b%3A0xd0ac52ac28611028!2s8668+Navarre+Pkwy+%23162%2C+Navarre%2C+FL+32566!5e0!3m2!1sen!2sus!4v1450314756382" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="page-container">
        <div class="page-content-wrapper contact-page">
          <div class="page-content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
  </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer(); ?>
