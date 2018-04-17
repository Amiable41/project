<?php 

if (isset($_POST["submit"])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pharmacy";

   $con= mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());
   
   
   $fn=$_POST["firstname"];
   $ln=$_POST["lastname"];
   $ppor=$_POST["passport"];
   $em=$_POST["email"];
   $cy=$_POST["city"];
   $db=$_POST["dob"];
   $sex=$_POST["gender"];
   $ph=$_POST["phone"];
   $usnam=$_POST["username"];
   $pwd=$_POST["password"];
   $ady=$_POST["address"];
   $nja=$_POST["country"];
   $depid=$_POST["department_Id"];
   $dehead=$_POST["department_head"];
   $des=$_POST["description"];
   $desid=$_POST["description_Id"];
   $dept=$_POST["department"]; 

  $sql = "INSERT INTO employees (firstname, lastname, passport, email,city, dob , gender, phone, username, password,address,country,department_Id)
  VALUES ('$fn','$ln','$ppor','$em','$cy','$db','$sex','$ph','$usnam', '$pwd','$ady','$nja','$depid')";  
  mysqli_query($con,$sql) or die(mysqli_error($con));
      
  $sql = "INSERT INTO department (department_head, department,department_Id,description_Id)
  VALUES ('$dehead','$dept','$depid','$desid')";
  mysqli_query($con,$sql) or die(mysqli_error($con));

  $sql = "INSERT INTO description (description,description_Id)
  VALUES ('$des','$desid')";
  mysqli_query($con,$sql) or die(mysqli_error($con));
     

     
  if(mysqli_affected_rows($con)>0){
      echo "You have successfuly registered!";

  }
   else{

        echo"Error has occured!";
  }
  $con->close();



}   


?>