<?php
 $title = "SIGCSE 2011 - Evaluations";
 $menu = "attendees";
 include("../parts/top.php");
?>         
<div class="SectionHeader" style="clear:left;"><div class="Full">
<h2>SIGCSE 2011 Symposium Evaluations</h2>
</div></div>
<p>The SIGCSE 2011 Conference Committee hopes that you enjoyed (or are still enjoying!) this year's symposium. To help us learn what we did well, and what we could have done better, we invite you to complete the Symposium Evaluation survey.  These survey results not only inform the 2011 committee, they also provide valuable insight to the members of the SIGCSE 2012 committee.</p>
<p>To complete an evaluation on-line, please select one of the following links.
<ul>
 <li><a href="https://www.surveymonkey.com/s/SIGCSE2011">SIGCSE 2011 Symposium Evaluation</a></li>
</ul>
</p>
<p>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;</p>
<?php include("../parts/middle.php"); ?>  
<?php include("../parts/attendees_right.php"); ?>
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>
