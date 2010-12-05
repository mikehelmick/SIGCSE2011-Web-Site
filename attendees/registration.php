<?php
 $title = "SIGCSE 2011 - Registration";
 $menu = "attendees";
 include("../parts/top.php");
?>       
     
<div id="GoodMessage">Online registration is coming soon!!!</div>

<h1>SIGCSE 2011 Registration Gateway</h1>
      
<div class="SectionHeader"><div class="Full">
<h2>Registration</h2>
</div></div>
<br/>   


<?php include("../parts/middle.php"); ?>  
<?php include("../parts/attendees_right.php"); ?>
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>
