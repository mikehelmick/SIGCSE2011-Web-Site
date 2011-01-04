<?php
 $title = "SIGCSE 2011 - Committee";
 $menu = "committee";
 include("../parts/top.php");
?>

<p><a href="index.php">Full Committee</a> | <strong>Associate Program Chairs</strong></p>

<div class="SectionHeader"><div class="Full">
<h2>SIGCSE 2011 Program Committee</h2>
</div></div>

	<table class="FadeTable" cellspacing="0" cellpadding="0">

	<tr class="header"><td align="left" valign="top" colspan="3">
	    <strong>Associate Program Chairs</strong>
    </td></tr>     
    <tr><td align="left" valign="top">
	John Barr<br/>Ithaca College<br/><script>write_email("barr","ithaca.edu");</script><hr/>
	Tracy Camp<br/>Colorado School of Mines</br><script>write_email("tcamp", "mines.edu");</script>
    </td>
    <td valign="top" align="center"><img src="/sigcse2011/images/committee/Barr.jpg" /></td>
    <td valign="top" align="center"><img src="/sigcse2011/images/committee/Camp.jpg" /></td></tr>
    <tr><td align="left" valign="top">
Boots Cassel<br/>Villanova<br/><script>write_email("Lillian.cassel","villanova.edu");</script><hr/>
Steve Edwards<br/>Virginia Tech<br/><script>write_email("edwards","cs.vt.edu");</script>
	</td>
    <td valign="top" align="center"><img src="/sigcse2011/images/committee/Cassel.jpg" /></td>
    <td valign="top" align="center"><img src="/sigcse2011/images/committee/Edwards.jpg" /></td></tr>
    <tr><td align="left" valign="top">
Mike Goldweber<br/>Xavier University<br/><script>write_email("goldweber","xavier.edu");</script><hr/>
Chuck Leska<br/>Randolph-Macon College<br/><script>write_email("cleska","rmc.edu");</script>
	</td>
    <td valign="top" align="center"><img src="/sigcse2011/images/committee/Goldweber.jpg" /></td>
    <td valign="top" align="center"><img src="/sigcse2011/images/committee/Leska.jpg" /></td></tr>
    <tr><td align="left" valign="top">
Sara Miner More<br/>McDaniel College<br/><script>write_email("smore","mcdaniel.edu");</script><hr/>
Sam Rebelsky<br/>Grinnell College<br/><script>write_email("rebelsky","grinnell.edu");</script>
	</td>
    <td valign="top" align="center"><img src="/sigcse2011/images/committee/More.jpg" /></td>
    <td valign="top" align="center"><img src="/sigcse2011/images/committee/rebelsky.jpg" /></td></tr>
    <tr><td align="left" valign="top">
Ingrid Russell<br/>University of Hartford<br/><script>write_email("irussell","hartford.edu");</script>
	</td>
    <td valign="top" align="center"><img src="/sigcse2011/images/committee/Russell.jpg" /></td>
    <td valign="top" align="center">&nbsp;</td></tr>
	</table>

<?php include("../parts/middle.php"); ?> 

<?php include("../parts/main_right.php"); ?>

<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  $mainPage = true;
  include("../parts/footer.php");
 ?>