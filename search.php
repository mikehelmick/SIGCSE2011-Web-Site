<?php
 $title = "SIGCSE 2011 - Search Page";
 $menu = "";
 include("parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
       
      
	         <!-- right area -->
             
<div id="cse-search-results"></div>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 600;
  var googleSearchDomain = "www.google.com";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>


<?php include("parts/middle.php"); ?> 
    
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("parts/footer.php");
 ?>
