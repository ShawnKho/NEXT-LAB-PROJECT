<?php
 include_once 'header.php';
?>
<section class="main-container">
 <div class="main-wrapper">
   <h2>Area 8</h2>
   <?php
     if (isset($_SESSION['u_id'])) {
       echo "You are logged in!";
     }
   ?>
   <div class="container">
     <img src="PICS/map.png" alt="Area 8 Location" style="width:100%;">
   </div>
   <pre id="about">     _____________ <br>     _____________ <br>     _____________ <br>     _____________ <br>     _____________ <br>     _____________ <br>     _____________ <br>     _____________ <br>     _____________ </pre>

<?php
 include_once 'footer.php';
?>
