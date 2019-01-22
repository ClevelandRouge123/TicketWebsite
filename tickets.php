<?php 
	/* Main page with two forms: sign up and log in */
	require 'db.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		
		
		
		<title>Ticket.io</title>
		<!-- Bootstrap core CSS -->		
		<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		
		<!--Search AJAX guess-->
		<script>
			function showResult(str) {
				if (str.length==0) { 
					document.getElementById("tickets").innerHTML="";
					document.getElementById("tickets").style.border="0px";
					return;
				}
				if (window.XMLHttpRequest) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
					} else {  // code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function() {
					if (this.readyState==4 && this.status==200) {
						document.getElementById("tickets").innerHTML=this.responseText;
						document.getElementById("tickets").style.border="1px solid #A5ACB2";
					}
				}
				xmlhttp.open("GET","tickets.php?q="+str,true);
				xmlhttp.send();
			}
		</script>
	</head>
	<body>
		<?php include 'header.php' ?>
		
		<nav class="navbar navbar-expand-sm navbar-light bg-light">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav2">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#Sport">Sport <span class="sr-only">(current)</span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#Theatre">Theatre</a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#Concerts">Concerts</a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">More Coming Soon!</a>
					</li>
				</ul>
				
			</div>
			<form method="POST" action="">
				Search: <input type="text" name="Search" onkeyup="showResult(this.value)"> <br>
							<div id="tickets"></div>

			</form>
		</nav>
		
	</div>
	<div class="ticketrefine">
		<!--	<p><span id="txtHint"></span></p>-->
		<form>
		
	</div>
	
	<?php
		//	if (strlen($post<=0)){
		$sql = "SELECT * FROM tickets";
		$result = $mysqli->query($sql);
		
		//if ($result->num_rows > 0) {
		fucn
		foreach($result as $row){
			//Ticket container 
			//tickets remaining 		
			echo "<div class='row'>";
			//Top line
			echo "<div class='ticketremain col-lg-2'>";
			echo "<h1>" . $row["tickets_remaining"]. "<br></h1>";
			echo "</div>";					
			
			//ticket name- hyperlink artist to a more info about arists
			echo "<div class='ticketname col-sm-4'>";
			echo "<h1>" . $row["ticket_name"]. "<br></h1>";
			echo "</div>";				
			
			//ticket dates
			echo "<div class='ticketdate col-sm-6'>";
			echo "Date: " . $row["ticket_date"]. "<br>";
			echo "</div>";					
			
			// Ticket venue
			echo "<div class='ticketvenue col-sm-5'>";
			echo "<a href='#' class='btn btn-info btn-lg'>
			<span class='glyphicon glyphicon-map-marker'></span> ".$row["tickets_location"]. "
			</a>";
			echo "</div>";					
			
			//ticket price
			echo "<div class='ticketprice col-sm-3'>";
			echo "£" . $row["ticket_price"]. "<br>";			
			echo "</div>";					
			
			//Ticket buy now button
			echo "<div class='buynow col-sm-2'>";
			echo "<button class='button'>Buy</button>";
			echo "</div>";		
			
			// More information button
			echo "<div class='moreinfo col-sm-2'>";
			echo "<button class='button2'>Info</button>";
			echo "</div>";					
			echo "</div>";					
			//		}
			
		}
		//	}
		
	?>
	
	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
</body>

</html>
