
<?php
if(isset($_POST['Book']))
{
$host="localhost";//host name  
$username="root"; //database username  
$word="yash@2002ip";//database word  
$db_name="railways";//database name  
$tbl_name="freigthbook"; //table name  
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string

$oname = $_POST['oname'];
$cname = $_POST['cname'];
$phone2 = $_POST['phone2'];
$address = $_POST['address'];
$gstin = $_POST['gstin'];
$email = $_POST['email'];
$source2 = $_POST['source2'];
$dest2 = $_POST['dest2'];
$qty = $_POST['qty'];
$date2 = $_POST['date2'];
$checkbox1=$_POST['fpay'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }
   $in_ch=mysqli_query($con,"insert into freightbook (Owner_Name,Company_Name,Phone_No,Address,GST_IN,Email,Source,Destination,Quantity,Dateofloading,Payment_Mode) VALUES ('$oname','$cname','$phone2','$address','$gstin','$email','$source2','$dest2','$qty','$date2','$chk1')");  
if($in_ch==1)  
   {  
      echo'<script>alert(" Your Freight Wagon  booked Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Booked Wagon")</script>';  
   }  
}
?>