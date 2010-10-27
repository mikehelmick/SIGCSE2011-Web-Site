<?php
 $title = "SIGCSE 2011 - Information for Symposium Attendees";
 $menu = "attendees";
 $submenu = "cfp";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        

<div id="GoodMessage">Information for symposium attendees is still being filled in. Please check back often!</div>

<h1>Information for SIGCSE 2011 Symposium Attendees</h1>

<table cellspacing="5px" width="100%">
<tr>
 <td valign="top" align="left">
	
	 <ul>
	 <li><a href="http://db.grinnell.edu/sigcse/sigcse2011/Program/Program.asp"><img src="/sigcse2011/images/report.png" align="absmiddle" /> Symposium Program</a></li>
	 <li><a href="/sigcse2011/attendees/keynotes.php"><img src="/sigcse2011/images/user_suit.png" align="absmiddle" /> Keynote Speakers</a></li>
	<!--
	 <li><a href="/sigcse2011/attendees/registration.php"><img src="/sigcse2011/images/vcard_add.png"  align="absmiddle"/> Registration</a></li>
	 <li><a href="/sigcse2011/attendees/reception.php"><img src="/sigcse2011/images/cake.png" align="absmiddle"/> Reception</a></li>
	 <li><a href="/sigcse2011/attendees/fees.php"><img src="/sigcse2011/images/money.png" align="absmiddle"/> A Sneak Peak at Fees</a></li>
	 <li><a href="/sigcse2011/attendees/pre_symposium_events.php"><img src="/sigcse2011/images/calendar.png" align="absmiddle"/> Pre-Symposium Events</a></li>
	 <li><a href="/sigcse2011/attendees/supporter_sessions.php"><img src="/sigcse2011/images/building.png" align="absmiddle"/> Supporter Sessions</a></li>
	 <li><a href="/sigcse2011/attendees/special_projects.php"><img src="/sigcse2011/images/bricks.png" align="absmiddle"/> SIGCSE Special Projects</a></li>
	 <li><a href="/sigcse2011/attendees/video_program.php"><img src="/sigcse2011/images/television.png" align="absmiddle"/> Video Program</a></li>
	 <li><a href="/sigcse2011/attendees/k12_highlights.php"><img src="/sigcse2011/images/house.png" align="absmiddle"/> Highlights for K-12 Teachers</a></li>
	 <li><a href="/sigcse2011/attendees/travel_information.php"><img src="/sigcse2011/images/tag_orange.png" align="absmiddle"/> Travel Information</a></li>
	 <li><a href="/sigcse2011/attendees/accommodations.php"><img src="/sigcse2011/images/clock.png" align="absmiddle"/> Accommodations</a></li>
	 <li><a href="/sigcse2011/attendees/floor_plans.php"><img src="/sigcse2011/images/map.png" align="absmiddle"/> Floor Plans</a></li>
	 <li><a href="/sigcse2011/attendees/kids_camp.php"><img src="/sigcse2011/images/group.png" align="absmiddle"/> Kids Camp</a></li>
	-->
	 <li><a href="/sigcse2011/attendees/visas.php"><img src="/sigcse2011/images/folder_database.png" align="absmiddle"/> Visa Information</a></li>
	<!--
	 <li><a href="/sigcse2011/attendees/local_attractions.php"><img src="/sigcse2011/images/weather_sun.png" align="absmiddle"/> Local Attractions</a></li>
	-->
	 <li><a href="/sigcse2011/faq/#attendees"><img src="/sigcse2011/images/help.png" align="absmiddle" /> FAQ</a></li>
	</ul>
 </td>
 <td nowrap="nowrap" valign="top" align="right">
<div style='width: 500px; height: 440px; background-image: url( http://vortex.accuweather.com/adcbin/netweather_v2/backgrounds/fall4_500x440_bg.jpg ); background-repeat: no-repeat; background-color: #DA9375;' ><div id='NetweatherContainer' style='height: 420px;' ><script src='http://netweather.accuweather.com/adcbin/netweather_v2/netweatherV2ex.asp?partner=netweather&tStyle=normal&logo=1&zipcode=75202&lang=eng&size=13&theme=fall4&metric=0&target=_self'></script></div><div style='text-align: center; font-family: arial, helvetica, verdana, sans-serif; font-size: 12px; line-height: 20px; color: #0000FF;' ><a style='color: #0000FF' href='http://www.accuweather.com/us/TX/DALLAS/75202/city-weather-forecast.asp?partner=accuweather&traveler=0' >Weather Forecast</a> | <a style='color: #0000FF' href='http://www.accuweather.com/maps-satellite.asp' >Weather Maps</a> | <a style='color: #0000FF' href='http://www.accuweather.com/index-radar.asp?partner=accuweather&traveler=0&zipcode=75202' >Weather Radar</a> | <a style='color: #0000FF' href='http://hurricane.accuweather.com/hurricane/index.asp' >Hurricane Center</a></div></div>
  </td>
 </tr>
</table>

<?php include("../parts/middle.php"); ?>

<?php include("../parts/attendees_right.php"); ?>

    
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>