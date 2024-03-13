<?php
$servername="localhost";
$username="root";
$password="";
$dbname="int";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
else{
    echo "";
}
  $sql = "select * from salecontactpage"; 
    $result = ($conn->query($sql)); 
    //declare array to store the data of database 
    $row = [];  
  
    if ($result->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row = $result->fetch_all(MYSQLI_ASSOC);   
    }  

?>



<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

<style>
	body{
background: whitesmoke;
	}
.nnv{

}

#gap{
padding: 0px 20px;
}

#gap2{
padding: 0px 10px;
}

/*

.bg-opacity{
    position: relative;
    background-color: #000;
}

.bg-opacity::before{
    content: ' ';
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    opacity: 0.5;
    background:       url("https://images.bewakoof.com/t640/women-s-purple-the-flintstones-let-s-rock-graphic-printed-oversized-sweatshirt-625476-1703685806-1.jpg") no-repeat center center;
    background-size: cover;
}

.content{
  position: relative;
  width: 100%;
  height: 500px;
}*/



.i1{
color: black;
}



.mobile{
height: 50%;
}

.big{
background: #edeffc;
}


.im{
width: 100%;

}

.demo{
padding: 0px 10px;
color: black;
}


#radioButtons{
  margin: 5px 0 10px 0;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #016a70;
  color: white;
  padding: 14px 20px;
  margin-top: 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #018c94;
}

textarea{
width: 100%;
}


iframe{

width: 100%;
}


.footer{
text-align: left;
}

</style>
</head>
<body>
<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light nnv">
  <a class="navbar-brand" href="sale.php"><img src="https://www.zohowebstatic.com/sites/zweb/images/productlogos/commerce.svg" height="40px;"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li id="gap" class="nav-item active">
        <a class="nav-link" href="sale.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li id="gap" class="nav-item active">
        <a class="nav-link" href="Mobiles.php">Mobiles</a>
      </li>
      <li id="gap" class="nav-item active">
        <a class="nav-link" href="books.php">Books</a>
      </li>
      <li id="gap" class="nav-item active">
        <a class="nav-link" href="menfashion.php">Men Fashion</a>
      </li>
      <li id="gap" class="nav-item active">
        <a class="nav-link" href="womanfashion.php">Woman Fashion</a>
      </li>
      <li id="gap" class="nav-item active">
        <a class="nav-link" href="salecontact.php">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     <h3><i id="gap2" class="fa-solid fa-truck-fast"></i></h3>
      <h3><i id="gap2" class="fa-solid fa-bag-shopping"></i></h3>
       <h3><i id="gap2" class="fa-solid fa-user"></i></h3>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ORDER NOW</button>
    </form>
  </div>
</nav>
			</div>
		</div>
	</div>
</header>
<br>
<div class="container-fluid">
	<div class="row">
		<?php foreach ($row as $values) {
			?>
		<div class="col-md-6">
			<img src="photo/<?php echo $values['image'];?>" class="d-block w-100" alt="...">
		</div>

		<div class="col-md-6">
			<h1><b><?php echo $values['title'];?></b> </h1>
			<br>
			<p><?php echo $values['message'];?></p>
		</div>
		<?php 
    }
		 ?>
		</div>
	</div>
<br><br>


<div class="container">
	<h1><b>Product Information</b></h1>
	<br><br>
	<div class="row">
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-2">
         <i class="fa-solid fa-circle-info ico"></i>
				</div>
				<div class="col-md-10">
					<b>ORDER ALERT</b>
					<p>It's a common practice to apply CSS to a page that styles elements such consistent across all browsers. We offer two of the most popular ..</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-2">
        <i class="fa-solid fa-clock ico"></i>
				</div>
				<div class="col-md-10">
					<b>CHECK-IN </b>
					<p> 04:00 PM </p>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">
         <i class="fa-regular fa-clock ico"></i>
				</div>
				<div class="col-md-10">
					<b>CHECK-IN </b>
					<p> 04:00 PM </p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-2">
         <i class="fa-solid fa-phone ico"></i>
				</div>
				<div class="col-md-10">
					<b>PHONE NUMBER </b>
					<p>(415) 123-4567 </p>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">
         <i class="fa-solid fa-blender-phone ico"></i>
				</div>
				<div class="col-md-10">
					<b>FEX NUMBER</b>
					<p> (415) 234-5678  </p>
				</div>
			</div>
		</div>
	<div class="col-md-3">
			<div class="row">
				<div class="col-md-2">
         <i class="fa-solid fa-ban-smoking ico"></i>
				</div>
				<div class="col-md-10">
					<b>SMOKIG </b>
					<p>No Smoking Product </p>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">
         <i class="fa-solid fa-dog ico"></i>
				</div>
				<div class="col-md-10">
					<b>PIT POLICY </b>
					<p> Pet Allowed: Yes </p>
				</div>
			</div>
		</div>
	</div>
</div>



