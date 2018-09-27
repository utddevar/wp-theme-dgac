	<?php 
	//Template Name: Spaces
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
	Spaces
----------------------------------------->

<div style="clear:both;"></div>

<section id="space_grid"> 
	<div class="wrapper-grid">
		
		
		
		
		<?php $wp_querypost = array(
			'post_type'			=> 'spaces',
			'posts_per_page'	=> -1
		); $i=1; 
		query_posts($wp_querypost); if(have_posts()):?>
		<?php while(have_posts()): the_post();?>
			<div class="space-block <?php if($i==1 || $i==4 || $i==9 || $i==12  ) {print 'wide';} elseif($i==2 || $i==3 || $i==10 || $i==11) {print 'tall';} ?>" style="background: url(<?php the_post_thumbnail_url();?>)center center no-repeat; background-size:cover;">
				
				
		<?php
		
			if( have_rows('rates_table') ): $j=0;
			while( have_rows('rates_table') ): the_row(); if($j==0) { ?>
			<a href="<?php the_sub_field('space_page_link'); ?>">
				<img src="<?php print get_bloginfo('template_directory');?>/images/spacer.png" style="width: 100%; height: auto;">
				<div class="space-bg">
					<span id="space-name"><?php the_sub_field('room_name'); ?></span><br>
					<span id="space-info"><i class="fa fa-home"></i> <?php the_sub_field('size'); ?> <i id="spacer" class="fa fa-user"></i> <?php the_sub_field('occupancy'); ?></span><br>
					<span class="underline" id="space-link"><!-- <a class="underline" href="<?php the_sub_field('space_page_link'); ?>"> -->Look into this space</span>
				</div>
				</a>
			</div>
		<?php }
			$j++;
			endwhile;
			endif;
		?>
		<?php $i++; endwhile;?>
		<?php endif; wp_reset_query();?>
		<div style="clear: both;"></div>
	</div>

</section>








<?php get_footer(); ?>