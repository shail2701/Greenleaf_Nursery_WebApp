<?php 
include "db_conn.php";
			if(isset($_POST['btn-save']))
			{
				$em = $_POST['email'];
				if(empty($em)){
					
					header("Location: forgot.php?error=Please Enter email");
				}
				else
				{
					
					session_start();
					$uname = $_POST['email'];
					$sql = "SELECT * FROM users WHERE email='$uname'";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) === 1) 
					{
							
						$rndno=rand(100000, 999999);//OTP generate
						$message = urlencode("otp number.".$rndno);
						$to=$_POST['email'];
						$ct = "greenleaf.bhavani@gmail.com";
						$bodyy="Don't share this otp to anyother person or site ! This may cause your account";
						$body1 = "OTP";
						$txt = "Forgot Password OTP : ".$rndno."";
						
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						 
						// Create email headers
						$headers .= 'From: '.$ct."\r\n".
							'Reply-To: '.$ct."\r\n" .
							'X-Mailer: PHP/' . phpversion();
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
						font-size: 15px;color: tomato;padding: 3% 19%;font-weight: 600;text-align: left;border-radius: 10px;-webkit-box-shadow: 0 0px 20px 6px #0a0a0a70;"><p>'.$bodyy.'</p></tr>';
					   
						$message .= '<tr><p style="
						border: 5px solid #9aff39;
						background-color: white;
						font-size: 15px;
						color: black;
						padding: 3% 9%;
						font-weight: 500;
						text-align: center;
						border-radius: 10px;
						-webkit-box-shadow: 0px 0px 20px 4px #9aff39f2;">'.$txt.'</tr></p><tr><span style="padding: 2% 39%;
						background-color: #baef5e;text-align: center;border-radius: 9px;color: white;">Thankyou so much</span></tr>';
						$message .= '</tbody></table></div></body></html>';

						mail($to,$body1,$message,$headers);
						// echo $_POST["email"];
						if(isset($_POST['btn-save']))
						{
						// $_SESSION['name']=$_POST['name'];
						$_SESSION['email']=$_POST['email'];
						$_SESSION['phone']=$_POST['phone'];
						$_SESSION['otp']=$rndno;
						header( "Location: otp.php");
						}

								
					}					
					else
					{			
		
						header("Location: forgot.php?error=email not found , try again.");
					}
		
				}
			}
			?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="icon" href="../tree1.png" type="image/icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Green Leaf Nursery Forgot Password</title>
</head>

<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #e0f3e0;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;

}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
  outline-color: yellowgreen;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 540px;
}

.form-container {
	position: sticky;
	top: 0;
	height: 100%;
    margin-left:50%;
}

.log-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}


.overlay-container {
	position: absolute;
	top: 0;
	/* left: 50%; */
	width: 50%;
	height: 100%;
}


.overlay {
    background: #FF416C;
    background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
    background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
    background: linear-gradient(-46deg,#ffff46 13%, #00dcff 81%, #93ff93 );
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 0 0;
    color: #FFFFFF;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
}


.overlay-right {
	right: 0%;
}


.social-container {
  margin: 44px 0 22px;
}

.social-container a {

    border: 3px solid #DDDDDD;
    border-radius: 4%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    border-image-slice: 1;
    width: 123px;
    /* border-image-source: linear-gradient(to left, #00C853, #B2FF59); */
    border: double 4px transparent;
    border-radius: 12px;
    background-image: linear-gradient(#ffffff, white), radial-gradient(circle at top left, #ffff46, #00dcff, #93ff93);
    background-origin: border-box;
    background-clip: content-box, border-box;
}
.social-container a :hover,input:focus,input:hover{
  
  /* -webkit-box-shadow: 10px 10px 99px 10px greenyellow;
  -moz-box-shadow: 10px 10px 99px 10px greenyellow;
  box-shadow: 10px 10px 99px 10px greenyellow; */
  box-shadow:
 20px 5px 60px #ffff46,
   0px 10px 60px #00dcff,
  -20px 5px 60px #93ff93;
  background-color:white;
  /*background-image: linear-gradient(-90deg, #CF77F3 0%, #009BFF 47%, #2AC9DB 100%);*/

}
button:hover{
  /* -webkit-box-shadow: 10px 10px 99px 10px tomato;
  -moz-box-shadow: 10px 10px 99px 10px tomato;
  box-shadow: 10px 10px 99px 10px tomato; */
    box-shadow:
 20px 5px 60px tomato,
   
  -20px 5px 60px #fff862;
 
}
.err{
    padding: 3% 9%;
    background: linear-gradient(45deg, tomato, #ffff34);
    border-radius: 7px;
    color: white;
}
</style>

<body>
	<div class="container" id="container">
    <div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
                    <img width="120" src="../tree1.png" alt="Green Leaf">
					<h1>WELCOME to Green Leaf Nursery</h1>
					<p>Green leaf nursery that provide plants, seeds, fertilizers and gardning related services. </p>
				</div>
			</div>
		</div>
		<div class="form-container log-in-container">
        <form action="forgot.php" method="post" class="signup">
				<h1>Forgot Password</h1>
				<div class="social-container">
                <a href="../login.php" class="social"><i class="fa fa-unlock-alt"><label for="me"> Login</label></i></a>
                <a href="../index.php" class="social"><i class="fa fa-home"><label for="me"> Home</label></i></a>
                <hr>
     	        <?php if (isset($_GET['error'])) { ?>
     		    <span class="err" ><?php echo $_GET['error']; ?></span>
     	        <?php } ?>

				</div>
        
				<!-- <span>or create your new account</span> -->
                <h2>Please Enter the Email-id For OTP</h2>

                <input type="email" name="email" placeholder="Example@gmail.com" />
                
				<button name="btn-save">Get Otp</button>
			</form>
			
		</div>
		
	</div>
</body>
</html> 