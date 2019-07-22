<?php ob_start(); ?>
<!DOCTYPE html>
<html>
	<?php include('assets/head.php'); ?>
	<body>
		<?php include('assets/header.php'); ?>
		<?php
			if ($sess->sessionCheck()){
				header("Location: ./index.php");
			}

			if($_REQUEST && array_key_exists('form_action', $_REQUEST) && $_REQUEST['form_action'] > 0) {
				require_once './assets/user_class.php';
				$user_id = $_REQUEST['user_name'];
				$pass = $_REQUEST['pass'];
				$user = new User();
				$user->logIN($user_id, $pass, $sess);
			}
		?>
		<!-- grow -->
		<div class="grow">
			<div class="container">
				<h2>Login</h2>
			</div>
		</div>
		<!-- grow -->
		<!--content-->
		<div class="contact">
			<div class="container" style="background-color:white; color:white; border-radius:10px 10px; position: relative;">
				<div class="contact-form" style="margin:5%; background-color: black;">
					<div class="col-md-8 contact-grid">
						<form action="?form_action=1" method="post">
							<div style="color:red;">
								<?php if($_REQUEST && array_key_exists('form_action', $_REQUEST) && $_REQUEST['form_action'] < 0){
									if ($_REQUEST['form_action'] > -3){
											echo '<p>Username/Password Is Wrong</p>';
									}else {
										echo '<p>Login/Sign Up to place Order</p>';
									}
								}
								?>
							</div>
							<div>
								<span>Email</span>
								<input type="text" name="user_name" required>
							</div>
							<div>
								<span>Password</span>
								<input type="password" name="pass" required>
							</div>
							<div>

							</div>
							<input type="submit" value="Login" style="width: 36%; color: #FFF; font-size: 1em; background: #964b21; border: none; outline: none; padding: 0.5em;">
						</form>
					</div>
					<div class="col-md-4 left-account ">
						<a href="single.html"><img class="img-responsive " src="images/s1.jpg" alt=""></a>
						<!-- <div class="five">
				<h2>25% </h2><span>discount</span>
				</div> -->
						<a href="register.php" class="create">Create an account</a>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

		</div>
		<?php include('assets/footer.php'); ?>
	</body>
</html>
