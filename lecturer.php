<?php
// it solves the issue of moving to lecturer page from the url without logging in
session_start();

 if(!isset($_SESSION['username'])) 
 {
   header("location: login.php");
 }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lecturer dashboard</title>

    <?php 
     
     include 'lec_css.php';

    ?>

</head>
<body>

 <?php  
 
  include "lecsidebar.php";

?>
<div class="content">



 </div>
  
</body>
</html>