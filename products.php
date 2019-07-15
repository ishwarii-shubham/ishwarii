<?php require_once('assets/product_class.php');  ?>
<?php

	$Product = new Product();
	$stmt = $Product->all_products();
	$categories = get_all_products($stmt, ['category_id', 'category_name']);
?>
<!DOCTYPE html>
<html>
	<?php include('assets/head.php'); ?>
	<!-- Product CSS -->
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style-product.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<body>
		<?php include('assets/header.php'); ?>
	<!-- products -->
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Products</h2>
		</div>
	</div>
	<!-- grow -->
	<div class="contact">
		<div class="container" style="background-color:white; border-radius:10px 10px; position: relative;">
			<div class="pro-du">
				<div class="container" style="width:100%">
					<main class="cd-main-content">
						<div class="cd-tab-filter-wrapper">
							<div class="cd-tab-filter">
								<ul class="cd-filters">
									<li class="placeholder">
										<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
									</li>
									<li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
									<li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Best Seller</a></li>
									<li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">New</a></li>
								</ul> <!-- cd-filters -->
							</div> <!-- cd-tab-filter -->
						</div> <!-- cd-tab-filter-wrapper -->

						<section class="cd-gallery">
							<ul>
								<?php
									$stmt = $Product->all_products();
									while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
										// print_r($result);
										?>
										<li class="mix color-1 check<?php echo $result['category_id'];?> radio2 option3">
											<div class="product-at ">
												<a href="product_check.php?id=<?php echo $result['sub_id']; ?>"><img class="img-responsive" src="<?php echo $result['image_url']; ?>" alt="">
													<div class="pro-grid">
														<span class="buy-in">Buy Now</span>
													</div>
												</a>
											</div>
											<p class="tun"><span><b><?php echo $result['product_name']; ?></b></span></p>
											<div class="ca-rt">
												<a href="#" class="item_add">
													<p class="number item_price"><i> </i>₹<?php echo $result['price']; ?>.00</p>
												</a>
											</div>
										</li>
									 <?php
								 }
								?>
							</ul>
							<div class="cd-fail-message">No results found</div>
						</section> <!-- cd-gallery -->

						<div class="cd-filter" id = "cd-filter" style="display:none; background-color:black;">
							<form>
								<div class="cd-filter-block">
									<h4>Search</h4>

									<div class="cd-filter-content">
										<input type="search" placeholder="Try ghee...">
									</div> <!-- cd-filter-content -->
								</div> <!-- cd-filter-block -->

								<div class="cd-filter-block">
									<h4>Categories</h4>

									<ul class="cd-filter-content cd-filters list">
										<?php foreach ($categories as $val) {
											# code...
											?>
											<li>
												<input class="filter" data-filter=".check<?php echo $val['category_id']; ?>" type="checkbox" id="checkbox<?php echo $val['category_id']; ?>">
												<label class="checkbox-label" for="checkbox<?php echo $val['category_id']; ?>"><?php echo $val['category_name']; ?></label>
											</li>
											<?php
										}?>
									</ul> <!-- cd-filter-content -->
								</div> <!-- cd-filter-block -->

								<div class="cd-filter-block">
									<h4>Quantity</h4>

									<div class="cd-filter-content" style="color:black;">
										<div class="cd-select cd-filters">
											<select class="filter" name="selectThis" id="selectThis">
												<option value="">Quantity</option>
												<option value=".option1">10 KG</option>
												<option value=".option2">25 KG</option>
												<option value=".option3">50 KG</option>
												<option value=".option4">100 KG</option>
											</select>
										</div> <!-- cd-select -->
									</div> <!-- cd-filter-content -->
								</div> <!-- cd-filter-block -->

								<div class="cd-filter-block">
									<h4>Radio buttons</h4>

									<ul class="cd-filter-content cd-filters list">
										<li>
											<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
											<label class="radio-label" for="radio1">All</label>
										</li>

										<li>
											<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
											<label class="radio-label" for="radio2">Choice 2</label>
										</li>

										<li>
											<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
											<label class="radio-label" for="radio3">Choice 3</label>
										</li>
									</ul> <!-- cd-filter-content -->
								</div> <!-- cd-filter-block -->
							</form>

							<a href="#0" class="cd-close">Close</a>
						</div> <!-- cd-filter -->

						<a href="#0" class="cd-filter-trigger">Filters</a>
					</main> <!-- cd-main-content -->
				</div>
			</div>
			<!-- products -->
		</div>
	</div>
	<?php include('assets/footer.php'); ?>
	<!-- <script src="js/jquery-2.1.1.js"></script> -->
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/main-product.js"></script> <!-- Resource jQuery -->

</body>
</html>
