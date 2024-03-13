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
  $sql = "select * from menfslider"; 
    $result = ($conn->query($sql)); 
    //declare array to store the data of database 
    $row = [];  
  
    if ($result->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row = $result->fetch_all(MYSQLI_ASSOC);   
    }  




     $sql2 = "select * from menfproduct"; 
    $result2 = ($conn->query($sql2)); 
    //declare array to store the data of database 
    $row2 = [];  
  
    if ($result2->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row2 = $result2->fetch_all(MYSQLI_ASSOC);   
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

<div class="container-fluid">
	<div class="row">
		<?php foreach ($row as $values) {
			?>
		<div class="col-md-12">
			<img src="photo/<?php echo $values['image'];?>" style="width: 100%;" class="img-fluid" alt="...">
		</div>
		<?php
	}
	?>
	</div>
</div>

<br><br>
<div class="container-fluid">
	<div class="row">
		<?php foreach ($row2 as $values2) {
			?>
		<div class="col-md-3 border">
			<center>
			<img style="height:400px" src="photo/<?php echo $values2['image'];?>" class="img-thumbnail" alt="...">
			<br><br>
			<b><?php  echo $values2['name'];?></b>
			<p><?php  echo $values2['price'];?></p>
			<button class="btn btn btn-outline-success">add to card</button>
		</center>
		<br>
		</div>
	<!-- 	<div class="col-md-3 border">
			<center>
			<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/0/5/tr:w-250,/05c7a3aHZ-S-BROWN_1.jpg?rnd=20200526195200" class="img-thumbnail" alt="...">
			<br><br>
			<b>The Best men's Shadow Work </b>
			<p>$999</p>
			<button class="btn btn btn-outline-success">add to card</button>
		</center>
		<br>
		</div>
		<div class="col-md-3 border">
			<center>
			<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/0/5/tr:w-250,/05c7a3aHZ-S-BROWN_1.jpg?rnd=20200526195200" class="img-thumbnail" alt="...">
			<br><br>
			<b>The Best men's Shadow Work </b>
			<p>$999</p>
			<button class="btn btn btn-outline-success">add to card</button>
		</center>
		<br>
		</div>
		<div class="col-md-3 border">
			<center>
			<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/0/5/tr:w-250,/05c7a3aHZ-S-BROWN_1.jpg?rnd=20200526195200" class="img-thumbnail" alt="...">
			<br><br>
			<b>The Best men's Shadow Work </b>
			<p>$999</p>
			<button class="btn btn btn-outline-success">add to card</button>
		</center>
		<br>
		</div>
		<div class="col-md-3 border">
			<center>
			<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/0/5/tr:w-250,/05c7a3aHZ-S-BROWN_1.jpg?rnd=20200526195200" class="img-thumbnail" alt="...">
			<br><br>
			<b>The Best men's Shadow Work </b>
			<p>$999</p>
			<button class="btn btn btn-outline-success">add to card</button>
		</center>
		<br>
		</div>
		<div class="col-md-3 border">
			<center>
			<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/0/5/tr:w-250,/05c7a3aHZ-S-BROWN_1.jpg?rnd=20200526195200" class="img-thumbnail" alt="...">
			<br><br>
			<b>The Best men's Shadow Work </b>
			<p>$999</p>
			<button class="btn btn btn-outline-success">add to card</button>
		</center>
		<br>
		</div>
		<div class="col-md-3 border">
			<center>
			<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/0/5/tr:w-250,/05c7a3aHZ-S-BROWN_1.jpg?rnd=20200526195200" class="img-thumbnail" alt="...">
			<br><br>
			<b>The Best men's Shadow Work </b>
			<p>$999</p>
			<button class="btn btn btn-outline-success">add to card</button>
		</center>
		<br>
		</div>
		<div class="col-md-3 border">
			<center>
			<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/0/5/tr:w-250,/05c7a3aHZ-S-BROWN_1.jpg?rnd=20200526195200" class="img-thumbnail" alt="...">
			<br><br>
			<b>The Best men's Shadow Work </b>
			<p>$999</p>
			<button class="btn btn btn-outline-success">add to card</button>
		</center>
		<br>
		</div>
		<div class="col-md-3 border">
			<center>
			<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/0/5/tr:w-250,/05c7a3aHZ-S-BROWN_1.jpg?rnd=20200526195200" class="img-thumbnail" alt="...">
			<br><br>
			<b>The Best men's Shadow Work </b>
			<p>$999</p>
			<button class="btn btn btn-outline-success">add to card</button>
		</center>
		<br>
		</div>
		<div class="col-md-3 border">
			<center>
			<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/0/5/tr:w-250,/05c7a3aHZ-S-BROWN_1.jpg?rnd=20200526195200" class="img-thumbnail" alt="...">
			<br><br>
			<b>The Best men's Shadow Work </b>
			<p>$999</p>
			<button class="btn btn btn-outline-success">add to card</button>
		</center>
		<br>
		</div>
		<div class="col-md-3 border">
			<center>
			<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/0/5/tr:w-250,/05c7a3aHZ-S-BROWN_1.jpg?rnd=20200526195200" class="img-thumbnail" alt="...">
			<br><br>
			<b>The Best men's Shadow Work </b>
			<p>$999</p>
			<button class="btn btn btn-outline-success">add to card</button>
		</center>
		<br>
		</div>
		<div class="col-md-3 border">
			<center>
			<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/0/5/tr:w-250,/05c7a3aHZ-S-BROWN_1.jpg?rnd=20200526195200" class="img-thumbnail" alt="...">
			<br><br>
			<b>The Best men's Shadow Work </b>
			<p>$999</p>
			<button class="btn btn btn-outline-success">add to card</button>
		</center>
		<br>
		</div>
	</div> -->
	<?php
}
?>
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