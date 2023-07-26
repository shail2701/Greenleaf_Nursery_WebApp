<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	function strongpass($data)
	{
		$uppercase = preg_match('@[A-Z]@', $data);
		$lowercase = preg_match('@[a-z]@', $data);
		$number    = preg_match('@[0-9]@', $data);
		$specialChars = preg_match('@[^\w]@', $data);
		if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($data) < 8) {
			//	echo ' should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
				$data = 0;
				//return $data;
		}else{
			return $data;
		}
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$pass1 = strongpass($pass);

	$re_pass = validate($_POST['re_password']);
	$re_pass1 = strongpass($re_pass);

	$name = validate($_POST['name']);
	
	$user_data = 'uname='. $uname. '&name='. $name;
	

	if (empty($uname)) {
	
		header("Location: signup.php?error=Email is required&$user_data");
		
	    exit();
	}
	else if((!filter_var($uname, FILTER_VALIDATE_EMAIL))) {
		header("Location: signup.php?error=Email is Invalid &$user_data");
		exit();
	}
	else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
	else if($pass1==0){
		header("Location: signup.php?error=Password should like : Example@123");
		exit();		
	}
	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}
	
	else{

		// hashing the password
       // $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The email is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(email, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	//  header("Location: signup.php?success=Your account has been created ");
			   header("location:login.php");
			
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}