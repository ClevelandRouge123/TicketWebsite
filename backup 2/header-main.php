<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="navbar-header">
     <a class="navbar-left" href="">
		        <img class="img-responsive" width="70px" height="" src="img/logo.jpg">
</a>
 
    </div>
    <ul class="nav navbar-nav">

	  <li class="<?php echo ($_SERVER['PHP_SELF'] == "/one/about.php" ? "active" : "");?>"><a href="about">About</a></li>
      <li class="<?php echo ($_SERVER['PHP_SELF'] == "/one/property.php" ? "active" : "");?>"><a href="property">Property</a></li>
      <li class="<?php echo ($_SERVER['PHP_SELF'] == "/one/tickets.php" ? "active" : "");?>"><a href="tickets">Tickets</a></li>
	  <li class="<?php echo ($_SERVER['PHP_SELF'] == "/one/contact.php" ? "active" : "");?>"><a href="contact">Contact us</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="profile.php"><span class="glyphicon glyphicon-user"></span></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> logout</a></li>
    </ul>
</nav>
