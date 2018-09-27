<?php get_header();?>


<!-- Wrapper -->
<section id="section-1">
	<div class="wrapper">
		<h1 class="title"><?php the_title();?></h1>
		<?php if(have_posts()):?>
			<?php while(have_posts()): the_post();?>
				<?php the_content();?>
			<?php endwhile;?>
		<?php endif;?>
	</div> <!-- .wrapper -->
</section>


<?php get_footer();?>