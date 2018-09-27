<?php 
	//Template Name: About
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
	The Davidsons
----------------------------------------->
<section>
		<div class="wrapper-columns wrapper-table" id="abt_davidson">
			<div class="row">
				<div class="column cell column-half image">
					<img src="<?php $image = get_field('davidson_image'); print $image['url']; ?>">
				</div>
			</div>
		</div>

		<div class="wrapper-columns wrapper-table" id="davidsons_text">
			<div class="row">
				<div class="column cell column-half bodycopy" id="textbox_white">
					<div id="davidson_text_content">
						<h2 class="title"><?php print get_field('davidson_headline'); ?></h2>
						<?php print get_field('davidson_text'); ?>
					</div>
				</div>
			</div>
		</div>
</section>





<!----------------------------------------
	Students & Alumni
----------------------------------------->
<section>
	<div class="wrapper-columns wrapper-table" id="alumni_text">
		<div class="row">
			<div class="column cell columnn-half bodycopy" id="textbox_left">
				<div id="alumni_text_content">
					<h2 class="title"><?php print get_field('alumni_headline'); ?></h2>
					<?php print get_field('alumni_copy'); ?>
					<!--<a href="#"><div class="button">Schedule a Tour</div></a>-->
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper-columns wrapper-table" id="alumni_img">
		<div class="column cell column-half image">
			<img src="<?php $image = get_field('alumni_image'); print $image['url']; ?>">
		</div>
	</div>
</section>



<!----------------------------------------
	Donor List
----------------------------------------->
<section>
	<div class="wrapper-columns wrapper-table" id="donors_list">
		<div class="row">
			<div class="column cell column-half image">
				<img src="<?php $image = get_field('donors_image'); print $image['url']; ?>">
			</div>
		</div>
	</div>
	
	<div class="wrapper-columns wrapper-table" id="donor_table">
		<div class="row">
			<div class="column cell column-half bodycopy" id="textbox_white">
				<div id="donors_text_content">
					<h2 class="title"><?php print get_field('donor_headline'); ?></h2>
					<div class="donor_ul">
						<?php $i = 0; 
						if( have_rows('donor_list') ):
						while ( have_rows('donor_list') ) : the_row();
						if($i % 4 == 0 and $i != 0) {print '</div><div class="donor_ul">';}
						?>
						<span class="link_underline"><a href="<?php the_sub_field('space_url'); ?>"><?php the_sub_field('donor_name'); ?></a></span>
						<?php

						$i++;
				
						endwhile;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<!----------------------------------------
	Map
----------------------------------------->
<?php print do_shortcode("[put_wpgm id=1]"); ?>








<?php get_footer(); ?>