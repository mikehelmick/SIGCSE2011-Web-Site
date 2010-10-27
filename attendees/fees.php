<?php
 $title = "SIGCSE 2011 - Symposium Fees";
 $menu = "attendees";
 include("../parts/top.php");
?>       
     
	         <!-- right area -->
<h1>Symposium Fees</h1>

<p>To assist potential attendees who need detailed cost information, we are happy to offer this summary.</p>

<p>Notes:</p>

<ul>
<li>The early registration deadline is <strong>Monday, Jan 31, 2011</strong>. Registrations postmarked or FAXed on or before this date are considered to be 'early.'</li>
<li>The late registration fees apply from <strong>Tuesday, February 1st through Monday, February 28th, 2011</strong>;. Registrations that miss the early deadline but are received on or before this date are considered to be 'late.'<li>
<li>After the late deadline, the on-site rates will apply. Symposium attendees will no longer be able to register on-line. Registration may be completed at the symposium registration desk starting at 3:00 p.m. on Wednesday, March 9th. Complete on-site registration hours are available from our symposium registration gateway page.</li>
</ul>


<div class="SectionHeader"><div class="Full">
<h2><a name="need">Hotel</a></h2>
</div></div>
<br/>

            
<?php include("../parts/middle.php"); ?>  

<?php include("../parts/attendees_right.php"); ?>

    
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>
