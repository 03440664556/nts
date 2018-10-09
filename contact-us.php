<!DOCTYPE HTML>
<html>
<head>
	<title>National Testing Service</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<!-- style -->
	<link rel="shortcut icon" href="img/favicon.png">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="fi/flaticon.css">
	<link rel="stylesheet" href="css/main.css">
	
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" type="text/css" href="custom_modal/modal.css">
	<!--styles -->
	
</head>
<body class="contact-page">

<?php require_once("custom_modal/modals.php"); ?>

	<!-- page header -->
	
    <?php require_once("includes/megamenu.php"); ?>
    <div class="page-title">
            <div class="grid-row">
                <h1>Contact Us</h1>
                <!-- <nav class="bread-crumb">
                    <a href="index.html">Home</a>
                    <i class="fa fa-long-arrow-right"></i>
                    <a href="content-elements.html">Features</a>
                    <i class="fa fa-long-arrow-right"></i>
                    <a href="">Pages</a>
                    <i class="fa fa-long-arrow-right"></i>
                    <a href="">Services</a>
                </nav> -->
            </div>
        </div>
	<!-- / page header -->
	<!-- page content -->
	<div style="text-align: center; padding-top: 10px"><H1>Our Offices</H1></div>
	<div class="page-content woocommerce" style="padding-top: 10px;">
		<!-- map -->
		<!-- <div class="container clear-fix">
			<div class="map wow fadeInUp">
				<div id="map" class="google-map"></div>
			</div>
		</div> -->
		

<?php require_once("includes/contactMapsModal.php"); ?>



		<!-- / map -->
		<!-- contact form section -->
		<div class="grid-row clear-fix">
			<div class="grid-col-row">
				<div class="grid-col grid-col-8">
					<section>
						<h2>Contact us</h2>
						<div class="widget-contact-form">
							<!-- contact-form -->
							<div class="info-boxes error-message alert-boxes error-alert" id="feedback-form-errors">
								<strong>Attention!</strong>
								<div class="message"></div>
							</div>
							<div class="email_server_responce"></div>
							<form action="php/contacts-process.php" method="post" class="contact-form alt clear-fix">
								<input type="text" name="name" value="" size="40" placeholder="Your Name" aria-invalid="false" aria-required="true">
								<input type="text" name="email" value="" size="40" placeholder="Your Email" aria-required="true">
								<input type="text" name="subject" value="" size="40" placeholder="Subject" aria-invalid="false" aria-required="true">
								<textarea name="message"  cols="40" rows="3" placeholder="Your Message" aria-invalid="false" aria-required="true"></textarea>
								<input type="submit" value="Send" class="cws-button border-radius alt">
							</form>
							<!--/contact-form -->
						</div>
					</section>
				</div>
				<div class="grid-col grid-col-4 widget-address">
					<section>
						<h2>NTS Call Center</h2>
						<address>
							<p>It is for your information that NTS Call Center is now globally activated. You can contact at the number given below for all your queries and concerns. This number is operational. You can now contact us through this number and all other numbers for info/query are inactivated with immediate effect all over the Pakistan.</p>
							<p><strong class="fs-18">Timings:</strong><br/>Timings: 08:30 AM to 04:30 PM (Monday to Friday) <br/>
