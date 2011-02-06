<?php
 $title = "SIGCSE 2011 - Student Research Competition";
 $menu = "attendees";
 include("../parts/top.php");
?>       
<div class="SectionHeader" style="clear:left;"><div class="Full">
<h2>Student Research Competition</h2>
</div></div>

<div class="SectionHeader" style="clear:left;"><div class="Full">
<h3>SIGCSE 2011 Student Research Competition - Graduate Entries</h3>
</div></div>
<ul><li><em>Automatic Semantics Discovery for Adaptive Web-based Educational Courses</em> Marian Simko, Slovak University of Technology</li>
<li><em>Augmenting Educational Tools through Conversion to Games</em> Acey Boyce, University of North Carolina at Charlotte</li>
<li><em>Adaptive Peer-Review in Computer Science Education</em> I-Han Hsiao, University of Pittsburgh</li>
</ul>

<div class="SectionHeader" style="clear:left;"><div class="Full">
<h3>SIGCSE 2011 Student Research Competition - Undergraduate Entries</h3>
</div></div>
<ul>
<li><em>Hiding In Images</em> Justin Babey, Central Connecticut State University</li>
<li><em>Investigating Computational Methods for Evaluating Putative Substrate Conformations in Cytochrome P450s</em> Zachary Zappala, The College of New Jersey</li>
<li><em>TheCave: Using GPUs and Classical Philosophy to Data-Mine Images</em> Charles Stolper, Furman University</li>
<li><em>A Computational Clustering Approach to Studying Metagenomics</em> Shanti Bramhacharya, Hiram College</li>
<li><em>Looking for Novel Subgroups in Mammography Data using a Modified Distance Metric for Clustering</em> Elizabeth Ellis, Hiram College</li>
<li><em>Metaphor: A Declarative Approach to Computational Art</em> Shrutarshi Basu, Lafayette College</li>
<li><em>Implementing Ruppert’s Algorithm for Generic Curves in 2D</em> Matthew Flatau, Southwestern University</li>
<li><em>Dance Tool: Creation of a New Culturally Situated Educational Game</em> Shaun Pickford, University of</li> North Carolina at Charlotte
</ul>

<?php include("../parts/middle.php"); ?>  
<?php include("../parts/attendees_right.php"); ?>
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>
