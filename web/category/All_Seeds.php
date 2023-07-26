<?php
include 'db_conn.php';
?>
<?php include 'head.php'; ?>
<?php



$limit = 4;
if(isset($_GET['page'])){
$page = $_GET['page'];
} else{
$page = 1;
}
$offset = ($page - 1)*$limit;

$sql = "SELECT * FROM seeds ORDER BY id DESC LIMIT {$offset}, {$limit}";
$result = mysqli_query($conn, $sql) or die("Query Failed");

if(mysqli_num_rows($result) > 0){


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="MystyleAA.css">
	<style>
          @font-face{
            font-family: Myfont;
            src : url('Opensans-SemiBold.ttf');
        }
		body{
			font-family:"Myfont";
		}
		.non{
			background-color:tomato;
		}
		.active{
			background-color:blue;
		}
		.admin-pagination{
			height: 60px;
    min-width: 30px;
    display: flex;
    margin-left: 2px;
    margin-right: 2px;
    justify-content: center;
    box-shadow: 0 1px 3px rgb(0 0 0 / 10%);
    align-items: center;
    border-radius: .65rem;
    font-weight: 600;
    cursor: pointer;
    font-size: 1.3rem;
    background-color: #ad7;
		}
        .page-in li{
			height: 30px;
    min-width: 30px;
    display: flex;
    margin-left: 16px;
    margin-right: 2px;
    justify-content: center;
    box-shadow: 0 1px 3px rgb(0 0 0 / 10%);
    align-items: center;
    border-radius: .65rem;
    font-weight: 600;
    cursor: pointer;
    font-size: 1.3rem;
	border:3px solid white;
    background-color: transparent;
		}
		.page-in li:hover{

			background-color: #4cc9f0;
  -webkit-box-shadow: 16px 38px 40px 61px rgba(76,201,240,1);
  -moz-box-shadow: -8px 34px 15px 26px rgba(76,201,240,1);
  box-shadow: 3px 2px 27px 17px rgba(76,201,240,1);
		}
		.page-in .active{
			background-color: #ffa5a5;
    padding: 5% 31%;
    height: 34px;
    min-width: 30px;
    display: flex;
    /* margin-left: 16px; */
    /* margin-right: 2px; */
    justify-content: center;
    box-shadow: 0 1px 3px rgb(0 0 0 / 10%);
    align-items: center;
    border-radius: .65rem;
    font-weight: 600;
    cursor: pointer;
    font-size: 1.3rem;

    border: 3px solid white;
    -webkit-box-shadow: 16px 38px 40px 61px #ffa5a5;
    -moz-box-shadow: -8px 34px 15px 26px #ffa5a5;
    box-shadow: 3px 2px 27px 17px #ffa5a5;
		}
    </style>

  <title>Green Leaf Nursery</title>
  </head>
  <body>
   <!-- <center><h1 class="stick-plant" >Plants</h1></center>
  <br>
		  <center><h2><u>Top Picks for Plants</u></h2></center>
	<br>
   <br><br>-->
  
  	<div class="container main">

     

	
		  
		  <br>
		  <center><h2 style="margin:2% 0;font-size: 28px;">All Seeds</h2></center><br>
          <div class="row">
          <?php  

		while($row = mysqli_fetch_assoc($result)){

		$post_id = $row['id'];
		$post_name = $row['name'];
		$post_image = $row['image'];
		$post_price = $row['price'];
		$post_del_price = $row['del_price'];


    ?>
  
 
          
  			<div class="col-md-3 col-sm-5">
  				<div class="product-grid">
  					<div class="product-image">
  						<a>
  							<img class="pic-1" src="imgs\<?php echo $post_image;?>">
  							<img class="pic-2" src="imgs\<?php echo $post_image;?>"> 

  						</a>
  						<!--<ul class="social">
  							<li ><a href="Product_Pages\All_Products\Rubber Tree, Rubber Plant, Ficus elastica (Small) - Plant.php "> <i class="fa fa-search" ></i></a></li>  
  						</ul>-->

                          <ul class="social">
  							<li><a href="seeds.php?myid=<?php echo $post_id; ?>"  data-tip="Quick View"> <i class="fa fa-search"></i></a></li>
  							 
                             <!--<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>-->
  						</ul>
  						
  						<span class="product-new-label">Sale</span>
  						<span class="product-discount-label">10%</span>
  						
					  </div>
			
  					
  					 <ul class="rating">
  						<li class="fa fa-star"></li>
  						<li class="fa fa-star"></li>
  						<li class="fa fa-star"></li>
  						<li class="fa fa-star"></li>
  						<li class="fa fa-star"></li>
  					</ul> 
  					
  					<div class="product-content">
  						<h3 class="title"><a href="seeds.php?myid=<?php echo $post_id; ?>"><?php echo $post_name;?></a></h3>
  						<div class="price"><?php echo "$post_price"?>  ₹<span><?php echo $post_del_price ?>₹</span></div>
						 
  						<a class="add-to-cart" href="seeds.php?myid=<?php echo $post_id; ?>">view item</a>
  					</div>
  					
  				</div>
				  
  			</div>
      



        
        <?php }?>
        </div>

		<?php
}

$sql1 = "SELECT * FROM seeds";
$result1 = mysqli_query($conn, $sql1) or die("Query Failed");

if(mysqli_num_rows($result1) > 0){

$total_records = mysqli_num_rows($result1);

$total_page = ceil($total_records / $limit);

echo "<ul class='pagination admin-pagination'>";
for($i = 1; $i <= $total_page; $i++){
if($i == $page){
$active = "active";
}else{
$active = "non";
}
echo "<div class='page-in'>";
echo '<li class="'.$active.'"><a href="All_Seeds.php?page='.$i.'">'.$i.'</a></li></div>';

}

echo "</ul>";
}

?>
       

</div>


<div class="copy-right">
		      <div class="copyy">
			        <p>© 2021 Green Leaf | Design Under
				          <a href="https://ksschool.org.in/" style="color:while;"> Ks. School of business Management</a>
			        </p>
		      </div>
	    </div>

    <!--jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

