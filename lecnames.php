
 <?php 
session_start();

if(!isset($_SESSION['username'])) 
{
  header("location: login.php");
}


$con = mysqli_connect('localhost', 'root', '', 'school', 3307);

$stmt = $con->prepare ("SELECT * FROM user where status='student'");
   
$stmt->execute();
$result = $stmt->get_result();
$row =$result->fetch_array();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lecturer dashboard</title>

    <?php 
     
     include "lec_css.php";


    ?>

</head>
<body>

  <?php 
  
  include "lecsidebar.php";


  ?>
  
 <div class="content">
     
 <center>
 

 <table border="1px" 
     <tr>
         <th style="padding: 20px;  font-size: 15px;">Name</th>
         <th style="padding: 20px; font-size: 15px;">Email</th>
      

     </tr>
     
     <?php
     while($info=$result->fetch_assoc())
     {
         ?>


     <tr>
         <td style="padding: 20px;    "> 
         <?php echo "{$info['name']}"; ?>  
        </td>

         <td style="padding: 20px; ">
         <?php echo "{$info['email']}"; ?>
        </td>

        
     </tr>

     <?php
     }
     ?>
 </table>

    </center>

 </div>
  
</body>
</html>