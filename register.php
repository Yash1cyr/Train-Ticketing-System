<?php
$servername = "localhost";
$username = "root";
$password = "yash@2002ip";
$dbname = "railways";



$Uname1  = $_POST['Uname1'];
$Name1  = $_POST['Name1'];
$password1 = $_POST['password1'];
$age = $_POST['age'];
$phone1 = $_POST['phone1'];
$Email = $_POST['Email'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO register (Username, PName, PPassword ,Age,Phone_No,Email)
VALUES ('$Uname1','$Name1','$password1','$age','$phone1','$Email')";

if ($conn->query($sql) === TRUE) {
    echo  "Registration Done Succesfully <script> location.href='Login1.html'; </script>"; 
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>