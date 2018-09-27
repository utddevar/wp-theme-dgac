<?php 
	//Template Name: Event-Single
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
			<p><?php print get_field('intro_copy'); ?></p>
		</div>
	</div>
</section>



<!----------------------------------------
	Gallery
----------------------------------------->
<section id="gallery">
<div class="wrapper-gutters wrapper-narrow">
	<div class="cycle2" data-cycle-slides=".img" data-cycle-timeout="3000">
	<div class="column-third">
		
		
		<?php
		if( have_rows('gallery') ): $i = 1;
		    while ( have_rows('gallery') ) : the_row();
		?>
		
			<?php if(get_sub_field('type') == 'image') { ?>
			
				<div class="img" style="background-image: url(<?php $image = get_sub_field('gallery_photo'); print $image['url']; ?>);">
					<img src="<?php print get_bloginfo('template_directory'); ?>/images/spacer.png?v=1" alt="spacer_img">
				</div>
			<?php } else { ?>
				<div class="text_align-center text-only">
					<div class="row">
						<div class="cell">
							<h2 class="title"><?php print get_sub_field('quote'); ?></h2>
						</div>
					</div>
				</div>	
			<?php } ?>
			
			
			
			
			<?php if($i % 3 == 0 && $i != 9) { ?>
			</div><div class="column-third">
			<?php } ?>
			
			
			
			
		<?php $i++;
		    endwhile;
		else :
		endif;
		
		?>
		
		
	</div>
	</div>
</div>
</section>


<section id="amenities-wrapper">
<div class="wrapper-columns wrapper-narrow bodycopy" id="amenities">
	<h2 class="title">What's Included:</h2>
	<div class="column-half">
		<p><?php print get_field('amenities_copy'); ?></p>
		<a href="<?php print get_bloginfo('url'); ?>/spaces" class="underline">Walk around our spaces</a>
	</div>
	<div class="column-half">
		<?php

			if( have_rows('amenities_list') ):
			    while ( have_rows('amenities_list') ) : the_row();
			?>
				<ul>
					<li><?php print get_sub_field('bullet_point'); ?></li>
				</ul>
			<?php
			    endwhile;
			endif;
			
			?>
	</div>
</div>
</section>

<script>

	if($(window).width() < 400) { 
		$('.cycle2').addClass('cycle-slideshow');
	}

</script>

<?php get_footer(); ?>




