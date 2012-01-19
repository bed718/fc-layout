<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>THIS IS COOL!</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="css/reset.css">
	<link href='http://fonts.googleapis.com/css?family=Cantarell:700,400,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="fonts/fonts.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/extras.css">

	<script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>
<body>


	<header id="main-header">
		<div id="header-inner">
			<div id="logo"><a href="/"><img src="images/FC_logo.jpg" /></a></div>
			
			<?php include('includes/main_nav.php'); ?>
			
			<div id="search" class="container-inline">
					<input type="text" maxlength="128" name="search_theme_form" id="edit-search-theme-form-1" size="15" value="" title="Enter the terms you wish to search for." class="form-text" />
					<input type="submit" name="op" id="edit-submit" value="Search"  class="form-submit" />
					
			</div>
			
		</div>
	</header>
<div id="container" class="clearfix">
	<div id="main">
	
		<div class="section">
			<header class="section-header-inset">
				<h2>Featured Article</h2>
				<a href="#" class="more-btn">more</a>
			</header>	
			<article class="teaser-featured-large teaser">
				<section class="image-icons">
					<div class="image">
						<a href="#"><img src="images/test_images/featured_article.jpg" /></a>
					</div>
					<div class="icons">
						<div class="icon-type">
							<div class="icon video"><a href="#"></a></div>
						</div>
						<div class="icon-focus">
							<div class="icon animal"><a href="#"></a></div>
							<div class="icon enviro"><a href="#"></a></div>
							<div class="icon people"><a href="#"></a></div>
						</div>
					</div>
				</section> <!-- /image-icons --> 
				
				<section class="details">
					<h1><a href="#">Help bring water to little kids. They need it!</a></h1>
					<div class="stats">
						<span class="date">4/7/80</span>
						<span class="type"><a href="#">video</a></span>
						<span class="comments"><a href="#">comments 1</a></span>
					</div> 
				</section><!-- /details --> 
			</article> <!-- /teaser-featured --> 
		</div>
		
		<section id="charity-updates" class="grid">
			<header class="section-header">
				<h2>Charity Updates</h2>
				<a href="#" class="more-btn">more</a>
			</header>
			
			<table>
				<tbody>
					<tr>
						<td><?php include('includes/teaser_small.php'); ?></td>
						<td><?php include('includes/teaser_small.php'); ?></td>
						<td><?php include('includes/teaser_small.php'); ?></td>
					</tr>
					<tr>
						<td><?php include('includes/teaser_small.php'); ?></td>
						<td><?php include('includes/teaser_small.php'); ?></td>
						<td><?php include('includes/teaser_small.php'); ?></td>
					</tr>
				</tbody>
			</table>
		</section>
		
		
	</div>
	
	<aside id="sidebar-second">
		
		
		<div class="section">
			<header class="section-header-inset">
				<h2>Featured Charity</h2>
				<a href="#" class="more-btn">more</a>
			</header>
			<article class="teaser-featured-charity teaser">
				<section class="image-icons">
					<div class="image">
						<a href="#"><img src="images/test_images/featured_charity.jpg" /></a>
					</div>
					<div class="icons">
						<div class="icon-type">
							<div class="icon video"><a href="#"></a></div>
						</div>
						<div class="icon-focus">
							<div class="icon animal"><a href="#"></a></div>
							<div class="icon enviro"><a href="#"></a></div>
							<div class="icon people"><a href="#"></a></div>
						</div>
					</div>
				</section> <!-- /image-icons --> 
				
				<section class="details">
					<h1><a href="#">Animals are sooo cool that we need to have a really long name</a></h1>
					
					<div class="give-btn">
						<div class="time-btn"><a href="#"></a></div>
						<div class="money-btn"><a href="#"></a></div>
					</div> 
				</section><!-- /details --> 
			</article> <!-- /teaser-featured-charity --> 
		</div>
		
		
		<div class="section">
			<header class="section-header-inset">
				<h2>Latest Video</h2>
				<a href="#" class="more-btn">more</a>
			</header>	
			<article class="teaser-featured teaser">
				<section class="image-icons">
					<div class="image">
						<a href="#"><img src="images/test_images/featured_charity.jpg" /></a>
					</div>
					<div class="icons">
						<div class="icon-type">
							<div class="icon video"><a href="#"></a></div>
						</div>
						<div class="icon-focus">
							<div class="icon animal"><a href="#"></a></div>
							<div class="icon enviro"><a href="#"></a></div>
							<div class="icon people"><a href="#"></a></div>
						</div>
					</div>
				</section> <!-- /image-icons --> 
				
				<section class="details">
					<h1><a href="#">Help bring water to little kids. They need it!</a></h1>
					<div class="stats">
						<span class="date">4/7/80</span>
						<span class="type"><a href="#">video</a></span>
						<span class="comments"><a href="#">comments 1</a></span>
					</div>
					<div class="charity">
						<a href="#">Animals are Cool</a>
					</div> 
				</section><!-- /details --> 
			</article> <!-- /teaser-featured --> 
		</div>
		
		
		
		
	</aside> <!-- /sidebar-second -->
	
	<footer>

	</footer>
</div> <!--! end of #container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>

<!-- scripts concatenated and minified via ant build script-->
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<!-- end scripts-->

</body>
</html>
