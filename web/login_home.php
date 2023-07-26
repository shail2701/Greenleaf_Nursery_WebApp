<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="tree1.png" type="image/icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<title>Green Leaf Nursery Login</title>
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

.input {
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
	min-height: 500px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
}

.log-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}


.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
}


.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #c5ff03, #ada);
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
	right: 0;
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

    width: 128px;
    /* border-image-source: linear-gradient(to left, #00C853, #B2FF59); */
    border: double 4px transparent;
    border-radius: 12px;
    background-image: linear-gradient(#ffffff, white), radial-gradient(circle at top left, #c5ff03, #ada);
    background-origin: border-box;
    background-clip: content-box, border-box;
}
.social-container a :hover,input:focus,input:hover{
  
  -webkit-box-shadow: 10px 10px 99px 10px greenyellow;
  -moz-box-shadow: 10px 10px 99px 10px greenyellow;
  box-shadow: 10px 10px 99px 10px greenyellow;

}

.check:hover,.check:focus{
	box-shadow: 0px 0px 8px 3px tomato;
}
button:hover{
  -webkit-box-shadow: 10px 10px 99px 10px tomato;
  -moz-box-shadow: 10px 10px 99px 10px tomato;
  box-shadow: 10px 10px 99px 10px tomato;
}
.err{
  padding: 2% 5%;
    background-color: #fd6347;
    border-radius: 5px;
    color:white;
}
.btn-msg{
	padding: 3% 9%;
    background: linear-gradient(45deg, tomato, #ffff34);
	background-color: red;
    border-radius: 7px;
    color: white;
	animation: example 3s ease infinite;

}

@keyframes example {
	0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.1, 1.1);
  }
  100% {
    transform: scale(1, 1);
  }
}
}
</style>

<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
      <form action="login.php" method="post" class="login" >
				<h1>Login</h1>
				<div class="social-container">
        <a href="signup.php" class="social"><i class="fa fa-unlock-alt" aria-hidden="true"><label for="me"> sign up</label></i></a>
        <a href="index.php" class="social"><i class="fa fa-home" aria-hidden="true"><label for="me"> Home</label></i></a>
        <hr>
     	<?php if (isset($_GET['error'])) { ?>
     		<span class="err" ><?php echo $_GET['error']; ?></span>
     	<?php } ?>
		 <script language="javascript">

function ValidateEmail() 
	{
		var strength1 = document.getElementById('strength1');
		var pwd = document.getElementById("mailid");
		var validmail = new RegExp("^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");

		if (pwd.value.length == 0) {
			strength1.innerHTML = document.getElementById("mailid").style.border='5px solid cyan';
		} 
		else if (validmail.test(pwd.value))
		  {
			// return (true)
			strength1.innerHTML = document.getElementById("mailid").style.border='5px solid lightgreen';
		  }
		  else
		  {
			// alert("You have entered an invalid email address!")
			// return (false)
			strength1.innerHTML = document.getElementById("mailid").style.border='5px solid red';
			
		}
	}
</script>

				</div>
        
				<span>or use your account</span>
				<input class="input" type="email" id="mailid" name="uname" placeholder="example@gmail.com" onkeyup="return ValidateEmail();"/>

				<input class="input" type="password" name="password" id="myInput" placeholder="Password"  />
				<div class="show"><input type="checkbox" class="check" onclick="myFunction()" title="show password"><span>show password</span></div><br>

				<script>
						function myFunction() {
						  var x = document.getElementById("myInput");
						  if (x.type === "password") {
						    x.type = "text";
						  } else {
						    x.type = "password";
						  }
						}

					
				</script>
			

				<?php if (isset($_GET['error'])) { 
					if($_GET['error']==="Incorect Email or password"){?>
				<a class="btn-msg" href="Forgotpass/forgot.php">Forgot your password? click me</a>
				<?php }} ?>
				<button name="submit">Log In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
        <img width="150" src="tree1.png" alt="Green Leaf">
					<h1>Green Leaf Nursery</h1>
					<p>Green leaf nursery that provide plants, seeds, fertilizers and gardning related services. </p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>