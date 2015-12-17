<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>

<?php get_template_part( 'parts/featured-image' ); ?>

<div id="page-sidebar-left" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
    <header class="page-title-wrapper">
      <h1 class="page-heading"><?php the_title(); ?></h1>
    </header>
    <div class="page-container">
      <div class="page-content-wrapper services-page">
        <div class="page-content">
          <p><?php the_content(); ?></p>
        </div>
      </div>
      <div class="page-sidebar">
        <nav class="vertical menu">
          <ul>
            <li class="sidebar-menu-title">More Services</li>
            <li><a href="<?php echo get_page_link(36); ?>">Appliance Repair</a></li>
            <li><a href="<?php echo get_page_link(38); ?>">Washing Machine Repair</a></li>
            <li><a href="<?php echo get_page_link(41); ?>">Appliance Installation</a></li>
            <li><a href="<?php echo get_page_link(43); ?>">Dryer Repair</a></li>
            <li><a href="<?php echo get_page_link(45); ?>">Dishwasher Repair</a></li>
            <li><a href="<?php echo get_page_link(47); ?>">Refrigerator Repair</a></li>
            <li><a href="<?php echo get_page_link(49); ?>">Electric Water Heater Repair</a></li>
          </ul>
        </nav>
      </div>
    </div>
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
  </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>


</div>

<?php get_footer(); ?>
