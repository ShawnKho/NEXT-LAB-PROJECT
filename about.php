<?php
 include_once 'header.php';
?>
<section class="main-container">
 <div class="main-wrapper">
   <h2>About Me</h2>
   <?php
     if (isset($_SESSION['u_id'])) {
       echo "You are logged in!";
     }
   ?>
   <div class="container">
     <img src="PICS/PIC1.png" alt="My Picture" style="width:100%;">
   </div>
   <pre id="about">     _____________ <br>     _____________ <br>     _____________ <br>     _____________ <br>     _____________ <br>     _____________ <br>     _____________ <br>     _____________ <br>     _____________ </pre>
   <div align="center">
 	<a href ="MAILTO:sdackho21@xs.edu.ph">Contact Me!</a>
 </div>
<?php
 include_once 'footer.php';
?>
