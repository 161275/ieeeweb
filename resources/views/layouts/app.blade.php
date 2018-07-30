<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>IEEE JUIT| Home</title>

	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Build-up Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!--//meta tags ends here-->

	<!--booststrap-->
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->

	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//stylesheets-->
	<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" /><!-- //pop-ups-->
    <link href="css/owl.carousel.css" rel="stylesheet"><!--clients-->
	<!--lightbox slider-->
    <link rel="stylesheet" href="css/lightbox.css">  
   <!-- lightbox slider-->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
</head>
<body>
@section('main')
       @show
@include('layouts.footer')
       	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<script src="js/bootstrap.js"></script>
	<!-- //js  working-->
			<!--  light box js -->
		<script src="js/lightbox-plus-jquery.min.js"> </script> 
		<!-- //light box js--> 
<script src="js/responsiveslides.min.js"></script>

  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
 $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 900,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
<!--// banner-->

	<!-- OnScroll-Number-Increase-JavaScript -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!--// OnScroll-Number-Increase-JavaScript -->
	
	<!--pop-up-box video-->
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
					});

					});
					</script>
<!-- //pop-up-box video -->
<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->

	<!-- testimonials required-js-files-->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				lazyLoad: true,
				autoPlay: true,
				navigation: true,
				navigationText: true,
				pagination: true,
			});
		});
	</script>
	<!--// testimonials required-js-files-->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};


			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->

</body>
</html>