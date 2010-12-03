<?php
 $title = "SIGCSE 2011 - Floor Plans";
 $menu = "attendees";
 include("../parts/top.php");
?>       
     
<div class="SectionHeader" style="clear:left;"><div class="Full">
<h2>SIGCSE 2011 Floor Plans</h2>
</div></div>

<ul>
<li><a href="/sigcse2011/exhibitors/downloads/acm_sigcse_2011_floorplan.pdf">Download the SIGCSE 2011 exhibit hall floor plan</a> or <a href="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.sigcse.org%2Fsigcse2011%2Fexhibitors%2Fdownloads%2Facm_sigcse_2011_floorplan.pdf">View with Google docs Viewer</a>.</il>
<li>More information about SIGCSE 2011 exhibitors can be found on the <a href="/sigcse2011/exhibitors/">exhibitors page</a>.</li>
</ul>

<?php include("../parts/middle.php"); ?>  

<?php include("../parts/attendees_right.php"); ?>

    
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>
