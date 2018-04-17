<?php include 'pharmacy.php'
//check for required fields from the form
if ((!isset($_POST['Username'])) || (!isset($_POST['Password']))) {
//header("Location: userlogin.html");
exit;
 }
 //connect to server and select database
$mysqli = mysqli_connect("localhost", "root", "", "users")
or die(mysqli_error());
//use mysqli_real_escape_string to clean the input
$username = mysqli_real_escape_string($mysqli, $_POST['Username']);
$password = mysqli_real_escape_string($mysqli, $_POST['Password']);
//create and issue the query
$sql = "SELECT First name, Last name FROM employees WHERE
username = '".$Username."' AND password = '".$Password."'";
mysqli_query($connect,"insert into     employees(First name,Last name,department,Email)
 values('$First_name','$Last_name','$Username','$Email','$Phone','$DOB','$Gender','$Address','$Country','$City')");
$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

//get the number of rows in the result set; should be 1 if a match
if (mysqli_num_rows($result) == 1) {
//if authorized, get the values of f_name l_name
while ($info = mysqli_fetch_array($result)) {
$f_name = stripslashes($info['f_name']);
$l_name = stripslashes($info['l_name']);


}
//set authorization cookie
 setcookie("p", "1", 0, "/", "localhost", 0);

 //create display string
 $display_block = "<p>".$f_name." is authorized!</p>
 <ul>
 <li><a href=\"secret.php\">secret page</a></li>
 </ul>";
 } else {

 //redirect back to login form if not authorized
 header("Location: userlogin.html");
 exit;
 }
//close connection to MySQL
 mysqli_close($mysqli);
 ?>