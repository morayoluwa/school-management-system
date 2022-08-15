<?php 
$con = mysqli_connect('localhost', 'root', '', 'school', 3307);

session_start();

if(isset($_POST['submit']))
{
    $course = $_POST['courses'];
    // var_dump($course); //use to check for issue with d code
    // exit;
     
    // $query = "INSERT into ge (name) values ( '$course')";
    // $query_run = mysqli_query($con, $query);
    
    if($course == "") //to check if course is not picked

    {
        $Message = "choose a course";
         $_SESSION['course'] =$Message;
        header("location: choosecourse.php");
    }

    // var_dump($_SESSION);
    // exit;
    $user = id;
    $user = $_SESSION['user'];
    // $_SESSION["user"] = $row['id'];
     
    

    $stmt = $con ->prepare ( "INSERT INTO regcourse ( course, user) VALUES (?, ?)" );
    //how to make a user login with his/her ID and also pick a course 
    // an ID for a course.   


      

        $stmt->bind_param("ii", $user, $course);
        
    //     var_dump($user,$course); //use to check for issue with d code
    // exit;
        if ($stmt->execute()) {
            $message = "Successfully uploaded";
            $_SESSION['course'] =$message;
            // $_SESSION["user"];
            header("location: choosecourse.php");
        }
    }
    
    
