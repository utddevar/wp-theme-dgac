<?php get_header();?>
<!-- Wrapper -->

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
	<div class="wrapper-columns column-three-fourth">
		<div class="bodycopy" id="intro_copy">
			<p></p>
			<p><?php print get_field('intro_copy'); ?></p>
			<p></p>
		</div>
	</div>
</section>

<div style="clear:both;"></div>




<!----------------------------------------
	Pullquote
----------------------------------------->
<?php if(get_field('quote')): {?>
<section style="background: url(<?php print get_bloginfo('template_directory'); ?>/images/pullquote.png) center center no-repeat; background-size: cover;">
	<div class="text_align-center pullquote">
		<h2 class="title-white">
			<?php print get_field('quote'); ?>
			
			<?php if(get_field('author')): {?>
			<br>
			<em>- <?php print get_field('author'); ?></em>
			
			<?php } endif; ?>
		</h2>
	</div>
</section>

<?php } endif; ?>



<!----------------------------------------
	Removed floorplan-slider.php
----------------------------------------->


<!----------------------------------------
	Rates Table
----------------------------------------->
<section id="space_rates_table">
	<div class="wrapper-columns">
		<div class="bodycopy wrapper-table text_align-center">
			<h2 class="title">Pricing &amp; Rates</h2>
			<p id="space-text"><?php print get_field('rates_copy'); ?></p>
			<!--<a href="<?php print get_bloginfo('url'); ?>/tour"><div class="button">Schedule a tour</div></a>-->
		</div>
		<br><br>
	</div>
	<div class="wrapper-columns rate-table">	
		<div class="rate-table wrapper-table small-table">
			<div class="row table-header">
				<div class="cell main_cell table-title">Space Name</div>
				<div class="rates_info_wrapper">
					<div class="cell main_cell table-title">Size</div>
					<div class="cell main_cell table-title capacity">Capacity</div>
					<div class="cell main_cell table-title">Half-day Pricing</div>
					<div class="cell main_cell table-title">Full-day Pricing</div>
				</div>
			</div><!-- row -->
			<?php if(have_rows('rates_table')): while(have_rows('rates_table')): the_row(); ?>
			<div class="row">
				<div class="cell main_cell space-wrapper">
					<span id="space-name" class="">
						<?php the_sub_field('room_name'); ?>
					</span>
					<!--<span class="plus-sign">&#43;</span>-->
				</div><!-- cell-->
				<div class="rates_info_wrapper open">
					<div class="cell main_cell space-rate size">
						<div class="wrapper-table">
							<div class="cell column-half" id="false-title"><i class="fa fa-home"></i> Size</div>
							<div class="mini-cell column-half"><span class="table-info wrap"><?php the_sub_field('size'); ?></span></div>
						</div>
					</div><!-- cell -->
					<div class="cell main_cell space-rate capacity">
						<div class="wrapper-table">
							<div class="mini-cell column-half" id="false-title"><i class="fa fa-user"></i> Capacity</div>
							<div class="mini-cell column-half small"><span class="table-info"><?php the_sub_field('occupancy'); ?></span></div>
						</div>
					</div><!-- cell -->
					<div class="cell main_cell space-rate">
						<div class="wrapper-table">
							<div class="mini-cell-wrap column-half" id="false-title">Half-day Pricing</div>
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
					<div class="cell space-rate last">
						<div class="wrapper-table">
							<div class="mini-cell-wrap column-half" id="false-title">Full-day Pricing</div>
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
				</div><!-- rate wrapper -->
				
			</div><!-- row -->
			<?php endwhile; endif; ?>
		</div><!-- table -->
	</div>
</section>




<!----------------------------------------
	Namesake
----------------------------------------->
<?php if(get_field('namesake_image')): {?>

<section class="namesake" style="background: url(<?php print get_bloginfo('template_directory'); ?>/images/namesake_bg.png) center center no-repeat; background-size: cover;">
	<div class="wrapper-columns namesake-wrapper">
		<div class="column-half white_text">
			<div class="border">
				<h3 class="namesake"><?php print get_field('namesake');?></h3>
				<p><?php print get_field('namesake_copy');?></p>
			</div>
		</div>
		<div class="column-half image namesake-img">
			<img src="<?php print the_field('namesake_image');?>">
		</div>
	</div>
</section>

<?php } elseif(get_field('namesake')): {?>

<section class="namesake" style="background: url(<?php print get_bloginfo('template_directory'); ?>/images/namesake_bg.png) center center no-repeat; background-size: cover;">
	<div class="wrapper-columns namesake-wrapper">
		<div class="column-half white_text" style="float:none;margin:0 auto;">
			<div class="border">
				<h3 class="namesake"><?php print get_field('namesake');?></h3>
				<p><?php print get_field('namesake_copy');?></p>
			</div>
		</div>
	</div>
</section>	

<?php } endif; ?>





<?php get_footer();?>