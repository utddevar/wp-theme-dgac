<?php 
	//Template Name: Rates
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
	Amenities List
----------------------------------------->
<section class="full-width">
		<div class="wrapper-columns wrapper-table" id="amenities_img">
			<div class="row">
				<div class="column cell column-half image">
					<img src="<?php print get_bloginfo('template_directory'); ?>/images/amenity.png?v=1">
				</div>
			</div>
		</div>

		<div class="wrapper-columns wrapper-table" id="amenities_text">
			<div class="row">
				<div class="column cell column-half bodycopy" id="textbox_white">
					<div id="amenities_text_content">
						<h2 class="title"><?php print get_field('amenities_headline'); ?></h2>
						<p><?php print get_field('amenities_copy'); ?></p>
						<p class="bold">General amenities include:</p>
						<ul class="amenities_ul">
							<?php $i = 0; 
								if( have_rows('amenities_list') ):
								while ( have_rows('amenities_list') ) : the_row();
								if($i % 9 == 0 and $i != 0) {print '</ul><ul class="amenities_ul">';}
							?>
								<li><?php the_sub_field('amenity'); ?></li>
							<?php
							$i++;
							endwhile;
							endif;
							?>
						</ul>
						<!--<p class="bold">Parking, security, up to 21’x21’ dance floor, additional lighting, additional media such as live stream or recording, center pieces, etc available for an additional cost.</p>-->
					</div>
				</div>
			</div>
		</div>
</section>



<!----------------------------------------
	Rates Table 
----------------------------------------->

<div class="bodycopy wrapper-table text_align-center">
	<h2 class="title">Pricing &amp; Rates</h2>
</div>
<section>
	<div class="wrapper-columns rate-table" >
		<div class="rate-table wrapper-table" >
			<div class="row table-header" >
				<div class="cell main_cell table-title">Space Name</div>
				<div class="rates_info_wrapper">
					<div class="cell main_cell table-title"><!--<i class="fa fa-home"></i>--> Size</div>
					<div class="cell main_cell table-title capacity"><!--<i class="fa fa-user"></i>--> Capacity</div>
					<div class="cell main_cell table-title">Half-day Pricing</div>
					<div class="cell main_cell table-title">Full-day Pricing</div>
					<div class="cell main_cell table-title button-col"></div>
				</div>
			</div><!-- row -->
			<?php if(have_rows('rates_table')): while(have_rows('rates_table')): the_row(); ?>
			<div class="row" onclick="window.location='<?php the_sub_field('space_page_link');?>'"> 
				<div class="cell main_cell space-wrapper">
					<span id="space-name" class="">
						<?php the_sub_field('room_name'); ?>
					</span>
					<span class="plus-sign">&#43;</span>
				</div><!-- cell-->
				
					<div class="rates_info_wrapper" >
						<div class="cell main_cell space-rate size">
							<div class="wrapper-table">
								<div class="cell column-half" id="false-title"><i class="fa fa-home"></i> Size</div>
								<div class="mini-cell column-half"><span class="table-info wrap"><?php the_sub_field('size'); ?></span></div>
							</div>
						</div><!-- cell-->
						<div class="cell main_cell space-rate capacity">
							<div class="wrapper-table">
								<div class="mini-cell column-half" id="false-title"><i class="fa fa-user"></i> Capacity</div>
								<div class="mini-cell column-half small"><span class="table-info"><?php the_sub_field('occupancy'); ?></span></div>
							</div>
						</div><!-- cell-->
						<div class="cell main_cell space-rate">
							<div class="wrapper-table">
								<div class="mini-cell-wrap column-half" id="false-title">
										Half-day Pricing
								</div>
								<div class="mini-cell-wrap main_cell cell column-half">
									<span class="table-info">
										<?php the_sub_field('half_day_price'); ?>
										<br>
										<span class="text-half">
											<?php the_sub_field('half_day_description'); ?>
										</span>
									</span>
								</div>
							</div>
						</div><!-- cell -->
						<div class="cell space-rate second-last">
							<div class="wrapper-table">
								<div class="mini-cell-wrap column-half" id="false-title">
										Full-day Pricing
								</div>
								<div class="mini-cell-wrap column-half">
									<span class="table-info">
										<?php the_sub_field('full_day_price'); ?>
										<br>
										<span class="text-half">
											<?php the_sub_field('full_day_description'); ?>
										</span>
									</span>
								</div>
							</div>
						</div><!-- cell -->
						<div class="cell space-rate button-col last">
							<div class="table-button">More Info</div>
						</div><!-- cell -->
						<div class="cell" id="false-row">
							<span class="underline"><a href="<?php the_sub_field('space_page_link'); ?>">Look into this space &raquo;</a></span>
						</div>
					
				</div>
			</div><!-- row -->
			<?php endwhile; endif; ?>
		</div><!-- table -->
	</div><!-- wrapper -->
</section>












<?php get_footer(); ?>