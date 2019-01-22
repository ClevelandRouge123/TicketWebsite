<nav class="navbar navbar-expand-lg navbar-light static-top" style="background-color: #f8c43a;">
	<div class="container">
		<a class="navbar-brand" href="#">TICKET.io</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == "/one/about.php" ? "active" : "");?>"">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="tickets.php">Tickets</a>
				</li>
				<li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == "/one/about.php" ? "active" : "");?>"">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
				<li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == "/one/about.php" ? "active" : "");?>"">
					<a class="nav-link" href="index.php">Logout
						<span class="sr-only">(current)</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>