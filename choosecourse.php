

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
<form action="" method= "POST">




    <div  class="label_deg">
     <select class="" >

     <option value="">--select courses--</option>
      <?php 
       $con = mysqli_connect('localhost', 'root', '', 'school', 3307);

       $stmt = $con->prepare ("SELECT * FROM course ");
       $stmt->execute();
       $result = $stmt->get_result();
      //  $row =$result->fetch_array();



       while($row = mysqli_fetch_array($result))
       {
             
                 ?>
                   <option value="<?php echo $row['course']; ?>"> </option>
                 <?php
             }
      
      

       ?>

    
     </select>
    </div>
    

    <div>
                  <input class= "btn btn-tertiary " type="submit" name="submit" value="Register">
              </div>

</form>
      
            

 </div>
  
</body>
</html>


