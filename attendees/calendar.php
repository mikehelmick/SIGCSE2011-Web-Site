<?php
 $title = "SIGCSE 2011 - Calendar";
 $menu = "attendees";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
     
     
	         <!-- right area -->
<h1>SIGCSE 2011 Calendar</h1>

<ul>
 <li>View below or subscribe. Subscribing in Google calendar makes it easy to sync this calendar to your Android or iOS device.
  <ul>
   <li><a href="https://www.google.com/calendar/b/0/render?cid=abs97af8r10qelmu18ugihhiuk@group.calendar.google.com&pli=1">Click Here</a> to add this calendar to your Google calendar.</li>
   <li>Other formats: <a href="http://www.google.com/support/calendar/bin/answer.py?answer=34578&ctx=tltp">Help with subscribing to calendars with other clients.</a>
    <ul>
	 <li><a href="http://www.google.com/calendar/feeds/abs97af8r10qelmu18ugihhiuk%40group.calendar.google.com/public/basic">XML Format</a></li>
	 <li><a href="http://www.google.com/calendar/ical/abs97af8r10qelmu18ugihhiuk%40group.calendar.google.com/public/basic.ics">ICS (iCal) Format</a></li>
	</ul>	
   </li>
  </ul>
 </li>
</ul>


<iframe src="https://www.google.com/calendar/b/0/embed?title=SIGCSE%202011&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23cccccc&amp;src=abs97af8r10qelmu18ugihhiuk%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=America%2FChicago" style=" border:solid 1px #777 " width="800" height="600" frameborder="0" scrolling="auto"></iframe>

<?php include("../parts/middle.php"); ?>
<?php include("../parts/attendees_right.php"); ?>

<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>