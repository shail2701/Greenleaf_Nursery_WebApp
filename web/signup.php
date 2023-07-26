<!DOCTYPE html>
<html>
<head>
	
	<link rel="icon" href="tree1.png" type="image/icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Green Leaf Nursery Signup</title>
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
	min-height: 580px;
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

.check:hover,.show:focus{
	box-shadow: 0px 0px 8px 3px tomato;
}
</style>

<body>
	<div class="container" id="container">
    <div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
                    <img width="150" src="tree1.png" alt="Green Leaf">
					<h1>WELCOME to Green Leaf Nursery</h1>
					<p>Green leaf nursery that provide plants, seeds, fertilizers and gardning related services. </p>
				</div>
			</div>
		</div>
		<div class="form-container log-in-container">
        <form action="signup-check.php" method="post" class="signup">
				<h1>Create Account</h1>
				<div class="social-container">
                <a href="login.php" class="social"><i class="fa fa-unlock-alt"><label for="me"> Login</label></i></a>
                <a href="index.php" class="social"><i class="fa fa-home"><label for="me"> Home</label></i></a>
                <hr>
     	        <?php if (isset($_GET['error'])) { ?>
     		    <span class="err" ><?php echo $_GET['error']; ?></span>
     	        <?php } ?>

				</div>
        
				<script language="javascript">
    			function passwordChanged() {
    			    var strength = document.getElementById('strength');
    			    var strongRegex = new RegExp("^(?=.{8,16})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
    			    var mediumRegex = new RegExp("^(?=.{8,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
    			    var enoughRegex = new RegExp("(?=.{8,}).*", "g");
    			    var pwd = document.getElementById("myInput");
    			    if (pwd.value.length == 0) {
    			        strength.innerHTML = document.getElementById("myInput").style.border='5px solid cyan';
    			    } else if (false == enoughRegex.test(pwd.value)) {
    			        strength.innerHTML = document.getElementById("myInput").style.border='5px solid purple';
    			    } else if (strongRegex.test(pwd.value)) {
    			        strength.innerHTML = document.getElementById("myInput").style.border='5px solid lightgreen';
    			    } else if (mediumRegex.test(pwd.value)) {
    			        strength.innerHTML = document.getElementById("myInput").style.border='5px solid orange';
    			    } else {
    			        strength.innerHTML = document.getElementById("myInput").style.border='5px solid red';
    			    }

					
    			}
				function passwordChanged1() {
    			    var strength = document.getElementById('strength');
    			    var strongRegex = new RegExp("^(?=.{8,16})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
    			    var mediumRegex = new RegExp("^(?=.{8,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
    			    var enoughRegex = new RegExp("(?=.{8,}).*", "g");
    			    var pwd = document.getElementById("myInput1");
    			    if (pwd.value.length == 0) {
    			        strength.innerHTML = document.getElementById("myInput1").style.border='5px solid cyan';
    			    } else if (false == enoughRegex.test(pwd.value)) {
    			        strength.innerHTML = document.getElementById("myInput1").style.border='5px solid purple';
    			    } else if (strongRegex.test(pwd.value)) {
    			        strength.innerHTML = document.getElementById("myInput1").style.border='5px solid lightgreen';
    			    } else if (mediumRegex.test(pwd.value)) {
    			        strength.innerHTML = document.getElementById("myInput1").style.border='5px solid orange';
    			    } else {
    			        strength.innerHTML = document.getElementById("myInput1").style.border='5px solid red';
    			    }
				}
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

				<span>or create your new account</span>
				<input type="text" class="input" name="name" placeholder="Your Name" />
                <input type="email" class="input" id="mailid" name="uname" placeholder="example@gmail.com" onkeyup="return ValidateEmail();"/>
				<input type="password" class="input" id="myInput" name="password" placeholder="Password"  onkeyup="return passwordChanged();"/>
                <input type="password" class="input" id="myInput1" name="re_password" placeholder="Confirm-Password"  onkeyup="return passwordChanged1();"/>
				<div class="show"><input type="checkbox" class="check" onclick="myFunction()" title="show password"><span>show password</span></div><br>

				<script>
						function myFunction() {
						  var x = document.getElementById("myInput");
						  if (x.type === "password") {
							x.type = "text";
						  } else {
							x.type = "password";
						  }
						  var y = document.getElementById("myInput1");
						  if (y.type === "password") {
							y.type = "text";
						  } else {
							y.type = "password";
						  }
						}
						
				</script>
				<div class="color" style="font-size: 11px;">
				<i style="color:cyan" class="fa fa-square" aria-hidden="true"></i>Blank 
				<i style="color:red" class="fa fa-square" aria-hidden="true"></i>Low 
				<i style="color:orange" class="fa fa-square" aria-hidden="true"></i>Medium 
				<i style="color:purple" class="fa fa-square" aria-hidden="true"></i>NumAlph + < 8 
				<i style="color:lightgreen" class="fa fa-square" aria-hidden="true"></i>Strong 

				
				
				
				</div><br>
				<!-- <a href="Forgotpass/forgot.php">Forgot your password?</a> -->
				<button name="submit">Sign up</button>
			</form>
		</div>
		
	</div>
</body>
</html> 