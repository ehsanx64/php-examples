
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>php-test</title>
	<link rel="icon" href="/Knight/favicon.png" type="image/png">
	<link rel="shortcut icon" href="/Knight/favicon.png" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="/Knight/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="/Knight/css/style.css" rel="stylesheet" type="text/css">
	<link href="/Knight/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="/Knight/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="/Knight/css/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="/Knight/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/prismjs/prism.css" rel="stylesheet" type="text/css">
    <link href="/prismjs/prism-ghcolors.css" rel="stylesheet" type="text/css">

    <!-- Custom Styles -->
    <link href="/Knight/css/custom.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="/Knight/js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="/Knight/js/bootstrap.js"></script>
	<script type="text/javascript" src="/Knight/js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="/Knight/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/Knight/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="/prismjs/clipboard.min.js"></script>
    <script type="text/javascript" src="/prismjs/prism.js"></script>
	<script type="text/javascript" src="/Knight/js/wow.js"></script>
	<script type="text/javascript" src="/Knight/js/classie.js"></script>
	<script type="text/javascript" src="/Knight/js/magnific-popup.js"></script>
	<script src="/Knight/contactform/contactform.js"></script>

	<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>
	<header class="header" id="header">
		<!--header-start-->
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="/Knight/img/logo.png" alt=""></a>
			</figure>
            <h1 class="animated fadeInDown delay-07s">Welcome To <b>PHP Tests</b></h1>
			<ul class="we-create animated fadeInUp delay-1s">
				<li>Sample sources, tools, test of tools and more ...</li>
			</ul>
			<a class="link animated fadeInUp delay-1s servicelink" href="#php">Explore</a>
		</div>
	</header>
	<!--header-end-->

	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="#header">Home</a></li>
                <li><a href="#php">PHP</a></li>
                <?php /* --dis--
                <li><a href="#overview">Overview</a></li>
    --/dis */ ?>
				<li class="small-logo"><a href="#header"><img src="/Knight/img/php-logo.png" alt=""></a></li>
                <li><a href="#phplib">phplib</a></li>
                <li><a href="#tools">Tools</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
		</div>
	</nav>

    <?= $content; ?>

	<footer class="footer">
		<div class="container">
			<div class="footer-logo"><a href="#"><img src="/Knight/img/logo.png" alt=""></a></div>
			<span class="copyright">&copy; Knight Theme. All Rights Reserved</span>
			<div class="credits">
				<!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
        -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(e) {

			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>

</body>

</html>
