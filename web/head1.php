<?php include 'db_conn.php'; 
session_start();
ob_start();
?>
<!--doctype html-->
<html lang="en">
  <head>
  	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="tree1.png" type="image/icon">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/head-style54.css">


	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	</head>
	<style>
	@media screen and (max-width: 800px) {
	.wrap, .phone a{
    font-size: 8px;
			color: #fff;
  }
  .social-media p a {

	width: 15px;
    height: 23px;
    /* background: #ad1; */
    margin-right: 0px;
}
	}
@media screen and (min-width: 500px) {
	.wrap, .phone a {
   
		color: #fff;
    font-size: 13px;
	text-decoration:none;
  }
  .social-media p a {
	width: 222px;
    padding-top: 5%;
    height: 34px;
    /* background: #ad1; */
    /* padding-left: 10%; */
    margin-right: 1px;
    letter-spacing: 1px;
    text-decoration: none;
}
}
.det span{
	color:white;

}
.order-o
{
	background-color: tomato;
    color: white;
    padding: 0px 7px;
    border-radius: 100px;
    font-size: 13px;
    z-index: 1;
    margin-left: -23px;
    margin-top: -20px;
    overflow: overlay;
}
/*
.order-lg-last a{
  -webkit-box-ordinal-group: 14;
  -ms-flex-order: 13;
  order: 13;
  padding:40%;
  background-color: #baef5e;
  color: white;
  text-decoration:none;
  margin-top: 31px;
  border-radius: 10px;
  transition: padding 2s,background-color 2s;
  border: 4px solid #71e004;
  }

  .order-lg-last a:hover{
    padding: 46%;
    background-color:lightgreen;
    -webkit-box-shadow: 10px 10px 99px 6px yellowgreen;
    -moz-box-shadow: 10px 10px 99px 6px yellowgreen;
    box-shadow: 10px 10px 99px 6px yellowgreen;
  }*/
  /*
  .nav .prof-img-logo{
        margin-left: 162%;
        outline: none ! important;
        border: none;
        text-align: center;
     
        padding: 31% 81%;
        
        text-decoration: none;
        font-size: 150%;
        color: #fff;
        
        border-radius: 10px;
  
        background: #ffa5a5;
        border: 4px solid #ffd5d5;
   
        transition: padding 2s,background-color 2s;
  }

  .nav .prof-img-logo:hover{

  padding: 38% 92%;
     background-color: #ffb3ac;
-webkit-box-shadow: 10px 10px 99px 6px #ffa5a5;
-moz-box-shadow: 10px 10px 99px 6px #ffa5a5;
box-shadow: 10px 10px 99px 6px #ffa5a5;
}*/
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
	<body>
	<section class="ftco-section">
	
		<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col">
							<p class="mb-0 phone"><span class="fa fa-pagelines"></span> <a href="index.php">GREENLEAF Always green</a></p>
						</div>
						<div class="col d-flex justify-content-end">
						
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			 <!-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a> -->



				<a href="profile.php"><?php if(isset($_SESSION['name'])){ if($_SESSION['name']!=NULL) { $nm=$_SESSION['name']; $n = substr($nm,0,1); echo "<span class='d-flex align-items-center justify-content-center fa fa-user'>&ensp;".$nm."</span>"; ?><?php }} else {  echo '<i style="" class="fa fa-user" aria-hidden="true">Log in</i>'; }?></a>


								<!-- <a href="mailto:bhavani.greenleaf@gmail.com" class="d-flex align-items-center justify-content-center"><span class="fa fa-envelope"><i class="sr-only">E-mail</i></span></a>&emsp;
                                 bhavani.greenleaf@gmail.com -->

				    			<!-- <a href="mailto:bhavani.greenleaf@gmail.com" class="d-flex align-items-center justify-content-center"><span class="fa fa-envelope"><i class="sr-only">E-mail</i></span></a>&emsp;
                                 bhavani.greenleaf@gmail.com -->
				    		</p>
						
			        </div>
						</div>
				</div>
			</div>
			
		</div>
		
		<nav class="navbar navbar-expand-lg  navbar-dark ftco_navbar  ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
        <img width="70" src="tree1.png" alt=""><a class="navbar-brand" href="index.php">Greenleaf <span>always green</span></a>
	    	
	
		
		
		

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item "><a href="index.php" class="nav-link"><span class="fa fa-home"></span>Home</a></li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-caret-square-o-down"></span>Categories</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="category/All_Plants.php">Plants</a>
                <a class="dropdown-item" href="category/All_Seeds.php">Seeds</a>
                <a class="dropdown-item" href="category/fertilizers.php">Fertilizers</a>
                <a class="dropdown-item" href="category/accessory.php">Accessories</a>
              </div>
            </li>
		
	        	<li class="nav-item"><a href="contactUs.php" class="nav-link"><span class="fa fa-phone-square"></span>Contact</a></li>
	        	<li class="nav-item"><a href="services.php" class="nav-link"><span class="fa fa-tasks"></span>Services</a></li>
	          <li class="nav-item"><a href="aboutus.php" class="nav-link"><span class="fa fa-info-circle"></span>About us</a></li>
			  <?php
					if(!isset($_SESSION['user_name']))
					{

			 			 echo '<li class="nav-item"><a href="login.php" class="nav-link"><span class="fa fa-lock "></span>Log in</a></li>';
					}
					else
					{
						echo '<li class="nav-item"><a href="logout.php" class="nav-link"><span class="fa fa-unlock"></span>Log out</a></li>';
					}
					?>
	        </ul>
	      </div>
		 
		  <form action="" class=" order-sm-start order-lg-last">
		<?php
			if(isset($_SESSION['id']))
			{
			// var_dump($_SESSION);
				$id=$_SESSION['id'];
				$query = "SELECT * FROM shoppingcart WHERE uid=$id";
				$result = mysqli_query($conn, $query);
			
				if($result)
				{
					$row = mysqli_num_rows($result);
					//echo "<br><br><br>	THRE ARE TOTAL ".$row."PRODUCTS";
					// echo '<div class="order-o">'.$row.'</div>';
			
				}
				else
				{
					echo "error in query";
					
				}

			}
			else
			{
				$row = "!";
			}

		
		?>
          <div class="det form-group d-flex">
			<a href="shoppingcart.php" class="d-flex align-items-center justify-content-center"><div class="order-o"><?php echo $row; ?></div><span class="fa fa-cart-arrow-down  "></span></a>
			
          </div>	

		  		
	
        </form>
		  
	    </div>
	  </nav>
    <!-- END nav -->

	</section>

	<!-- <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script> -->

	</body>
</html>

