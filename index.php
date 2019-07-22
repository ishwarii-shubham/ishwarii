<!DOCTYPE html>
<html>
	<?php include('assets/head.php'); ?>
	<body>
		<?php include('assets/header.php'); ?>
		<!--content-->
		<!-- End  bootstrap-touch-slider Slider -->
		<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
                <div class="item active">
                    <!-- Slide Background -->
                    <img src="images1/banner/slide1.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_left">
															<h1 data-animation="animated zoomInLeft">ISHWARII</h1>
															<p data-animation="animated fadeInRight">"Born where nature flourishes untouched and untainted."</p>
															<a href="aboutus.php" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">About Us</a>
															<a href="products.php" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">All Products</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="images1/banner/slide2.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated flipInX">ISHWARII</h1>
                        <p data-animation="animated lightSpeedIn">"Because everyone in the city has the right to eat pure food."</p>
                        <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">About Us</a>
                        <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">Sourcing</a>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="images1/banner/slide3.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">
											<h1 data-animation="animated zoomInRight">ISHWARII</h1>
											<p data-animation="animated fadeInLeft">"Because you cannot control the air you breath but can control the food you consume."</p>
											<a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">About Us</a>
											<a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">Sourcing</a>
                    </div>
                </div>
                <!-- End of Slide -->

								<!-- Fourth Slide -->
                <div class="item active">
                    <!-- Slide Background -->
                    <img src="images1/banner/slide1.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_center">
															<h1 data-animation="animated zoomInLeft">ISHWARII</h1>
															<p data-animation="animated fadeInRight">"Porthole to an unadulterated and pure world"</p>
															<a href="aboutus.php" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">About Us</a>
															<a href="products.php" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">All Products</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->


            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

		</div>
		<!-- End  bootstrap-touch-slider Slider -->


		<div class="container">
			<div class="cont">
				<div class="content">
					<div class="content-top-bottom">
						<!-- <h2 class="section-title">Our Story</h2> -->
						<div class="row">
							<div class="container" style="width:100%">
								<h2 class="section-title">Our Story</h2>
							</div>
						</div>
						<div>
							<div class="col-md-6 men">
								<img class="img-responsive" src='images1/our-story.jpg'>
							</div>
							<div class="col-md-6">
								<div class = 'our-story'>
									<p>Majestic mountains. Calming valleys. Gurgling water falls. Brilliant blue skies. If you are in the midst of all this, you are probably in the slice of paradise called Kinnaur.</p>
									<p>We call this place — where nature flourishes untouched and unadulterated — ISHWARII, meaning heavenly.</p>
									<p>Kinnaur is so much more than the tourist destination the world knows it as. In the lap of the mountains here flourish the healthiest and purest food packed with nutrition and high on health and medicinal benefits.</p>
									<p>This is where ISHWARII comes in. ISHWARII aims to bring directly to you in the city a slice of life in Kinnaur.</p>
									<p>ISHWARII believes everyone in the city has the right to pure food. We source preservative-free, locally-farmed food products directly from the natives of Kinnaur without involving any middlemen.</p>
									<p>ISHWARII knows you cannot control the air you breath. But you can choose the food you consume.</p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>

					<div class="content-top">
						<h1>PRODUCTS</h1>
						<div class="grid-in">

							<!-- Start of Product PHP-->
							<?php
								$stmt = $Product->landing_products();
								while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
									// echo('<h1>'); print_r($result); echo('</h1>');
									?>
									<div class="col-md-3 grid-top simpleCart_shelfItem">
										<a href="product_check.php?id=<?php echo $result['sub_id']; ?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo $result['image_url']; ?>"
											alt="">
											<div class="b-wrapper">
												<h3 class="b-animate b-from-left    b-delay03 ">
													<span><?php echo $result['product_name']; ?></span>
												</h3>
											</div>
										</a>
										<p><a href="product_check.php?id=1"><?php echo $result['product_name']; ?></a></p>
										<a href="#" class="item_add">
											<p class="number item_price"><i> </i>₹<?php echo $result['price']; ?>.00</p>
										</a>
									</div>
									<?php
								}
							?>

							<!-- End of Product-->
							<div class="clearfix"> </div>
						</div>
					</div>

					<!-- Feedback -->
					<div class="content-top-bottom" style = "margin-top: 2%; margin-bottom: 2%; margin-right: -5%; margin-left: -5%;">
						<section>
							<div class="customer-feedback">
								<div class="container text-center">
									<div class="row">
										<div class="col-sm-offset-2 col-sm-8">
											<div class="container" style="width:100%">
												<h2 class="section-title">What Customer Speaks</h2>
											</div>
										</div><!-- /End col -->
									</div><!-- /End row -->

									<div class="row">
										<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
											<div class="owl-carousel feedback-slider">

												<!-- slider item -->
												<div class="feedback-slider-item">
													<img src="images1/feedback1.jpg" style = "width:auto;" class="center-block img-circle" alt="Customer Feedback">
													<h3 class="customer-name">Prerna Grover</h3>
													<p>ISHWARII products are simply amazing. I tried a lot of products including rajma, red rice, ghee, gurchini, khumani- and what I experienced is purity is all we need in today’s time. Thanks for adding natural breeze to our life by introducing such amazing products.</p>
													<span class="light-bg customer-rating" data-rating="5">
														5
														<i class="fa fa-star"></i>
													</span>
												</div>
												<!-- /slider item -->

												<!-- slider item -->
												<div class="feedback-slider-item">
													<img src="https://res.cloudinary.com/hnmqik4yn/image/upload/c_fill,fl_force_strip,h_128,q_100,w_128/v1493982718/ah57hnfnwxkmsciwivve.jpg" style = "width:auto;" class="center-block img-circle" alt="Customer Feedback">
													<h3 class="customer-name">Parul Singh</h3>
													<p>The purity of the product is reflected in its name itself. After my delivery, the major concern of my life was what my son eats when he started weaning. I wanted pure things for my son to eat. I have been using so many products of ISHWARII including honey, rice, ghee and dry fruits. The purity of the product is unmatched. I recommend ISHWARII products in this adulterated world for the wellness of our family, especially the little ones.</p>
													<span class="light-bg customer-rating" data-rating="4">
														4
														<i class="fa fa-star"></i>
													</span>
												</div>
												<!-- /slider item -->

												<!-- slider item -->
												<div class="feedback-slider-item">
													<img src="images1/feedback2.jpg" style = "width:auto;" class="center-block img-circle" alt="Customer Feedback">
													<h3 class="customer-name">Chef Bakshish Dean</h3>
													<p>I have used almost all products that are being offered by ISHWARII. As a chef, I have sampled and worked with a variety of products, the taste and quality of ISHWARII products is definitely very superior.
													<br>The quality of rajma is such that it does not require overnight soaking, taste is excellent and the final colour and texture is perfect. Rice offered is local Himalayan heirloom varieties which are hand threshed hence the aroma, taste and texture is diffrent. The star product is white honey, I have never seen it anywhere and nor  have I tasted a superior product like this in the Indian market. It is indeed a perfect 5- star quality product.</p>
													<span class="light-bg customer-rating" data-rating="5">
														5
														<i class="fa fa-star"></i>
													</span>
												</div>
												<!-- /slider item -->

											</div><!-- /End feedback-slider -->

											<!-- side thumbnail -->
											<div class="feedback-slider-thumb hidden-xs">
												<div class="thumb-prev">
													<span>
														<img src="images1/feedback2.jpg" alt="Customer Feedback">
													</span>
													<span class="light-bg customer-rating">
														5
														<i class="fa fa-star"></i>
													</span>
												</div>

												<div class="thumb-next">
													<span>
														<img src="images1/feedback1.jpg" alt="Customer Feedback">
													</span>
													<span class="light-bg customer-rating">
														4
														<i class="fa fa-star"></i>
													</span>
												</div>
											</div>
											<!-- /side thumbnail -->

										</div><!-- /End col -->
									</div><!-- /End row -->

									<div class="row">
										<div class="col-sm-offset-2 col-sm-8">
											<div style="margin-top:10px">
												<a href="#0" class="cd-see-all">See All</a>
											</div>
										</div><!-- /End col -->
									</div><!-- /End row -->

								</div><!-- /End container -->
							</div><!-- /End customer-feedback -->
						</section>
					</div>
				</div>
				<!----->
			</div>
			<!---->
		</div>

		<div class="cd-testimonials-all">
			<div class="cd-testimonials-all-wrapper">
				<ul>
					<li class="cd-testimonials-item">
						<p>ISHWARII products are simply amazing. I tried a lot of products including rajma, red rice, ghee, gurchini, khumani- and what I experienced is purity is all we need in today’s time. Thanks for adding natural breeze to our life by introducing such amazing products.</p>

						<div class="cd-author">
							<img src="images1/feedback1.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>Prerna Grover</li>
								<li>Public Relations Professional</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>The purity of the product is reflected in its name itself. After my delivery, the major concern of my life was what my son eats when he started weaning. I wanted pure things for my son to eat. I have been using so many products of ISHWARII including honey, rice, ghee and dry fruits. The purity of the product is unmatched. I recommend ISHWARII products in this adulterated world for the wellness of our family, especially the little ones. </p>

						<div class="cd-author">
							<img src="img/avatar-2.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>Parul Singh</li>
								<li>Manager, State Bank of India</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>
							I have used almost all products that are being offered by ISHWARII. As a chef, I have sampled and worked with a variety of products, the taste and quality of ISHWARII products is definitely very superior.
							<br>The quality of rajma is such that it does not require overnight soaking, taste is excellent and the final colour and texture is perfect. Rice offered is local Himalayan heirloom varieties which are hand threshed hence the aroma, taste and texture is diffrent. The star product is white honey, I have never seen it anywhere and nor  have I tasted a superior product like this in the Indian market. It is indeed a perfect 5- star quality product.
						</p>

						<div class="cd-author">
							<img src="images1/feedback2.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>Chef Bakshish Dean</li>
								<li>Celebrity Chef, Ex-Taj</li>
							</ul>
						</div> <!-- cd-author -->
					</li>
				</ul>
			</div>	<!-- cd-testimonials-all-wrapper -->

			<a href="#0" class="close-btn">Close</a>
		</div> <!-- cd-testimonials-all -->
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
