<?php
 $title = "SIGCSE 2011 - Accommodations";
 $menu = "attendees";
 include("../parts/top.php");
?>       
     
	         <!-- right area -->
<h1>SIGCSE 2011 Accommodations</h1>

<p>To help conference attendees begin their travel planning, we are happy to
provide the following information about the hotel which will have blocks
of rooms available at special conference rates. And, as SIGCSE has done in
the past, we will have a roommate matching website to help pair you with a
roommate to reduce the cost of attending the symposium.</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="need">Hotel</a></h2>
</div></div>
<br/>

<p><img src="/sigcse2011/images/sheraton-dallas-hotel.jpg" width="300" align="left" class="headshot" />
The conference hotel is Sheraton Dallas Hotel, 400 North Olive Street, Dallas, TX 75201. The group rate is $159 + tax.  This rate includes free wireless
access in hotel rooms in the Sheraton.<br/> <em>Reservation information will be posted when it is available.</em>
<br/>&nbsp;<br/>
<strong>All conference activities will be at the Sheraton hotel and its attached conference center.</strong>
<br/>
<em><a href="travel_information.php">View a map and see travel information.</a></em>
</p>


            
<div class="SectionHeader" style="clear: left"><div class="Full">
<h2><a name="need">Roommate matching</a></h2>
</div></div>

<p><em>Roommate matching information will be posted soon.</em></p>

<?php include("../parts/middle.php"); ?>  

<?php include("../parts/attendees_right.php"); ?>

    
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>
