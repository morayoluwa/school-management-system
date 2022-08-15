<!-- in this page i want to make sure that student pick courses and register, so i will need a style that will display all courses to be picked
by student and can also pick more than two courses at a time -->

<!-- the first part is done but the 2nd problem am having here is about the storing the course in to the database -->

<?php 

session_start()

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student dashboard</title>

    <?php 
     
     include "stu_css.php";


    ?>

</head>
<body>

  <?php 
  
  include "stusidebar.php";


  ?>
  
 <div class="content">
   <h3>Available courses</h3> 
    <br> 

    <div  class="label_deg">
  
    <form action="choose.php" method="POST" > 
  
      <?php 
      $con = mysqli_connect('localhost', 'root', '', 'school', 3307);
       
      

      $choosecourse = "SELECT * FROM course";
      //is it possible to run stmt here ?
      
      $query_run = mysqli_query($con,  $choosecourse);
       
      if(mysqli_num_rows($query_run) > 0)

      {
       foreach($query_run as $course)
       {
         ?>
         <input type="checkbox" name= "courses[]"  value="<?=$course['course' ]; ?>" /> <?= $course['course']; ?> <br/> 
         <?php
          /**the name has to be array so it will make the student to pick more than a course at a time */
       }
      }
      else {
       echo "no record";
      }
      
             ?>
       </div>
       <div>
                  <input class= "btn btn-success " type="submit" name="submit" value="Submit">
              </div>
              
              </form>
               <div style='color:#FF0000' > <h5>  <?php  error_reporting(0); session_destroy(); echo  $_SESSION['course']; ?> </h5>   </div> 
               
      
            

      </div>
       
     </body>
     </html>
    
    
   
    

       



