<!DOCTYPE html>
<html>
	<?php include('assets/head.php'); ?>
	<script src="js/imagezoom.js"></script>
	<body>
		<?php include('assets/header.php'); ?>
		<!-- grow -->
		<div class="grow">
			<div class="container">
				<h2>Dried Apricots</h2>
			</div>
		</div>
		<!-- grow -->
		<div class="contact">
			<div class="container" style="background-color:white; border-radius:10px 10px; position: relative;">
				<div class="product">
					<div class="container" style="width: 100%;">

						<div class="product-price1">
							<div class="top-sing">
								<div class="col-md-7 single-top">
									<div class="flexslider">
										<ul class="slides">
											<li data-thumb="images1/dried-apricots1.jpg">
												<div class="thumb-image"> <img src="images1/dried-apricots1.jpg" data-imagezoom="true" class="img-responsive"> </div>
											</li>
											<li data-thumb="images1/dried-apricots2.jpg">
												<div class="thumb-image"> <img src="images1/dried-apricots2.jpg" data-imagezoom="true" class="img-responsive"> </div>
											</li>
											<li data-thumb="images1/dried-apricots3.jpg">
												<div class="thumb-image"> <img src="images1/dried-apricots3.jpg" data-imagezoom="true" class="img-responsive"> </div>
											</li>
											<li data-thumb="images1/dried-apricots4.jpg">
												<div class="thumb-image"> <img src="images1/dried-apricots4.jpg" data-imagezoom="true" class="img-responsive"> </div>
											</li>
										</ul>
									</div>

									<div class="clearfix"> </div>
									<!-- slide -->


									<!-- FlexSlider -->
									<script defer src="js/jquery.flexslider.js"></script>
									<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

									<script>
										// Can also be used with $(document).ready()
										$(window).load(function () {
											$('.flexslider').flexslider({
												animation: "slide",
												controlNav: "thumbnails"
											});
										});
									</script>







								</div>
								<div class="col-md-5 single-top-in simpleCart_shelfItem">
									<div class="single-para ">
										<h4>Dried Apricots</h4>
										<div class="star-on">

											<div class="review">
												<a href="#"> 1 customer review </a>

											</div>
											<div class="clearfix"> </div>
										</div>

										<h5 class="item_price">₹ 500.00</h5>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
											diam nonummy nibh euismod tincidunt ut laoreet dolore
											magna aliquam erat </p>
										<div class="available">
											<ul>
												<li>Quantity
													<select>
														<option>1 KG</option>
														<option>5 KG</option>
														<option>10 KG</option>
														<option>25 KG</option>
													</select></li>
												<li class="size-in">Type<select>
														<option>Dry</option>
														<option>Normal</option>
													</select></li>
												<div class="clearfix"> </div>
											</ul>
										</div>

										<a href="#" class="add-cart item_add">ADD TO CART</a>

									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<!---->
							<div class="bottom-prod" style="background-color: black; padding:2%;">
								<h1>Related Products</h1>
								<div class=" bottom-product" style="margin:5%">
									<div class="col-md-4 bottom-cd simpleCart_shelfItem">
										<div class="product-at ">
											<a href="#"><img class="img-responsive" src="images1/rajma.jpg" alt="">
												<div class="pro-grid">
													<span class="buy-in">Buy Now</span>
												</div>
											</a>
										</div>
										<p class="tun"><span>Lorem ipsum establish</span><br>Rajma</p>
										<div class="ca-rt">
											<a href="#" class="item_add">
												<p class="number item_price"><i> </i>₹500.00</p>
											</a>
										</div>
									</div>
									<div class="col-md-4 bottom-cd simpleCart_shelfItem">
										<div class="product-at ">
											<a href="#"><img class="img-responsive" src="images1/rice.jpg" alt="">
												<div class="pro-grid">
													<span class="buy-in">Buy Now</span>
												</div>
											</a>
										</div>
										<p class="tun"><span>Lorem ipsum establish</span><br>Basmati Rice</p>
										<div class="ca-rt">
											<a href="#" class="item_add">
												<p class="number item_price"><i> </i>₹500.00</p>
											</a>
										</div>
									</div>
									<div class="col-md-4 bottom-cd simpleCart_shelfItem">
										<div class="product-at ">
											<a href="#"><img class="img-responsive" src="images1/KallaZeera.jpg" alt="">
												<div class="pro-grid">
													<span class="buy-in">Buy Now</span>
												</div>
											</a>
										</div>
										<p class="tun"><span>Lorem ipsum establish</span><br>Kalla Zeera</p>
										<div class="ca-rt">
											<a href="#" class="item_add">
												<p class="number item_price"><i> </i>₹500.00</p>
											</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>

						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<!--//content-->
		<?php include('assets/footer.php'); ?>
	</body>
</html>