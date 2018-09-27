<?php if(!is_page('tour')) { ?>
<section id="contact">
		<div class="wrapper-gutters bodycopy">
			<div class="column-third">
				<h2 class="title">Let us find the space for you</h2>
				<p>Contact us today and discover why the Davidson-Gundy Alumni Center is the ideal venue for your next event. Work with our on-site coordinators to bring your visions to life and to make your event unforgettable.<p> 
				
				<a style="margin-top:47px; padding:17px 50px;" href="https://connect.eventpro.net/EP/Client/db041263" class="button" target="_blank" title="Opens scheduling app in new tab/window">Request a reservation</a>
			</div>
			<div class="column-two-third">
				<?php gravity_form( 1, false, false, true, '', false ); ?>
			</div>
		</div>
</section>
<? } ?>

<section id="footer">
	<div class="wrapper-gutters">
		
		<div class="column-third emblem">
			<a href="http://www.utdallas.edu">
				<div class="img">
					<img src="<?php print get_bloginfo('template_directory'); ?>/images/seal.png?v=1">
				</div>
			</a>
		</div>

		<hr class="show500 divider-white" />
		<div class="column-third utd_copy">
			<ul>
				<li>&copy; Davidson-Gundy Alumni Center</li>
				<li>The University of Texas at Dallas<br>
				800 W. Campbell Road, DGA 10<br>
				Richardson, TX 75080</li>
			</ul>
		</div>
		
		<div class="column-third contact">
			<ul>
				<li><h4>Contact</h4></li>
				<li><a href="tel:972-883-5393">t: 972-883-5393</a></li>
				<li><a href="mailto:john.kyle@utdallas.edu">e: dgac@utdallas.edu</a></li>
			</ul>
		</div>
			</div>
</section>





<!--------------------------------------------------
	Wordpress
--------------------------------------------------->
<?php wp_footer();?>

<!--------------------------------------------------
	Script
--------------------------------------------------->
<script type="text/javascript" src="/websvcs/templates/dgac/js/jquery.functions.js?v=<?php echo rand(1, 999);?>"></script>


</body>
</html>