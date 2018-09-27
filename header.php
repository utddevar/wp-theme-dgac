<!doctype html>
<html>
<head>
	
	

<!--------------------------------------------------
	META
--------------------------------------------------->
<title><?php if(is_front_page()) { 
	
	echo get_bloginfo('title').' | The University of Texas at Dallas';
	
} else { 
	
	echo get_title_trail().' | '.get_bloginfo('title'); 
}
	?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<!-- Meta keywords -->
<?php // Look for ACF Keywords
	if(get_field('seo_keywords'))
{
	echo '<meta name="Description" content="' . get_field('seo_keywords') . '" />';
} 
	?>
<!-- Meta Description -->
<?php // Look for ACF field then Excerpt for Meta Description
	if(get_field('seo_article_description'))
{
	echo '<meta name="Description" content="' . get_field('seo_article_description') . '" />';
} 	
	elseif(has_excerpt()) 
{ 
	echo '<meta name="Description" content="' . wp_strip_all_tags( get_the_excerpt(), true ) . '" />';
} 
	?>


<!--------------------------------------------------
	CSS
--------------------------------------------------->
<link rel="stylesheet" media="all" href="/websvcs/templates/dgac/css/style.css?v=<?php echo rand(1, 999);?>">
<link rel="stylesheet" media="all" href="/websvcs/templates/dgac/css/style-gravity.css?v=<?php echo rand(1, 999);?>">
<link rel="stylesheet" media="all" href="/websvcs/templates/dgac/css/style-fontawesome.css">
<link rel="stylesheet" media="all" href="/websvcs/templates/dgac/css/style-ionicons.css">
<link rel="stylesheet" media="all" href="/websvcs/templates/dgac/css/style-responsive.css?v=<?php echo rand(1, 999);?>">
<link rel="stylesheet" media="all" href="/websvcs/templates/dgac/css/animate.css?v=<?php echo rand(1, 999);?>">
<link href="https://fonts.googleapis.com/css?family=Lato:300, 400,700,900" rel="stylesheet">

<!--------------------------------------------------
	Wordpress
--------------------------------------------------->
<script type="text/javascript" src="/websvcs/templates/dgac/js/jquery-3.1.1.js"></script>
<script src="/websvcs/templates/dgac/js/jquery.cycle2.js"></script>
<script type="text/javascript" src="/websvcs/templates/dgac/js/jquery.appear.js?v=<?php echo rand(1, 999);?>"></script>

<?php wp_head();?>
</head>
<body>
<div class="superwrapper">
	





<section class="brand_nav">
		<a href="http://www.utdallas.edu">
			<div id="utd-monogram">
				<img src="<?php print get_bloginfo('template_directory'); ?>/images/UTDmono_flame.png?v=1">
			</div>
		</a>
		<a href="http://www.utdallas.edu">
			<div id="utd-text">
				<img src="<?php print get_bloginfo('template_directory'); ?>/images/UTD_text.png?v=1">
			</div>
		</a>
</section>
<section class="mobile-nav">
	<div class="nav-container">
		<div class="brand">
			<a href="http://www.utdallas.edu"><img src="https://www.utdallas.edu/brand/files/UTDmono_rev.png"></a>
		</div>
		<div class="dgac-brand text_align-center">
				<div><a href="<?php print get_bloginfo('url');?>"><img id="mobile_logo" src="<?php print get_bloginfo('template_directory');?>/images/logo_text_white.png" alt="Davidson-Gundy Alumni Center"></a></div>
		</div>
	<!-- Tablet Nav -->
		<nav>
			<div class="nav-mobile">
				<a id="nav-toggle" href="#!"><span id="hamburger"></span></a>
			</div>
			<ul class="nav-list">
				<li><a href="<?php print get_bloginfo('url'); ?>">HOME</a></li>
				<li><a href="<?php print get_bloginfo('url'); ?>/events">EVENTS</a></li>
				<li><a href="<?php print get_bloginfo('url'); ?>/about">ABOUT</a></li>
				<li><a href="<?php print get_bloginfo('url'); ?>/spaces">SPACES</a></li>
				<li><a href="<?php print get_bloginfo('url'); ?>/tour">TOUR</a></li>
				<li><a href="<?php print get_bloginfo('url'); ?>/rates">RATES</a></li>
				<li><a href="<?php print get_bloginfo('url'); ?>/blog">BLOG</a></li>
			</ul>
		</nav>
	</div>

</section>

