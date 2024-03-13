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
  $sql = "select * from saleslider"; 
    $result = ($conn->query($sql)); 
    //declare array to store the data of database 
    $row = [];  
  

  
    if ($result->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row = $result->fetch_all(MYSQLI_ASSOC);   
    }   




 $sql2 = "select * from hpproduct1"; 
    $result2 = ($conn->query($sql2)); 
    //declare array to store the data of database 
    $row2 = [];  
  
    if ($result2->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row2 = $result2->fetch_all(MYSQLI_ASSOC);   
    } 




     $sql3 = "select * from hpproduct2"; 
    $result3 = ($conn->query($sql3)); 
    //declare array to store the data of database 
    $row3 = [];  
  
    if ($result3->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row3 = $result3->fetch_all(MYSQLI_ASSOC);   
    } 






     $sql4 = "select * from hpproduct3"; 
    $result4 = ($conn->query($sql4)); 
    //declare array to store the data of database 
    $row4 = [];  
  
    if ($result4->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row4 = $result4->fetch_all(MYSQLI_ASSOC);   
    } 



    $sql5 = "select * from hptoper"; 
    $result5 = ($conn->query($sql5)); 
    //declare array to store the data of database 
    $row5 = [];  
  
    if ($result5->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row5 = $result5->fetch_all(MYSQLI_ASSOC);   
    } 



    $sql6 = "select * from hpshoes"; 
    $result6 = ($conn->query($sql6)); 
    //declare array to store the data of database 
    $row6 = [];  
  
    if ($result6->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row6 = $result6->fetch_all(MYSQLI_ASSOC);   
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

	body{
background: whitesmoke;
	}


#gap{
padding: 0px 20px;
}

#gap2{
padding: 0px 10px;
}



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
}




.bg-opacity2{
    position: relative;
    background-color: #000;
}

.bg-opacity2::before{
    content: ' ';
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    opacity: 0.5;
    background:       url("https://images.bewakoof.com/t640/women-s-pink-better-better-graphic-printed-oversized-hoodies-629603-1705640337-1.jpg") no-repeat center center;
    background-size: cover;
}

.content2{
  position: relative;
  width: 100%;
  height: 500px;
}




.bg-opacity3{
    position: relative;
    background-color: #000;
}

.bg-opacity3::before{
    content: ' ';
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    opacity: 0.5;
    background:       url("https://images.bewakoof.com/t640/women-s-green-stoned-rick-morty-graphic-printed-oversized-hoodies-625467-1703688490-1.jpg") no-repeat center center;
    background-size: cover;
}

.content3{
  position: relative;
  width: 100%;
  height: 500px;
}




.bg-opacity4{
    position: relative;
    background-color: #000;
    color: white;
    padding: 90px 60px;
}

.bg-opacity4::before{
    content: ' ';
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    opacity: 0.2;
    background:       url("https://websitedemos.net/recycled-shoe-store-04/wp-content/uploads/sites/983/2021/11/recycled-shoe-store-how-shoes-are-made-image.png") no-repeat center center;
  
    background-size: cover;
}

.content4{
  position: relative;
  width: 100%;
  height:75%;

}

#pay{
font-size: 65px;
}




.cont_ainer{
			width: 100%;
			height: 500px;
			position: relative;
			color: white;
		}
		.cont_ainer img{
			width: 100%;
			height: 100%;
			filter: brightness(0.4);
		}
		.cont_text{
			position: absolute;
			top: 20px;
			left: 20px;
		}




.cont_ainer1{
			width: 100%;
			height: 550px;
			position: relative;
			color: white;
			background: #565657;
		}
		.cont_ainer1 img{
			width: 100%;
			height: 100%;
			filter: brightness(0.3);
		}
		.cont_text{
			position: absolute;
			top: 50px;
			left: 20px;
		}
