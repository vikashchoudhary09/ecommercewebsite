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
	$new_image = $_FILES['image']['name'];
	$old_image_temp = $_FILES['image']['tmp_name'];

	
	if ($old_image_temp != "")
	 {
	   move_uploaded_file($old_image_temp , "photo/$new_image");
    $c_update="update saleslider set image= '$new_image'
     where id='$id'";  	
	}

	/*else{
		    $c_update="update mobileslider set  brand='$brand', price='$price'
     where id='$id'";

	}*/
   
$run_update=mysqli_query($conn, $c_update);
header("Location: salesliderrec.php");


?>