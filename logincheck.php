<?php 
session_start();
error_reporting(0);


    
$con = mysqli_connect('localhost', 'root', '', 'school', 3307);


     if(isset($_POST['submit']))

      {
       $Name = $_POST['name'];
       $Password = $_POST['password'];
       
       
       
      
       if($Name == "" or $Password == "" )


       {
           $message = "Please fill empty field";
           $_SESSION['login'] =$message;
        
           header("location: login.php");
       }

    
    
       elseif(!preg_match("/^[a-zA-Z ]*$/", $Name))
        
      {

      header("location: login.php");

      }
    
      else {


      $stmt = $con->prepare ("SELECT * FROM user WHERE name = ? AND password = ? ");     
     

      $stmt->bind_param("ss", $Name, $Password);
      
      $stmt->execute();
      $result = $stmt->get_result();
      $row =$result->fetch_array();
      
      // if(!password_verify( $Password, $row['password']))  {
      //          echo "incorrect password";
      // }
      

      if($row["status"]=="student")
      
      {
        
        
  
      $_SESSION['username'] = $Name;
    
      header("location:student.php");
      }
      
      
    elseif($row["status"]=="lecturer")
 
      
      {
    
        $_SESSION['username'] = $Name;
        header("location:lecturer.php");
      }

    else{
      
       $message = "Name or Password is incorrect";
       $_SESSION['login'] =$message;
       header("location: login.php");
      }
      
   
      }

      }
