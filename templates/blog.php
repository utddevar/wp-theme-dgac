<?php 
	//Template Name: Blog
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
	Blog
----------------------------------------->

<div style="clear:both;"></div>

<section> 
	<div class="wrapper-grid">
		<?php $wp_querypost = array(
			'post_type'			=> 'post',
			'posts_per_page'	=> 10,
			'ordreby'			=> 'menu_order',
			'order' 			=> 'ASC'
		); $i=1;
		query_posts($wp_querypost); if(have_posts()):?>
		<?php while(have_posts()): the_post();?>
		
		<div class="blog-block <?php if($i==1 || $i==6 || $i==7 || $i==12) {print 'wide';} ?>" style="background: url(<?php the_post_thumbnail_url();?>)center center no-repeat; background-size: cover;">
			<a  href="<?php the_permalink(); ?>">
		<img src="<?php print get_bloginfo('template_directory');?>/images/spacer.png" style="width: 100%;">
			<div class="post-bg">
				<span id="blog-title"><?php the_title(); ?></span>
				<span id="blog-description"><?php the_excerpt(); ?></span>
				<span id="blog-link"><a class="underline" href="<?php the_permalink(); ?>">Read More</a></span>
			</div>
		</a>
		</div>
		
		<?php $i++; endwhile; ?>
		<?php endif; wp_reset_query(); ?>
		<div style="clear: both;"></div>
	</div>
	
</section>








<?php get_footer(); ?>