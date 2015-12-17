<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<section class="blogpost-entry" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="hero-wrapper">
		<div class="hero-page-title">
			<h2 class="hero-heading"><?php the_title(); ?></h2>
			<p class="entry-content hero-subheading">
				<?php the_content(); ?>
			</p>
			<a href="tel:18503904400" class="logo-phone-box show-for-small-only">Phone: 850-390-4400</a>
		</div>
		<div class="hero-image">
			<?php the_post_thumbnail(); ?>
		</div>
	</header>
	<div class="promo-panels-wrapper clearfix">
		<a href="<?php echo get_page_link(6); ?>" class="promo-panel">
			<div class="promo-icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons-svg/house-icon-white.svg" alt="Residential Appliance Repair icon" />
			</div>
			<h3 class="promo-title">Residential Appliance Repair</h3>
		</a>
		<a href="<?php echo get_page_link(6); ?>" class="promo-panel">
			<div class="promo-icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons-svg/repair-icon-white.svg" alt="Refrigerator &amp; Ice Maker/Machine Repair icon" />
			</div>
			<h3 class="promo-title">Refrigerator &amp; Ice Maker/Machine Repair</h3>
		</a>
		<a href="<?php echo get_page_link(6); ?>" class="promo-panel">
			<div class="promo-icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons-svg/garage-icon-white.svg" alt="Helpful Do-It-Yourself Tips for Property Managers icon" />
			</div>
			<h3 class="promo-title">Helpful Do-It-Yourself Tips for Property Managers</h3>
		</a>
	</div>
	<div class="introduction-text">
		<div class="row">
			<div class="small-12 columns">
				<p>
					<?php the_field('home_intro_parargraph'); ?>
				</p>
			</div>
		</div><!-- /.row -->
	</div>
	<section class="home-locations-text">
		<div class="row">
			<div class="small-12 columns">
				<h4>
					<?php the_field('home_locations'); ?>
				</h4>
			</div>
		</div><!-- /.row -->
	</section>
	<div class="home-appliances-row clearfix">
		<a href="<?php echo get_page_link(36); ?>" class="appliance-panel appliance-repair">
			<h4 class="appliance-title">
				Appliance Repair
			</h4>
			<div class="appliance-caption-wrapper">
				<div class="appliance-caption">
					<ul>
						<li>Freezers</li>
						<li>Ice Makers</li>
						<li>Wine Coolers</li>
						<li>Ovens</li>
						<li>Ranges and Cooktops</li>
						<li>Hoods</li>
						<li>Garbage Disposals</li>
						<li>Trash Compactors</li>
						<li>Over-The-Range Microwaves</li>
					</ul>
				</div>
			</div>
		</a>
		<a href="<?php echo get_page_link(47); ?>" class="appliance-panel refrigerator-repair">
			<h4 class="appliance-title">
				Refrigerator Repair
			</h4>
			<div class="appliance-caption-wrapper">
				<div class="appliance-caption">
					<p>
						We can help with these issues...
					</p>
					<ul>
						<li>Temperature is too high</li>
						<li>Temperature is too high</li>
						<li>Interior light is defective</li>
						<li>Frost is forming inside</li>
						<li>Unit is making disruptive noises</li>
						<li>Water is continuously leaking</li>
					</ul>
				</div>
			</div>
		</a>
		<a href="<?php echo get_page_link(45); ?>" class="appliance-panel dishwasher-repair">
			<h4 class="appliance-title">
				Dishwasher Repair
			</h4>
			<div class="appliance-caption-wrapper">
				<div class="appliance-caption">
					<p>
						We can help with these issues...
					</p>
					<ul>
						<li>Inability to start</li>
						<li>Leaks</li>
						<li>Unpleasant odors</li>
						<li>Dishes not getting cleaned</li>
						<li>Inability to fill</li>
						<li>Inability to drain</li>
						<li>Excessive cycle lengths</li>
					</ul>
				</div>
			</div>
		</a>
	</div>
	<div class="home-appliances-row clearfix">
		<a href="<?php echo get_page_link(6); ?>" class="appliance-panel icemachine-repair">
			<h4 class="appliance-title">
				Ice Machine Repair
			</h4>
			<div class="appliance-caption-wrapper">
				<div class="appliance-caption">
					<p>
						We can help with these issues...
					</p>
					<ul>
						<li>Not making ice</li>
						<li>Loud noises</li>
						<li>Leaking water</li>
						<li>Running too hot</li>
					</ul>
				</div>
			</div>
		</a>
		<a href="<?php echo get_page_link(38); ?>" class="appliance-panel washingmachine-repair">
			<h4 class="appliance-title">
				Washing Machine Repair
			</h4>
			<div class="appliance-caption-wrapper">
				<div class="appliance-caption">
					<p>
						We can help with these issues...
					</p>
					<ul>
						<li>Not spinning</li>
						<li>Not agitating</li>
						<li>Not filling</li>
						<li>Not draining</li>
						<li>Not starting</li>
						<li>Leaking</li>
						<li>Making strange noises</li>
					</ul>
				</div>
			</div>
		</a>
		<a href="<?php echo get_page_link(43); ?>" class="appliance-panel dryer-repair">
			<h4 class="appliance-title">
				Dryer Repair
			</h4>
			<div class="appliance-caption-wrapper">
				<div class="appliance-caption">
					<p>
						We can help with these issues...
					</p>
					<ul>
						<li>Unit will not turn on</li>
						<li>Clothes are too hot</li>
						<li>Clothes are not getting dried</li>
						<li>Takes too long to dry</li>
						<li>Duct cleaning</li>
						<li>Dryer does not tumble</li>
						<li>Dryer makes excessive noise</li>
					</ul>
				</div>
			</div>
		</a>
	</div>
	<section class="home-no-limit-tagline">
		<div class="row">
			<div class="small-12 columns">
				<h4>There's no limit to our wide range of expertise!</h4>
			</div>
		</div><!-- /.row -->
	</section>
	<footer></footer>
</section>
