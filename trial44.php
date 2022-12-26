<?php
if(isset($_POST['pay']))  
{  
$host="localhost";//host name  
$username="root"; //database username  
$word="yash@2002ip";//database word  
$db_name="railways";//database name  
$tbl_name="bookticket"; //table name  
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string

$tnumber = $_POST['tnumber'];
$tname = $_POST['tname'];
$source1 = $_POST['source1'];
$dest = $_POST['dest'];
$date1 = $_POST['date1'];
$class1 = $_POST['class1'];
$tfare = $_POST['tfare'];
$checkbox1=$_POST['payment'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($con,"insert into bookticket(Train_No,Train_Name,Source,Destination,Booking_date,Class,Total_Fare,Payment_Mode) VALUES ('$tnumber','$tname','$source1','$dest','$date1','$class1','$tfare','$chk')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Ticket booked Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}  
?>  