/*responshive img
*/
		@media only screen and (max-width: 600px) {
			.cont_text{
			position: absolute;
			top: 50px;
			left: 50px;
			color: white;
		}
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
		<div class="col-md-12">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  	  <?php
  foreach ($row as $values) {
    ?>
    <?php
    if ($values['id'] == 1) {
    ?>
    <div class="carousel-item active">
      <img src="photo/<?php echo $values['image']; ?>" class="d-block w-100" alt="..." width="100%" height="500px">
    </div>
     <?php
    }
     else{
    ?>
    <div class="carousel-item">
      <img src="photo/<?php echo $values['image']; ?>" class="d-block w-100" alt="..." width="100%" height="500px">
    </div>

   <?php
     }
    ?>
 
   <?php
  }
  ?>

    <!-- <div class="carousel-item">
      <img src="https://www.farmery.in/uploads/home_banner/5750_1647001149/23-03-2022-2026391728-1648025647.jpg" class="d-block w-100" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
		</div>
	</div>
</div>

<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<img src="https://websitedemos.net/recycled-shoe-store-04/wp-content/uploads/sites/983/2021/11/recycled-shoe-store-featured-in-logo-2.svg" class="d-block w-100" alt="...">
			</div>
		<div class="col-md-2">
			<img src="https://websitedemos.net/recycled-shoe-store-04/wp-content/uploads/sites/983/2021/11/recycled-shoe-store-featured-in-logo-5.svg" class="d-block w-100" alt="...">
			</div>
			<div class="col-md-2">
			<img src="https://websitedemos.net/recycled-shoe-store-04/wp-content/uploads/sites/983/2021/11/recycled-shoe-store-featured-in-logo-4.svg" class="d-block w-100" alt="...">
			</div>
			<div class="col-md-2">
			<img src="https://websitedemos.net/recycled-shoe-store-04/wp-content/uploads/sites/983/2021/11/recycled-shoe-store-featured-in-logo-3.svg" class="d-block w-100" alt="...">
			</div>
			<div class="col-md-2">
			<img src="https://websitedemos.net/recycled-shoe-store-04/wp-content/uploads/sites/983/2021/11/recycled-shoe-store-featured-in-logo-2.svg" class="d-block w-100" alt="...">
			</div>
			<div class="col-md-2">
			<img src="https://websitedemos.net/recycled-shoe-store-04/wp-content/uploads/sites/983/2021/11/recycled-shoe-store-featured-in-logo-1.svg" class="d-block w-100" alt="...">
			</div>
		</div>
	</div>
<br>
<div class="container">
	<div class="row">
		<?php foreach ($row5 as $values5) {
		?>
		<div class="col-md-4">
			<div class="cont_ainer">
		<img src="photo/<?php echo $values5['image'];?>" class="img-fluid" alt="...">
	</div>
		</div>
	<?php 
      }
    ?>


	<!-- 	<div class="col-md-4">
			<div class="cont_ainer">
		<img src="https://images.bewakoof.com/t640/women-s-pink-better-better-graphic-printed-oversized-hoodies-629603-1705640337-1.jpg" class="card-img-top" alt="...">
	</div>
		</div>
		<div class="col-md-4">
			<div class="cont_ainer">
		<img src="https://images.bewakoof.com/t640/women-s-green-stoned-rick-morty-graphic-printed-oversized-hoodies-625467-1703688490-1.jpg" class="card-img-top" alt="...">
	</div>
		</div> -->
	</div>
</div>
<br>
<br><br>

<div style="background: #e3e3e3;" class="container-fluid">
	<br><br>
		<center>
		<h2><b>Featured Products</b> </h2>
	    </center>
	    <br>
	<div class="row">
		<?php foreach ($row2 as $values2) {

		?>
		<div class="col-md-2">
			<img src="photo/<?php echo $values2['image']; ?>" class="card-img-top" alt="...">
			<br><br>
			<b><?php echo $values2['brand'];?></b>
			<p><?php echo $values2['price'];?> </p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<!-- <div class="col-md-2">
			<img src="https://websitedemos.net/recycled-shoe-store-04/wp-content/uploads/sites/983/2021/11/recycled-shoe-product-image-010-400x400.jpg" class="card-img-top" alt="...">
			<br><br>
			<b>Women's Gray Runing</b>
			<p><del>$222.90 </del>$111.90</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<div class="col-md-2">
			<img src="https://websitedemos.net/recycled-shoe-store-04/wp-content/uploads/sites/983/2021/11/recycled-shoe-product-image-018-400x400.jpg" class="card-img-top" alt="...">
			<br><br>
			<b>Men's Black Training</b>
			<p><del>$269.60 </del>$179.40</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<div class="col-md-2">
			<img src="https://websitedemos.net/recycled-shoe-store-04/wp-content/uploads/sites/983/2021/11/recycled-shoe-product-image-011-400x400.jpg" class="card-img-top" alt="...">
			<br><br>
			<b>Men's Brown Training</b>
			<p><del>$349.40 </del>$250.20</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<div class="col-md-2">
			<img src="https://websitedemos.net/recycled-shoe-store-04/wp-content/uploads/sites/983/2021/11/recycled-shoe-product-image-004-400x400.jpg" class="card-img-top" alt="...">
			<br><br>
			<b>Women's Brown Runing</b>
			<p><del>$154.90 </del>$143.90</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<div class="col-md-2">
			<img src="https://websitedemos.net/recycled-shoe-store-04/wp-content/uploads/sites/983/2021/11/recycled-shoe-product-image-014-400x400.jpg" class="card-img-top" alt="...">
			<br><br>
			<b>Men's Liteblue Training</b>
			<p><del>$188.90 </del>$162.90</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div> -->
		<?php
	     }
	?>
	</div>
	<br><br>

	<div class="row">
		<?php foreach ($row3 as $values3) {
			?>
		<div class="col-md-2">
			<img src="photo/<?php echo $values3['image'];?>" class="card-img-top" alt="...">
			<br><br>
			<b><?php echo $values3['brand'];?> </b>
			<p><?php echo $values3['price'];?></p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
	<!-- 	<div class="col-md-2">
			<img src="https://images.bewakoof.com/t640/men-s-black-super-loose-fit-cargo-joggers-617399-1704456522-1.jpg" class="card-img-top" alt="...">
			<br><br>
			<b>Men's Black Joggers</b>
			<p><del>$229.90 </del>$199.90</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<div class="col-md-2">
			<img src="https://images.bewakoof.com/t640/women-s-grey-super-loose-fit-joggers-624654-1702644127-1.jpg" class="card-img-top" alt="...">
			<br><br>
			<b>Women's Gray Joggers</b>
			<p><del>$239.60 </del>$189.40</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<div class="col-md-2">
			<img src="https://images.bewakoof.com/t640/men-s-brown-super-loose-cargo-joggers-604162-1701758622-1.jpg" class="card-img-top" alt="...">
			<br><br>
			<b>Men's Dark Joggers</b>
			<p><del>$229.40 </del>$155.20</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<div class="col-md-2">
			<img src="https://images.bewakoof.com/t640/women-s-brown-super-loose-fit-joggers-624639-1702643492-1.jpg" class="card-img-top" alt="...">
			<br><br>
			<b>Women's smoke Joggers</b>
			<p><del>$255.90 </del>$166.90</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<div class="col-md-2">
			<img src="https://images.bewakoof.com/t640/women-s-green-super-loose-fit-joggers-605587-1703584194-1.jpg" class="card-img-top" alt="...">
			<br><br>
			<b>Women's Green Joggers</b>
			<p><del>$177.60 </del>$166.90</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div> -->
		<?php
	}
	?>
	</div>
<br><br>


	<div class="row">
		<?php foreach ($row4 as $values4) {
		?>
		<div class="col-md-2">
			<img src="photo/<?php echo $values4['image'];?>" class="card-img-top" alt="...">
			<br><br>
			<b><?php echo $values4['brand'];?></b>
			<p><?php echo $values4['price'];?></p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<!-- <div class="col-md-2">
			<img src="https://images.bestsellerclothing.in/data/only/march-25-2022/173779002_g1.jpg?width=380&height=500&mode=fill&fill=blur&format=auto" class="card-img-top" alt="...">
			<br><br>
			<b>Women's Gray Purs</b>
			<p><del>$89.90 </del>$69.90</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<div class="col-md-2">
			<img src="https://images.bestsellerclothing.in/data/only/10-jan-2023/284243101_g1.jpg?width=380&height=500&mode=fill&fill=blur&format=auto" class="card-img-top" alt="...">
			<br><br>
			<b>Women's Blue Purs</b>
			<p><del>$99.60 </del>$49.40</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<div class="col-md-2">
			<img src="https://images.bestsellerclothing.in/data/only/10-jan-2023/284243501_g1.jpg?width=380&height=500&mode=fill&fill=blur&format=auto" class="card-img-top" alt="...">
			<br><br>
			<b>Women's Black Purs</b>
			<p><del>$59.40 </del>$45.20</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<div class="col-md-2">
			<img src="https://images.bestsellerclothing.in/data/only/10-jan-2023/218401201_g1.jpg?width=380&height=500&mode=fill&fill=blur&format=auto" class="card-img-top" alt="...">
			<br><br>
			<b>Women's Gray Purs</b>
			<p><del>$55.90 </del>$46.90</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div>
		<div class="col-md-2">
			<img src="https://images.bestsellerclothing.in/data/only/10-jan-2023/284243602_g1.jpg?width=380&height=500&mode=fill&fill=blur&format=auto" class="card-img-top" alt="...">
			<br><br>
			<b>Women's Green Purs</b>
			<p><del>$77.60 </del>$66.90</p>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
			<i class="fa-regular fa-star"></i>
		</div> -->
		<?php
	}
	?>
	</div>
<br><br>	
</div>
<br><br><br>

<div class="container-fluid">
	<div class="row">
		<?php foreach ($row6 as $values6) {
		?>
		<div class="col-md-12">
   <div class="cont_ainer1">
		<img src="photo/<?php echo $values6['image'];?>" class="card-img-top" alt="...">
		<div class="cont_text">
   <h1><b><?php echo $values6['name'];?> </b></h1><br>
        <p><b><?php echo $values6['message'];?></b></p>
        <br>
        <h5><b><?php echo $values6['quality'];?></b> </h5>
        <br>
        <h1 style="font-size: 50px;"><b><i class="fa fa-phone"></i> <?php echo $values6['contact'];?></b> </h1>
      </div>
    </div>
    
  </div>
   <?php  
     }
      ?>
  
</div>
</div>
<br><br><br><br>


<div class="container">
	<div class="row">
		<div class="col-md-3">
			<center>
			<i id="pay" class="fa-brands fa-cc-apple-pay"></i>
			<br>
			<b>Account From Apple Pay</b>
			<p>The UPI transaction limit per day is Rs.1 lakh as per NPCI.</p>
			<i class="fa-regular fa-heart"></i>
			<i class="fa-regular fa-heart"></i>
			<i class="fa-regular fa-heart"></i>
			<i class="fa-regular fa-heart"></i>
		    </center>
		</div>

		<div class="col-md-3">
			<center>
			<i id="pay" class="fa-brands fa-cc-paypal"></i>
			<br>
			<b>Account From Pal Pay</b>
			<p>The UPI transaction limit per day is Rs.1 lakh as per NPCI.</p>
			<i class="fa-regular fa-heart"></i>
			<i class="fa-regular fa-heart"></i>
			<i class="fa-regular fa-heart"></i>
			<i class="fa-regular fa-heart"></i>
		    </center>
		</div>

		<div class="col-md-3">
			<center>
			<i id="pay" class="fa-solid fa-credit-card"></i>
			<br>
			<b>Credit Card From Pay</b>
			<p>The UPI transaction limit per day is Rs.1 lakh as per NPCI.</p>
			<i class="fa-regular fa-heart"></i>
			<i class="fa-regular fa-heart"></i>
			<i class="fa-regular fa-heart"></i>
			<i class="fa-regular fa-heart"></i>
		    </center>
		</div>

		<div class="col-md-3">
			<center>
			<i id="pay" class="fa-solid fa-money-check-dollar"></i>
			<br>
			<b>Check Dollar From Pay</b>
			<p>The UPI transaction limit per day is Rs.1 lakh as per NPCI.</p>
			<i class="fa-regular fa-heart"></i>
			<i class="fa-regular fa-heart"></i>
			<i class="fa-regular fa-heart"></i>
			<i class="fa-regular fa-heart"></i>
		    </center>
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