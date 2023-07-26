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
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard /</a> <a href="comment.php"> Comment</a>
                            </li>
                            <!-- <li class="active">
                                <i class="fa fa-file"></i> Home
                            </li> -->
                        </ol>
                        <?php 
                        global $mol;
  if(isset($_GET['approved'])){

   
    $orderid = $_GET['approved'];
    $query = "UPDATE `comment` SET `status`='approved' WHERE comid=$orderid";
    $res=mysqli_query($conn,$query);
    if(!$res){

        die("QUERY FAILED ." . mysqli_error($conn));

        }
        else
        {
   
                header("location:comment.php");
                    //header("refresh: 1");
        }
  }
  if(isset($_GET['unapproved'])){

   
    $orderid = $_GET['unapproved'];
    $query = "UPDATE `comment` SET `status`='unapproved' WHERE comid=$orderid";
    $res=mysqli_query($conn,$query);
    if(!$res){

        die("QUERY FAILED ." . mysqli_error($conn));

        }
        else
        {
   
                header("location:comment.php");
                    //header("refresh: 1");
        }
  }
  
?>
                        <div class="form-group">
<table class="table table-bordered table-hover">
                            <thead >
                                <tr>
                                    <th>comment-id</th>
                                   
                                    <th>Product-id</th>
                                    <th>User-id</th>
                                    <th>Email-id</th>
                                    <th>Content</th>
                                     <th>Date</th>
                                    <th>Status</th>
                                    
                                    
                                 
                                </tr>
                            </thead>

                            <tbody>

        <?php 
        
$query = "SELECT * FROM comment";
$select_post = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($select_post))
{


    echo "<tr>";
   
    $cid=$row['comid'];
    echo "<td name='ords'>".$row['comid']."</td>";
 
    
    
    
    echo "<td>".$row['proid']."</td>";
    echo "<td>".$row['uid']."</td>";
    echo "<td>".$row['umail']."</td>";
    echo "<td>".$row['content']."</td>";
    echo "<td>".$row['date']."</td>";?>
   <td><select name='status' onchange="location = this.value;">
 
    <?php   
            $comA=0;//order processing
            $comU=0;//order shipped
            
            $orn=0;//order err
            $show="selected";
            if($row['status']=='approved')
            {
                $comA =1;
            }
            else if($row['status']=="unapproved")
            {
                $comU =1;
            }
            else{
                $orn=1;
            }
        ?> 
        
        <!-- <option value="none" <?php //if($orp===1){ echo $show; }?> hidden>error</option> -->
        <option value=<?php echo 'comment.php?source=view_pro_order&approved='.$cid ?> 
        <?php if($comA===1){echo $show;} ?>>Approved</option>
        <option value=<?php echo 'comment.php?source=view_pro_order&unapproved='.$cid ?> 
        <?php if($comU===1){echo $show;} ?>>Unapproved</option>


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