<?php 
	//Template Name: FAQ
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


<section>
	<div class="wrapper-columns">
		<div class="column-three-fourth" id="faq">
			<h2 id="faq-title" class="title">Frequently Asked Questions</h2>
			<div class="wrapper-table">
				<?php if(have_rows('q_a')): while(have_rows('q_a')): the_row(); ?>
					<div class="row">
						<div class="cell" id="Q">Q.</div>
						<div class="cell" id="question"><?php the_sub_field('question'); ?></div>
					</div>
					<div class="row">
						<div class="cell" id="Q">A.</div>
						<div class="cell" id="answer"><?php the_sub_field('answer'); ?></div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
		
		<div class="column-fourth" id="faq_flush_right">
			<img src="<?php print get_bloginfo('template_directory'); ?>/images/faq-right.png?v=1">
		</div>
	</div>
</section>











<?php get_footer(); ?>