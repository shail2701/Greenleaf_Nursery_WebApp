<?php include "db_conn.php"; 
session_start();
ob_start();
?>

<?php

   $em = $_SESSION['user_name'];
// $sql="SELECT *  FROM users WHERE email = '$nm'";
// $result1=mysqli_query($conn,$sql);

//   while ($row = mysqli_fetch_assoc($result1)) {
//     $ids=$row["id"];
//   //  echo "ID IS : ".$ids;
   


?>
<?php
/*
if(isset($_GET['source'])){

$price = $_GET['source'];
 echo "Source is : ".$price;
*/
$price = $_SESSION['total_p'];

// echo "Total Price is : ".$price;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Green Leaf Nursery Web Checkout Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="tree1.png"/>

	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<style>
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
@font-face {
  font-family: SourceSansPro-Regular;
  src: url('../fonts/source-sans-pro/SourceSansPro-Regular.ttf'); 
}

@font-face {
  font-family: SourceSansPro-Bold;
  src: url('../fonts/source-sans-pro/SourceSansPro-Bold.ttf'); 
}

@font-face {
  font-family: JosefinSans-Bold;
  src: url('../fonts/JosefinSans/JosefinSans-Bold.ttf'); 
}

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: SourceSansPro-Regular, sans-serif;
}

/*---------------------------------------------*/
a {
	font-family: SourceSansPro-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: SourceSansPro-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}


