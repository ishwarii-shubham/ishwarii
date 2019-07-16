<!DOCTYPE html>
<html>
	<?php include('assets/head.php'); ?>
<body>
	<?php include('assets/header.php'); ?>
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>My Cart</h2>
		</div>
	</div>
	<!-- grow -->
	<div class="contact">
		<div class="container" style="background-color:white; border-radius:10px 10px; position: relative;">
			<div class="container" style="width:100%">
				<div class="check">
					<h1 style="color:black;">My Shopping Bag</h1>
					<div class="simpleCart_items cart-header"></div>
					<div class="col-md-3 cart-total">
						<a class="continue" href="#">Continue to basket</a>
						<div class="price-details">
							<h3>Price Details</h3>
							<span>Total</span>
							<span class="total1 simpleCart_total"></span>
							<span>Discount</span>
							<span class="total1">---</span>
							<span>Delivery Charges</span>
							<span class="total1 simpleCart_shipping">₹00.00</span>
							<div class="clearfix"></div>
						</div>
						<ul class="total_price">
							<li class="last_price">
								<h4>TOTAL</h4>
							</li>
							<li class="last_price"><span class="simpleCart_grandTotal"></span></li>
							<div class="clearfix"> </div>
						</ul>


						<div class="clearfix"></div>
						<a class="order" href="#">Place Order</a>
						<div class="total-item">
							<h3>OPTIONS</h3>
							<input type="text" placeholder="Enter Coupon" style="width:140px;height: 32px;"> <a class="cpns" href="#" style="text-decoration: none">Apply
								Coupons</a>
							<p><a href="login.html" style="text-decoration: none">Log In</a> to use accounts - linked coupons</p>
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
