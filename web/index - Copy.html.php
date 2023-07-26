<?php 
//session_start();
include('db_conn.php');
include 'head1.php';
 ?>
<!doctype html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap-combined.no-icon.min1.css">
	<link rel="icon" href="tree1.png" type="image/icon">

	<link href="css/bootstrapss.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">

	<!-- <link rel="stylesheet" href="css/bootstrap-combined.no-icons.min1.css"> -->

	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

    <style>
           @font-face{
            font-family: Myfont;
            src : url('Opensans-SemiBold.ttf');
        } 
	body{
		font-family:myfont;
		
		
	}



/* On screens that are 600px or less, set the background color to olive */
@media screen and (max-width: 600px) {
  body {

  }}
  @media (min-width: 1400px){
.container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width: 1279px;
}
}
	html{
		scroll-behavior:smooth;
	}
/*--//responsive--*/
	
body::-webkit-scrollbar {
    width: 10px;
}
 
body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
	background-color:ghostwhite;
	border-radius: 10px;
}
 
body::-webkit-scrollbar-thumb {
    border-radius: 10px;
	background-color:yellowgreen;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}    
    </style>


  <!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->

   <link rel="stylesheet" href="css/PracticeAES.css">

 

   <!--JAVA SCRIPT-->
   <script language="javascript">
function SelectRedirect(){
// ON selection of section this function will work
//alert( document.getElementById('s1').value);

switch(document.getElementById('agileinfo-nav_search').value)
    	{
    		case "Plants":
    		window.location="category/All_Plants.php";
			break;

    		case "Seeds":
    		window.location="category/All_seeds.php";
    		break;
            
    		case "Soil & Furtilizer":
    		window.location="category/fertilizers.php";
    		break;	

    		case "Gardening Accessories":
    		window.location="category/accessory.php";
    		break;
    		/// Can be extended to other different selections of SubCategory //////
    		default:
    		window.location="index.php"; // if no selection matches then redirected to home page
    		break;
    	}// end of switch 
    }
///////


		//Get the button

</script>
<style>
.col-md-8 header
{
	margin-top:10px;
	margin-left:-1%;
}
.men-thumb-item img{
	border-radius: 20px;
    border: 5px solid lightgray;
}
/* .product-sec1
{
	height: 10%;
} */
.bg-right-nut h3{
	padding: 4%;
    width: 100%;
    font-size: 158%;
    background-color: #ffffffc7;
    border-radius: 14px;
 }

 
.bg-right-nut input{
  /* background-color: #009a065e; */
    color: white;
    padding: 3% 5%;
    margin: 10px 0;
    border: 4px solid yellowgreen;;
    width: 100%;
    border-radius: 46px;
    cursor: pointer;
    font-size: 17px;
    transition: all 3s ease;
    /* background-image: linear-gradient( 
45deg
 , tomato, #ffdf6a); */
}

.bg-right-nut input:hover {
  transform: scale(1.1); 
/*   
  background-image: linear-gradient( 
45deg
 , tomato, #ffdf6a); */
 color:white;

    border: 4px solid  tomato;
}

