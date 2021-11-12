<?php 
  define("HOST","localhost");
  define("UNAME","root");
  define("PASSWORD","");
  define("DBNAME","assignment");
  $conn=mysqli_connect(HOST,UNAME,PASSWORD,DBNAME) or die("Connection Error");
?>