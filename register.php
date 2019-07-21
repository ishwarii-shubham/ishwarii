<!DOCTYPE html>
<html>
	<?php include('assets/head.php'); ?>
	<body>
		<?php include('assets/header.php'); ?>
		<!-- grow -->
		<div class="grow">
			<div class="container">
				<h2>Register</h2>
			</div>
		</div>
		<!-- grow -->
		<!--content-->
		<div class="contact">
			<div class="container" style="background-color:white; border-radius:10px 10px; position: relative;">
				<div class="contact-form" style="margin:5%; background-color: black; color: wheat;">

				<form action="assets/new_user.php" method="post">
					<div class="col-md-6 register-top-grid">
						<h3>Personal infomation</h3>
						<div>
							<span>First Name</span>
							<input type="text" name="f_name" required>
						</div>
						<div>
							<span>Last Name</span>
							<input type="text" name="l_name" required>
						</div>
						<div>
							<span>Email Address</span>
							<input type="text" name="email_add" required>
						</div>
						<div>
							<span>Area</span>
							<input id="autocomplete" name="area" placeholder="Enter your address" onFocus="geolocate()" type="text"/>

								<!-- Note: The address components in this sample are typical. You might need to adjust them for
								           the locations relevant to your app. For more information, see
								     https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
								-->
						</div>

						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="newsletter" checked=""><i> </i>Sign Up for Newsletter</label>
						</a>
					</div>
					<div class="col-md-6 register-bottom-grid">
						<h3>Login information</h3>
						<div>
							<span>Password</span>
							<input name="user_pass" type="password" required>
						</div>
						<div>
							<span>Confirm Password</span>
							<input name="user_pass1" type="password" required>
						</div>

						<!-- Address -->
						<h3>Full Address</h3>
						<div>
							<table id="address">
								<tr>
									<td class="label">Phone</td>
									<td class="slimField"><input class="field" name="phone" id="street_number" disabled="true"/></td>
									<td class="label">Street Address</td>
									<td class="wideField" colspan="2"><input name="full_add" class="field" id="route" disabled="true"/></td>
								</tr>
								<tr>
									<td class="label">City</td>
									<td class="wideField" colspan="3"><input class="field" id="locality" name="city" disabled="true"/></td>
								</tr>
								<tr>
									<td class="label">State</td>
									<td class="slimField"><input class="field" name="state" id="administrative_area_level_1" disabled="true"/></td>
									<td class="label">Zip code</td>
									<td class="wideField"><input class="field" name="zip_code" id="postal_code" disabled="true"/></td>
								</tr>
								<tr>
									<td class="label">Country</td>
									<td class="wideField" colspan="3"><input name="country" class="field" id="country" disabled="true"/></td>
								</tr>
							</table>
								<!-- Replace the value of the key parameter with your own API key. -->
								<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBY55cQOAu668EPHSg3v6-z99QkUUC69KA&libraries=places&callback=initAutocomplete"
													async defer></script>

						</div>
						<!-- Address End -->
					</div>
					<div class="clearfix"> </div>
					<div>
						<input type="submit" value="submit" style="width: 36%; color: #FFF; font-size: 1em; background: #964b21; border: none; outline: none; padding: 0.5em;">
					</div>
				</form>
			</div>
		</div>
		</div>
		<!--//content-->
		<?php include('assets/footer.php'); ?>

	</body>
</html>
