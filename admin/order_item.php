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
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard /</a> <a href="order_item.php"> Ordered Items </a>
                            </li>
                            <!-- <li class="active">
                                <i class="fa fa-file"></i> Home
                            </li> -->
                        </ol>
                        
                        <div class="form-group">
<table class="table table-bordered table-hover">
                            <thead >
                                <tr>
                                    <th>User-id</th>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Time Created</th>
                                    <th>Email-id</th>
                                    <th>Cart Time</th>
                                    <th>status</th>
                                 
                                </tr>
                            </thead>

                            <tbody>

        <?php 
        
$query = "SELECT * FROM ordered";
$select_post = mysqli_query($conn,$query);
$lol=0;
$t=0;
while($row = mysqli_fetch_assoc($select_post))
{
  $t+=1;

    echo "<tr>";
    echo "<td>".$row['uid']."</td>";
    echo "<td>".$row['prod_name']."</td>";
    echo "<td><img class='img-responsive' width='100' style='' src='../web/category/imgs/$row[image]'></td>";
    $lol+=$row['price'];
    echo "<td>".$row['price']."</td>";
    echo "<td>".$row['quantity']."</td>";
    echo "<td>".$row['time']."</td>";
    echo "<td>".$row['umail']."</td>";
    echo "<td>".$row['item_time']."</td>";
    echo "<td><select value='".$row['status']."' name='post_category' >
            
       
    <option >on process</option>
    <option >packing</option>
    <option >delivered</option>


     

</select></td>";
    echo "</tr>";
}
        

        ?>           
      </tbody>

 </table>
 <table class="table table-bordered table-hover">

 <tbody>
      <?php
    echo "<tr>";
    echo "<td>There are totl ". $t . " Number of Product on Delivered</td>";
    echo "<td>".$lol."</td>";
    echo "</tr>";
    ?>
      </tbody>
      </table>
 <?php
 
           if(isset($_GET['delete']))
            {
                $id = $_GET['delete'];

                $query = "DELETE FROM users WHERE id = {$id}";

                $del_query = mysqli_query($conn, $query);  

                if(!$del_query){

                    die("QUERY FAILED ." . mysqli_error($conn));
           
                }
                header("location:users.php");
                echo $id." was Deleted";

            }
    

 ?>

</div>
        <!-- /#page-wrapper -->

        <?php include "../admin/includes/admin_footer.php"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>