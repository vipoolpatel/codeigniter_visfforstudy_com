

<?php
$this->load->view('front/auth/header/header.php');
?>

	
	<!-- start: login section -->
	<section class="login-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="login-form-box">
						<h2 class="login-form-title">Forgot password</h2>
						<?php
			$this->load->view('message');
			?>
						<form action="" class="login-form" method="POST">
							<div class="form-group">
								<input type="email" name="email" class="log-fname form-control" placeholder="Enter Email">
							</div>
							
							
							<button type="submit" value="submit" class="reg-signup-btn reg-login-btn">Forgot password</button>
						</form>
						<div class="fogot-pass-btn-box text-center">
							<a href="<?=base_url();?>login" class="forgot-pass-link">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end: login section -->
<?php
$this->load->view('front/auth/header/footer.php');
?>
