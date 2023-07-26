<form action="" method="post">
      <div class="form-group">
         <label for="cat-title">Edit Service</label>
         
         
         <?php

        if(isset($_GET['edit'])){

           // $cat_id = escape($_GET['edit']);
           $ser_id = $_GET['edit'];


    
        $query = "SELECT * FROM services WHERE sid = $ser_id ";
        $select_categories_id = mysqli_query($conn,$query);  

            while($row = mysqli_fetch_assoc($select_categories_id)) {
            $ser_id = $row['sid'];
            $ser_nm = $row['sname'];
            $ser_dtl = $row['sdetail'];    
            ?>
            
        <div class="form-group">
          <label for="cat-title">Add Service</label>
          <input value="<?php echo $ser_nm; ?>" type="text" class="form-control" name="ser_nm">
      </div>
      <div class="form-group">
         <label for="cat-title">Add Service Details</label>
         <textarea value="" type="" class="form-control" name="ser_det"><?php echo $ser_dtl; ?></textarea>
      </div>


        
 
        
       <?php }} ?>
       
     <?php   

        /////////// UPDATE QUERY

            if(isset($_POST['update_service'])) {

               /* $the_cat_title = escape($_POST['name']);

                $stmt = mysqli_prepare($connection, "UPDATE categories SET name = ? WHERE cat_id = ? ");

                 mysqli_stmt_bind_param($stmt, 'si', $the_cat_title, $cat_id);

                 mysqli_stmt_execute($stmt);


                         if(!$stmt){
                      
                          die("QUERY FAILED" . mysqli_error($connection));
                      
                      }

                      mysqli_stmt_close($stmt);*/

                      $the_ser_nm = $_POST['ser_nm'];
                      $the_ser_det = $_POST['ser_det'];
                      if($the_ser_nm == "" || $the_ser_det == ""){
                              echo "Field should not be empty";
                      }
                      else
                      {
                      $query = "UPDATE services SET sname = '{$the_ser_nm}' , sdetail = '{$the_ser_det}' WHERE sid = {$ser_id}";
                      $upadte_query =  mysqli_query($conn,$query);

                      if(!$upadte_query)
                        {
                          die("QUERY FAILED". mysql_error($conn));
                        }
                      
                        

                     header("location:./services.php");
                      }
         }

    ?>
       
     
         
      </div>
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="update_service" value="Update service">
      </div>

    </form>
