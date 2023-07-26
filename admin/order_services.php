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
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard /</a> <a href="order_services.php"> Ordered Services </a>
                            </li>
                            <!-- <li class="active">
                                <i class="fa fa-file"></i> Home
                            </li> -->
                        </ol>
                        
                        <div class="form-group">
<table class="table table-bordered table-hover">
                            <thead >
                                <tr>
                                    <th>Email-id</th>
                                    <th>Service Name</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Address</th>
                                    <th>Contact No</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>User Id</th>
                                    <th>User-Login-Mail</th>
                                
                                 
                                </tr>
                            </thead>

                            <tbody>

        <?php 
        
$query = "SELECT * FROM ser_detail";
$select_post = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($select_post))
{
  

    echo "<tr>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['sname']."</td>";
    echo "<td>".$row['fname']."</td>";
    echo "<td>".$row['lname']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['contact']."</td>";
    echo "<td>".$row['city']."</td>";
    echo "<td>".$row['state']."</td>";
    echo "<td>".$row['country']."</td>";
    echo "<td>".$row['uid']."</td>";
    echo "<td>".$row['umail']."</td>";
    echo "</tr>";
}
        

        ?>           
      </tbody>
 </table>


 <?php
 
        //    if(isset($_GET['delete']))
        //     {
        //         $id = $_GET['delete'];

        //         $query = "DELETE FROM users WHERE id = {$id}";

        //         $del_query = mysqli_query($conn, $query);  

        //         if(!$del_query){

        //             die("QUERY FAILED ." . mysqli_error($conn));
           
        //         }
        //         header("location:users.php");
        //         echo $id." was Deleted";

        //     }
    

 ?> 

</div>
        <!-- /#page-wrapper -->

        <?php include "../admin/includes/admin_footer.php"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>