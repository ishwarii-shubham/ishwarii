<?php
	require_once "userSession.php";
	require_once "product_class.php";
	$Product = new Product();
?>
<!--header-->
<div class="header" style="background-color: #22211f;">
	<div class="header-top">
		<div class="container">
			<div class="social">
				<ul>
					<li><a href="#"><i class="facebok"> </i></a></li>
					<li><a href="#"><i class="twiter"> </i></a></li>
					<li><a href="#"><i class="inst"> </i></a></li>
					<li><a href="#"><i class="goog"> </i></a></li>
					<div class="clearfix"></div>
				</ul>
			</div>
			<div class="header-left">

				<div class="search-box">
					<div id="sb-search" class="sb-search">
						<form action="#" method="post">
							<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
						</form>
					</div>
				</div>

				<!-- search-scripts -->
				<script src="js/classie.js"></script>
				<script src="js/uisearch.js"></script>
				<script>
					new UISearch(document.getElementById('sb-search'));
				</script>
				<!-- //search-scripts -->

				<div class="ca-r">
					<div class="cart box_1">
						<a href="checkout.php">
							<h3>
								<div class="total">
									<span class="simpleCart_total"></span> </div>
								<img src="images/cart.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<div class="container" style="background-color: white; border-radius: 5px; margin-bottom: -8px;">
		<div class="head-top">
			<div class="logo">
				<h1>
					<a href="index.html">
						<img src = "images1/logo_header.jpg" alt="">
					</a>
				</h1>
			</div>
			<div class=" h_menu4">
				<ul class="memenu skyblue">
					<li><a class="color8" href="index.php">Home</a></li>
					<li><a class="color1" href="products.php">Products</a>
						<div class="mepanel">
							<div class="row">
								<!-- Product Listing -->
								<?php
									$stmt = $Product->all_products();
									$products = get_all_products($stmt, ['product_id', 'product_name']);
									if (sizeof($products)){
										foreach ($products as $key => $val) {
											if(!($key % 6)){
												if($key == 0){
													// Product List Start
													echo ('<div class="col1"><div class="h_nav"><ul>');
													echo('<li><a href="product_check.php?id='.$val['product_id'].'">'.$val['product_name'].'</a></li>');
												}else{
													if(sizeof($products)-1 == $key){
														// Product List End
														echo('<li><a href="product_check.php?id='.$val['product_id'].'">'.$val['product_name'].'</a></li>');
														echo('</ul></div></div>');
													}else{
														echo('</ul></div></div><div class="col1"><div class="h_nav"><ul>');
														echo('<li><a href="product_check.php?id='.$val['product_id'].'">'.$val['product_name'].'</a></li>');
													}
												}
											}else{
												if(sizeof($products)-1 == $key){
													// Product List End
													echo('<li><a href="product_check.php?id='.$val['product_id'].'">'.$val['product_name'].'</a></li>');
													echo('</ul></div></div>');
												}else{
													// Product Add to Div
													echo('<li><a href="product_check.php?id='.$val['product_id'].'">'.$val['product_name'].'</a></li>');
												}
											}
										}
									}else{
								    ?>
								    <div class="col1">
								      <div class="h_nav">
								        <ul>
								          <li><a href="#">Add Products</a></li>
								        </ul>
								      </div>
								    </div>
								    <?php
								  }
								?>
							</div>
						</div>
					</li>
					<li><a class="color2" href="#">Sourcing</a></li>
					<li><a class="color2" href="#">Feedback</a></li>
					<li><a class="color2" href="aboutus.php">About Us</a></li>
					<li><a class="color6" href="contact.php">Contact Us</a></li>
					<?php
						if(!$_SESSION) {
							echo '<li><a class="color6" href="login.php">Log In</a></li>';
						}else {
							echo '<li>
											<a class="color6" href="">'.$_SESSION['name'].'</a>
											<div class="mepanel" style="top: 47px; right: -15px; width:20%; left: unset;">
												<div class="row">
													<div class="col1" style="width:100%">
														<div class="h_nav">
															<ul>
																<li><a class="color6" href="?id=-1">Log Out</a></li>
																<li><a class="color6" href="#">Your Orders</a></li>
																<li><a class="color6" href="#">Addresses</a></li>
																<li><a class="color6" href="checkout.php">Cart</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>';
						}
					?>
					<!-- <li><a class="color6" href="#">Log In</a></li> -->
				</ul>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
</div>
