<?php
 $title = "SIGCSE 2011 - Registration";
 $menu = "attendees";
 include("../parts/top.php");
?>       
     
<div id="GoodMessage">Registration is not yet open.</div>

<?php include("../parts/middle.php"); ?>  

<?php include("../parts/attendees_right.php"); ?>

    
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>
