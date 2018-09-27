<?php 
	//Template Name: Tour
	get_header(); ?>
	
	
	
	
<!----------------------------------------
	Dots
----------------------------------------->	
<section class="dots dots_1">
	<img src="<?php print get_bloginfo('template_directory'); ?>/images/dots.png?v=1">
</section>

<section class="dots dots_2">
	<img src="<?php print get_bloginfo('template_directory'); ?>/images/dots.png?v=1">
</section>



<!----------------------------------------
	Intro Copy
----------------------------------------->
<section class="flush_left">
	<div class="wrapper-columns column-three-fourth full-800">
		<div class="bodycopy" id="intro_copy">
			<p><?php print get_field('intro_copy'); ?></p>
		</div>
	</div>
</section>


<!----------------------------------------
	Tour Form
----------------------------------------->
<section>
	<div class="wrapper-gutters">
		<div class="column-third">
			<h2 class="title">Schedule a tour today</h2>
				<p>If you are interested in viewing the facility to see the offered event spaces, please fill out the form or contact us to schedule your tour.<p> 
		</div>
		<div class="column-two-third">
			<?php gravity_form( 2, false, false, true, '', false ); ?>
		</div>
	</div>
</section>

<!----------------------------------------
	Image Tour
----------------------------------------->
<section id="image_tour">
	<div class="wrapper-columns wrapper-table" id="image_tour">
		<div class="row">
			<div class="column cell column-half bodycopy" id="textbox_white">
				<div id="slider_text_content">
					<h2 class="title"><?php print get_field('title_spaces'); ?></h2>
					<p><?php print get_field('content_spaces'); ?></p>
					
					<a href="<?php print get_bloginfo('url'); ?>/spaces"><div class="button">Look into our spaces</div></a>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper-columns wrapper-table" id="tour_slider">
		<div class="row" id="tour-slider-row">
			<div class="column cell column-half image" id="tour_slider_content">
				<div class="cycle-slideshow" data-cycle-slides=".img" data-cycle-timeout="3000">
					<?php 
					$images = get_field('gallery');
					if( $images ): ?>
					        <?php foreach( $images as $image ): ?>
					            <div class="img">
									<img src="<?php echo $image['sizes']['large']; ?>">
								</div>
					        <?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

</section>

<!----------------------------------------
	Contact Us
----------------------------------------->
<section class="full-width">
	<div class="wrapper-columns wrapper-table" id="tour_contact">
		<div class="row">
			<div class="column cell column-half bodycopy" id="textbox_white">
				<div id="tour_text_content">
					<h2 class="title"><?php print get_field('tour_headline'); ?></h2>
					<?php print get_field('tour_text'); ?>
					<p>For questions, please phone or email:</p>
					<br><a href="tel:<?php print get_field('phone_number'); ?>">t: <?php print get_field('phone_number'); ?></a>
					<br>
					<br><a href="mailto:<?php print get_field('email'); ?>">e: <?php print get_field('email'); ?></a>
				</div>
		</div>
	</div>
	<div class="wrapper-columns wrapper-table" id="tour_map">
		<div class="row">
			<div class="column cell column-half image" id="tour_map_wide">
				<?php print do_shortcode("[put_wpgm id=1]"); ?>
			</div>
		</div>
	</div>
</section>













<?php get_footer(); ?>