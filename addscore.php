


<!-- // session_start();

// if(!isset($_SESSION['name']))
// {
//     header("location: login.php");
// }

// elseif($_SESSION['status']== 'student')
// {
//     header("location: login.php");
// } -->

<?php  

$con = mysqli_connect('localhost', 'root', '', 'school', 3307);

$id =$_POST['student_id'];

$sql="SELECT * FROM registration WHERE id='$id' ";

$result=mysqli_query($con, $sql);

$info= $result->fetch_assoc();

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

  </aside>
 <div class="content">
<!-- 
 <h1> Add score </h1> -->
  
 <div>
   
 <form>
   
    <div>
        
        <label> <h1> Add score </h1></label>
        <input type="text" name="name" value="<?php echo "{$info['name']}" ?>">
    </div>

    
    <div>
        
        <input class='btn btn-success' type="submit" name="Add score">
    </div>



 </form>


 </div>



 </div>
  
</body >
</html>