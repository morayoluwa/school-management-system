<!DOCTYPE html>
<html>  
<head>  
    <meta charset="utf-8">
    <title>School management system</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>  
<body>
 <nav> 

     <label class="logo"> Obafemi Awolowo University </label>
   
     <ul> 
         <li><a href="login.php" class= "btn btn-success">login as user</a></li>
    </ul>

     <center>
      <h1>Registration</h1>
      
      <!-- i want to give colour to my error messages -->
      <div style='color: #000;' >  <h4> <?php  error_reporting(0);  session_start(); session_destroy(); echo  $_SESSION['user']; ?>    </h4>   </div>
     
  </center>

  <div align="center" class="Login">
      <form action="usercheck.php" method="post"  enctype="multipart/form-data"> 
          <input type ="hidden" >
           <div class="log"> 
        
              <label class="label_text">Name   </label> 
              <input class= "input_deg" type="text" name="name" id="name">
            
           </div>
         

           <div class="log">
              <label  class="label_text">Email</label>
              <input class= "input_deg" type="text" name="email" id="email">
           </div>


           <div class="log">
              <label  class="label_text">Status</label>
              <input class= "input_deg" type="text" name="status" id="status">
           </div>
           
           
           <div class="log">
              <label  class="label_text">Password</label>
              <input class= "input_deg" type="password" name="password" id="password">
           </div>



           
           <!-- <div class="log">
              <label  class="label_text">Confirm password</label>
              <input class= "input_deg" type="cpassword" name="cpassword" id="cpassword">
           </div> -->





           <div class="log">
              <label  class="label_texte"> Image </label>  
              <input class= "input_deg" type="file" name="image" id="image">
           </div>


       


           <div class="log">
           <input class="btn btn-primary" type="Submit" name="submit" value="submit" >
           </div>
         

           </form>

        
 </nav>
  <div class="section1">
     
    <label class="img_txt"> FOR LEARNING AND CULTURE</label>
    <img class= "main_img" src="3.png">
  </div>
    


  </div>
  </div>

 
  </div>
</body>
</html>