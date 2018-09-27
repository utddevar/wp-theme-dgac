<?php get_header();?>
<!-- Wrapper -->

<!----------------------------------------
	Dots
----------------------------------------->	
<!--
<section class="dots dots_1">
	<img src="<?php print get_bloginfo('template_directory'); ?>/images/dots.png?v=1">
</section>

<section class="dots dots_2">
	<img src="<?php print get_bloginfo('template_directory'); ?>/images/dots.png?v=1">
</section>
-->




<!----------------------------------------
	Blog Post
----------------------------------------->
<section>
	<div class="wrapper-blog bodycopy">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
		endwhile; endif; ?>
	</div>
</section>













<?php get_footer();?>