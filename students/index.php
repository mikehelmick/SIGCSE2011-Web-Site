<?php
 $title = "SIGCSE 2011 - Information for Students";
 $menu = "students";
 $submenu = "cfp";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
<h1>How can students get involved?</h1>
<p>We're glad you asked - students can get involved in several ways:
<ul>
  <li><img src="/sigcse2011/images/chart_curve.png" align="absmiddle" /><a href="/sigcse2011/students/research.php">Student Research Competition</a></li>
  <li>Of course, students can also become <a href="/sigcse2011/authors/">authors</a> or regular <a href="/sigcse2011/attendees/">conference attendees</a> (at a reduced registration rate).</li>
  <li><img src="/sigcse2011/images/vcard_add.png" align="absmiddle" /><a href="/sigcse2011/students/volunteer.php">Volunteer at SIGCSE</a></li>
</ul>

<?php include("../parts/middle.php"); ?>
<?php include("../parts/students_right.php"); ?>
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>