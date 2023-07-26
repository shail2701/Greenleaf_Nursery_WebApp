<?php include "db_conn.php";?>
<?php include "functions1.php";?>
<?php

function update()
{
    global $conn,$msg,$email;
	
    if(isset($_POST['submit']))
    {   
	   global $msg;
        // // $username = $_POST['username'];
        // // $newpassword = $_POST['newpassword'];
        // //$newpassword = md5($newpassword);

        // $select = "SELECT password FROM db WHERE username = '$username'";
        // // $query .= "username = '$username',";
        // $query ="UPDATE db SET password = '$newpassword' WHERE username = '$username'";
        // // $query .= "password = '$newpassword' ";
        // // $query .= "WHERE id = $id ";

        // $result =mysqli_query($conn, $query);
        // if(!$result)
        // {
        //     die("Query failed".mysqli_error($conn));
        // }
        // else 
        // {
        //     echo "updated";
        // }


        $email = $_POST['email'];
		
        $newpassword = $_POST['newpassword'];
        $cpassword = $_POST['cpassword'];
    
        $email = mysqli_real_escape_string($conn,$email);//sq; injection
        $newpassword = mysqli_real_escape_string($conn,$newpassword);//prevent from hackers
        $cnt=0;
		
        if(empty($email))
        {

            $msg.="emil required";
            $cnt++;
			// echo "    empty mail";
			// echo "<br><br>".$msg;
        }
        else
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {?>
              
               <?php $cnt++;
			
            }
            else
            {
                $sql = "SELECT * FROM users WHERE email='$email' "; // checks wheather username exist or not
                $result1 = mysqli_query($conn, $sql);
            
            }
        }

        if(empty($newpassword))
        {
		
            $msg.=" * Password required";
			// echo '<div class="err">* Password required</div>';
			// echo "<br><br>".$msg;
            $cnt++; 
        }
        else
        {
            if(strlen($newpassword)<8)
            {
                $msg.="* Password atleast 8 character required";
				// echo "pass 8 char";
				// echo "<br><br>".$msg;
               ?>
               
                <?php $cnt++;
            }
        }
        if($newpassword !== $cpassword)
        {
           $msg.="* Both Password Must Be Same";
            
            $cnt++;
                $newpassword="";
                $cpassword="";
				// echo "<br><br>".$msg;
        }
    
        if($cnt==0)
        {   
            $select = "SELECT password FROM users WHERE email = '$email'";
            // $query .= "username = '$username',";
            $query ="UPDATE users SET password = '$newpassword' WHERE email = '$email'";
            // $query .= "password = '$newpassword' ";
    
            $result =mysqli_query($conn, $query);
                if(!$result)
                {
                    die("Query failed".mysqli_error($conn));
                }
                else 
                {
                    $msg.="<a href='../login.php'>Updated successfully.. click here</a>";
                   
					
					// echo "updated";
					
					//sleep(5);
                     
                    //header('location:../login_home.php');
                   
// echo '<form method="get" action="login_update1.php">';

                    
                    
// echo "<a href='login_update.php?msg='Password''></a>";
// echo "lolllllllllllllllllll";
                    
//                     echo '</form>';
                 
                }
        }

    }
}


?>
<?php
    update();

    $query = "SELECT * FROM users ";
    $done = mysqli_query($conn,$query);
         if(!$done) {
                // echo "something went wrong with login";
        die("QUERY FAILED ." . mysqli_error($conn));
        }
        while($row = mysqli_fetch_assoc($done))
        {
            $post_email = $row['email'];
            $post_name = $row['name'];
            $post_pass = $row['password'];
         
    
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


.social {
  margin: 44px 0 22px;
}

.social {

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
	padding: 1% 1%;
    background: linear-gradient(45deg, tomato, #ffff34);
    border-radius: 7px;
    color: white;
    font-size: 13px;
}
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
        <form action="login_update.php" method="post" class="signup">
				<h1>Forgot Password</h1>
				
                <hr style="border: 2px solid #676767;width: 100%;background-color: #676767;border-radius: 24px;">
				<?php if(isset($msg)){ ?>
     		    <span class="err" ><?php echo $msg; ?></span>
     	        <?php }else{echo "";} ?>
                
				
        
				<!-- <span>or create your new account</span> -->
                <h2>Update Password</h2>
                
                <input type="email" value="<?php echo $email; ?>" name="email" placeholder="Forgot Password Email-id" />
				<input type="password" name="newpassword" placeholder="New Password"  />
                <input type="password" name="cpassword" placeholder="Re-Password"  />
                
                <?php
                // show();
                ?>

				<button name="submit">Submit</button>
                
			</form>
		</div>
		
	</div>
</body>
</html> 