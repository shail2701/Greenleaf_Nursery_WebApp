<?php
include 'db_conn.php';
ob_start();
// session_start();
if(isset($_SESSION['id']))
{
      $check=is_numeric($_SESSION['id']);
      if($check!=1)
      {
          $error=0;
      }
}
?>

<?php
      global $item_id;
      if(isset($_GET['myid']))
      {
          $item_id = $_GET['myid'];
      }

      if(isset($_GET['delcid']))
      {
          $cuid = $_GET['delcid'];
          //echo $cuid;

          $cutm = $_GET['delcdt'];
          echo $cuid." ".$cutm;
      
          $query34 = "DELETE FROM comment WHERE uid=$cuid AND date='$cutm' LIMIT 1";
          $del_com = mysqli_query($conn,$query34);  
  
          if($del_com)
          {
            echo " Comment was deleted";
            header("location:Accessory_Product.php?myid=$item_id");
          }
          else
          {
            echo  $query34."Comment is not deleted";
            
            
          }
        }

      $query = "SELECT * FROM accessories WHERE id = $item_id";
      $select_pro_by_id = mysqli_query($conn,$query);  
  
      if(!$select_pro_by_id)
      {
          echo "<br><br><b>not fatch but possible</b><br>";
      }

      
        
        //$query = mysqli_query($conn, "SELECT * FROM items ");
        while($row = mysqli_fetch_assoc($select_pro_by_id)){
          
            
            $post_id = $row['id'];
            $post_name = $row['name'];
         
            $post_price = $row['price'];
            $post_dprice = $row['del_price'];
            $post_image = $row['image'];
            $post_description = $row['description'];

        }
      
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="tree1.png" type="image/icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      @font-face{
          font-family: Myfont;
        src : url('Opensans-SemiBold.ttf');
        }

 
 @media screen and (min-width: 500px) {
  .path-r {
    width: 100%;
    font-size: 91%;

  }
  .left-side-product-box img{
    width:100%;
  }
  .offers{
    background-color: tomato;color: white;font-size: 12px;width: 11%;margin: 6px 0px 5px 1px;padding: 1%;
  }
  .prod-nm{
      font-size:28px;
  }
  .rating li{
    color:#f6c347;
    font-size:13px;
    margin: 0 0px 3px 0;
  }
  .rating span{
    color:black;
    font-size:14px;
  }
  .new-pr{
    font-size: 19px;
    margin: 16px 0 0 0;
  }
  .pro-t{
    font-size:16px;
    margin: 13px 0px;
  }
  .pro-t ul{
      font-size:12px;
  }
  .pro-nt{
    margin:10px 0px 30px;
    padding:0px 8px 10px;
    border: 2px dashed greenyellow;
    padding: 0 8px 10px 8px;
    max-width: 63%;
  }
  .pro-nt h3{
    font-size:24px;
  }
  .pro-nt li{
    font-size:12px;
  }
  .del{
    color:tomato;
    font-size:13px;
  }
  .quanty-r{
    padding: 4px;
    font-size: 15px;
  }
  .quanty-r > select{
    font-size: 82%;
    margin: 0px;
    padding: 0px;
  }
  .pi-fd{
    letter-spacing: 0.0em;
    font-size: 94%;
    width: 43%;
    background-color: #ff6b6b;
    padding: 4px;
    border: none;
    color: white;
    background: linear-gradient(to left, tomato 50% ,#baef5e 50% ) right;
    background-size: 200%;
    transition: 1s ease-out;
    outline:none;
    -webkit-box-shadow: 5px 5px 30px 6px tomato;
  -moz-box-shadow: 5px 5px 30px 6px tomato;
  box-shadow: 5px 5px 30px 6px tomato;
  }
  .container h3{
    font-size: 24px;
  }
  .container>p>h6{
    margin:16px 0px;
    font-weight:normal;
  }
  .footer-info h3{
          font-size:28px;
  }
  .pro-nt li:hover{
    color:tomato;
  }
  .footer-grids li{
      font-size:90%;

  }
  .copy-right p {
    color: #000;
    letter-spacing: 2px;
    font-weight: 600;
    font-size: 15px;
}
.copy-right {
    text-align: center;
    padding: 15px 0;
    background-image: linear-gradient(to right,#50c150, #ffff93);
}
}

@media screen and (max-width: 800px) {
	.path-r{
    width: 100%;
    font-size: 70%;
  }
  .left-side-product-box img{
    width:83%;
  }
  .offers{
    background-color: tomato;
    color: white;
    font-size: 7px;
    width: 16%;
    margin: 6px 0px 5px 1px;
    padding: 1%;
  }
  .prod-nm{
        font-size:15px;
  }
  .rating li{
    color: #f6c347;
    font-size: 8px;
    margin: 0 0px 4px 0;
  }
  .rating span{
    color:black;
    font-size:10px;
  }
  .newpr{
    font-size: 15px;
    margin: 9px 0 0 0;
  }
  .pro-t{
    font-size: 11px;
    margin: 13px 0px;
  }
  .pro-t ul{
      font-size:11px;
  }
  .pro-nt{
    margin: 19px 0px 19px;
    padding: 0px 8px 10px;
    border: 2px dashed #baef5e;
    padding: 0px 1px 0px 5px;
    max-width: 89%;
  }
  .pro-nt h3{
    font-size:15px;
  }
  .pro-nt li{
    font-size:9px;
  }
  .pro-nt li:hover{
    color:tomato;
  }
  .del{
    color:tomato;
    font-size:13px;
  }
  .quanty-r{
    padding: 4px;
    font-size: 12px;
  }
  .quanty-r select{
    font-size: 82%;
    margin: 0px;
    padding: 0px;
  }
  .pi-fd{
    letter-spacing: 0.0em;
    font-size: 69%;
    width: 41%;
    background-color: #ff6b6b;
    padding: 0px;
    border: none;
    color: white;
    background: linear-gradient(to left, tomato 50% ,#baef5e 50%, ) right;
  background-size: 200%;
    transition: 1s ease-out;
    outline:none;
    -webkit-box-shadow: 10px 10px 99px 6px tomato;
  -moz-box-shadow: 10px 10px 99px 6px tomato;
  box-shadow: 10px 10px 99px 6px tomato;
  }
  .container h3{
    font-size: 18px;
  }
  .container h6{
    margin:16px 0px;
    font-weight:normal;
    font-size: 80%;
  }
  .footer-info h3{
          font-size:16px;
  }
  .footer-grids li{
      font-size:60%;

  }
  .copy-right p {
    color: #000;
    letter-spacing: 0px;
    font-weight: 100;
    font-size: 9px;
}
.copy-right {
    text-align: center;
    padding: 15px 0;
    background-image: linear-gradient(to right,#50c150, #ffff93);
}
} 


.copy-right a:hover{
    color:white;
}
.footer-grids a{
   color:#3c3c3c;
}
.footer-grids a:hover,:focus{
  -webkit-box-shadow: 10px 10px 99px 6px tomato;
  -moz-box-shadow: 10px 10px 99px 6px tomato;
  box-shadow: 10px 10px 99px 6px tomato;
  color:tomato;
  background-color:transparent;
}
.pi-fd:hover,:focus{
  background-position: left;
  -webkit-box-shadow: 10px 10px 30px 6px #baef5e;
      -moz-box-shadow: 10px 10px 30px 6px #baef5e;
      box-shadow: 10px 10px 30px 6px #baef5e;
      color: black;
  font-weight:bold;
  letter-spacing:2px;
  
  outline:none;
}
.path-r a{
  color: yellowgreen;
}
.path-r a:hover,:focus{
  -webkit-box-shadow: 10px 10px 30px 6px #baef5e;
      -moz-box-shadow: 10px 10px 30px 6px #baef5e;
      box-shadow: 10px 10px 30px 6px #baef5e;
  color: yellowgreen;
  font-weight:bold;
  outline:none;
}
.prod-quanty{
  background-image: linear-gradient( 
92deg
 ,#a2ff4c, #93e4ff);
    padding: 1% 3%;
    /* border: 2px solid #989797; */
    color: black;
    display: block;
    width: 30%;
    border-radius: 15px;
    box-shadow: 2px 8px 18px #4cff9f, 21px 10px 25px #93e504, -5px 6px 4px #fa8aff;
}
.pi-fdc{
    letter-spacing: 0.0em;
    font-size: 94%;
    width: 20%;
    background-color: #ff6b6b;
    padding: 10px;
    border: none;
    border-radius: 15px;
    color: white;
    background: linear-gradient(to right, #baef5e 50% , tomato 50%) right;
    background-size: 200%;
    transition: 1s ease-out;
    outline: none;
    -webkit-box-shadow: 5px 5px 30px 6px tomato;
    -moz-box-shadow: 5px 5px 30px 6px tomato;
    box-shadow: 5px 5px 30px 6px tomato;
  }
  .pi-fdc:hover,:focus{
  background-position: left;
  -webkit-box-shadow: 10px 10px 30px 6px #baef5e;
      -moz-box-shadow: 10px 10px 30px 6px #baef5e;
      box-shadow: 10px 10px 30px 6px #baef5e;
  color: black;
  font-weight:bold;
  letter-spacing:2px;
  
  outline:none;
}
.comm{
  box-shadow: 1px 2px 30px 6px #baef5e;
    border: 5px solid #baef5e;
    color: black;
    display: block;
    padding:6%;
}
.media{
  display: block;
    border: 6px solid #baef5e;
    padding: 9px;
    border-radius: 16px;
    color: #5d5d5d;
    overflow: auto;
    margin: 3%;
    max-width: 50%;
    box-shadow: 1px 2px 30px 6px #baef5e;
    transition: transform .2s;
}
.media:hover{
  border:none;
  transform: scale(1.1);

}
.cmmt{
  display: block;
    width: 100%;
    height: calc(1.5em + 1.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 4px solid #baef5e;
    border-radius: 10px;
    -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-o
}
.cmmt:hover,.cmmt:focus{
  box-shadow: 1px 2px 30px 6px #baef5e;
  border:none;
  border-radius:10px;
}
.backme{
  background-color: #baef5e;
    padding: 3px 7px;
    margin-right: 15px;
    border-radius: 12px;
    text-transform: lowercase;
    text-shadow: 0 0 black;
    cursor:pointer;
    box-shadow: 0px 0px 12px 4px #baef5e;
}
.backme:hover{
  color: white;
  cursor: pointer;
  border:3px solid white;
}
  </style>
  <script>
function goBack() {
  window.history.back();
}
</script>
 
  </style>

    <title>Green Leaf Nursery</title>
  </head>
   <body style="color: #828282;">

            <?php include("head.php");?>

            <?php 

if(isset($_POST['create_comment'])) {

  if($_SESSION['user_name'] != NULL)
  {
    $the_post_id = $_GET['myid'];
    $comment_uid = $_SESSION['id'];
    $comment_email = $_SESSION['name'];
    $comment_content = $_POST['comment_content'];


    if (empty($comment_content)) {

            echo "empty comment";
    }
    else
    {

        $query = "INSERT INTO comment (proid , uid, umail, content) VALUES ($the_post_id ,$comment_uid, '{$comment_email}', '{$comment_content }')";
  
        $create_comment_query = mysqli_query($conn, $query);

        if (!$create_comment_query) {
          //echo "<h1>".$query."</h1>";
          die('QUERY FAILED' . mysqli_error($conn));
          echo "<h1>FAILED TO ADD</h1>";

        }
        else
        {
          echo "comment posted successfully";
          header("refresh:2");
        }


    }
  }
  else
  {
    header("location:../login.php");
  }

}




?> 

<br>
<div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
 
<!-- <div class="card-body"> -->
  <div class="container">
	  <div class="col-lg-12  p-3 main-section bg-white">
      <div class="row m-0">
        <div class="col-lg-12">
        <p class="path-r"><span class="backme" onclick="goBack()"><i class="fa fa-arrow-left" aria-hidden="true"> Go Back </i> </span><a href="accessory.php">Accessory</a> > <?php echo "<span style='font-size:80%;'>".$post_name."</span>"; ?> </p>
      </div>	
      <div class="col-lg-5  left-side-product-box ">
        
                    <img class=" float-md-end mb-3 ms-md-3" width="" src="imgs/<?php echo $post_image; ?>" style="" alt="error">
          </div>
      
          <div class="col-lg-7">
				    <div class="right-side-pro-detail m-0">
					    <div class="row">
                <div class="col-lg-12">
                <h3 class="m-0 p-0 prod-nm" ><?php echo $post_name ?></h3><!--"ID : ".$post_id."<br>".-->
        
        
        <!-- <h5>Recently Added</h5> -->
      
         <ul class="rating m-0 p-0" style="">
         
          <li style="" class="fa fa-star"></li>
          <li style="" class="fa fa-star"></li>
          <li style="" class="fa fa-star"></li>
          <li style="" class="fa fa-star"></li>
         <li  style=""class="fa fa-star-o"></li>
         <span style="">Rating (4/5) </span>
        </ul>   
      
        
        <div class="offers" style="">
            <span>save 10% </span>
        </div>
        <div class="newpr" style="">₹<?php echo " ".$post_price?>&ensp;<del class="del" style=""><?php echo ' '.$post_dprice?></del></div>
     

      <div class="pro-t">
          <p style="">(MRP Inclusive of all taxes)</p>
          <ul>
            <li>Shipping Rs 79 for entire order</li>
            <li>Delivery charge depends on offers</li>
            <li>Dispatch in 5-8 days</li>
          </ul>
      </div>
      <div class="pro-nt" style="">
       <h3 style=""> Note </h3> 
       <ul>
      <li style="">Due to Covid- 19 and some inevitable circumstances. The production is affected. For this reason, the delivery on this product may vary.</li>
      </ul>
      </div>

    

    <form method='post' action='' style="">
          <span class="quanty-r">Quantity 
            <select name="qty14" value="quantity" style="">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            </select>
            </span>
            &emsp;<button class="pi-fd" type='submit' style="" name='submit14'>Add to Cart</button>

    </form>
    <?php

    

$sucess=false;

if (isset($_POST['submit14'])) 
{
       
if(isset($_SESSION['user_name']))
{

  $nm = $_SESSION['user_name'];

  $sql="SELECT *  FROM users WHERE email = '$nm'";
  $result1=mysqli_query($conn,$sql);

  while ($row = mysqli_fetch_assoc($result1)) 
  {
   $uid=$row["id"];
   $u_mail=$row['email'];




        if (isset($_POST['qty14'])) {
            $qtys_1=$_POST['qty14'];
            $query_1 = "INSERT INTO shoppingcart(id,name,price,image,quantity,uid) VALUE ($post_id,'$post_name',$post_price,'$post_image',$qtys_1,$uid)";
         
          
          
               if (mysqli_query($conn, $query_1)) {
                    echo "<br><span style='background-image: linear-gradient(92deg,#7cfbaf, #ffff93);
                    padding: 2px;
                    border: 2px solid lightgray;
                    border-radius: 5px;'>Quantity : ".$qtys_1." Added</span>";
                    $sucess=true;
                  

                 }
          }
          if (isset($_POST['submit14']))
            {
               if(!$sucess)
                {
                    $qtys_1=$_POST['qty14'];
                    $query_2 = "UPDATE shoppingcart set quantity=$qtys_1 WHERE id=$post_id";

                    if (mysqli_query($conn, $query_2)) 
                    {
                      echo "<br><span style='background-image: linear-gradient(92deg,#7cfbaf, #ffff93);
                      padding: 2px;
                      border: 2px solid lightgray;
                      border-radius: 5px;'>Quantity : ".$qtys_1." Added</span>";
                      // $sucess=true;
                    
                    }
              
                }
            
            
              }

          }
 }
 else
 {
  echo  "<script>alert('Please Login... LogIn require !! ')</script>";
   sleep(1);
  header('location:../login.php');
  }

}

?>
</div>
</div>
</div>
</div>

 

<br>

<hr>
  <div class="container" style="padding:2%;">
     <div class="descr"  style=""> 
       <h3 style=";">Description </h3>
       <p><h6 style=""><?php echo nl2br($post_description); ?></h6></p>
      
        </div>
          
      
</div>
</div>


<div class="well comm">



            <h4 style="text-align: center;background-color: #baef5e;color:white;padding: 9px;border-radius: 10px;padding: 3px;">Leave a Comment:</h4>
            <form action="" method="post" role="form" enctype="multipart/form-data">

                <div class="form-group">
                <h6 style="color:red;">* Unappropriate comment remove by admin..</h6><br><br>
                    <label for="comment">Write Your Comment Here..</label>
                    <textarea name="comment_content" class="cmmt" ></textarea>
                </div>
                <button type="submit1" name="create_comment" class="pi-fdc">Submit</button>
            </form>

            <hr>
                
                <?php 


           $query = "SELECT * FROM comment WHERE proid = {$item_id} AND status = 'approved'ORDER BY comid DESC ";
           $select_comment_query = mysqli_query($conn, $query);
           if(!$select_comment_query) {

               die('Query Failed' . mysqli_error($conn));
               echo "im die";
            }
            else
            {
           while ($row = mysqli_fetch_array($select_comment_query)) {
           $comment_date   = $row['date']; 
           $comment_content= $row['content'];
           $comment_author = $row['umail'];
           $comment_uid = $row['uid'];
           ?>
 
               <div class="media">
                      
             
                      <div class="media-body">
                          <h5 class="media-heading"><span style="font-size:15px;">Comment By : </span><?php echo $comment_author;   ?></h5>
                              <small><?php echo $comment_date;   ?></small>
                          
                          
                          &ensp;<span style="background-color: yellowgreen;padding: 4px;color: white;border-radius: 6px;font-size: 18px;"><?php echo $comment_content;   ?></span>
                         <br>
                         <?php if(isset($_SESSION['id'])) { if($comment_uid==$_SESSION['id']) {?>
                           
                           <a style="color:black;" href="Aceessory_Product.php?myid=<?php echo $item_id;?>&delcid=<?php echo $comment_uid; ?>&delcdt=<?php echo $comment_date;?>">delete</a>
                                  
                           
                      <?php } }
                      else if(!isset($_SESSION['id'])){
                        echo "Copyright @greenleaf";
                      }

                      ?>
                        
                      </div>
                  </div> 
                 
   
 
            <?php }}  ?>


            
        </div>
     
</div>
</div></div>
   <!-- <center>
   <a href="../aboutus.php" style="color: black;"><button class="btn-pro1" type="button">About us</button></a>
   <a href="../index.php" style="color: black;"><button class="btn-pro2" type="button">Home</button></a>
   <a href="../privacypolicy.php" style="color: black;"><button class="btn-pro3" type="button">Privacy Policy</button></a>
  </center>
  
    <div class="pro-bot">
    <p style="color:black;">© 2021 Green Leaf | Design Under
				<a href="https://ksschool.org.in/" style="color:while;"> Ks. School of business Management</a>
			</p>
</div> -->
<div class="footer-info w3-agileits-info" style="font-family:myfont;padding:0px 15%;">
				<!-- footer categories -->
        <div class="row">
          <!-- <div class="col address-right"> -->
					<div class="col footer-grids">
						<h3>Categories</h3>
          
						<ul>
							<li>
								<a href="All_Plants.php">Plants</a>
							</li>
							<li>
								<a href="fruit.php">Fruits</a>
							</li>
							<li>
								<a href="All_Seeds.php">Seeds</a>
							</li>
							<li>
								<a href="accesories.php">Gardening product</a>
							</li>
							
						
						</ul>
					</div>
					<div class="col footer-grids agile-secomk" style="margin-top: 3.5%;">
						<ul>
							<li>
								<a href="fertilizer.php" >fertilizers</a>
							</li>
							<li>
								<a href="vegetable.php">vegetables</a>
							</li>
							<li>
								<a href="herb.php">Hearb Plant</a>
							</li>
							<li>
								<a href="cactus.php">Cactus</a>
							</li>
							
						</ul>
					</div>

				<!-- //footer categories -->
				<!-- quick links -->
				<!-- <div class="col-sm-6 address-right"> -->
					<div class="col footer-grids">
						<h3>Quick Links</h3>
						<ul>
							<li>
								<a href="../aboutus.php">About Us</a>
							</li>
							<li>
								<a href="../contactUs.php">Contact Us</a>
							</li>
							<li>
								<a href="../privacypolicy.php">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> 123 Bopal, in.</li>
							<li>
								<i class="fa fa-mobile"></i> 333 222 3333 </li>
							<li>
								<i class="fa fa-phone"></i> +222 11 4444 </li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:greenleaf.bhavani@gmail.com"> greenleaf.bhavani@gmail.com</a>
							</li>
						</ul>
					</div>
				</div></div>

				<!-- //quick links -->
				<!-- social icons -->
			
			
					
			
						<div class="clearfix"> </div>
					</div>
				
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>

      <div class="copy-right">
		      <div class="copyy">
			        <p>© 2021 Green Leaf | Design Under
				          <a href="https://ksschool.org.in/" style="color:while;"> Ks. School of business Management</a>
			        </p>
		      </div>
	    </div>
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

   