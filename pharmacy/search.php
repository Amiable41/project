<?php
 if (isset($_GET["submit"])) {
    
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "pharmacy";
    // create connection
  $con=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());
  // checking connection
  if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  echo "connection sucessful";
  

  // mysqli_select_db("tutorial_searchpharmacy") or die(mysqli_error());
    



}
?>