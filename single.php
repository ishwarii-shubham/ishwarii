<?php require_once('assets/product_class.php');  ?>
<?php
	if($_REQUEST['id']){
		$id = $_REQUEST['id'];
	}
	else{
		$id = 4;
	}
	// CHECKING IF PRODUCT EXISTS
	$pr = get_product_details($id);
	if(empty($pr['price_list'])){
		header('location: http://localhost:3333/is/ishwarii/products.php');
	}else{
		$product = get_product_details($id);
	}

?>
<!DOCTYPE html>
<html>
	<?php include('assets/head.php'); ?>
	<!-- <meta http-equiv="refresh" content="1 products.php"> -->
	<script src="js/imagezoom.js"></script>
	<body>
		<?php include('assets/header.php'); ?>
		<!-- grow -->
		<div class="grow">
			<div class="container">
				<h2><?php echo($product['product_name']); ?></h2>
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
											<?php
												foreach($product['banner'] as $image_url){
													?>
														<li data-thumb="<?php echo $image_url ?>">
															<div class="thumb-image"> <img src="<?php echo $image_url ?>" data-imagezoom="true" class="img-responsive"> </div>
														</li>
													<?php
												}
											?>
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
										<h4>
											<?php
												$sub_type = $product['sub_type'][0]['sub_type'];
												if($sub_type != '' and $sub_type != null){
													$sub_type = '-('.$sub_type.')';
												}
												echo $product['product_name'].$sub_type;
											?>
										</h4>
										<div class="star-on">

											<div class="review">
												<a href="#"> 1 customer review </a>

											</div>
											<div class="clearfix"> </div>
										</div>

										<h4 class="item_price" style="display: inline; float: left;">₹ </h4></h5><h5 style="display: inline;" class="item_price" id = 'item_price_value'>500<?php ?></h5>

										 <div role="tabpanel">
												 <!-- Nav tabs -->
												 <ul id="tabOne" class="nav nav-tabs nav-justified">
														 <li class="active"><a href="#contentOne-1" data-toggle="tab" aria-expanded="true">Description</a></li>
														 <li class=""><a href="#contentOne-2" data-toggle="tab" aria-expanded="false">Benifits</a></li>
												 </ul>

												 <!-- Tab panes -->
												 <div class="tab-content">
														 <div class="tab-pane fade active in" id="contentOne-1">
																 <p><?php echo $product['product_description']; ?></p>
														 </div>
														 <div class="tab-pane fade" id="contentOne-2">
																 <?php echo $product['product_properties']; ?>
														 </div>
												 </div>
										 </div> <!--.tabpanel-->
										<div class="available">
											<ul>
												<li>Weight
													<!-- <select>
														<option>1 KG</option>
														<option>5 KG</option>
														<option>10 KG</option>
														<option>25 KG</option>
													</select></li> -->
													<select id="source" name="source">
														<?php
															$quan = array();
															foreach ($product['price_list'] as $value) {
																if(!in_array($value['price_id'],$quan)){
																	echo '<option value = \''.$value['price'].'\'>'.$value['quantity'];
																	if($value['weight'] == 0){
																		echo ' Gm';
																	}
																	else {
																		echo ' Kg';
																	}
																	echo '</option>';
																	$quan[] = $value['price_id'];
																}
															}
														?>
													</select>
												</li>
												<li>Quantity
													<input style="width: 64%; margin-left: 7%;"type="number" value="1" min="1" max="100">
												</li>
													<!-- <select>
														<option>Dry</option>
														<option>Normal</option>
													</select></li> -->
												<!-- <div class="clearfix"> </div> -->
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
		<script type="text/javascript">
			$(document).ready(function() {
				$("#item_price_value").html($("#source").val());
			  $("#source").change(function() {
			   var el = $(this).val();
				 $("#item_price_value").html(el);
			  });
			});
		</script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
		<script src="js/scripts.js"></script>

		<?php include('assets/footer.php'); ?>
	</body>
</html>
