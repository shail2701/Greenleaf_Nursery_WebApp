<?php
include 'db_conn.php'; 
session_start();
$mail=$_SESSION['user_name']; 
$nm =$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <title>Document</title>

    
</head>


<style>
           @font-face{
            font-family: Myfont;
            src : url('Opensans-SemiBold.ttf');
        } 
	body{
		font-family:myfont;
		
		
	}
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
</style>

<body>
    

<div class="container mt-5 mb-5"  id="printablediv">


    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
					<div class="col-md-1 float-left" style="display: flex;">
  						<div class="logo">
  							<div class="laundry-logo"></div>
  						</div>
  					</div>
					<div class="col-md-4 float-left text-dark mt-3 ml-2">
        				<h5><b>Green Leaf</b></h5>
      				</div>
				</div>
                <div class="invoice p-5">
                    <h5>Your order Confirmed!</h5> <span class="font-weight-bold d-block mt-4">Hello, <?php echo $nm." | Email-id is : ". $mail; ?></span> <span>Your order has been confirmed and will be Take away in next 2 to 10 days!</span>
                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
								<?php 

                                    $mail=$_SESSION['user_name']; 
									// $list = $conn->query('SELECT * FROM checkout WHERE umail=$mail');
                                    $list = "SELECT * FROM checkout WHERE u_mail='$mail' order by oid DESC LIMIT 1 ";
                                    // echo "list is ::::: ".$list ;
									  $total;
									// while($row=$list->fetch_assoc()):
                                      
                                        $result=mysqli_query($conn,$list);
                                      
                                        while ($row = mysqli_fetch_assoc($result)) 
                                        {
                                         
                                            $total=$row['totle_price'];
                                            $user_id=$row['userid'];
                                            $od=$row['oid'];

                                           
								?>
                                <tr>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Order Date</span> <span><?php echo date("M d, Y",strtotime($row['date_created'])) ?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Order No</span> <span>#<?php echo $od; ?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Payment</span> <span><i class="fas fa-money-bill fa-lg "></i></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Shiping Address</span> <div style="width: 75%"><?php echo  ucwords($row['address']); ?></div> </div>
                                    </td>
                                </tr>
								<?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="product border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
								<?php 
                                       
                                       
                                       $sql7="SELECT *  FROM shop_history WHERE umail = '$mail'";
                                       $result7=mysqli_query($conn,$sql7);
                                   
                                    
                                       while ($row = mysqli_fetch_assoc($result7)) 
                                       {
                                           $li = $row["lst_tot_prod"];
                                       
                                       } 
                                       echo "li is : ".$li;

									// $list2 = $conn->query("SELECT * FROM orders_items WHERE order_id='".$od."'");
                                    $list2 = "SELECT * FROM ordered WHERE umail='$mail' order by time DESC LIMIT $li;";
                                  
									$protot=0;
									// while($row2=$list2->fetch_assoc()):
                                        $result1=mysqli_query($conn,$list2);
                                    //   echo "<br><br>".$list2;
                                        if(!$result1)
                                        { 
                                                echo "Query is really die";
                                        }
                                  
                                        while ($row = mysqli_fetch_assoc($result1)) 
                                        {
                                            // echo "image :".$row['image'];
										// $list1 = $conn->query("SELECT * FROM products WHERE product_id='".$row2['product_id']."'");
							
										// while($row1=$list1->fetch_assoc()):
											$protot=$row['price']*$row['quantity'];

								?>
                                <tr>
									<td width="3%"><div style="border: 2px solid yellowgreen;padding:10px;"><img src="category/imgs/<?php echo $row['image'] ?>" width="100" height="100"></div> </td>
                                    <td width="60%"> <span class="font-weight-bold"><?php echo $row['prod_name']; ?></span>
                                        <div class="product-qty"> <span class="d-block text-dark">Quantity:<?php echo $row['quantity'] ?></span></div>
                                    </td>
                                    <td width="20%">
                                        <div class="text-right"> <span class="font-weight-bold">₹<?php echo $protot=$row['price']*$row['quantity'];  ?></span> </div>
                                    </td>
								</tr>
								<?php }?>
                                            
                            </tbody>
                        </table>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-5">
                            <table class="table table-borderless">
                                <tbody class="totals">
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Subtotal</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>₹<?php echo $total; ?>.00</span> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Shipping Fee</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>₹0.00</span> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Tax Fee</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>₹0.00</span> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Discount</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span class="text-success">₹0.00</span> </div>
                                        </td>
                                    </tr>
                                    <tr class="border-top border-bottom">
                                        <td>
                                            <div class="text-left"> <span class="font-weight-bold">Subtotal</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span class="font-weight-bold">₹<?php echo $total; ?>.00</span> </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>We will be sending order email when the item shipped successfully!</p>
                    <p class="font-weight-bold mb-0">Thanks for connect with us!</p> <span> Green Leaf Team</span>
                </div>
                <div class="d-flex justify-content-between card-footer p-3"><?php  date_default_timezone_set("Asia/Kolkata"); echo "Created date is " . date("Y-m-d h:i:sa"); ?></div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="width:57%">
<div class="card" >
	<div class="card-body">
		<div class="row">
			<button type="button"  class="btn-block ml-5 mr-5 btn-primary btn-sm" id="print" onclick="javascript:printDiv('printablediv')"><i class="fas fa-print fa-lg"></i> Print</button>
			<button type="button" onclick="javascript:home()" class="btn-block ml-5 mr-5 btn-primary btn-sm"><i class="fas fa-home fa-lg"></i> Go Back to Home</button>
		</div>
	</div>
</div>
</div>
<style>
	.card {
    border: none
}
.logo {

    font-size: 30px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
.totals tr td {
    font-size: 13px
}

.footer {
    background-color: #eeeeeea8
}

.footer span {
    font-size: 12px
}

.product-qty span {
    font-size: 12px;
    color: #dedbdb
}
.card-header {
    padding: .5rem 1rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
    background-color: yellowgreen;
}
.btn-primary {
    color: #fff;
    background-color: yellowgreen;
    border-color: #ecff8d;
    width: 50%;
}
.btn-primary:hover {
    color: #fff;
    background-color: tomato;
    border-color: white;
}
</style>
<script>
function printDiv(divID) {
        //Get the HTML of div
        var divElements = document.getElementById(divID).innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;
        //Reset the page's HTML with div's HTML only
        document.body.innerHTML = 
          "<html><head><title></title></head><body>" + 
          divElements + "</body>";
        //Print Page
        window.print();
        //Restore orignal HTML
        document.body.innerHTML = oldPage;

    }
function home(){
	window.location.assign('index.php?page=home');
}
</script>

</body>
</html>