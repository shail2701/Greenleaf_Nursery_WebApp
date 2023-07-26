<?php include "includes/admin_header.php";

?>

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
                            <i class="fa fa-dashboard"></i>  <a href="index.php"> Dashboard /</a> <a href="home1.php"> card 2</a>
                            </li>
                            <!-- <li class="active">
                                <i class="fa fa-file"></i> Home
                            </li> -->
                        </ol>
                        
                        <div class="form-group">
         
      <form action="" method="get">
      <h1>Seeds Category</h1>
      <br>
      <br>
      
       <div class="form-group">
       <b>For Viewing Items Click Here..</b>
       <input class="btn btn-primary" type="submit" name="source" value="view_post"></a>
      </div>
       
    </form>

    <!-- <form action="" method="get">

      
       <div class="form-group">
       <b>For Add More Items Click Here..</b>
       <input class="btn btn-primary" type="submit" name="source" value="add_post"></a>
      </div>
       
    </form> -->

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
    
    // case 'add_post';
    
    //  include "includes/plants_add.php";
    
    // break; 
    
    
    case 'edit_post';
    
    include "includes/home1_edit.php";
    break;
    
    case 'view_post';
    include "includes/view_home1.php";
    break;

   /* case 'delete':
        echo "TUMARA ID NAHI PASS HUA";
        $query = "DELETE FROM plants WHERE id = {$source}";
        include "includes/view_all_plants.php";
         $update_to_delete_status = mysqli_query($conn,$query);
                    
        confirmQuery($update_to_delete_status);
        break;*/



    
    default:
   include "includes/view_home1.php";
   
    
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