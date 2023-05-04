<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <title>Hello, world!</title>
  	</head>
	<body>
		<?php echo $_SESSION['site'] ?>
	  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  		<a class="navbar-brand" href="#">Navbar</a>
	    		<div class="navbar-nav">
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/index.php" ? "active" : "" ?>" href="/">Home</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/news.php" ? "active" : "" ?>" href="/news">News</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/courses.php" ? "active" : "" ?>" href="/courses">Courses</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/aboutus.php" ? "active" : "" ?>" href="/about">About Us</a>
	    		</div>
				<div class="text-end">
					<a class="btn btn-primary" href="/login">Login</a>
					<a class="btn btn-warning" href="/login">Sign Up</a>
				</div>
		</nav>