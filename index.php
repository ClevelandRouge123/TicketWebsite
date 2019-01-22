<?php 
	/* Main page with two forms: sign up and log in */
	require 'db.php';
	session_start();
?>
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
		<?php
			if (isset($_SESSION['message']))
			{
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			}	
		?>
	</head>
	<?php 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			if (isset($_POST['login'])) { //user logging in
				
				require 'login.php';
				
			}
			
			elseif (isset($_POST['register'])) { //user registering
				
				require 'register.php';
				
			}
		}
	?>
	<body>
		<?php
			if (isset($_SESSION['message']))
			{
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			}	
		?>
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
		<?php include 'headerlogin.php' ?>
		
		
		<!-- Page Content -->
		
		<div id="login" class="cont_principal">
			<div class="cont_centrar">
				<div class="cont_login">
					<form action="index.php" method="post" autocomplete="off">
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
							
							<input type="name" class="input_form_sign " placeholder="NAME" name="name" />
							
							<input type="email" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="email" />
							
							<input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="password" />  
							
							<a href="#" class="link_forgot_pass d_block" >Forgot Password ?</a>    
							
							</div>
						<div class="cont_btn">
							<button id='btnsignupin' name ="login" class="btn_sign">SIGN IN</button>
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