<br><br><br><br>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<b>Reception Office</b><br><br>
			<h4><b>Address: 305, 3rd floorPink City2, Joshi Marg, Jhotwara, Jaipur, Rajasthan 302012</b> </h4>
			<br><br>

			<b>Return Policy</b>
			<br><br>
			<h4><b> 7 Days Replacement</b></h4>
			<br><br>

			<b>Contact</b><br><br>
			<h4><b>+91 -9901122998<br>
				ecommerec@gmail.com
			</b> </h4>
			<br><br>

			<b>Follow Us</b><br><br>
			<a href="#"><h4>
            <i class="fa-brands fa-instagram demo" style="font-size:24px"></i>
            <i class="fa-brands fa-whatsapp demo" style="font-size:24px"></i>
            <i class="fa-brands fa-facebook-f demo" style="font-size:24px"></i>
            <i class="fa-brands fa-twitter demo" style="font-size:24px"></i>
            </h4></a>
			<br><br>
		</div>

		<div class="col-md-6">
			<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300&display=swap" rel="stylesheet">

<div>
  <form method="post" action="salecontactinsert.php">

   <label>Name</label>
    <input type="text" id="name" name="name" placeholder="Your name...">
    
    <label>Email </label>
    <input type="text" id="email" name="email" placeholder="Your Email...">

    <label>Subject  </label>
    <input type="text" id="subject " name="subject" placeholder="Your Subject ...">

    <label>Message</label><br>
    <textarea name="message" placeholder="Your massage"></textarea><br><br>
    
  
    <input type="submit" value="Submit">
  </form>
</div>
		</div>
	</div>
</div>

<br><br>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1778.7206320303708!2d75.74231799691921!3d26.921222119794475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db3940870d993%3A0xc7869cf565d1f1ba!2sThe%20Maharaja%20Made%20for%20Royalty!5e0!3m2!1sen!2sin!4v1705044040240!5m2!1sen!2sin" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>


<br><br>
 <footer class="footer" style="background:gray;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 mt-4 col-lg-3 text-center text-sm-start">
                <div class="information">
                    <h6 class="footer-heading text-uppercase text-white fw-bold footer">Information</h6>
                    <ul class="list-unstyled footer-link mt-4">
                        <li class="mb-1 footer"><a href="#" class="text-white text-decoration-none fw-semibold">Events</a></li>
                        <li class="mb-1 footer"><a href="#" class="text-white text-decoration-none fw-semibold">Our Team</a></li>
                        <li class="mb-1 footer"><a href="#" class="text-white text-decoration-none fw-semibold">Upcoming Sale</a></li>
                        <li class="footer"><a href="#" class="text-white text-decoration-none fw-semibold">New Launches</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mt-4 col-lg-3 text-center text-sm-start">
                <div class="resources">
                    <h6 class="footer-heading text-uppercase text-white fw-bold footer">Resources</h6>
                    <ul class="list-unstyled footer-link mt-4">
                        <li class="mb-1 footer"><a href="#" class="text-white text-decoration-none fw-semibold">API</a></li>
                        <li class="mb-1 footer"><a href="#" class="text-white text-decoration-none fw-semibold">Website Tutorials</a></li>
                        <li class="mb-1 footer"><a href="#" class="text-white text-decoration-none fw-semibold">Third Party</a></li>
                        <li class=" footer"><a href="#" class="text-white text-decoration-none fw-semibold">Video Lectures</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mt-4 col-lg-3 text-center text-sm-start">
              <div class="social">
                  <h6 class="footer-heading text-uppercase text-white fw-bold footer">Social</h6>
                  <ul class="list-inline my-4 footer">
                    <li class="list-inline-item"><a href="#" class="text-white btn-sm btn btn-primary mb-2"><i class="fa-brands fa-square-instagram ico1"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-danger btn-sm btn btn-light mb-2"><i class="fa-brands fa-twitter ico1"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-white btn-sm btn btn-primary mb-2"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-white btn-sm btn btn-success mb-2"><i class="fa-brands fa-square-whatsapp ico1"></i></a></li>
                </ul>
              </div>
              <div class="social">
                  <ul class="list-inline my-4 footer">
                    <li class="list-inline-item"><a href="#" class="text-white btn-sm btn btn-primary mb-2"><i class="fa-brands fa-telegram ico1"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-danger btn-sm btn btn-light mb-2"><i class="fa-solid fa-location-dot ico1"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-white btn-sm btn btn-primary mb-2"><i class="fa-solid fa-location-dot ico1"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-white btn-sm btn btn-success mb-2"><i class="fa-solid fa-envelope ico1"></i></a></li>
                </ul>
              </div>
          </div>


            <div class="col-sm-6 col-md-4 mt-4 col-lg-3 text-center text-sm-start">
              <div class="contact">
                  <h6 class="footer-heading text-uppercase text-white fw-bold footer">Contact Us</h6>
                  <address class="mt-4 m-0 text-white mb-1 footer"><i class="bi bi-pin-map fw-semibold"></i> New South Block , Phase 8B , 160055</address>
                  <a href="#" class="text-white mb-1 text-decoration-none d-block fw-semibold footer"><i class="bi bi-telephone"></i>  909090XXXX</a>
                  <a href="#" class="text-white mb-1 text-decoration-none d-block fw-semibold footer"><i class="bi bi-envelope"></i> xyzdemomail@gmail.com</a>
                  <a href="#" class="text-white mb-1 text-decoration-none d-block fw-semibold footer"><i class="bi bi-envelope"></i> xyzdemomail</a>
              </div>
            </div>


        </div>
    </div>
    <div class="text-center bg-dark text-white mt-4 p-1">
        <p class="mb-0 fw-bold">2023 © Gaurav Rana, All Rights Reserved</p>
    </div>
  </footer>


</body>
</html>