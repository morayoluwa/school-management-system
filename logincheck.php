 <?php 
 session_start();
 error_reporting(0);


    
     $con = mysqli_connect('localhost', 'root', '', 'school', 3307);


     if(isset($_POST['submit']))

      {
       $email = $_POST['email'];
       $password = $_POST['password'];
       
       
      
      
       if($email == "" or $password == "" )


       {
           $message = "Please fill empty field";
           $_SESSION['login'] =$message;
        
           header("location: login.php");
       }

   
      else {
   

      $stmt = $con->prepare ("SELECT * FROM user WHERE email = ?  ");     
     
      
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();
      $row =$result->fetch_array();
      
      if(password_verify($password, $row['password'])){ /** the 'password' in small letter, is the password inside the database. */
      
      
     
      
      // $_SESSION["login_use"] = $name;//storing session inside id

      $_SESSION["login_user"] = $row['image'];  //storing image inside the session and displaying it in the student php page 

      $_SESSION["user"] = $row['id'];  //storing id in the session 
        
      
      if($row["status"] == "student") 
   
      {
       
      $_SESSION['solveurlissue'] = $email;  // this session is created to solve tthe issue of moving from one page to another thru d url

      header("location:student.php");
      }
      
      
    elseif($row["status"]=="lecturer")
 
      
      {
         
      

        $_SESSION['solveurlissue'] = $email;
        header("location:lecturer.php");
      }
      } //this "}" is d end of password verify bracket, that verifies password for login

    else{
      
       $message = "Name or Password is Incorrect";
       $_SESSION['login'] =$message;
       header("location: login.php");
      }
    
   
      }

      }
