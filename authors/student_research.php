<?php
 $title = "SIGCSE 2011 - Student Research Contest Submission Guidelines";
 $menu = "authors";
 $submenu = "src";
 $include_submenu = "authors_submenu.php";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
     
<?php include("../parts/studentresearch.php"); ?>

<?php include("../parts/middle.php"); ?>

<?php include("../parts/authors_right.php"); ?>

    
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>   