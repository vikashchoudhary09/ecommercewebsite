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

 
	$id = $_POST['id'];
	$title =$_POST['title'];
	$message =$_POST['message'];
	
	$new_image = $_FILES['image']['name'];
	$old_image_temp = $_FILES['image']['tmp_name'];

	
	if ($old_image_temp != "")
	 {
	   move_uploaded_file($old_image_temp , "photo/$new_image");
    $c_update="update salecontactpage set title='$title', message='$message',  image= '$new_image'
     where id='$id'";  	
	}

	else{
		    $c_update="update salecontactpage set  title='$title', message='$message'
     where id='$id'";

	}
   
$run_update=mysqli_query($conn, $c_update);
header("Location: salecontactpagerec.php");


?>