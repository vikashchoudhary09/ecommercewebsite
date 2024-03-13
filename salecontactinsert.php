<?php
$servername="localhost";
$username="root";
$password="";
$dbname="int";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection failed:".$conn->connect_error);
}
else{
echo "connection successfully";
}

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql="INSERT INTO salecontact(name,email,subject,message)VALUES('$name','$email','$subject','$message')";
  if($conn->query($sql)===TRUE){
header("location:salecontact.php");
 }
 else{
 	echo "error in table";
 	$conn->error;
 }
 $conn->close();
?>
