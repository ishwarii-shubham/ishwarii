<!DOCTYPE html>
<html>
	<?php include('assets/head.php'); ?>
	<body>
		<?php include('assets/header.php'); ?>
		<!--content-->
    <div class="grow">
  		<div class="container">
  			<h2>Order Placed Successfully</h2>
  		</div>
  	</div>
  	<!-- grow -->
  	<!--content-->

  	<div class="contact">

  		<div class="container" style="background-color:white; border-radius:10px 10px; position: relative;">
  			<div class="contact-form" style="margin:5%; background-color: black;">
          <h1 style="color:white;">Order Details</h1>
  			</div>
  		</div>

  	</div>
		<!--//content-->
		<!-- Add this before end body tag -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
		<script src="js/slider/bootstrap-touch-slider.js"></script>

		<script type="text/javascript">
			$('#bootstrap-touch-slider').bsTouchSlider();
			$('#story-slider').carousel({
				interval: 1000,
				cycle: true
				});
		</script>
		<!--Feedback Js  -->
		<script src="js/feedback.js"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/testimonialfull.js"></script>

		<?php include('assets/footer.php'); ?>

	</body>
</html>