input::-webkit-input-placeholder { color: #999999;}
input:-moz-placeholder { color: #999999;}
input::-moz-placeholder { color: #999999;}
input:-ms-input-placeholder { color: #999999;}

textarea::-webkit-input-placeholder { color: #999999;}
textarea:-moz-placeholder { color: #999999;}
textarea::-moz-placeholder { color: #999999;}
textarea:-ms-input-placeholder { color: #999999;}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}


/*---------------------------------------------*/
.container {
	max-width: 1200px;
}




/*//////////////////////////////////////////////////////////////////
[ Contact ]*/

.container-contact100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  position: relative;
  z-index: 1;
}

.container-contact100::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(93,84,240,0.5);
  /* background: -webkit-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5)); */
  background: -webkit-linear-gradient(left, rgb(151 255 217), #e5ff006b);
  background: -o-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
  background: -moz-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
  background: linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
  pointer-events: none;
}

.contact100-map {
  position: absolute;
  z-index: -2;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.wrap-contact100 {
    width: 800px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    padding: 72px 116px 25px 116px;
    box-shadow: 0 3px 20px 0px rgb(0 0 0 / 10%);
    -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 0px 20px 15px rgb(0 0 0 / 18%);
    -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
}


/*==================================================================
[ Form ]*/

.contact100-form {
  width: 100%;
}

.contact100-form-title {
  padding: 2%;
    display: block;
    font-family: SourceSansPro-Bold;
    font-size: 30px;
    color: black;
    line-height: 1.2;
    border-radius: 25px;
    text-align: center;
    /* border: 6px solid #dedede; */
    -webkit-box-shadow: 0px 0px 20px 6px rgb(0 0 0 / 18%);
    background: -webkit-linear-gradient(left, rgb(151 255 217), #e5ff006b);
}

/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  background-color: #fff;
  border-radius: 20px;
  margin-bottom: 30px;
}

.input100 {
  display: block;
  width: 100%;
  background: transparent;
  font-family: SourceSansPro-Bold;
  font-size: 16px;
  color: #4b2354;
  line-height: 1.2;
}
.input1001 {
    display: block;
    width: 100%;
    background: transparent;
    font-family: SourceSansPro-Bold;
    font-size: 10px;
    font-size: 15px;
    color: #4b2354;
    line-height: 3.2;
    padding: 1% 12%;
    border: 4px solid #73eabf;
    overflow: hidden;
    padding: 9% 12%; /* padding: 2% 30%; */
    border-radius: 20px;
    outline:none;
    transition: all 0.4s ease-in-out;
    box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
}
.input100err {
    display: block;
    width: 100%;
    background: transparent;
    font-family: SourceSansPro-Bold;
    font-size: 10px;
    font-size: 15px;
    color: #4b2354;
    line-height: 3.2;
    padding: 1% 12%;
    border: 3px solid rgb(255 159 151);
    overflow: hidden;
    padding: 1% 12%;
    border-radius: 20px;
    outline: none;
    transition: all 0.4s ease-in-out;
    box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 0px 20px 6px rgb(255 82 82 / 98%);
    -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    /* animation: andromeda 1.5s alternate infinite ease-in; */
}
/* @keyframes andromeda {
  0%   {transform: scale(.8);}
  100% {transform: scale(1.1);}
} */

/*---------------------------------------------*/
input.input100 {
  height: 51px;
    padding: 0 20px 0 23px;
    border-radius: 20px;
    transition: all 0.4s;
    border: 4px solid #73eabf;
    /* box-shadow: 0 10px 30px 0px #ad3;
    -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -webkit-box-shadow: inset 0px 0px 11px 0px #ad4;
    -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5); */
}


textarea.input100 {
  min-height: 121px;
    padding: 19px 20px 0 23px;
    border-radius: 20px;
    transition: all 0.4s;
    border: 4px solid #73eabf;
    /* box-shadow: 0 10px 30px 0px #ad3;
    -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -webkit-box-shadow: inset 0px 0px 20px 0px #ad4;
    -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5); */
}

/*------------------------------------------------------------------
[ Focus Input ]*/

.focus-input100 {
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
  border-radius: 20px;
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.file-typ{
  padding: 10px;
    background: -webkit-linear-gradient(left, rgb(151 255 217), #e5ff006b);
    border-radius: 6px;
    display: block;
}

.file-typ:hover,:focus{
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
}

.input100:focus, + .focus-input100:hover {
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
}

.input1001:hover,:focus , .input100:hover,:focus{
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  transform: scale(1.1);
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0px 0px 20px 20px rgb(0 0 0 / 5%);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
}

/*------------------------------------------------------------------
[ Button ]*/
.container-contact100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 10px;
  padding-bottom: 43px;
}

.contact100-form-btn {
  display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    min-width: 160px;
    height: 42px;
    background-color: #61d6ab;
    border-radius: 16px;
    font-family: JosefinSans-Bold;
    font-size: 14px;
    color: #fff;
    line-height: 1.2;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding-top: 5px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
    box-shadow: 0 10px 30px 0px #61d6ab;
    -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -webkit-box-shadow: 0 10px 30px 0px #61d6ab;
    -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
}

.contact100-form-btn:hover {
  background-color: #40a285;
    border: 5px solid #61d6ab;
    /* border: 5px solid rgb(151 255 217); */
    box-shadow: 0 10px 30px 0px #40a285;
    -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
    -webkit-box-shadow: 0 10px 30px 0px #40a285;
    -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
    -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
}

/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 768px) {
  .wrap-contact100 {
    padding: 72px 50px 25px 50px;
  }
}

@media (max-width: 576px) {
  .wrap-contact100 {
    padding: 72px 15px 25px 15px;
  }
}


/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate .focus-input100 {
  box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
  -moz-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
  -webkit-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
  -o-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
  -ms-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
}

.alert-validate::before {
  content: attr(data-validate);
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  position: absolute;
  width: 100%;
  min-height: 62px;
  background-color: #fff;
  border-radius: 20px;
  top: 0px;
  left: 0px;
  padding: 0 45px 0 22px;
  pointer-events: none;

  font-family: SourceSansPro-Bold;
  font-size: 16px;
  color: #fa4251;
  line-height: 1.2;
}

.btn-hide-validate {
  font-family: Material-Design-Iconic-Font;
  font-size: 15px;
  color: #fa4251;
  cursor: pointer;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  height: 62px;
  top: 0px;
  right: 28px;
}

.rs1-alert-validate.alert-validate::before {
  background-color: #fff;
}

.true-validate::after {
  content: "\f269";
  font-family: Material-Design-Iconic-Font;
  font-size: 15px;
  color: #57b846;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  height: 62px;
  top: 0px;
  right: 28px;
}

/*---------------------------------------------*/
@media (max-width: 576px) {
  .alert-validate::before {
    padding: 0 30px 0 10px;
  }

  .true-validate::after,
  .btn-hide-validate {
    right: 10px;
  }
}
/*----------ROW COL-------------- */

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}
/*==================================================================
[ Contact more ]*/

.contact100-more {
  font-family: SourceSansPro-Regular;
  font-size: 16px;
  color: #999999;
  line-height: 1.5;
  text-align: center;
}

.contact100-more-highlight {
  color: #bd59d4;
}

</style>
<body>


	<div class="container-contact100">

        
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" enctype="multipart/form-data">
				<span class="contact100-form-title">
				Checkout Cart Products
				</span><br><br>
                <?php if (isset($_GET['error'])) { ?> 
          
                    <div class="wrap-input100 validate-input">
				
                        <input class="input100err" type="text" name="email" value="<?php echo $_GET['error']; ?>" disabled>
					        <span class="focus-input100"></span>
				    </div>
                <?php } ?>       
<hr>
<br>
                <div class="wrap-input100 validate-input">
				<!-- <label for="">Email</label>	 -->
                <input style="border-color:tomato;" class="input100" type="text" name="email" value="<?php echo $em; ?>" placeholder="Email" disabled>
					<span class="focus-input100"></span>
				</div>

                <div class="row ">
                    <div class="col-50">
                        <div class="wrap-input100 validate-input">
                             <!-- <label for="fname"><i class="fa fa-user"></i> First Name</label>    -->
                             <input class="input100" type="text" name="fname" value="" placeholder="First Name">
                        </div>
                    </div>

                    <div class="col-50">
                        <div class="wrap-input100 validate-input">
                            <!-- <label for="lname"><i class="fa fa-user"></i> Last Name</label> -->
                            <input class="input100" type="text" name="lname" value="" placeholder="last Name">
                        </div>
                    </div>
                </div>
                
                <div class="wrap-input100 validate-input">
                    <textarea class="input100" name="add"  placeholder="Deliver Address"></textarea>
					<span class="focus-input100"></span>
                </div>    

        <div class="row">
        
            <div class="col-25">
				 <div class="wrap-input100 validate-input">
					<!-- <input class="input1001" type="text" name="name" value="" placeholder="city"> -->
                    <select class="input1001" name="city">
                  <option>Ahmedabad</option>
                  <option>Baroda</option>
                  <option>Rajkot</option>
                  <option>Surat</option>
                  </select>
					<span class="focus-input100" fa fa-home ></span>
                </div>
            </div>
            <div class="col-25">
                <div class="wrap-input100 validate-input" >
                    <select class="input1001" name="state">
                        <option>Gujarat</option>
                    </select>
					<span class="focus-input100" fa fa-home ></span>
                </div>
            </div>
            <div class="col-25">
                <div class="wrap-input100 validate-input" >
                    <select class="input1001" name="country">
                        <option>india</option>
                    </select>
					<span class="focus-input100" fa fa-home ></span>
                </div>
            </div>
        </div>

        <div class="row ">
                    <div class="col-50">
                        <div class="wrap-input100 validate-input">
                             <!-- <label for="fname"><i class="fa fa-user"></i> First Name</label>    -->
                             <input class="input100" type="text" name="pin" value="" placeholder="Pin-code">
                        </div>
                    </div>

                    <div class="col-50">
                        <div class="wrap-input100 validate-input">
                            <!-- <label for="lname"><i class="fa fa-user"></i> Last Name</label> -->
                            <input class="input100" type="text" name="contact" value="" placeholder="Contact No.">
                        </div>
                    </div>
                </div>
				

       

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						Continue to checkout
					</button>
				</div>
			</form>

			<div class="contact100-more">
            Back to Home <a href="index.php" class="contact100-more-highlight">click here.</a>&emsp;&emsp;&emsp;&emsp;@copyright greenleaf nursery
			</div>
		</div>
	</div>


    <?php
    $you=false;

if(isset($_SESSION['user_name']))
{
  // echo "ID IS : ".$_SESSION['user_name'];
  $nm = $_SESSION['user_name'];
  
   $sql="SELECT *  FROM users WHERE email = '$nm'";
   $result1=mysqli_query($conn,$sql);

   while ($row = mysqli_fetch_assoc($result1)) {
    $ids=$row["id"];
    $u_mail=$row['email'];
   }
   $_SESSION['user_id']=$ids;
    if(isset($_POST['submit']))
  {

    if(empty($_POST['email']) && empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['add'])  && empty($_POST['pin']) && empty($_POST['contact'])){
    

      header("Location: checkout.php?error=Fields should not be empty !! ");
        }
        else
        {
            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                
               
            
                return $data;
             }
             function countDigit($n)
             {
                 $count = 0;
              
                 $count = ceil(log10(abs($n) + 1));  

                // echo "<br>BHAD NE KAA ".$count;
                 return $count;
             }
            
             if(empty($_POST['fname']))
             {

              header("Location: checkout.php?error=Please Enter First Name !!");
             }
             else if(empty($_POST['lname']))
             {
              header("Location: checkout.php?error=Please Enter Last Name !!");
             }
             else if(empty($_POST['add']))
             {
 
              header("Location: checkout.php?error=Please Enter Address !!");
             }
             else if(empty($_POST['city']))
             {

              header("Location: checkout.php?error=Please Enter City Name !! ");
             }
             else if(empty($_POST['country']))
             {
              header("Location: checkout.php?error=Please Enter Country Name !! ");
             }
             else if(empty($_POST['state']))
             {

              header("Location: checkout.php?error=Please Enter State Name !! ");
             }
             else if(empty($_POST['pin']))
             {
              header("Location: checkout.php?error=Please Enter PinCode !!");
             }
             else if(empty($_POST['contact']))
             {

              header("Location: checkout.php?error=Please Enter Contact No !! ");
             }
          
             else if(!is_numeric($_POST['pin']))
             {

              header("Location: checkout.php?error=Invalid PinCode !! ..");
             }
             else if(!is_numeric($_POST['contact'])  )
             {

              header("Location: checkout.php?error=Contact is invalid");
             }
      
             else if(countDigit($_POST['contact']) != 10)
             {
     
              header("Location: checkout.php?error=Not valid contact 10 digit");
             }
             else
            {
                
                 $fname=validate($_POST['fname']);
                 $lname=validate($_POST['lname']);
                 $add=validate($_POST['add']);
                 $city=validate($_POST['city']);
                 $country=validate($_POST['country']);
                 $state=validate($_POST['state']);
                 $pin=validate($_POST['pin']);
                 $contact=validate($_POST['contact']);

                 $sql="INSERT INTO checkout(email,fname,lname,address,city,country,state,pincode,contact_no,userid,totle_price,u_mail) VALUE('$em','$fname','$lname','$add','$city','$country','$state',$pin, $contact,$ids,$price,'$u_mail')";
                 echo "<script>alert('Your Checkout successfully Done');</script>";
                echo "<br><br><br>".$sql;

                 $result = mysqli_query($conn, $sql);


                 if(!$result)
                 {
                   echo "<br><br><br>".$sql;
                  //  header("Location: checkout.php?error=server is temporary down , please try again later...");
                   echo "<script>alert('server is temporary down , please try again later...');</script>";
                 }
            else
             {
           
                    // header("Location: checkout.php?success=Your Products will be Delivered within 15 days TNC apply due to current covid situation..");
                     echo "success";
                    // sleep(2);
                    
                    $query1 ="UPDATE shoppingcart SET status = 1  WHERE uid =$ids ;";
                     echo "<script>alert('we update your cart');</script>";
                     echo "<br><br><br>".$query1;
  
                    $result = mysqli_query($conn, $query1);
                    
                    if(!$result){
                      header("Location: checkout.php?error=Something went wrong with you..");
                    }
                    $you = "SELECT * FROM shoppingcart WHERE uid=$ids;";
                     echo "<br><br><br>The you is : ".$you;
                    if ($result=mysqli_query($conn,$you))
                    {
                         $tol = mysqli_num_rows($result);
                         $pop = "SELECT * FROM shop_history WHERE uid=$ids";
                          echo "=-=-=-=-=-=-".$pop;
                          $add_detls = mysqli_query($conn,$pop);

                          $rowcount=mysqli_num_rows($add_detls);

                         if($rowcount > 0)
                         {
                           
                           $opp = "UPDATE `shop_history` SET lst_tot_prod=$tol WHERE uid=$ids";
                           $res1 = mysqli_query($conn,$opp);
                           if(!$res1){ echo "Query failed";}else{ echo "<br><br><br><br>QUERY wdf wdv FULLLY SUCESS";}
                            echo "lole lole lole ".$opp;

                         }
                        else
                        {
                          
                            
                            $pops = "INSERT INTO shop_history (uid,umail,lst_tot_prod) VALUES ($ids,'$em',$tol)";
                            $res = mysqli_query($conn,$pops); 
                            if(!$res){ echo "Query failed";}else{ echo "<br><br><br><br>QUERY ew dvsv sd dFULLLY SUCESS";}
                             echo "<br><br><br>lol lol lol ".$pops;
                        }
                  }
                  else
                  {
                    echo "<br>opps something went wrong</br>";
                  }
                    
                    $to = $em;
           
                    $body1 = "";
                    $bodyy="";
                    $ct = "greenleaf.bhavani@gmail.com";
                    $owner = "greenleaf.bhavani@gmail.com";
                    $umsg = "Your Products will delivered in 5 to 7 days.";

                    $bodyy .="From : " . $owner . "\r\n";//line breaking in email
                    $bodyy .="<br>Email : " . $em . "\r\n";
                    $bodyy .="<br>Name : " . $fname." ".$lname . "\r\n";
                    $bodyy .="<br>Total Price : " . $price . "\r\n";
                    $bodyy .="<br>Address : " . $add ." ". $city . "\r\n";
                    
                    $body1 .="Green Leaf Nursery Product";
                  
                    
                    
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                       
                      // Create email headers
                      $headers .= 'From: '.$ct."\r\n".
                          'Reply-To: '.$ct."\r\n" .
                          'X-Mailer: PHP/' . phpversion();
                       
                      // Compose a simple HTML email message
                      $message = '<html><body style="
                      color: black;
                      display: block;
                     
                      border-radius: 25px;
                      
                      background-size: cover;
                      
                      display: flex;
                      -webkit-box-shadow: 0 0px 20px 6px #baef49;
                    ">

                      
                      <div style="border: 5px solid #baef5e;
                      color: black;
                      display: block;
                      padding: 6%;
                      display: -ms-flexbox;
                      display: flex;
                      min-width: 0;
                      text-align:center;
                      word-wrap: break-word;
                     
                      background-clip: border-box;
                      border: 5px solid #baef5e;
                      margin-left: 11%;
                      background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
                      box-shadow: 0 0px 20px 6px #9aff39;
                      background-position: 0 0;
                      color: black;
                      position: relative;
                      padding: 4%;
                      left: 19%;
                      height: 100%;
                      border-radius: 1.25rem;">
                      <table><tbody><th><h2 style="width: 97%;background-color: #8ee837;color: white;padding: 5px 9px;text-align: center;border-radius: 9px;box-shadow: 0 0px 11px 6px #9aff39;">Green Leaf Nursery </h2></th>';
                      $message .= '<tr class="noo" style="border: 5px solid #9aff39;background-color: white;
                      font-size: 15px;color: black;padding: 3% 19%;font-weight: 500;text-align: left;border-radius: 10px;-webkit-box-shadow: 0 0px 20px 6px #0a0a0a70;"><p>'.$bodyy.'</p></tr>';
                     
                      $message .= '<tr><p style="
                      border: 5px solid #9aff39;
                      background-color: white;
                      font-size: 15px;
                      color: black;
                      padding: 3% 9%;
                      font-weight: 500;
                      text-align: center;
                      border-radius: 10px;
                      -webkit-box-shadow: 0px 0px 20px 4px #9aff39f2;">'.$umsg.'</tr></p><tr><span style="padding: 2% 39%;
                      background-color: #baef5e;text-align: center;border-radius: 9px;color: white;">Thankyou so much</span></tr>';
                      $message .= '</tbody></table></div></body></html>';
                      
                      mail($to, $body1, $message, $headers);
                    
                    //mail($to,$ct,$body);

                    /* HERE OID FETCH */

                    $del1 = "SELECT * FROM `checkout` WHERE userid=$ids  ORDER BY oid desc LIMIT 1";
                         echo "<br>".$del1."<br>";
                         $result4 = mysqli_query($conn, $del1);
                         if(!$result4)
                         {
                             echo " woww  ";
                         }
                         else
                         {
                             
                             $rowcount=mysqli_num_rows($result4);
                             if($rowcount == 0)
                             {
                                 echo "<center style='color:red';>Not Found</center>";
                            }
                            else
                            {
                             while ($row = mysqli_fetch_assoc($result4)) 
                              {
                                   $ll = $row["oid"];
                              }
                            }

                         }
                    /*---- */



                     $uid=$_SESSION['id'];
                  
                         
                            $sql1 = "SELECT * FROM shoppingcart WHERE  uid=$uid AND status=1";
                             echo "<br><br><br>".$sql1;
                            $result = mysqli_query($conn, $sql1);
                            $total_price=0;
                            
                  
                            if (mysqli_num_rows($result) > 0) 
                            {
                              $i=0;
                        while ($row1 = mysqli_fetch_assoc($result)) 
                      {  
                          $i+=1;
                    
                        

                         $pimg  = $row1["image"];
                         $pnm  = $row1["name"];
                         $pp  = $row1["price"];
                         $pq  = $row1["quantity"];
                         $pt  = $row1["date_created"];
                         echo "i is :".$i;
                         $sql1="INSERT INTO ordered(order_id,uid,prod_name,image,price,quantity,umail,item_time) VALUE ($ll,$uid,'$pnm','$pimg',$pp,$pq,'$nm','$pt')";
                          echo "<br><br><br>".$sql1;
                         $result1 = mysqli_query($conn, $sql1);
                         if(!$result1)
                         {
                          die ("Error in query:". $sql1);
                         }
                      }
                      $result2 = mysqli_query($conn, $sql1);
                      if(!$result2)
                      {
                          echo "YOUR PRODUCT COULD NOT GONE IN ORDER ...";
                      }
                      $del = "DELETE FROM shoppingcart WHERE uid=$uid";
                      //echo "<br>".$del;
                      $result3 = mysqli_query($conn, $del);
                      if(!$result3)
                      {
                          echo "<br>Product could not deleted.";
                      }
                      else
                      {

                         echo "del del del";
              
                              // $sql12="UPDATE `ordered` SET order_id=$ll WHERE uid=$uid";
                              // $result4 = mysqli_query($conn, $sql12);
                              // if(!$result4){ echo "yaar nahi ho raha :( "; }else{ echo "yaar ho gya samjo :) ";}
                       
                      }
                         header('location:bills.php');
                      }
                    
                    }
                  
                  }
            }

                }
                  
                
            }

          
        
  

else
{

    header("Location: ckout.php?error=You are not detected : Please login....");
    sleep(1);
     header('location:login.php');
}
 
    ?>



</body>
</html>