.bg-right-nut {
     text-align:center;
     margin-top: 20px;
 }
 .bg-right-nut img{
    border: 5px solid white;
    padding: 2%; 
    margin-top: 10%;
    border-radius: 21px;
    }

	.bg-right-nut input {
		color: black;
		background-image: linear-gradient( 45deg, tomato, #ffdf6a);
  animation-name: example;
  animation-duration: 2s;
  animation-delay: 1s;
  animation-iteration-count: infinite;
  animation-direction: alternate;  
}

@keyframes example {
	0%   {background-image: linear-gradient(45deg, tomato, #ffdf6a);}
  20%  {background-image: linear-gradient(45deg, #47ff91, #6a9fff);}
  40%  {background-image: linear-gradient(45deg, #c947ff, #6ae3ff);}
  60%  {background-image: linear-gradient(45deg, #6aee8b, #f8fa8ff2);}
  80% {background-image: linear-gradient(45deg, #b75eed, #e1ff6af2);}
  100% {background-image: linear-gradient(45deg, #ff9595, #6af5fff2);}
}
.product-men:hover{
	
	transform: scale(.95);
}


@media screen and (min-width: 500px) {
body{
    font-size: 89%;
  }
}

@media screen and (max-width: 600px) {
  body{
    font-size: 10px;
  }
}

@media screen and (min-width: 500px) {
.cat-det li,p{
    font-size: 82%;
	font-weight: 600;
  }
}

@media screen and (max-width: 600px) {
 .cat-det li,p{
    font-size: 60%;
	letter-spacing:0px;
  }
}
@media screen and (min-width: 500px) {
	.effect-bg h6 {
    font-size: 110%;
	font-weight: 600;
  }
}

@media screen and (max-width: 600px) {
	.effect-bg h6 {
    font-size: 93%;
	letter-spacing:0px;
  }
}   
	 
	@media screen and (min-width: 500px) {
		.bg-right-nut input {
			font-size: 83%;
    letter-spacing: 2px;
			font-weight:bold;
  }
}

@media screen and (max-width: 600px) {
	.bg-right-nut input{
		font-size: 75%;
    letter-spacing: 0px;
  }
} 
@media screen and (min-width: 500px) {
	.bg-right-nut h3{
			font-size: 190%;
    letter-spacing: 2px;
			font-weight:bold;
  }
}

@media screen and (max-width: 600px) {
	.bg-right-nut h3{
		font-size: 100%;
    letter-spacing: 0px;
  }
}
</style>





    <title>Green Leaf Nursery</title>
  </head>
  <body>
 
<!--coment-->
<div class="clearfix"></div>
	<!-- banner -->
<div id="carouselExampleCaptions" class="carousel slide" style="width:100%;" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/sli-1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Best Price and good Quality Product Plant</h1>
        <p>We Provide you best product category on here..</p>
        <a class="button2" href="category/All_Plants.php" >Shope now</a>  
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/sli-2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Want Low price Seeds</h1>
        <p>Four major category Seeds are here..</p>
        <a class="button2" href="category/All_seeds.php" >CLick me now</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="real.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>We provide Cash On Delivery Services </h1>
        <p>we provide cash on delivery services only which was wide area</p>
        <a class="button2" href="services.php" >Show me services</a>  
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
  <span class="visually-hidden">Next</span>
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
   
  </a>
</div>

<br>


 <div class="ads-grid">
     <div class="container">
			<h3 class="tittle-w3l" style=""> Our Top Products 
				<span class="heading-style" style="">
                    <i></i>
				
                    <i></i>
                    
					<i></i>

				</span> 
			</h3>   	
		<!-- </center> -->
			<!-- product right -->
			<?php

			$query = "SELECT * FROM home WHERE no=1";
				$select_all_posts_query = mysqli_query($conn,$query);


			    while($row = mysqli_fetch_assoc($select_all_posts_query)){
				$post_cat = $row['name'];
				$post_link = $row['link'];
				$post_land = $row['land'];
				}
			
			
			
			$query = "SELECT * FROM plants WHERE category='$post_cat' LIMIT 3";
			$select_all_posts_query = mysqli_query($conn,$query);
		
			?>
			<div class="agileinfo-ads-display col-md-12">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1 ">
						<h3 class="heading-tittle">Top Plants</h3>

							<?php  
    						while($row = mysqli_fetch_assoc($select_all_posts_query)){
							
							$post_id = $row['id'];
    						$post_name = $row['name'];
    						$post_image = $row['image'];
    						$post_price = $row['price'];
    						$post_del_price = $row['del_price'];
						
							$rest = substr($post_name, 0, 22);
							
							
    						?>
			
						
						
						
						
						<div class="col-md-4 product-men ">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
										<br><img class="img-responsive" src="category/imgs/<?php echo $post_image;?>" alt="Nooooo">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="category/product.php?myid=<?php echo $post_id; ?>" class="link-product-add-cart ">Quick View</a>
										</div>
									</div>
									<span class="product-new-topP">New</span>
								</div>
								<div class="item-info-product ">
									<h4>

										<a href="category/product.php?myid=<?php echo $post_id; ?>"><?php echo $rest;?></a>
										<p>
										   <br>
									       <?php echo $post_price;?>₹
										   <br>
										   (MRP Inclusive of all taxes)
										   <br>
											Shipping Rs 79 for entire order
											<br>
										    Dispatch in 5-8 days
											<br>
											Country of origin: India
										</p>
									</h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo $post_price;?>₹</span>
										<del><?php echo $post_del_price;?> ₹</del>&ensp;
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="" method="post">
											<fieldset>
											<a href="category/product.php?myid=<?php echo $post_id; ?>" class="link-product-add-cart img-responsive">Quick View</a>
											<!-- <input type="submit" action="" name="submit" value="Show Me" class="button" > -->
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						
						<?php } ?>
					 <div class="clearfix"></div></div>
					 <br>
				<!-- </div></div> -->
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					<div class="product-sec3 product-sec2">
						<div class="col-xs-6 effect-bg" >
							<h3>Green Leaf Services</h3>
							<br>
							
							

							<div class="well">
							<?php $q ="SELECT * FROM services";
								$select_post = mysqli_query($conn,$q);
									$c=0;
								  while($row = mysqli_fetch_assoc($select_post))
								  {
									  $c=$c+1;
									  $nm=$row['sname'];
									  $det=$row['sdetail'];
								  ?>
								  	<div class="cat-det">
								  		<ul>
											<li><?php echo $c.") ".$nm;?></li>
										</ul>
											<p><?php echo "- ".$det;?></p>  
								  </div>		
								  <?php } ?>
							</div>
							<h6>- We Providing some major services on low cost.</h6>
							<h6>- Here, Out services</h6> 
						</div>
						
				
						<div class="col-xs-6 bg-right-nut">
						
						<img src="beautiful-woman-works-garden-near-house.jpg" width="100%" class="img-responsive" alt="" style=" ">
						<br>	
						<h3>If you interested...</h3>
						<br>
						<a href="services.php"><input name="submit" type="submit" value="Click here for getting service" class=""></a>
						</div>

						<div class="clearfix"></div>
					</div>
					<!-- //second section (nuts special) -->
					<!-- third section (oils) -->
					<?php


$query = "SELECT * FROM home WHERE no=2";
$select_all_posts_query = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($select_all_posts_query)){
$post_cat = $row['name'];
$post_link = $row['link'];
$post_land = $row['land'];
}


$query = "SELECT * FROM seeds WHERE category='$post_cat' LIMIT 3";
$select_all_posts_query = mysqli_query($conn,$query);


?>
		
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Top Seeds</h3>

			<?php  
    while($row = mysqli_fetch_assoc($select_all_posts_query)){

	$post_id = $row['id'];
    $post_name = $row['name'];
    $post_image = $row['image'];
    $post_price = $row['price'];
    $post_del_price = $row['del_price'];

	$rest = substr($post_name, 0, 21);


    ?>
			
					
						
						
						
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
										<br><img class="img-responsive" src="category/imgs/<?php echo $post_image;?>" alt="Nooooo">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="category/seeds.php?myid=<?php echo $post_id; ?>" class="link-product-add-cart img-responsive">Quick View</a>
										</div>
									</div>
										<span class="product-new-topP">New</span>
								</div>
								<div class="item-info-product ">
									<h4>

										<a href="category/seeds.php?myid=<?php echo $post_id; ?>"><?php echo $rest;?></a>
											<p>
										   <br>
									       <?php echo $post_price;?>₹
										   <br>
										   (MRP Inclusive of all taxes)
										   <br>
											Shipping Rs 79 for entire order
											<br>
										    Dispatch in 5-8 days
											<br>
											Country of origin: India
											</p>
									</h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo $post_price;?>₹</span>
										<del><?php echo $post_del_price;?> ₹</del>&ensp;
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="" method="post">
											<fieldset>
											<a  href="category/seeds.php?myid=<?php echo $post_id; ?>" class="link-product-add-cart img-responsive">Quick View</a>
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>


				<?php } ?>
						<div class="clearfix"></div>
						<br>
	</div></div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
				


						<?php

	$query = "SELECT * FROM home WHERE no=3";
	$select_all_posts_query = mysqli_query($conn,$query);


    while($row = mysqli_fetch_assoc($select_all_posts_query)){
	$post_cat = $row['name'];
	$post_link = $row['link'];
	$post_land = $row['land'];
	}

$query = "SELECT * FROM $post_cat LIMIT 3";
$select_all_posts_query = mysqli_query($conn,$query);

?>
			<div class="product-sec1">
						<h3 class="heading-tittle">Fertilizers / Aceessories</h3>
			

			<?php  
    while($row = mysqli_fetch_assoc($select_all_posts_query)){

	$post_id = $row['id'];
    $post_name = $row['name'];
    $post_image = $row['image'];
    $post_price = $row['price'];
    $post_del_price = $row['del_price'];

	$rest = substr($post_name, 0, 25);


    ?>
			
						
						
						
						
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
								<br><img class="img-responsive" src="category/imgs/<?php echo $post_image;?>" alt="Nooooo">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
										<a href="category/<?php echo $post_land;?>?myid=<?php echo $post_id; ?>" class="link-product-add-cart img-responsive">Quick View</a>
										</div>
									</div>
									<span class="product-new-topP">New</span>
								</div>
								<div class="item-info-product ">
									<h4>

										<a href="category/<?php echo $post_land;?>?myid=<?php echo $post_id; ?>"><?php echo $rest;?></a>
									<p>
										   <br>
									       <?php echo $post_price;?>₹
										   <br>
										   (MRP Inclusive of all taxes)
										   <br>
											Shipping Rs 79 for entire order
											<br>
										    Dispatch in 5-8 days
											<br>
											Country of origin: India
									</p>
									</h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo $post_price;?>₹</span>
										<del><?php echo $post_del_price;?> ₹</del>&ensp;
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="" method="post">
											<fieldset>
											<a href="category/<?php echo $post_land;?>?myid=<?php echo $post_id; ?>" class="link-product-add-cart img-responsive">Quick View</a>
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>


						<?php } ?> <div class="clearfix"></div>
					<br>
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	
    
</div>
<button onclick="topFunction()" id="myBtn" class="fa fa-toggle-up myBtn--hide" title="Top"><span style="font-family:Myfont;"></span></button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<hr> 	 
<footer>
		<div class="container">
			<!-- footer first section -->
			<p class="footer-main">
				<span><h1>Shree bhavani Nursery</h1></span><br> Address : opp Ahmedabad food junction YMCA to      
                         	        Kaka ka dhaba karnavati road, Pin: 380058. </p>
 <br>
			<!-- //footer first section -->
			<!-- footer second section -->
			<div class="w3l-grids-footer">
				<h2 style="color:#50c105;">&emsp;Future Goals</h2>
				<br>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-paint-brush" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>try to create Our Blog page</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-refresh" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Try to improve services</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-times" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Add new products on future</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //footer second section -->
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info" style="font-family:myfont;">
				<!-- footer categories -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Categories</h3>
						<ul>
							<li>
								<a href="category/All_Plants.php">Plants</a>
							</li>
							<li>
								<a href="category/fruit.php">Fruits</a>
							</li>
							<li>
								<a href="category/All_Seeds.php">Seeds</a>
							</li>
							<li>
								<a href="category/accessory.php">Gardening product</a>
							</li>
							<li>
								<a href="category/Cactus.php">Cactus </a>
							</li>
						
						</ul>
					</div>
					<div class="col-xs-6 footer-grids agile-secomk">
						<ul>
							<li>
								<a href="category/fertilizers.php">fertilizers</a>
							</li>
							<li>
								<a href="category/vegetable.php">vegetables</a>
							</li>
							<li>
								<a href="category/herb.php">Hearb Plant</a>
							</li>
							<li>
								<a href="category/easyto.php">Easy to Grow Seeds</a>
							</li>
							<li>
								<a href="category/flowering.php">Flower Seeds</a>
							</li>
							
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Quick Links</h3>
						<ul>
							<li>
								<a href="aboutus.php">About Us</a>
							</li>
							<li>
								<a href="contactUs.php">Contact Us</a>
							</li>

							<li>
								<a href="privacypolicy.php">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> 123 Bopal, in.</li>
							<li>
								<i class="fa fa-mobile"></i> 333 222 3333 </li>
							<li>
								<i class="fa fa-phone"></i> +222 11 4444 </li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:example@mail.com"> greenleaf.bhavani@gmail.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<div class="col-sm-2 footer-grids  w3l-socialmk">
					<h3>Follow Us on</h3>
					<div class="social">
						<ul>
							<li>
								<a class="icon fb" href="https://www.facebook.com/">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="icon tw" href="https://twitter.com/explore">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<!-- <li>
								<a class="icon gp" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li> -->
						</ul>
					</div>
					<div class="agileits_app-devices">
					
			
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
			<!-- footer fourth section (text) -->
			<div class="agile-sometext">
				<div class="sub-some">
					<h5>Online Shopping</h5>
					<p>Order online. All your favourite plants and its seeds from the low price online supermarket for grocery home delivery in Ahmedabad,
					 and other cities in Gujrat and India. Lowest prices guaranteed on indian hearb seeds , indian vegetables seeds , indian fruit seeds , flower seeds and other foreigon breeds .</p>
				</div>
				<div class="sub-some">
					<h5>Shop online with the best deals & offers</h5>
					<p>Now Get Upto 40% Off On Everyday Essential Plants and seeds Shown On The Offer Page. The range includes plants , fruits , hearbs , vegetables , seeds , furtilizers and Other Daily Need gardening Products. Discount May Vary From Product To Product.</p>
				</div>
				
				
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right">
		<div class="container">
			<p>© 2021 Green Leaf | Design Under
				<a href="https://ksschool.org.in/"> Ks. School of business Management</a>
			</p>
		</div>
	</div>

	

  
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>