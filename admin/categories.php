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
                
                $cat_nm = $_POST['cat_title'];

                    if($cat_nm == "" || empty($cat_nm)){

                        echo "Please Enter Category Name..";
                    }
                else{
                
                    $query = "INSERT INTO categories(name) VALUE('{$cat_nm}')";
                    echo " Added Category name is : ".$cat_nm." ";
                    //$query .= "VALUE('{$cat_nm}')";
                    
                    $add_query = mysqli_query($conn,$query);
                
                    if(!$add_query){
                        die('QUERY FAILED'. mysqli_error($conn));
                    }else{echo " YOU SUCCESS";}
                    
                }
        }
            


            
    
    
    ?>
    <form action="" method="post">

      <div class="form-group">
         <label for="cat-title">Add Category</label>
          <input type="text" class="form-control" name="cat_title">
      </div>
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
      </div>

    </form>
    
    <?php // UPDATE AND INCLUDE QUERY

    if(isset($_GET['edit'])) {
    
        $cat_id = $_GET['edit'];
        
        include "includes/update_categories.php";
       
    
    }
                
                
    ?>

    
    </div><!--Add Category Form-->

            <div class="col-xs-6">
    <table class="table table-bordered table-hover">
      

        <thead>
            <tr>
                <th>Id</th>
                <th>Category Title</th>
            </tr>
        </thead>
        <tbody>

        <?php 


    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($conn,$query);  

    while($row = mysqli_fetch_assoc($select_categories)) {
    $cat_id = $row['id'];
    $cat_title = $row['name'];

    echo "<tr>";
        
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
   echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
   echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
    echo "</tr>";

    }


    if(isset($_GET['delete']))
    {

        $the_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE id= {$the_id}";
        echo $the_id." was Deleted";
        $del_query= mysqli_query($conn,$query);
        header("Location: categories.php");
        

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
