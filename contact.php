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
		<style>
			#grid-snap {
			width: 40%;
			background-color: #29e;
			color: #fff;
			font-size: 1.2em;
			border-radius: 4px;
			padding: 2%;
			margin: 5%;
			touch-action: none;
			}
		</style>
	</head>
	<body>
		<?php include 'header.php' ?>
		
		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		
	</body>
	
</html>
