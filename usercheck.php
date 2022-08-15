<?php 

session_start();
    
$con = mysqli_connect('localhost', 'root', '', 'school', 3307);
   
    
    if(isset($_POST['submit'])) {

    $name =     $_POST['name']; 
    $email =    $_POST['email'];
    $status =   $_POST['status'];
    $password = $_POST['password'];
    $Image =    $_FILES['image']; 
   

    if($name == "" or $email == ""  or $status == "" or $password == "" or $Image == "") //to check if the form is not left blank

   {
       $Message = "fill empty field";
        $_SESSION['user'] =$Message;
       header("location: user.php");
   }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
     
   {
    
   
    $Message = "Invalid email";
    $_SESSION['user'] =$Message;
   header("location: user.php");
   } 

   elseif(!preg_match("/^[a-zA-Z ]*$/", $name))

   {
   
     $Message = "Incorrect name";
     $_SESSION['user'] =$Message;
     header("location: user.php");

   }

   elseif(!preg_match("/^[LlEeCcTtUuRrsSDdNn ]*$/", $status)) 

  {
  
    $Message = "status should be as student/lecturer";
    $_SESSION['user'] =$Message;
   header("location: user.php");
     
   }

  //  elseif($password != ){

  //  }

        else{

            $img_loc  = $_FILES['image']['tmp_name'];
            $img_name = $_FILES['image']['name'];
            $imgerror = $_FILES['image']['error'];
            $imgsize  =  $_FILES['image']['size'];
            // $imgtype= $_FILES['image']['type'];

            
     
            $img_ext = explode('.', $img_name);
            $img_ext_check = strtolower(end($img_ext));
            $valid_img_ext = array('png', 'jpg', 'jpeg');  //type of image to be inserted, anything else will throw type of error in line 95
     
           
              if(in_array($img_ext_check, $valid_img_ext)) {
                if ($imgerror === 0) { 
                    if($imgsize < 10000000000) {  //for image size i.e mb size, that will be uploaded
                         $img_namenew = uniqid('', true).".". $img_ext_check;  //to prevent overwriting of images
                         
                             $img_des = "uploadimage/" .$img_namenew;
                              move_uploaded_file($img_loc,  $img_des);
     
                    } else {
       
                 $Message = "large file size";
                 $_SESSION['user'] =$Message;
                 header("location: user.php");
                    }
                } 
                    
                    else {
                  
              $Message = "error don dey";
              $_SESSION['user'] =$Message;
              header("location: user.php");

                }
             }
                    else {
                   
              $Message = "u no fit upload this file type";
              $_SESSION['user'] =$Message;
              header("location: user.php");
                }

                 $query= mysqli_query($con, "SELECT * FROM user WHERE email= '$email' ");
                if(mysqli_num_rows($query)>0) {
                  // if d email exists, it will throw error "email already exists";
                  $Message = "email already exist";
                  $_SESSION['user'] =$Message;
                  header("location: user.php");
                }
                else{

      $stmt = $con ->prepare ( "INSERT INTO user (name, email, status, password, image) VALUES (?, ?, ?, ?, ?)" );

       $passwordhash = password_hash($password, PASSWORD_DEFAULT);

        $stmt->bind_param("sssss", $name,  $email, $status, $passwordhash , $img_des);
        if ( $stmt->execute()) {
     
            
            

            $Message = "Registeration successful";
            $_SESSION['user'] =$Message; 
            header("location: user.php");
            
        }
        }
      
  
    }
}
