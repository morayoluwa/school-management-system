<?php

// it solves the issue of moving to student page from the url without logging in
session_start();

 if(!isset($_SESSION['solveurlissue'])) 
 {
   header("location: login.php");
 }


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Student dashboard</title>
   
    <?php 
     
     include 'stu_css.php';

    ?>
   
</head>
<body>
<?php  
 
 include "stusidebar.php";

?>    


  <div class="content">
  
  <?php echo "You're Welcome"   ?> <br>

    <?php 
    $con = mysqli_connect('localhost', 'root', '', 'school', 3307);
    
    $stmt = $con->prepare ( " SELECT * FROM user where status = 'student' ");
    
    $stmt->execute();
    $result = $stmt->get_result();
    $row =$result->fetch_array();

    //my problem is that i need to login a single user at a time, i.e i want a user to login at time and pick courses with his/her id
    //example is loggin into jumia with one id/ special id and order stuff using the same id
    
     
    
        ?>
          
           <img src="<?php echo  $_SESSION["login_user"]  ?>"  height="300" width="300"  ; > 
         
  
 <!-- cant be displayed on the page bcos of where it is placed  -->


  </div>
</body>
</html>    



