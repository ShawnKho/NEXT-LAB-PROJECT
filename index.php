<?php
	include_once 'header.php';
?>
<section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
		<?php
			if (isset($_SESSION['u_id'])) {
				echo "You are logged in!";
			}
		?>
	</div><div class="container">
	  <a href="area5.php">
	  <img src="PICS/PLACES.png" alt="area5" style="width:100%;">
	</a>
	</div>
	<div class="container">
	  <a href="area8.php">
	  <img src="PICS/PLACES.png" alt="area8" style="width:100%;">
	    </a>


	</div>
	<div class="container">
	  <a href="area6.php">
	  <img src="PICS/PLACES.png" alt="area6" style="width:100%;">
	    </a>

	</div>
	<div class="container">
	  <a href="area7.php">
	  <img src="PICS/PLACES.png" alt="area7" style="width:100%;">
	    </a>

	</div>
	<div class="container">
	  <a href="area1.php">
	  <img src="PICS/PLACES.png" alt="area1" style="width:100%;">
	    </a>
	</div>
	<div class="container">
	  <a href="area2.php">
	  <img src="PICS/PLACES.png" alt="area2" style="width:100%;">
	    </a>


	</div>
	<div class="container">
	  <a href="area3.php">
	  <img src="PICS/PLACES.png" alt="area3" style="width:100%;">
	    </a>

	</div>
	<div class="container">
	  <a href="area4.php">
	  <img src="PICS/PLACES.png" alt="area4" style="width:100%;">
	    </a>
	</div>
	<div="hello" align="center">
	<h6>Page 1</h6>
	</div>
</section>
<div class="npbutton" align="center">
 <a href="page2.php" align="center" class="next round">&#8250;</a>
</div>
<?php
	include_once 'footer.php';
?>
