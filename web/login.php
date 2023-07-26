<?php 
 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login_home.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login_home.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        //$pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) 
		{
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['password'] === $pass && $row['type'] == 'user') {
				session_start();

            	$_SESSION['user_name'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				$bool=true;
            	header("Location: index.php");
		        exit();
            }else if ($row['email'] === $uname && $row['password'] === $pass && $row['type'] == 'admin') {
				session_start();

            	$_SESSION['umail'] = $row['email'];
            	$_SESSION['uname'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				$bool=true;
            	header("Location: ../admin/index.php");
		        exit();
            }
			else{
				header("Location: login_home.php?error=Incorect Email or password");
		        exit();
			}
		}
		else
		{
			header("Location: login_home.php?error=Incorect Email or password");
	        exit();
		}
	}
	}
	
else{
	header("Location: login_home.php");
	exit();
}