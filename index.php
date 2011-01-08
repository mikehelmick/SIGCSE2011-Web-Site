<?php
 $title = "SIGCSE 2011 - Home";
 $menu = "home";
 include("parts/top.php");
?>

<div id="GoodMessage">Dec 6, 2010: <strong><a href="/sigcse2011/attendees/registration.php">Registration is now open</a>!</strong> Early registration ends January 31, 2011.</div>

<div class="SectionHeader"><div class="Full">
<h2>Welcome to SIGCSE 2011</h2>
</div></div>

<p>SIGCSE 2011 continues our long tradition of bringing together colleagues from around the 
world to present papers, panels, posters, special sessions, and workshops, and to discuss 
computer science education in birds-of-a-feather sessions and informal settings at breaks 
and meals. The SIGCSE Technical Symposium addresses problems common among educators working 
to develop, implement and/or evaluate computing programs, curricula, and courses. 
The symposium provides a forum for sharing new ideas for syllabi, laboratories, 
and other elements of teaching and pedagogy, at all levels of instruction.</p>

<p>We encourage participation that addresses our theme, "reaching out". We need to reach out to colleagues in other fields, to develop interdisciplinary courses and research projects that integrate computer science and other fields, which enriches both. We need to reach out to create programs that attract and educate the next generation of computer scientists, especially currently underserved populations. We need to reach out to policy makers, educating them on the importance and promise of our discipline. Finally, we need to reach out to each other, as always sharing our best ideas and experiences with the SIGCSE community. We invite those interested in computer science education and computer science education research to contribute to SIGCSE 2011.</p>

<div class="SectionHeader"><div class="Full">
<h2>Our Venue : Sheraton Dallas Hotel</h2>
</div></div>
<p>All conference activities will be at the Sheraton hotel and its attached conference center.  The Sheraton Dallas Hotel and conference center is located at 400 North Olive Street, Dallas, TX 75201. More information can be found on our <a href="/sigcse2011/attendees/accommodations.php">accommodations page</a>.</p>

<div class="SectionHeader"><div class="Full">
<h2>SIGCSE 2011 Supporters</h2>
</div></div>

<table width="100%">
<tr>
 <td align="center" valign="top" colspan="2"><h3>Platinum Supporters</h3></td>
</tr>
<tr>
 <td align="center" valign="middle">
   <a href="http://www.intel.com/education/" alt="Intel Education"><img src="/sigcse2011/images/logos/sponsors/intel.png" /></a>
 </td>
 <td align="center" valign="middle">
   <a href="http://www.microsoft.com/education/highered/faculty/" alt="Microsoft Highered"><img src="/sigcse2011/images/logos/sponsors/microsoft.png" /></a>
 </td>
</tr>
<tr>
 <td align="center" valign="top" colspan="2"><h3>Gold Supporters</h3></td>
</tr>
<tr>
 <td align="center" valign="middle">
   <a href="http://aws.amazon.com/education" alt="Amazon Web Services"><img src="/sigcse2011/images/logos/sponsors/aws.jpg" /></a>
 </td>
 <td align="center" valign="middle">
   <a href="http://www.ibm.com/academicinitiative" alt="IBM academic initiative"><img src="/sigcse2011/images/logos/sponsors/ibm.png" /></a>
 </td>
</tr>
</table>


<?php include("parts/middle.php"); ?> 

<?php include("parts/main_right.php"); ?>

<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  $mainPage = true;
  include("parts/footer.php");
 ?>