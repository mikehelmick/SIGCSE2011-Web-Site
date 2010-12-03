<?php
 $title = "SIGCSE 2011 - Video Program";
 $menu = "attendees";
 include("../parts/top.php");
?>       
     
<div class="SectionHeader" style="clear:left;"><div class="Full">
<h2>SIGCSE 2011 Video Program</h2>
</div></div>

<p>Below are the titles and creators of the accepted videos.  Abstracts and links to the actually videos will be coming soon!</p>

<table class="fancy">
 <tr class="odd hover">
  <td><strong>Speaking in Code</strong><ul>
	<li>Andreas Stefik, Southern Illinois University Edwardsville</li>
	<li>Slattery Kim, Southern Illinois University Edwardsville</li>
	<li>Susanna Siebert, Southern Illinois University Edwardsville</li>
   </ul>	
  </td>
  <td></td>
 </tr>
 <tr class="even hover">
  <td><strong>Reaching out (binary codes)</strong><ul>
	<li>Tim Bell, University of Canterbury</li>
 	<li>Michael Bell, Orange Studio</li>
   </ul>	
  </td>
  <td></td>
 </tr>
 <tr class="odd hover">
  <td><strong>Santa's dirty socks (divide and conquer)</strong><ul>
	<li>Tim Bell, University of Canterbury</li>
    <li>Michael Bell, Orange Studio</li>
	<li>Victor Chicha, Ecole des Mines de Nantes</li>
   </ul>	
  </td>
  <td></td>
 </tr>
 <tr class="even hover">
  <td><strong>Introducing Scrape, A Visualization Tool for the Analysis of Scratch Code</strong><ul>
	<li>Ursula Wolz, The College of New Jersey</li>
	<li>Brett Taylor, The College of New Jersey</li>
	<li>Christopher Hallberg, The College of New Jersey</li>
   </ul>	
  </td>
  <td></td>
 </tr>
 <tr class="odd hover">
  <td><strong>The Recursive Case</strong><ul>
	<li>Lucas Starrett, Purdue</li>
	<li>David Zinn, Purdue</li>
   </ul>	
  </td>
  <td></td>
 </tr>

 <tr class="even hover">
  <td><strong>Intel(R) Manycore Testing Lab: A hands-on approach to integrating parallelism in today’s classrooms</strong><ul>
	<li>Jennifer Levine, Intel Academic Community</li>
   </ul>	
  </td>
  <td></td>
 </tr>
 <tr class="odd hover">
  <td><strong>How Much Is That Hole?</strong><ul>
	<li>Madalene Spezialetti, Trinity College</li>
   </ul>	
  </td>
  <td></td>
 </tr>
</table>

<?php include("../parts/middle.php"); ?>  
<?php include("../parts/attendees_right.php"); ?>
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>
