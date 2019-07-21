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
		<div class=" container">
			<div class=" register">

				<form action="#" method="post">
					<div class="col-md-6 register-top-grid">
						<h3>Personal infomation</h3>
						<div>
							<span>First Name</span>
							<input type="text" required>
						</div>
						<div>
							<span>Last Name</span>
							<input type="text" required>
						</div>
						<div>
							<span>Email Address</span>
							<input type="text" required>
						</div>
						<div>
							<span>Add Address</span>
							<input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"/>

								<!-- Note: The address components in this sample are typical. You might need to adjust them for
								           the locations relevant to your app. For more information, see
								     https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
								-->

							<table id="address">
							  <tr>
							    <td class="label">Street address</td>
							    <td class="slimField"><input class="field" id="street_number" disabled="true"/></td>
							    <td class="wideField" colspan="2"><input class="field" id="route" disabled="true"/></td>
							  </tr>
							  <tr>
							    <td class="label">City</td>
							    <td class="wideField" colspan="3"><input class="field" id="locality" disabled="true"/></td>
							  </tr>
							  <tr>
							    <td class="label">State</td>
							    <td class="slimField"><input class="field" id="administrative_area_level_1" disabled="true"/></td>
							    <td class="label">Zip code</td>
							    <td class="wideField"><input class="field" id="postal_code" disabled="true"/></td>
							  </tr>
							  <tr>
							    <td class="label">Country</td>
							    <td class="wideField" colspan="3"><input class="field" id="country" disabled="true"/></td>
							  </tr>
							</table>
							<!-- Replace the value of the key parameter with your own API key. -->
							<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBY55cQOAu668EPHSg3v6-z99QkUUC69KA&libraries=places&callback=initAutocomplete"
								        async defer></script>
						</div>

						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
						</a>
					</div>
					<div class="col-md-6 register-bottom-grid">
						<h3>Login information</h3>
						<div>
							<span>Password</span>
							<input type="password" required>
						</div>
						<div>
							<span>Confirm Password</span>
							<input type="password" required>
						</div>
						<input type="submit" value="submit">

					</div>
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
		<!--//content-->
		<?php include('assets/footer.php'); ?>

	</body>
</html>
