<?php
 $title = "SIGCSE 2011 - Final Submission";
 $menu = "authors";
 $include_submenu = "authors_submenu.php";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->   

	         
<h1>Final Submission Instructions</h1>             

<div class="errorExplanation">Final submission instructions for accepted authors will be posted by October 23, 2010.</div>   

<div class="SectionHeader"><div class="Full">
<h2><a name="questions">Questions?</a></h2>
</div></div> 

<p>If you have questions, please contact:<br />
&nbsp;<br />
Lester I. McCann <br/>
The University of Arizona
<script>write_email( "sigcse11-publications", "cs.cmu.edu" );</script></p>

<?php include("../parts/middle.php"); ?>

<?php include("../parts/authors_right.php"); ?>

    
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>  
