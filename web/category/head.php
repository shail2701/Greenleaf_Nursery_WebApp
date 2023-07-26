<?php include 'db_conn.php'; 
session_start();?>
<!doctype html>
<html lang="en">
  <head>
  	<!-- <title>header greenleaf</title> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="tree1.png" type="image/icon">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="head-styleS.css">

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
    background: #ad1;
    margin-right: 0px;
}
	}
@media screen and (min-width: 500px) {
	.wrap, .phone a {
   
		color: #fff;
    font-size: 13px;
  }
  .social-media p a {
	width: 34px;
    height: 34px;
    background: #ad1;
    margin-right: 1px;
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
    margin-left: 13px;
    margin-top: -20px;
}
 .nav-right {
          margin-left: -221%;
    outline: none;
    border: none;
    text-align: center;
    /* width: 32%; */
    padding: 33% 74.5%;
    /* height: 54px; */
    font-size: 150%;
    color: #fff;
    /* background-color: #93e83ea8; */
    border-radius: 10px;
    /* margin-top: -33%; */
    /* margin-left: 2966%; */
    background: #ffa5a5;
    border: 4px solid #ffd5d5;
    /* border: 4px solid #67bd12; */
    transition: padding 2s;
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
	<body>
	<section class="ftco-section">
	
		<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col">
							<p class="mb-0 phone"><span class="fa fa-pagelines"></span> <a href="../index.php">GREENLEAF Always green</a></p>
						</div>
						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			 <!-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a> -->
				    			<a href="mailto:bhavani.greenleaf@gmail.com" class="d-flex align-items-center justify-content-center"><span class="fa fa-envelope"><i class="sr-only">E-mail</i></span></a>&emsp;
                                 bhavani.greenleaf@gmail.com
				    		</p>
			        </div>
						</div>
				</div>
			</div>
			
		</div>
		
		<nav class="navbar navbar-expand-lg  navbar-dark ftco_navbar  ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
        <img width="70" src="tree1.png" alt=""><a class="navbar-brand" href="../index.php">Greenleaf <span>always green</span></a>
	    	
	
		
		<form action="#" class=" order-sm-start order-lg-last">
		<?php
		
			if(isset($_SESSION['id']))
			{
				$id=$_SESSION['id'];
				$query = "SELECT * FROM shoppingcart WHERE uid=$id";
				$result = mysqli_query($conn, $query);
			
				if($result)
				{
					$row = mysqli_num_rows($result);
					//echo "<br><br><br>	THRE ARE TOTAL ".$row."PRODUCTS";
					echo '<div class="order-o">'.$row.'</div>';
			
				}
				else
				{
					//echo "THRE ARE TOTAL 0 PRODUCTS";
					query_die($result);
				}
		}
		else
		{
			echo '<div class="order-o"> ! </div>';
		}

		
		?>
          <div class="det form-group d-flex">
			<a href="../shoppingcart.php" class="d-flex align-items-center justify-content-center"><span class="fa fa-cart-arrow-down  fa-2x"></span></a>
			
          </div>	

		  		
	
        </form>
		

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item "><a href="../index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="All_Plants.php">Plants</a>
                <a class="dropdown-item" href="All_Seeds.php">Seeds</a>
                <a class="dropdown-item" href="fertilizers.php">Fertilizers</a>
                <a class="dropdown-item" href="accessory.php">Accessories</a>
              </div>
            </li>
				
	        	<li class="nav-item"><a href="../contactUs.php" class="nav-link">Contact</a></li>
	        	<li class="nav-item"><a href="../services.php" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="../aboutus.php" class="nav-link">About us</a></li>
			  <?php
					if(!isset($_SESSION['user_name']))
					{

			  echo '<li class="nav-item"><a href="../login.php" class="nav-link">Log in</a></li>';
					}
					else
					{
						echo '<li class="nav-item"><a href="../logout.php" class="nav-link">Log out</a></li>';
					}
					?>
	        </ul>
	      </div>
		  <ul class="nav navbar-nav navbar-right">
				<li><a href="../profile.php"><button class="prof-img-logo" type="submit" id="profile" name="done1" style="">
						<?php if(isset($_SESSION['name'])){ if($_SESSION['name']!=NULL) { $nm=$_SESSION['name']; $n = substr($nm,0,1); echo "<span style=''>".$n."</span>"; ?><?php }} else {  echo '<i style="font-size:150;" class="fa fa-user" aria-hidden="true"></a></i>'; }?></a></li>
	</ul>
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

