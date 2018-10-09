<!DOCTYPE HTML>
<html>
<?php require_once("includes/header.php"); ?>
<body>
	<!-- page header -->
	<?php require_once("includes/megamenu.php"); ?>
	<!-- / page header -->
	<!-- revolution slider -->
	<?php require_once("includes/slider.php"); ?>
	<!-- / revolution slider -->
	<hr class="divider-color">
	<!-- content -->
	<div id="home" class="page-content padding-none">
		<!-- section -->
		<?php require_once("includes/content.php"); ?>
		<!-- / section -->
		<hr class="divider-color" />
		<!-- section -->
		<?php require_once("includes/homeservices.php"); ?>
		<!-- / section -->
		<!-- paralax section -->
		<div class="parallaxed">
			<div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
				<img src="img/parallax.png" alt="">

			</div>
			<div class="them-mask bg-color-1"></div>
			<?php require_once("includes/counter.php"); ?>
		</div>
		<!-- / paralax section -->
		<!-- section -->
		 <?php //require_once("includes/wework.php"); ?>
		<!-- / paralax section -->
		<?php // require_once("includes/removed1.php"); ?>
		<!-- / paralax section -->
		<!-- paralax section -->
		<?php require_once("includes/aboutus.php"); ?>		
		<!-- paralax section -->
		<!-- parallax section -->
		<?php require_once("includes/getintouch.php"); ?>
		<!-- parallax section -->
		<!-- section -->
		<?php require_once("includes/ourpartners.php"); ?>
		<!-- / section -->
		<?php require_once("includes/mainvideo.php"); ?>

		<?php require_once("includes/community.php"); ?>		
		<!-- / section -->
		<?php require_once("includes/testimonials.php"); ?>
		<!-- / section -->
		<!-- google map -->
		<!-- <div class="wow fadeInUp">
			<div id="map" class="google-map"></div>
		</div> -->
		<!-- / google map -->
		<?php require_once("includes/divisionstabs.php"); ?>
	</div>
	<!-- / content -->
	<!-- footer -->
	<?php require_once("includes/footer.php"); ?>
	<!-- / footer -->
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox_packed.js"></script>
	<script type='text/javascript' src='js/jquery.validate.min.js'></script>
	<script src="js/jquery.form.min.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<!-- jQuery REVOLUTION Slider  -->
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>		
	<script src="js/jquery.isotope.min.js"></script>
	
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jflickrfeed.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/retina.min.js"></script>
	<script src="js/jquery.tweet.js"></script>
</body>
</html>