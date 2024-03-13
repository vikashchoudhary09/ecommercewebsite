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

if(isset($_POST['submit'])){

$image=$_FILES['image']['name'];
$name=$_POST['name'];
$price=$_POST['price'];
$query="INSERT INTO bookproduct(image,name,price)VALUES('$image','$name','$price')";

$query_run= mysqli_query($conn,$query);


if ($query_run) {
	move_uploaded_file($_FILES["image"]["tmp_name"], "photo/".$_FILES["image"]["name"]);
	header('Location: bookproduct.php');
}
}
?>

