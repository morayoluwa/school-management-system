
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LOGIN FORM</title>

    <link rel="stylesheet" type="text/css" href="style.css">

   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="lib2.jpg" class="body_deg">
  <center>
      <div class="form_deg">

      <center class="title_deg">
      LOGIN 
    
      <h4> <?php error_reporting(0);  session_start(); session_destroy(); echo $_SESSION['login']; ?>   </h4>
    
      </center>
          <form action="logincheck.php" method="POST" class="login_form">
         
              <div>
             
                  <label class="label_deg">Name</label>
                  <input type="text" name="name" id="name" >
                  
                  
              </div>


              <div>
              <label class="label_deg">Password</label>
              <input type="password" name="password" id="password" >
               </div>

            
                
               <div>
                  <input class="btn btn-primary" type="submit" name="submit" value="login">
              </div>

          </form>
      </div>
  </center>

</body>
</html>
                
             

        