<section id="main_image" <?php if(!is_page('homepage')) {print 'class="secondary_hero"';} ?> style="background-image:url(<?php print get_field('header_image'); ?>);">
	<div class="wrapper <?php if(!is_page('homepage')) {print 'secondary_hero';} ?>">
		
		<!--Big Logo Nav-->
		<div id="nav_bar" class='text_align-center'>
			<ul>
				<li class="dropdown"><a href="<?php print get_bloginfo('url'); ?>/events">EVENTS <i class="fa fa-angle-down fa-lg"></i></a>
					
					<div class='subnav'>
						<a href="<?php print get_bloginfo('url'); ?>/events/corporate-events">CORPORATE EVENTS</a><br>
						<a href="<?php print get_bloginfo('url'); ?>/events/weddings-and-receptions">WEDDINGS AND RECEPTIONS</a><br>
						<a href="<?php print get_bloginfo('url'); ?>/events/social-occasions">SOCIAL OCCASIONS</a><br>
						<a href="<?php print get_bloginfo('url'); ?>/events/alumni-community">ALUMNI COMMUNITY
</a>
					</div>
					
				</li>
				<li><a href="<?php print get_bloginfo('url'); ?>/spaces">SPACES</a></li>
				<li><a href="<?php print get_bloginfo('url'); ?>/tour">TOUR</a></li>
				<li class="image-type"><a href="<?php print get_bloginfo('url'); ?>"><img src="<?php print get_bloginfo('template_directory'); ?>/images/logo_text_black.png?v=1" alt="Davidson-Gundy Alumni Center"></a></li>
				<li class='image'><a href="<?php print get_bloginfo('url'); ?>"><img src="<?php print get_bloginfo('template_directory'); ?>/images/dgac_logo.png?v=1" alt="Davidson-Gundy Alumni Center"></a></li>
				
				<li class="dropdown"><a href="<?php print get_bloginfo('url'); ?>/about">ABOUT <i class="fa fa-angle-down fa-lg"></i></a>
					<div class='subnav'>
						<a href="<?php print get_bloginfo('url');?>/faq">FAQ</a>
					</div>
				</li>
				<li><a href="<?php print get_bloginfo('url'); ?>/rates">RATES</a></li>
				<li><a href="<?php print get_bloginfo('url'); ?>/blog">BLOG</a></li>
			</ul>
		</div>
		
		
		
		<!--
		<div id="nav_bar_md" class="text_align_center;">
			<div id="utd-monogram-sm">
				<img src="https://www.utdallas.edu/brand/files/UTDmono_rev.png">
			</div>
			<div id="logo-md">
				<a href="<?php print get_bloginfo('url');?>">
					<img src="<?php print get_bloginfo('template_directory');?>/images/DGAC_logo-md.png" alt="Davidson-Gundy Alumni Center">
				</a>
			</div>
			<div id="menu-toggle" class="hamburger">
				<button class="hamburger-button"><i class="fa fa-bars fa-md"></i></button>
				<button class="cross-button">&#735;</button>
			</div>
			<div class="hamburger-menu">
				<ul>
					<li><a href="/events">EVENTS</a>
						
						<ul>
							<li><a href="<?php print get_bloginfo('url'); ?>/events/weddings">WEDDINGS</a></li>
							<li><a href="<?php print get_bloginfo('url'); ?>/events/reunions">REUNIONS</a></li>
							<li><a href="<?php print get_bloginfo('url'); ?>/events/seminars">SEMINARS</a></li>
							<li><a href="<?php print get_bloginfo('url'); ?>/events/banquets">BANQUETS</a></li>
						</ul>
						
					</li>
					<li><a href="<?php print get_bloginfo('url'); ?>/spaces">SPACES</a></li>
					<li><a href="<?php print get_bloginfo('url'); ?>/about">ABOUT</a></li>
					<li><a href="<?php print get_bloginfo('url'); ?>/tour">TOUR</a></li>
					<li><a href="<?php print get_bloginfo('url'); ?>/rates">RATES</a></li>
					<li><a href="<?php print get_bloginfo('url'); ?>/blog">BLOG</a></li>
				</ul>
			</div>
		</div>
-->
				
		<!--Body Copy-->
		<div class='main_title'>
			<div class='text white_text bodycopy'>
				<h1 class='title'><?php if(is_singular('post')) {print get_the_title();} else{ print get_field('headline'); } ?></h1>
				<em><?php if(is_singular('post')) {print get_field('author');} ?></em>
			</div>
		</div>
		<?php if(is_front_page()) { ?>
		<div class="arrow bounce">
		</div>
		<? } ?>
	</div>
</section>