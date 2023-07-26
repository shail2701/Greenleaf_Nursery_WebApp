    <form action="" method="post">
      <div class="form-group">
         <label for="cat-title">Edit Category</label>
         
         
         <?php

        if(isset($_GET['edit'])){

           // $cat_id = escape($_GET['edit']);
           $cat_id = $_GET['edit'];


    
        $query = "SELECT * FROM categories WHERE id = $cat_id ";
        $select_categories_id = mysqli_query($conn,$query);  

            while($row = mysqli_fetch_assoc($select_categories_id)) {
            $cat_id = $row['id'];
            $cat_title = $row['name'];
                
            ?>
            
 <input value="<?php echo $cat_title; ?>" type="text" class="form-control" name="cat_title">
        
        
        
       <?php }} ?>
       
     <?php   

        /////////// UPDATE QUERY

            if(isset($_POST['update_category'])) {

               /* $the_cat_title = escape($_POST['name']);

                $stmt = mysqli_prepare($connection, "UPDATE categories SET name = ? WHERE cat_id = ? ");

                 mysqli_stmt_bind_param($stmt, 'si', $the_cat_title, $cat_id);

                 mysqli_stmt_execute($stmt);


                         if(!$stmt){
                      
                          die("QUERY FAILED" . mysqli_error($connection));
                      
                      }

                      mysqli_stmt_close($stmt);*/

                      $the_cat_nm = $_POST['cat_title'];
                      $query = "UPDATE categories SET name = '{$the_cat_nm}' WHERE id = {$cat_id}";
                      $upadte_query =  mysqli_query($conn,$query);

                      if(!$upadte_query)
                        {
                          die("QUERY FAILED". mysql_error($conn));
                        }

                    // redirect("categories.php");
          
         }

    ?>
       
     
         
      </div>
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="update_category" value="Update Category">
      </div>

    </form>
