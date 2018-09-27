<?php 
	//Template Name: Events
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
	<div class="wrapper-columns column-three-fourth bodycopy full-800">
		<div id="intro_copy">
			<?php print get_field('intro_copy'); ?>
		</div>
	</div>
</section>
	
	
	
<!----------------------------------------
	Events
----------------------------------------->
<section>
	<div class="wrapper-columns wrapper-narrow text_align-center">
			
			
			<?php

			if( have_rows('event_box') ):
			    while ( have_rows('event_box') ) : the_row();
			?>
				<div class="column column-half events_lg">
					<a href="<?php print get_sub_field('page_url'); ?>">
						<div class="events_text"><h3 class="title"><?php print get_sub_field('event_title'); ?></h3></div>
						<div class='events_cell' style="background-image: url(<?php $image = get_sub_field('event_image'); print $image['url']; ?>);"></div>
					</a>
				</div>
			<?php
			    endwhile;
			endif;
			
			?>
	</div>
</section>	
	
	
	
	
<?php get_footer(); ?>