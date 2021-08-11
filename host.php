<?php
  
  $server="localhost";
  $username="root";
  $password="";
  $dbname = "custom_db";
  $conn=mysqli_connect($server, $username, $password, $dbname);
  if(!$conn){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  {
    echo "Connection Successful";
  }    
?>