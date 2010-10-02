<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<title><?php echo $title ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <meta name="google-site-verification" content="DyK55ZZUCG5OEtmtFwEAvttufQiH92x17UQsiZyrU_w" />
    
    <script src="/sigcse2011/js/site.js" type="text/javascript"></script>
    <script type="text/javascript" src="/sigcse2011/js/prototype.js"></script>
	<script type="text/javascript" src="/sigcse2011/js/scriptaculous.js?load=effects,builder"></script>
	<script type="text/javascript" src="/sigcse2011/js/lightbox.js"></script>

	<?php
		if(isset($_GET["print"]))
			$style = "print.css";
		else 
		    $style = "master.css";
		echo "
		<link rel='stylesheet' type='text/css' href='/sigcse2011/css/$style' title='Current'>
		";
	?>
	
</head>

<body onload="remove_frames();">
	
<div id="container">	
  <div id="headercontainer" class="clear">
	
    <div id="headertitle">
		<img src="/sigcse2011/logo/sigcse2011.png" alt="SIGCSE 2011 Logo" />
	</div>
	
	<div id="headerright">
		<div id="userinfoarea">			
		  	<div id="userinfo">
            
           <p> 
			<b>SIGCSE 2011: Reaching Out<br/>
			The 42nd ACM Technical Symposium on<br/> Computer Science Education<br/>
			March 9-12, 2011, Dallas, Texas, USA<br/>
			<a href="http://www.sigcse.org/sigcse2011/">http://www.sigcse.org/sigcse2011/</a></b>
            </p>
           
			</div>
	    </div>
	</div>
	
  </div>

  <?php  include("menu.php"); ?>
  
  <div id="contentarea" class="clear">
	<div id="content">
		<div id="printIcon">
			<a href="<?php echo $_SERVER["REQUEST_URI"] ?><?php echo "?print"?>"><img src="/sigcse2011/images/printer.png" align="absmiddle" /> Print</a>
		</div>
		

