<!DOCTYPE html>
<html lang="en">
	
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Ticket.io</title>
		<link rel="stylesheet" href="css/style.css">
		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
		
	</head>
	
	<body>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			
			// Create connection
			$conn = new mysqli($servername, $username, $password);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			//echo "Connected successfully";
		?>
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light static-top" style="background-color: #f8c43a;">
			<div class="container">
				<a class="navbar-brand" href="#">TICKET.io</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Sign In/Up
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<!-- Page Content -->
		
		<div class="cont_principal">
			
			<div class="cont_centrar">
				<div class="cont_login">
					<form action="">
						<div class="cont_tabs_login">
							<ul class='ul_tabs'>
								<li class="active"><a href="#" onclick="sign_in()">SIGN IN</a>
									<span class="linea_bajo_nom"></span>
								</li>
								<li><a href="#up" onclick="sign_up()">SIGN UP</a><span class="linea_bajo_nom"></span>
								</li>
							</ul>
						</div>
						<div class="cont_text_inputs">
							<input type="text" class="input_form_sign " placeholder="NAME" name="name_us" />
							
							<input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="emauil_us" />
							
							<input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="pass_us" />  
							<input type="password" class="input_form_sign" placeholder="CONFIRM PASSWORD" name="conf_pass_us" />
							
							<a href="#" class="link_forgot_pass d_block" >Forgot Password ?</a>    
							<div class="terms_and_cons d_none">
								<p><input type="checkbox" name="terms_and_cons" /> <label for="terms_and_cons">Accept  Terms and Conditions.</label></p>
								
							</div>
						</div>
						<div class="cont_btn">
							<button class="btn_sign">SIGN IN</button>
							
						</div>
						
					</form>
				</div>
				
			</div>
			
			
		</div>
		
		
		
		<script  src="js/index.js"></script>
		
		
		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		</body>
		
		</html>
				