<?php
 $title = "SIGCSE 2011 - Student Research Competition";
 $menu = "students";
 $submenu = "cfp";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
<?php include("../parts/studentresearch.php"); ?>

<?php include("../parts/middle.php"); ?>
<?php include("../parts/students_right.php"); ?>
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/footer.php");
 ?>