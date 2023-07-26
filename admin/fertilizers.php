<?php include "includes/admin_header.php";?>



<?php include "includes/admin_navigation.php"; ?>
    <div id="wrapper">


        <!-- Navigation -->
        <!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            Brand and toggle get grouped for better mobile display 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">  Admin</a>
            </div>
            Top Menu Items 
            <ul class="nav navbar-right top-nav">
             
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Darshil Parmar <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                     
                       
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <Sidebar Menu Items - These collapse to the responsive navigation menu on small screens 
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                 
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">View All Categories</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-wrench"></i> Categories</a>
                    </li>

                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
                    </li>
                    
               
                </ul>
            </div>
           
        </nav> -->

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
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard /</a> <a href="fertilizers.php">Fertilizers</a>
                            </li>
                            <!-- <li class="active">
                                <i class="fa fa-file"></i> Home
                            </li> -->
                        </ol>
                        
                        <div class="form-group">
         
      <form action="" method="get">

      
       <div class="form-group">
       <b>For Viewing Items Click Here..</b>
       <input class="btn btn-primary" type="submit" name="source" value="view_post"></a>
      </div>
       
    </form>

    <form action="" method="get">

      
       <div class="form-group">
       <b>For Add More Items Click Here..</b>
       <input class="btn btn-primary" type="submit" name="source" value="add_post"></a>
      </div>
       
    </form>

    <!-- <form action="" method="get">

      
       <div class="form-group">
       <b>For Edit Items Click Here..</b>
       <input class="btn btn-primary" type="submit" name="source" value="edit_post"></a>
      </div>
       
    </form> -->


      <?php

if(isset($_GET['source'])){

$source = $_GET['source'];
echo "Source is : ".$source;

} else {

$source = '';

}

switch($source) {
    
    case 'add_post';
    
     include "includes/fertilizers_add.php";
    
    break; 
    
    
    case 'edit_post';
    
    include "includes/fertilizer_edit.php";
    break;
    
    case 'view_post';
    include "includes/view_all_fertilizers.php";
    break;

   /* case 'delete':
        echo "TUMARA ID NAHI PASS HUA";
        $query = "DELETE FROM plants WHERE id = {$source}";
        include "includes/view_all_plants.php";
         $update_to_delete_status = mysqli_query($conn,$query);
                    
        confirmQuery($update_to_delete_status);
        break;*/



    
    default:
   include "includes/view_all_fertilizers.php";
   
    
    break;
    
    
    
    
}








?>
                     



                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "../admin/includes/admin_footer.php"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>