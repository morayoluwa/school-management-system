<?php

// it solves the issue of moving to student page from the url without logging in
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
    <title>Student dashboard</title>

    <?php 
     
     include 'stu_css.php';

    ?>
   
</head>
<body>
<?php  
 
 include "stusidebar.php";

?>    
 
 

  <div class="content">
 
 <!-- cant be displayed on the page bcos of where it is placed  -->


  </div>
</body>
</html>    



