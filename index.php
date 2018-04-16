<!DOCTYPE html>
<html>
<head>
	<title>hotels first project</title>
	<link rel="icon" type="image/jpg" href="images/site_logo.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/hotels.css">
</head>
<body class="container container-fluid">
	<div class="row main">
		<header>
			<div class="row">
				<div class="col-md-6 hotel">Hotels.ng</div>
				<div class="col-md-6"></div>
			</div>

			<div class="row">
				<div class="col-md-3 ebere">By EberePlenty</div>
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
			</div>

		</header><hr>

		<div class="main-content">
			<div class="col-md-4"></div>
			<div class="col-md-4 text-center time">
				<?php 
					$date = date("H:i:s");
					$date = date('h:i A', strtotime($date));
					echo "$date";
				?>
			</div>
			<div class="col-md-4"></div>
		</div>
	
		<footer>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 text-center">njoku samson ebere</div>
				<div class="col-md-4"></div>	
			</div>
		</footer>
	</div>
</body>
</html>