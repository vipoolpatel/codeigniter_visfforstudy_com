

<?php
$this->load->view('front/auth/header/header.php');
?>

	
	<!-- start: login section -->
	<section class="login-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="login-form-box">
						<h2 class="login-form-title">Reset password</h2>
						<?php
						$this->load->view('message.php');
						?>
						<form class="login-form">
							
							<div class="form-group">
								<input type="password" name="password" class="log-fname form-control" placeholder="Enter Password" required>
							</div>
							<div class="form-group">
								<input type="password" name="password" class="log-pass form-control" placeholder="Enter Confirm Password" required>
							</div>
							
							<button type="submit" class="reg-signup-btn reg-login-btn">Login</button>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end: login section -->
	
<?php
$this->load->view('front/auth/header/footer.php');
?>
