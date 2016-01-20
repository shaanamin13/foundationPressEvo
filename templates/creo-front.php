<?php
/*
Template Name: creo-front
*/
get_header(); ?>
<!-- Add jQuery library -->



<div id="front-hero-1" role="banner">
	<div class="logo">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/evocreo/title2.png"/>
	</div>
	<div class="marketing-logo">
		<div class ="row">
			<div class ="column-6 medium">
			</div>
			<div class ="column-6 medium">
			<div class="tagline">

				<div class="row">
					<a href="https://play.google.com/store/apps/details?id=ilmfinity.evocreo.main.android&hl=ens">	<img class="appStore"  src=<?php echo get_stylesheet_directory_uri(); ?>/assets/images/evocreo/android-app-on-google-play.jpg></a>
					<a href="https://itunes.apple.com/us/app/evocreo-a-monster-capture-rpg/id918997182?mt=8">	<img class="appStore" src=<?php echo get_stylesheet_directory_uri(); ?>/assets/images/evocreo/available-appstore-small.png></a>

				</div>
			</div>

		</div>

	</div>




</div>
</div>
<div id="front-hero-2" role="main">

<div class="row">
		<div class="medium-6 columns">

		</div>
		<div class="medium-6 columns">

			<h4 id="section-title"><b>SCREENSHOTS</b></h4>
			<div class="screenshot-bg">

					<ul class="small-block-grid-2 large-block-grid-2">

						<li><img class="th" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/evocreo/BANNER5_2.png" alt=""></li>
						<li><img class="th" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/evocreo/BANNER6_2.png" alt=""></li>
						<li><img class="th" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/evocreo/BANNER7_2.png" alt=""></li>
						<li><img class="th" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/evocreo/BANNER8_2.png" alt=""></li>

					</ul>

			</div>
		</div>
	</div>


</div>
<div id="front-hero-3" role="banner">
	<div class = "row">
	<?php $description_title = simple_fields_value("desc_title"); ?>
	<?php $description_content = simple_fields_value("desc_content"); ?>

		<div class="medium-8 columns">
			<h4 id="section-title"><b><?php echo $description_title; ?></b></h4>
			<div class = "about-game-bg-bg">
			<div class = "about-game-bg">
						<?php echo $description_content; ?>
			</div>
		</div>
		</div>
		<div class="medium-4 columns">

		</div>

	</div>

</div>

<div id="front-hero-4" role="banner">

	<div class="trailer-bg">
		<h4 id="section-title"><b>TRAILER</b></h4>
	<div class="row">

				<div class="medium-12 columns">
					<div class="flex-video widescreen">
						<iframe  width="300" height="400" src="https://www.youtube.com/embed/BASw7bLZURo?rel=0&enablejsapi=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>




			</div>
		</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script
