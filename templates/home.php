<?php 
	//Template Name: Home
	get_header(); ?>
	
	
	
	
<section id="image_6" class="dots dots_1 offset" data-appear-top-offset="300">
	<img src="<?php print get_bloginfo('template_directory'); ?>/images/dots.png?v=1">
</section>

<section id="image_7" class="dots dots_2 offset" data-appear-top-offset="300">
	<img src="<?php print get_bloginfo('template_directory'); ?>/images/dots.png?v=1">
</section>



<!--------------------------------------------------
	Events
--------------------------------------------------->

<section class="alternating alternating_left">
	<div class="wrapper-narrow wrapper-columns wrapper-table">
		<div class='row'>
			<div class="column cell column-half reverse-down bodycopy">
				<h2 class='title'><?php print get_field('events_headline');?></h2>
				<?php print get_field('events_copy'); ?>
				<a href="<?php print get_bloginfo('url'); ?>/events"><div class="button"><?php print get_field('events_button'); ?></div></a>
			</div>
			<div id="image_1" class="column cell column-half reverse-up image offset" data-appear-top-offset="300"><img src="<?php $image = get_field('events_img1'); print $image['url']; ?>"></div>
		</div>
	</div>
</section>

<section class="alternating alternating_right">
	<div class="wrapper-narrow wrapper-columns wrapper-table">
		<div class='row'>
			<div id="image_2" class="column cell column-half image offset" data-appear-top-offset="300"><img src="<?php $image = get_field('events_img2'); print $image['url']; ?>"></div>
			<div class="column cell column-half"></div>
		</div>
	</div>
</section>



<!--------------------------------------------------
	About
--------------------------------------------------->

<section class="alternating" id="about_img">
	<div class="wrapper-narrow wrapper-columns wrapper-table">
		<div class="row">
			<div id="image_3" class="column cell column-half image offset" data-appear-top-offset="300"><img src="<?php $image = get_field('about_image'); print $image['url']; ?>"></div>
		</div>
	</div>
</section>




<section class="alternating alternating_right" id="about_text">
	<div class="wrapper-narrow wrapper-columns wrapper-table">
		<div class="row">
			<div class="column cell column-half bodycopy" id="textbox_white">
				<div id='textbox_content' class="offset" data-appear-top-offset="300">
					<h2 class="title"><?php print get_field('about_headline'); ?></h2>
					<?php print get_field('about_copy'); ?>
					<a href="<?php print get_bloginfo('url'); ?>/about"><div class="button">Learn more</div></a>
				</div>	
			</div>
		</div>
	</div>
</section>



<!--------------------------------------------------
	Events Table
--------------------------------------------------->
<section id="events">
	<div id="image_4" class="wrapper text_align-center bodycopy title-center offset" data-appear-top-offset="300">
			<h2 class='title'><?php print get_field('discover_headline'); ?></h2>
			<p><?php print get_field('discover_copy'); ?></p>
	</div>
	<div id="image_5" class="wrapper-columns wrapper-narrow text_align-center offset" data-appear-top-offset="300">
			
			
			<?php

			if( have_rows('event_box') ):
			    while ( have_rows('event_box') ) : the_row();
			?>
				<div class="column column-half events">
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
