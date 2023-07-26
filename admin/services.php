<?php include "includes/admin_header.php" ?>
    
<?php 


    
    
?>

    <div id="wrapper">
       

        
  

        <!-- Navigation -->
 
        <?php include "includes/admin_navigation.php" ?>
        
        
    

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">


            <h1 class="page-header">
            Welcome To Admin Page
                <small>GreenLeaf</small>
            </h1>


            <div class="col-xs-6">
            
            <!--?php insert_categories();  ?-->
    <?php  
            
            if(isset($_POST['submit']))
            {
                
                $ser_nm = $_POST['ser_nm'];
                $ser_det = $_POST['ser_dt'];

                    if($ser_nm == "" || empty($ser_nm)){

                        echo "Please Enter Service  Name..";
                    }
                    else if($ser_det == "" || empty($ser_det)){

                        echo "Please Enter Service  Detail..";
                    }
                else{
                
                    $query = "INSERT INTO services(sname,sdetail) VALUE('{$ser_nm}','{$ser_det}')";
                    echo " Added Service name is : ".$ser_nm." And Service detail is : ".$ser_det;
                    //$query .= "VALUE('{$cat_nm}')";
                    
                    $add_query = mysqli_query($conn,$query);
                
                    if(!$add_query){
                        die('QUERY FAILED'. mysqli_error($conn));
                    }else{echo "<br> YOU SUCCESS";}
                    
                }
        }
            


            
    
    
    ?>
    <form action="" method="post">

      <div class="form-group">
         <label for="cat-title">Add Service</label>
          <input type="text" class="form-control" name="ser_nm">
      </div>
      <div class="form-group">
         <label for="cat-title">Add Service Details</label>
          <textarea type="text" class="form-control" name="ser_dt"></textarea>
      </div>
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="submit" value="Add Service">
      </div>

    </form>
    
    <?php // UPDATE AND INCLUDE QUERY

    if(isset($_GET['edit'])) {
    
        $cat_id = $_GET['edit'];
        
        include "includes/update_services.php";
       
    
    }
                
                
    ?>

    
    </div><!--Add Category Form-->

            <div class="col-xs-6">
    <table class="table table-bordered table-hover">
      

        <thead>
            <tr>
                <th>Service Id</th>
                <th>Service Name</th>
                <th>Service Detail</th>
            </tr>
        </thead>
        <tbody>

        <?php 


    $query = "SELECT * FROM services";
    $select_categories = mysqli_query($conn,$query);  

    while($row = mysqli_fetch_assoc($select_categories)) {
    $ser_id = $row['sid'];
    $ser_name = $row['sname'];
    $ser_detail = $row['sdetail'];
    

    echo "<tr>";
        
    echo "<td>{$ser_id}</td>";
    echo "<td>{$ser_name}</td>";
    echo "<td>{$ser_detail}</td>";
   echo "<td><a href='services.php?delete={$ser_id}'>Delete</a></td>";
   echo "<td><a href='services.php?edit={$ser_id}'>Edit</a></td>";
    echo "</tr>";

    }


    if(isset($_GET['delete']))
    {

        $the_id = $_GET['delete'];
        // echo "id is : ".$the_id;
        $query = "DELETE FROM services WHERE sid= $the_id";
        // echo $query;
        echo $the_id." was Deleted";
        $del_query= mysqli_query($conn,$query);
        header("Location: services.php");
        

    }    



?>
        

      

        </tbody>
    </table>

                        
                        
                        
                </div>        


            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>



<!--php 

deleteCategories();

 -->

  
        
     
        
        <!-- /#page-wrapper -->
        
    <?php include "includes/admin_footer.php" ?>
