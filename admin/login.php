<?php include "db_conn.php"; ?>

<?php
if(isset($_POST['login']))
{

			$user=$_POST['username'];
			$pass=$_POST['password'];
			$query = "SELECT * FROM admin WHERE email='$user'";
						
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
								$post_job = $row['type'];
							
							}

			if(empty($user)){
							echo '<script>alert("Please Enter Email ...")</script>';	

			}
			elseif((!filter_var($user, FILTER_VALIDATE_EMAIL)))
			{
							echo '<script>alert("Please Enter valid Email-id ...")</script>';	
			}
			
			else{
	
							
							// if($post_email && $post_pass && $post_job == 'admin')
							// {
							if($pass == $post_pass){
								echo $post_email." " .$post_name;
								
								session_start();
								$_SESSION['umail'] = $post_email;
								$_SESSION['uname'] = $post_name;
					
								// echo "SESSION ARRAY : ";
								// print_r($_SESSION);
								header("location:index.php");	
								

							}

							else{

								//  header("location:index.php");
								echo '<script>alert("You Are not authorized person")</script>';	
							
							}

						}
		
	}

		






?>



<!-- Navigation -->

<!DOCTYPE html>
<html lang="en">


<head>

    

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap2.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   
 

 
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script src="js/jquery.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>

<style>

.panel-default{
	margin-top:50%;
}
body{
	background-color:yellowgreen;
}
</style>
 
</head>

<body style="">

<!-- Page Content -->
<div class="container">

	<div class="form-gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="text-center">


							<h3><i class="fa fa-user fa-4x"></i></h3>
							<h2 class="text-center">Login</h2>
							<div class="panel-body">


								<form id="login-form" role="form" autocomplete="off" class="form" method="post">

								<?php if (isset($_GET['error'])) { ?>
     							<p class="error"><?php echo $_GET['error']; ?></p>
     							<?php } ?>

									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>

											<input name="username" type="text" class="form-control" placeholder="Enter User e-mail">
										</div>
									</div>

									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
											<input name="password" type="password" class="form-control" placeholder="Enter Password">
										</div>
									</div>

									<div class="form-group">

										<input name="login" class="btn btn-lg btn-primary btn-block" value="Login" type="submit">
									</div>


								</form>

							</div><!-- Body-->

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <hr> -->

	

</div> <!-- /.container -->
    

</div>

 
    
    
    <!-- /#wrapper -->

    <!-- jQuery -->
  

  
     <script src="js/scripts.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>