<?php 
   
   $host_name = "127.0.0.1:3307";
   $database = "school"; 
   $username = "root";          
   $password = "";          
   

   try {
   $dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
   } catch (PDOException $e) {
   echo "Error!: " . $e->getMessage() . "<br/>";
   die();
   }
   ?>