
<?php
  header("Location: components/new-page.php");
  exit;
?>
<!DOCTYPE html>
<html>
  <head>
   <?php 
   
   require ("components/site-functions.php"); 

   ?>
  </head>
  <body>
   <?php
   $argument = " Frank";
   echo "<p>Tere{$argument}</p>";

   ?>
  </body>
</html>