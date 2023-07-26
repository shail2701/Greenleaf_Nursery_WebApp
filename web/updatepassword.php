<?php include "db_conn.php"; 
session_start();
ob_start();
?>
<?php

function strongpass($data)
	{
		$uppercase = preg_match('@[A-Z]@', $data);
		$lowercase = preg_match('@[a-z]@', $data);
		$number    = preg_match('@[0-9]@', $data);
		$specialChars = preg_match('@[^\w]@', $data);
		if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($data) < 8) {
			//	echo ' should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
			
        return 1;
		}else{
			return $data;
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Green Leaf Nursery Web Profile Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="tree1.png"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->

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
    margin-bottom: 10%;
    background: -webkit-linear-gradient(left, rgb(151 255 217), #e5ff006b);
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
    padding: 72px 150px 25px 150px;
    box-shadow: 0 3px 20px 0px rgb(0 0 0 / 10%);
    -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 0px 20px 13px rgb(0 0 0 / 10%);
    -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
}


/*==================================================================
[ Form ]*/

.contact100-form {
  width: 100%;
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
    font-size: 16px;
    color: #4b2354;
    line-height: 3.2;
    overflow: hidden;
    padding: 2% 30%;
    border-radius: 20px;
    transition: all 0.4s ease-in-out;
    box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
}
.input-img {
  display: block;
    /* width: 100%; */
    /* background: transparent; */
    font-family: SourceSansPro-Bold;
    /* font-size: 16px; */
    color: #4b2354;
    line-height: 1.2;
    border: 3px dashed yellowgreen;
    border-radius: 20px;
    margin-bottom: 11px;
    transition: all 0.4s ease-in-out;
}

/*---------------------------------------------*/
input.input100 {
  height: 51px;
    padding: 0 20px 0 23px;
    border-radius: 20px;
    transition: all 0.4s;
    border: 3px solid rgb(151 255 217);;
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
    border: 3px solid rgb(151 255 217);
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

.input100:focus + .focus-input100 {
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
}

.input1001:hover , .input100:hover{
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
.input100succ {
display: block;
    width: 100%;
    background: transparent;
    font-family: SourceSansPro-Bold;
    font-size: 10px;
    font-size: 15px;
    color: #4b2354;
    line-height: 3.2;
    padding: 1% 12%;
    border: 4px solid #b5ff82;
    overflow: hidden;
    padding: 1% 12%;
    border-radius: 20px;
    outline: none;
    transition: all 0.4s ease-in-out;
    box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 0px 20px 6px #9aff39;
    -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    /* animation: andromeda 1.5s alternate infinite cubic-bezier(0.55, 0.06, 0.68, 0.19); */
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
    border: 3px solid #df97ff;
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
<?php 
            if(isset($_SESSION['user_name']))
            {
            	$em = $_SESSION['user_name'];
            	$query = "SELECT * FROM users WHERE email='$em'";
            	$result= mysqli_query($conn,$query);
            
            	if(!$result)
            	{
            		echo "Query Failed  ".$query;
              
            	}
            	else
            	{
            		while ($row = mysqli_fetch_assoc($result)) 
            		{
                   $pass=$row['password'];
  
                
            		}
            	}
              ?>
             <?php if(isset($_POST['update_pass'])){

                    
                    $post_pass=$_POST['oldpass'];  
                    $post_newpass=$_POST['newpass'];
                    $post_newrepass=$_POST['newrepass'];
                  
                    if($post_pass==NULL){
                   
                      header("Location: updatepassword.php?error=Old Password Blank.");
                      
                    }
                    
                   else if($post_pass!=$pass){
                        
                        header("Location: updatepassword.php?error=Old Password is wrong.");
                       
                      }
                     
                    else
                    {
                      if($post_newpass=="" || $post_newrepass==""){
                        
                        header("Location: updatepassword.php?error=Discard Empty Password !");
                       
                      }
                      else if($post_pass==$post_newpass)
                      {
                        header("Location: updatepassword.php?error=Do not enter old password as new.");
                      }
                      else
                      {
                        if($post_newpass!=$post_newrepass){
                          echo $post_newpass."   -**-**-  ".$post_newrepass;
                         header("Location: updatepassword.php?error=Both Password and Repassword Not same !");
                        }
                        else
                        {
                          if(strongpass($post_newpass)==1 || strongpass($post_newrepass)==1){
                            echo $post_newpass."   ---  ".$post_newrepass;
                               //header("Location: updatepassword.php?error=Password atleast contain 1 capital latter, 1 special character and length should be 8  !");
                          }
                          else
                          {  
                            echo $post_newpass."   -/*/*/*--  ".$post_newrepass;
                              $query = "UPDATE users SET password = '{$post_newpass}' WHERE email = '{$em}'";
         

                            echo "<br><br>".$query;

                            $update_post = mysqli_query($conn,$query);

                            if(!$update_post){
                          
                              die("QUERY FAILED ." . mysqli_error($conn));
                          
                            }
                            else
                            { 
                               header("Location: updatepassword.php?success=Updated successfully ");
                            }
                          }
                        }
                      }
                    
                    }
                    
                  }
                            // header("refresh: 3");
            }
                    
            else
            {
                  header("location:login.php");
            }	    

        ?>


	<div class="container-contact100">


		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="post" enctype="multipart/form-data">
				<span class="contact100-form-title">
				Update Password
				</span>
  

        <?php if (isset($_GET['error'])) { ?> 
          
          <div class="wrap-input100 validate-input">

              <input class="input100err" type="text" name="email" value="<?php echo $_GET['error']; ?>" disabled>
        <span class="focus-input100"></span>
  </div>
      <?php } ?> 
      <?php if (isset($_GET['success'])) { ?> 
          
          <div class="wrap-input100 validate-input">

              <input class="input100succ" type="text" name="email" value="<?php echo $_GET['success']; ?>" disabled>
        <span class="focus-input100"></span>
  </div>
      <?php } ?> 
      
       <br>
        <div class="wrap-input100 validate-input" data-validate = "">
      
				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="password" id="myInput" name="oldpass" placeholder="Old Password">
					<span class="focus-input100" fa fa-home ></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter email: e@a.x">
					<input class="input100" type="password" id="myInput1" name="newpass" placeholder="New Password">
					<span class="focus-input100"></span>
				</div>
        
        <div class="wrap-input100 validate-input" data-validate = "Please enter contact">
					<input class="input100" type="password" id="myInput2" name="newrepass" placeholder="New Repassword">
					<span class="focus-input100"></span>
				</div>
                <div class="show"><input type="checkbox" class="check" onclick="myFunction()" title="show password"><span> show password</span></div><br>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="update_pass">
						Update password
					</button><br><br><br>

          <?php if (isset($_GET['error'])) { 
					if($_GET['error']==="Old Password is wrong."){?>
				<br><a class="contact100-form-btn" style="text-decoration:none;" href="Forgotpass/forgot.php">Forgot your password? click me</a>
				<?php }} ?>

				</div>
                <script>
						function myFunction() {
						  var x = document.getElementById("myInput");
						  if (x.type === "password") {
						    x.type = "text";
						  } else {
						    x.type = "password";
						  }
              var x = document.getElementById("myInput1");
						  if (x.type === "password") {
						    x.type = "text";
						  } else {
						    x.type = "password";
						  }
              var x = document.getElementById("myInput2");
						  if (x.type === "password") {
						    x.type = "text";
						  } else {
						    x.type = "password";
						  }
						}

					
				</script>

			</form>

			<div class="contact100-more">
				<span style="padding-right:24%;">Back to Home <a href="index.php" class="contact100-more-highlight">click here.</a></span style=""><span>  Back to Profile <a href="profile.php" class="contact100-more-highlight">click here.</a></span>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>
<!-- 
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->


</body>
</html>
