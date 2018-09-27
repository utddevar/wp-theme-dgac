<!----------------------------------------
	Floorplan Slider
----------------------------------------->
<section class="floorplans">
	<div class="wrapper-columns text_align-center">
			<div class="align-center">
			<!--<?php if(count(get_field('rates_table')) > 1) { ?>
			<span id=prev><i class="fa fa-angle-left"></i></span>
			<? } ?>-->
				<div class="cycle-slideshow" data-cycle-prev="#prev" data-cycle-next="#next" data-cycle-timeout="3000" data-cycle-caption="#adv-custom-caption" data-cycle-caption-template="{{cycleTitle}}">
					<?php if( have_rows('rates_table') ): while ( have_rows('rates_table') ) : the_row(); ?>
				    <img class="aligncenter" src="<?php the_sub_field('floorplan'); ?>" data-cycle-title='<h2 class="title"><?php the_sub_field('room_name'); ?></h2><span id="floorplan-info"><i class="fa fa-home"></i> <?php the_sub_field('size'); ?> <i id="spacer" class="fa fa-user"></i> <?php the_sub_field('occupancy'); ?> </span>'>
					<?php endwhile; endif; ?>
				</div>
			<!--<?php if(count(get_field('rates_table')) > 1) { ?>	
			<span id=next><i class="fa fa-angle-right"></i></span>
			<? } ?>-->
			</div>
			
			<div class="bodycopy slider">
				<div id="adv-custom-caption" class="center"></div>
			</div>
			<div class="center">
			<p class="bodycopy" id="space-text"><?php print get_field('floorplan_copy'); ?></p>
			</div>
			<!--<a href="<?php print get_bloginfo('url'); ?>/tour"><div class="button">Schedule a tour</div></a>-->
		</div>
	</div>
</section>