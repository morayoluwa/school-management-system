<?php
session_start();

if(!isset($_SESSION['username'])) 
{
  header("location: login.php");
}

session_start();
session_destroy();

header("location:login.php");