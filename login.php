<?php

 $Uname1 =  $_POST['Uname1'];
 $password1 = $_POST['password1'];
 
// Database Connection
$con = new mysqli("localhost","root","yash@2002ip","railways");
if($con->connect_error)
{
  die("Failed to connect : ".$con_connect_error);
} 
else{
  $stmt = $con->prepare("SELECT * from register where Username = '$Uname1' AND PPassword = '$password1'");
 
  $stmt->execute();
  $stmt_result = $stmt->get_result();
  if($stmt_result->num_rows > 0)
  {
       $data = $stmt_result->fetch_assoc();
       if($data['PPassword'] === $password1)
       {
         echo "<script> location.href='index.html'; </script>";

       }
       else
       {
         echo "<h2> Invalid Username or password";
       }
        }
  else{
    echo "<h2> Invalid Username and password </h2>";
  }
}
?>