Lunch & Prayer Break: 01:00 PM to 02:00 PM</p>
							<p><strong class="fs-18">Phone number:</strong><br/>
								<a href="tel:+92-51-844-444-1">+92-51-844-444-1</a><br/>
								<a href="fax:+92-51-844-490-0">+92-51-844-490-0</a>
							</p>
							<p><strong class="fs-18">E-mail:</strong><br/>
								<a href="mailto:query@nts.org.pk">query@nts.org.pk</a><br/>
							</p>
						</address>
					</section>
				</div>
			</div>
		</div>
		<!-- / contact form section -->
	</div>
	<!-- / page content -->
	<!-- footer -->
	<footer>
        <div class="grid-row">
            <div class="grid-col-row clear-fix">
                <section class="grid-col grid-col-4 footer-about">
                    <h2 class="corner-radius">About Us</h2>
                    <div>
                        <h3>CEO's Message</h3>
                        <p>I would also like to express my gratitude to the sincerity and dedication of all the employees who, through their unflinching faith and successive efforts, are contributing their share to the national cause. Being embodied NTS spirit, I find them proceeding for further accomplishments through their valuable contributions in the future.</p>
                    </div>
                    <address>
                        <p></p>
                        <a href="tel:+92-51-844-444-1" class="phone-number">+92-51-844-444-1</a>
                        <br />
                        <a href="mailto:query@nts.org.pk" class="email">query@nts.org.pk</a>
                        <br />
                        <a href="index.html" class="site">www.nts.org.pk</a>
                        <br />
                        <a href="www.sample.com" class="address">Plot # 96, Street # 4, H-8/1, Islamabad.</a>
                    </address>
                    <div class="footer-social">
                        <a href="" class="fa fa-twitter"></a>
                        <a href="" class="fa fa-skype"></a>
                        <a href="" class="fa fa-google-plus"></a>
                        <a href="" class="fa fa-rss"></a>
                        <a href="" class="fa fa-youtube"></a>
                    </div>
                </section>
                <section class="grid-col grid-col-4 footer-latest">
                    <h2 class="corner-radius">Latest News</h2>
                    <article>
                        <img src="img/CEO_img_small.png" data-at2x="img/CEO_img_small.png" alt>
                        <h3>CEO NTS Dr. Sherzada Khan Interview in Daily Parliament Times</h3>
                        <div class="course-date">
                            <div>10<sup>00</sup></div>
                            <div>21.08.17</div>
                        </div>
                        <p>NTS is a credible institution of international repute and is comitted to serving the people and Pakistan: CEO NTS</p>
                    </article>
                    <article>
                        <img src="img/CEO_img_small.png" data-at2x="img/CEO_img_small.png" alt>
                        <h3>CEO NTS Dr. Sherzada Khan Interview on Royal News, Badalta Pakistan</h3>
                        <div class="course-date">
                            <div>10<sup>00</sup></div>
                            <div>23.01.17</div>
                        </div>
                        <p>CEO NTS Dr. Sherzada Khan Interview on Royal News, Badalta Pakistan Dated 23-01-2017 with Naveed satti</p>
                    </article>
                </section>
                <section class="grid-col grid-col-4 footer-contact-form">
                    <h2 class="corner-radius">send us a message</h2>
                    <div class="email_server_responce"></div>
                    <form action="php/contacts-process.php" class="contact-form" method="post" novalidate="novalidate">
                        <p><span class="your-name"><input type="text" name="name" value="" size="40" placeholder="Name" aria-invalid="false" required></span>
                        </p>
                        <p><span class="your-email"><input type="text" name="phone" value="" size="40" placeholder="Phone" aria-invalid="false" required></span> </p>
                        <p><span class="your-message"><textarea name="message" placeholder="Comments" cols="40" rows="5" aria-invalid="false" required></textarea></span> </p>
                        <button type="submit" class="cws-button bt-color-3 border-radius alt icon-right">Submit <i class="fa fa-angle-right"></i></button>
                    </form>
                </section>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="grid-row clear-fix">
                <div class="copyright">Senho IT Solutions<span></span> 2017 . All Rights Reserved</div>
                <nav class="footer-nav">
                    <ul class="clear-fix">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="courses-grid.html">Courses</a>
                        </li>
                        <li>
                            <a href="content-elements.html">Plans</a>
                        </li>
                        <li>
                            <a href="blog-default.html">News</a>
                        </li>
                        <li>
                            <a href="page-about-us.html">Pages</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="contact-us.html">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
	<!-- / footer -->
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox_packed.js"></script>
	<script type='text/javascript' src='js/jquery.validate.min.js'></script>
	<script src="js/jquery.form.min.js"></script>
	<script type='text/javascript' src='js/jquery.validate.min.js'></script>
	<script src="js/jquery.form.min.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jflickrfeed.min.js"></script>
	<script src="js/jquery.tweet.js"></script>
	
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/retina.min.js"></script>

	<!-- Modal JS Libraries -->
	<script type="text/javascript" src="custom_modal/IslHoverMapModal.js"></script>
	<script type="text/javascript" src="custom_modal/LhrHoverMapModal.js"></script>
	<script type="text/javascript" src="custom_modal/KhiHoverMapModal.js"></script>
	<script type="text/javascript" src="custom_modal/PshHoverMapModal.js"></script>
	<script type="text/javascript" src="custom_modal/QtaHoverMapModal.js"></script>

	<script type="text/javascript" src="custom_modal/IslHeadingMapModal.js"></script>
	<script type="text/javascript" src="custom_modal/LhrHeadingMapModal.js"></script>
	<script type="text/javascript" src="custom_modal/KhiHeadingMapModal.js"></script>
	<script type="text/javascript" src="custom_modal/PshHeadingMapModal.js"></script>
	<script type="text/javascript" src="custom_modal/QtaHeadingMapModal.js"></script>
	<!-- / Modal JS Libraries -->

	</script>
	
</body>
</html>