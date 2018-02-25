<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
	function openNav() {
	    document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	}
</script></script>
</head>
<body>

<header>
	<nav>

		<div class="main-wrapper">

			<ul>
				<li>
					<div id="mySidenav" class="sidenav" align="left">
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  <a href="index.php">Home</a>
					   <a href="clients.php">Clients</a>
					  <a href="about.php">About</a>
					  <a href="partnerwithus.php">Partner with Us</a>
					</div>
					<div id ="main">
						<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
					</div>
				</li>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>';
					} else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Sign up</a>';
					}
				?>

			</div>

	</nav>
</header>
