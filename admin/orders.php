<?php include "includes/admin_header.php";?>



<?php include "includes/admin_navigation.php"; ?>


         

    <div id="wrapper">



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin Page
                            <small>GreenLeaf</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard /</a> <a href="orders.php"> Orders</a>
                            </li>
                            <!-- <li class="active">
                                <i class="fa fa-file"></i> Home
                            </li> -->
                        </ol>
                        <?php 
                        global $mol;
  if(isset($_GET['processing'])){

   
    $orderid = $_GET['processing'];
    $query = "UPDATE `checkout` SET `status`='processing' WHERE oid=$orderid";
    $res=mysqli_query($conn,$query);
    if(!$res){

        die("QUERY FAILED ." . mysqli_error($conn));

        }
        else
        {
            $query1 = "UPDATE `ordered` SET `status`='processing' WHERE order_id=$orderid";
            $res1=mysqli_query($conn,$query1);
            if(!$res){

                die("QUERY FAILED ." . mysqli_error($conn));
        
            }
            else
            {
                header("location:orders.php");
                    //header("refresh: 1");
            }
        }
  }
  if(isset($_GET['shipped'])){

   
    $orderid = $_GET['shipped'];
    $query = "UPDATE `checkout` SET `status`='shipped' WHERE oid=$orderid";
    $res=mysqli_query($conn,$query);
    if(!$res){

        die("QUERY FAILED ." . mysqli_error($conn));

        }
        else
        {
            $query1 = "UPDATE `ordered` SET `status`='shipped' WHERE order_id=$orderid";
            $res1=mysqli_query($conn,$query1);
            if(!$res){

                die("QUERY FAILED ." . mysqli_error($conn));
        
            }
            else
            {
                header("location:orders.php");
                    //header("refresh: 1");
            }
        }
  }
  if(isset($_GET['delivered'])){

   
    $orderid = $_GET['delivered'];
    $query = "UPDATE `checkout` SET `status`='delivered' WHERE oid=$orderid";
    $res=mysqli_query($conn,$query);
    if(!$res){

        die("QUERY FAILED ." . mysqli_error($conn));

        }
        else
        {
            $query1 = "UPDATE `ordered` SET `status`='delivered' WHERE order_id=$orderid";
            $res1=mysqli_query($conn,$query1);
            if(!$res){

                die("QUERY FAILED ." . mysqli_error($conn));
        
            }
            else
            {
                header("location:orders.php");
                    //header("refresh: 1");
            }
        }
  }
  if(isset($_GET['cancel'])){

   
    $orderid = $_GET['cancel'];
    $query = "UPDATE `checkout` SET `status`='cancel' WHERE oid=$orderid";
    $res=mysqli_query($conn,$query);
    if(!$res){

        die("QUERY FAILED ." . mysqli_error($conn));

        }
        else
        {
             $query1 = "UPDATE `ordered` SET `status`='cancel' WHERE order_id=$orderid";
            $res1=mysqli_query($conn,$query1);
            if(!$res){

                die("QUERY FAILED ." . mysqli_error($conn));
        
            }
            else
            {
                header("location:orders.php");
                    //header("refresh: 1");
            }
        }
  }
?>
                        <div class="form-group">
<table class="table table-bordered table-hover">
                            <thead >
                                <tr>
                                    <th>Order-id</th>
                                   
                                    <th>Email</th>
                                    <th>First-name</th>
                                    <th>Last-name</th>
                                    <th>Address</th>
                                     <th>City</th>
                                    <th>Pin-code</th>
                                    <th>Contact-No</th>
                                    <th>User-id</th>
                                    <th>Total-Price</th>
                                    <th>User-mail</th>
                                    <th>Creation-Date</th>
                                    <th>status</th>
                                    
                                 
                                </tr>
                            </thead>

                            <tbody>

        <?php 
        
$query = "SELECT * FROM checkout";
$select_post = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($select_post))
{


    echo "<tr>";
   
    $oid=$row['oid'];
    echo "<td name='ords'>".$row['oid']."</td>";
 
    
    
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['fname']."</td>";
    echo "<td>".$row['lname']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['city']."</td>";
    echo "<td>".$row['pincode']."</td>";
    echo "<td>".$row['contact_no']."</td>";
    echo "<td>".$row['userid']."</td>";
    echo "<td>".$row['totle_price']."</td>";
    echo "<td>".$row['u_mail']."</td>";
    echo "<td>".$row['date_created']."</td>";?>

    <td><select name='status' onchange="location = this.value;">
 
    <?php   
            $orp=0;//order processing
            $ors=0;//order shipped
            $ord=0;//order delivered
            $orc=0;//order cancel
            $orn=0;//order err
            $show="selected";
            if($row['status']=='processing')
            {
                $orp =1;
            }
            else if($row['status']=="shipped")
            {
                $ors =1;
            }
            else if($row['status']=="delivered")
            {
                $ord =1;
            }
            else if($row['status']=="cancel")
            {
                $orc =1;
            }
            else{
                $orn=1;
            }
        ?> 
        
        <!-- <option value="none" <?php if($orp===1){ echo $show; }?> hidden>error</option> -->
        <option value=<?php echo 'orders.php?source=view_pro_order&processing='.$oid ?> 
        <?php if($orp===1){echo $show;} ?>>Processing</option>
        <option value=<?php echo 'orders.php?source=view_pro_order&shipped='.$oid ?> 
        <?php if($ors===1){echo $show;} ?>>Shipped</option>
        <option value=<?php echo 'orders.php?source=view_pro_order&delivered='.$oid ?> 
        <?php if($ord===1){echo $show;} ?>>Delivered</option>
        <option value=<?php echo 'orders.php?source=view_pro_order&cancel='.$oid ?> 
        <?php if($orc===1){echo $show;} ?>>Canceled</option>

    </select></td> 
<?php

    echo "</tr>";

    }
        

        ?>           
      </tbody>
 </table>


 <?php
 
     /*       if(isset($_GET['delete']))
            {
                $id = $_GET['delete'];

                $query = "DELETE FROM accessories WHERE id = {$id}";

                $del_query = mysqli_query($conn, $query);  

                if(!$del_query){

                    die("QUERY FAILED ." . mysqli_error($conn));
           
                   }
                header("location:accessories.php");
                echo $id." was Deleted";

            }
    */

 ?>

</div>
        <!-- /#page-wrapper -->

        <?php include "../admin/includes/admin_footer.php"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>